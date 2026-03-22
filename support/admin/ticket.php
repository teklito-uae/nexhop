<?php
/**
 * Nexhop Support - Admin Ticket Detail
 */
require_once __DIR__ . '/../config.php';
requireAdminLogin();

$ticketId = (int)($_GET['id'] ?? 0);
if (!$ticketId) redirect('/admin/tickets.php');

// Handle actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    // Admin Reply
    if ($action === 'reply' && !empty(trim($_POST['message'] ?? ''))) {
        $message = trim($_POST['message']);
        $stmt = $pdo->prepare("INSERT INTO ticket_replies (ticket_id, sender_type, sender_id, message) VALUES (?, 'admin', ?, ?)");
        $stmt->execute([$ticketId, $_SESSION['admin_id'], $message]);

        $pdo->prepare("UPDATE tickets SET updated_at = NOW() WHERE id = ?")->execute([$ticketId]);

        $stmt = $pdo->prepare("SELECT t.*, c.email FROM tickets t JOIN customers c ON c.id = t.customer_id WHERE t.id = ?");
        $stmt->execute([$ticketId]);
        $t = $stmt->fetch();

        if ($t) {
            sendReplyNotificationEmail($t['email'], $t['case_id'], $t['subject'], $_SESSION['admin_name'], $message);
        }

        setFlash('success', 'Reply sent and customer notified.');
        redirect('/admin/ticket.php?id=' . $ticketId);
    }

    // Change Status
    if ($action === 'status' && !empty($_POST['new_status'])) {
        $newStatus = $_POST['new_status'];
        $validStatuses = ['open', 'in-progress', 'waiting', 'resolved', 'closed'];

        if (in_array($newStatus, $validStatuses)) {
            $stmt = $pdo->prepare("SELECT t.*, c.email FROM tickets t JOIN customers c ON c.id = t.customer_id WHERE t.id = ?");
            $stmt->execute([$ticketId]);
            $t = $stmt->fetch();

            if ($t) {
                $oldStatus = $t['status'];
                $updates = "status = ?, updated_at = NOW()";
                $params = [$newStatus];

                if (in_array($newStatus, ['closed', 'resolved']) && !$t['closed_at']) {
                    $updates .= ", closed_at = NOW()";
                } elseif (!in_array($newStatus, ['closed', 'resolved'])) {
                    $updates .= ", closed_at = NULL";
                }

                $params[] = $ticketId;
                $pdo->prepare("UPDATE tickets SET $updates WHERE id = ?")->execute($params);

                sendStatusChangeEmail($t['email'], $t['case_id'], $t['subject'], $oldStatus, $newStatus);

                setFlash('success', 'Status updated to ' . ucfirst(str_replace('-', ' ', $newStatus)) . '.');
            }
        }
        redirect('/admin/ticket.php?id=' . $ticketId);
    }

    // Change Priority
    if ($action === 'priority' && !empty($_POST['new_priority'])) {
        $newPriority = $_POST['new_priority'];
        if (in_array($newPriority, ['low', 'medium', 'high', 'critical'])) {
            $pdo->prepare("UPDATE tickets SET priority = ?, updated_at = NOW() WHERE id = ?")->execute([$newPriority, $ticketId]);
            setFlash('success', 'Priority updated to ' . ucfirst($newPriority) . '.');
        }
        redirect('/admin/ticket.php?id=' . $ticketId);
    }

    // Assign admin
    if ($action === 'assign') {
        $pdo->prepare("UPDATE tickets SET assigned_admin_id = ?, updated_at = NOW() WHERE id = ?")->execute([$_SESSION['admin_id'], $ticketId]);
        setFlash('success', 'Ticket assigned to you.');
        redirect('/admin/ticket.php?id=' . $ticketId);
    }
}

// Fetch ticket
$stmt = $pdo->prepare("
    SELECT t.*, c.email as customer_email, c.full_name as customer_name, c.phone as customer_phone, c.company as customer_company, c.created_at as customer_since,
        a.full_name as assigned_admin_name
    FROM tickets t
    JOIN customers c ON c.id = t.customer_id
    LEFT JOIN admins a ON a.id = t.assigned_admin_id
    WHERE t.id = ?
");
$stmt->execute([$ticketId]);
$ticket = $stmt->fetch();

if (!$ticket) {
    setFlash('error', 'Ticket not found.');
    redirect('/admin/tickets.php');
}

// Fetch replies
$stmt = $pdo->prepare("
    SELECT tr.*,
        CASE 
            WHEN tr.sender_type = 'admin' THEN a.full_name
            WHEN tr.sender_type = 'customer' THEN c.email
        END as sender_name
    FROM ticket_replies tr
    LEFT JOIN admins a ON tr.sender_type = 'admin' AND tr.sender_id = a.id
    LEFT JOIN customers c ON tr.sender_type = 'customer' AND tr.sender_id = c.id
    WHERE tr.ticket_id = ?
    ORDER BY tr.created_at ASC
");
$stmt->execute([$ticketId]);
$replies = $stmt->fetchAll();

// Customer ticket count
$stmt = $pdo->prepare("SELECT COUNT(*) FROM tickets WHERE customer_id = ?");
$stmt->execute([$ticket['customer_id']]);
$customerTicketCount = $stmt->fetchColumn();

$stats = getTicketStats($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo sanitize($ticket['case_id']); ?> | <?php echo SITE_NAME; ?> Admin</title>
    <link rel="stylesheet" href="<?php echo url('/assets/css/style.css?v=1.1'); ?>">
</head>
<body>
<div class="admin-layout">

    <div class="sidebar-overlay" onclick="toggleSidebar()"></div>

    <aside class="admin-sidebar">
        <div class="sidebar-brand">
            <h2>Flash<span class="accent">Fix</span></h2>
            <small>Support Admin Panel</small>
        </div>
        <nav class="sidebar-nav">
            <div class="nav-section">Main</div>
            <a href="<?php echo url('/admin/index.php'); ?>"><span class="nav-icon">📊</span> Dashboard</a>
            <a href="<?php echo url('/admin/tickets.php'); ?>" class="active"><span class="nav-icon">🎫</span> All Tickets</a>
            <div class="nav-section">Quick Filters</div>
            <a href="<?php echo url('/admin/tickets.php?status=open'); ?>"><span class="nav-icon">🔵</span> Open <span style="margin-left:auto;font-size:12px;color:var(--text-soft);"><?php echo $stats['open']; ?></span></a>
            <a href="<?php echo url('/admin/tickets.php?status=in-progress'); ?>"><span class="nav-icon">🟡</span> In Progress <span style="margin-left:auto;font-size:12px;color:var(--text-soft);"><?php echo $stats['in-progress']; ?></span></a>
            <a href="<?php echo url('/admin/tickets.php?status=waiting'); ?>"><span class="nav-icon">🟣</span> Waiting <span style="margin-left:auto;font-size:12px;color:var(--text-soft);"><?php echo $stats['waiting']; ?></span></a>
            <a href="<?php echo url('/admin/tickets.php?status=resolved'); ?>"><span class="nav-icon">🟢</span> Resolved <span style="margin-left:auto;font-size:12px;color:var(--text-soft);"><?php echo $stats['resolved']; ?></span></a>
            <a href="<?php echo url('/admin/tickets.php?status=closed'); ?>"><span class="nav-icon">⚫</span> Closed <span style="margin-left:auto;font-size:12px;color:var(--text-soft);"><?php echo $stats['closed']; ?></span></a>
        </nav>
        <div class="sidebar-footer">
            <div style="display:flex;align-items:center;gap:10px;margin-bottom:10px;">
                <div style="width:32px;height:32px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--accent));display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;color:#fff;">
                    <?php echo strtoupper(substr($_SESSION['admin_name'], 0, 1)); ?>
                </div>
                <div>
                    <div style="font-size:13px;font-weight:600;"><?php echo sanitize($_SESSION['admin_name']); ?></div>
                    <div style="font-size:11px;color:var(--text-soft);">Administrator</div>
                </div>
            </div>
            <a href="<?php echo url('/admin/logout.php'); ?>" class="btn btn-secondary btn-sm btn-block" style="font-size:12px;">Sign Out</a>
        </div>
    </aside>

    <div class="admin-main">
        <header class="admin-topbar">
            <div style="display:flex;align-items:center;gap:12px;">
                <button class="mobile-menu-toggle" onclick="toggleSidebar()">☰</button>
                <a href="<?php echo url('/admin/tickets.php'); ?>" style="color:var(--text-soft);font-size:13px;">← All Tickets</a>
                <span style="color:var(--border-200);">|</span>
                <h1 style="font-size:16px;"><?php echo sanitize($ticket['case_id']); ?></h1>
                <?php echo statusBadge($ticket['status']); ?>
            </div>
            <button class="theme-toggle-btn" onclick="toggleTheme()" title="Toggle light/dark mode">
                <svg class="icon-sun" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                <svg class="icon-moon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
            </button>
        </header>

        <div class="admin-content">
            <?php echo renderFlash(); ?>

            <div class="page-header fade-in-up">
                <div>
                    <div style="display:flex;align-items:center;gap:10px;margin-bottom:6px;">
                        <span style="color:var(--accent-light);font-weight:800;font-size:13px;"><?php echo sanitize($ticket['case_id']); ?></span>
                        <?php echo statusBadge($ticket['status']); ?>
                        <?php echo priorityBadge($ticket['priority']); ?>
                        <span class="badge" style="background:rgba(100,116,139,0.1);color:var(--text-soft);"><?php echo sanitize($ticket['category']); ?></span>
                    </div>
                    <h1 style="font-size:22px;"><?php echo sanitize($ticket['subject']); ?></h1>
                </div>
                <div style="display:flex;gap:8px;flex-wrap:wrap;">
                    <?php if (!$ticket['assigned_admin_id']): ?>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="action" value="assign">
                            <button type="submit" class="btn btn-ghost btn-sm">Assign to Me</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>

            <div class="ticket-detail-grid">

                <div>
                    <div class="card fade-in-up" style="margin-bottom:20px;">
                        <div class="card-header">
                            <h3>Conversation</h3>
                            <span class="text-sm text-muted"><?php echo count($replies) + 1; ?> messages</span>
                        </div>
                        <div class="card-body">
                            <div class="thread">
                                <div class="thread-message from-customer">
                                    <div class="msg-header">
                                        <div class="msg-sender">
                                            <span class="sender-badge">Customer</span>
                                            <?php echo sanitize($ticket['customer_email']); ?>
                                        </div>
                                        <span class="msg-time"><?php echo formatDate($ticket['created_at']); ?></span>
                                    </div>
                                    <div class="msg-body"><?php echo nl2br(sanitize($ticket['description'])); ?></div>
                                </div>

                                <?php foreach ($replies as $reply): ?>
                                <div class="thread-message from-<?php echo $reply['sender_type']; ?>">
                                    <div class="msg-header">
                                        <div class="msg-sender">
                                            <span class="sender-badge"><?php echo $reply['sender_type'] === 'admin' ? 'Support' : 'Customer'; ?></span>
                                            <?php echo sanitize($reply['sender_name']); ?>
                                        </div>
                                        <span class="msg-time"><?php echo formatDate($reply['created_at']); ?></span>
                                    </div>
                                    <div class="msg-body"><?php echo nl2br(sanitize($reply['message'])); ?></div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="card fade-in-up">
                        <div class="card-header"><h3>Reply as Support</h3></div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <input type="hidden" name="action" value="reply">
                                <div class="form-group">
                                    <textarea name="message" class="form-control auto-resize" placeholder="Type your reply to the customer..." required rows="5"></textarea>
                                </div>
                                <div style="display:flex;gap:10px;justify-content:flex-end;flex-wrap:wrap;">
                                    <button type="submit" class="btn btn-primary">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                        Send Reply
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="ticket-sidebar">

                    <div class="card fade-in-up" style="margin-bottom:16px;">
                        <div class="card-header"><h3>Manage Ticket</h3></div>
                        <div class="card-body">
                            <form method="POST" style="margin-bottom:14px;">
                                <input type="hidden" name="action" value="status">
                                <label class="form-label">Change Status</label>
                                <div style="display:flex;gap:8px;">
                                    <select name="new_status" class="form-control" style="font-size:13px;">
                                        <option value="open" <?php echo $ticket['status'] === 'open' ? 'selected' : ''; ?>>Open</option>
                                        <option value="in-progress" <?php echo $ticket['status'] === 'in-progress' ? 'selected' : ''; ?>>In Progress</option>
                                        <option value="waiting" <?php echo $ticket['status'] === 'waiting' ? 'selected' : ''; ?>>Waiting</option>
                                        <option value="resolved" <?php echo $ticket['status'] === 'resolved' ? 'selected' : ''; ?>>Resolved</option>
                                        <option value="closed" <?php echo $ticket['status'] === 'closed' ? 'selected' : ''; ?>>Closed</option>
                                    </select>
                                    <button type="submit" class="btn btn-secondary btn-sm">Update</button>
                                </div>
                            </form>
                            <form method="POST">
                                <input type="hidden" name="action" value="priority">
                                <label class="form-label">Change Priority</label>
                                <div style="display:flex;gap:8px;">
                                    <select name="new_priority" class="form-control" style="font-size:13px;">
                                        <option value="low" <?php echo $ticket['priority'] === 'low' ? 'selected' : ''; ?>>Low</option>
                                        <option value="medium" <?php echo $ticket['priority'] === 'medium' ? 'selected' : ''; ?>>Medium</option>
                                        <option value="high" <?php echo $ticket['priority'] === 'high' ? 'selected' : ''; ?>>High</option>
                                        <option value="critical" <?php echo $ticket['priority'] === 'critical' ? 'selected' : ''; ?>>Critical</option>
                                    </select>
                                    <button type="submit" class="btn btn-secondary btn-sm">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card fade-in-up" style="margin-bottom:16px;">
                        <div class="card-header"><h3>Ticket Details</h3></div>
                        <div class="card-body" style="padding:12px 20px;">
                            <div class="info-row">
                                <span class="info-label">Case ID</span>
                                <span class="info-value" style="color:var(--accent-light);"><?php echo sanitize($ticket['case_id']); ?></span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Status</span>
                                <span class="info-value"><?php echo statusBadge($ticket['status']); ?></span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Priority</span>
                                <span class="info-value"><?php echo priorityBadge($ticket['priority']); ?></span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Category</span>
                                <span class="info-value"><?php echo sanitize($ticket['category']); ?></span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Assigned To</span>
                                <span class="info-value"><?php echo $ticket['assigned_admin_name'] ? sanitize($ticket['assigned_admin_name']) : '<span class="text-soft">Unassigned</span>'; ?></span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Created</span>
                                <span class="info-value text-sm"><?php echo formatDate($ticket['created_at']); ?></span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Updated</span>
                                <span class="info-value text-sm"><?php echo formatDate($ticket['updated_at']); ?></span>
                            </div>
                            <?php if ($ticket['closed_at']): ?>
                            <div class="info-row">
                                <span class="info-label">Closed</span>
                                <span class="info-value text-sm"><?php echo formatDate($ticket['closed_at']); ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="card fade-in-up">
                        <div class="card-header"><h3>Customer</h3></div>
                        <div class="card-body" style="padding:12px 20px;">
                            <div class="info-row">
                                <span class="info-label">Email</span>
                                <span class="info-value text-sm"><?php echo sanitize($ticket['customer_email']); ?></span>
                            </div>
                            <?php if ($ticket['customer_name']): ?>
                            <div class="info-row">
                                <span class="info-label">Name</span>
                                <span class="info-value"><?php echo sanitize($ticket['customer_name']); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if ($ticket['customer_phone']): ?>
                            <div class="info-row">
                                <span class="info-label">Phone</span>
                                <span class="info-value text-sm"><?php echo sanitize($ticket['customer_phone']); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if ($ticket['customer_company']): ?>
                            <div class="info-row">
                                <span class="info-label">Company</span>
                                <span class="info-value"><?php echo sanitize($ticket['customer_company']); ?></span>
                            </div>
                            <?php endif; ?>
                            <div class="info-row">
                                <span class="info-label">Total Tickets</span>
                                <span class="info-value"><?php echo $customerTicketCount; ?></span>
                            </div>
                            <div class="info-row">
                                <span class="info-label">Customer Since</span>
                                <span class="info-value text-sm"><?php echo formatDate($ticket['customer_since'], 'M j, Y'); ?></span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<script src="<?php echo url('/assets/js/app.js?v=1.1'); ?>"></script>
</body>
</html>
