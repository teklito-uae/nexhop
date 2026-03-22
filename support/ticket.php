<?php
/**
 * Nexhop Support - Customer Ticket Detail View
 */
require_once __DIR__ . '/config.php';
requireCustomerLogin();

$customerId = $_SESSION['customer_id'];
$ticketId = (int)($_GET['id'] ?? 0);

if (!$ticketId) redirect('/dashboard.php');

// Fetch ticket (ensure it belongs to this customer)
$stmt = $pdo->prepare("SELECT * FROM tickets WHERE id = ? AND customer_id = ?");
$stmt->execute([$ticketId, $customerId]);
$ticket = $stmt->fetch();

if (!$ticket) {
    setFlash('error', 'Ticket not found.');
    redirect('/dashboard.php');
}

// Handle reply
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(trim($_POST['message'] ?? ''))) {
    $message = trim($_POST['message']);

    $stmt = $pdo->prepare("INSERT INTO ticket_replies (ticket_id, sender_type, sender_id, message) VALUES (?, 'customer', ?, ?)");
    $stmt->execute([$ticketId, $customerId, $message]);

    // Update ticket timestamp
    $pdo->prepare("UPDATE tickets SET updated_at = NOW() WHERE id = ?")->execute([$ticketId]);

    // If ticket was resolved/closed, reopen it on customer reply
    if (in_array($ticket['status'], ['resolved', 'closed'])) {
        $pdo->prepare("UPDATE tickets SET status = 'open', closed_at = NULL WHERE id = ?")->execute([$ticketId]);
    }

    setFlash('success', 'Reply sent successfully.');
    redirect('/ticket.php?id=' . $ticketId);
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo sanitize($ticket['case_id']); ?> | <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo url('/assets/css/style.css?v=1.1'); ?>">
</head>
<body>
<div class="page-wrapper">

    <nav class="navbar">
        <a href="<?php echo url('/dashboard.php'); ?>" class="navbar-brand">
            Flash<span class="accent">Fix</span>
            <span class="sub">Support</span>
        </a>
        <div class="navbar-actions">
            <a href="<?php echo url('/dashboard.php'); ?>" class="btn btn-secondary btn-sm">← My Tickets</a>
            <a href="<?php echo url('/logout.php'); ?>" class="btn btn-secondary btn-sm">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
            </a>
        </div>
    </nav>

    <?php echo renderFlash(); ?>

    <div class="main-content">
        <div class="container">

            <!-- Ticket Header -->
            <div class="page-header fade-in-up">
                <div>
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:8px;">
                        <span style="color:var(--accent-light);font-family:var(--font-heading);font-weight:800;font-size:14px;"><?php echo sanitize($ticket['case_id']); ?></span>
                        <?php echo statusBadge($ticket['status']); ?>
                        <?php echo priorityBadge($ticket['priority']); ?>
                    </div>
                    <h1 style="font-size:22px;"><?php echo sanitize($ticket['subject']); ?></h1>
                </div>
            </div>

            <div class="ticket-detail-grid">

                <!-- Main Thread -->
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
                                            <span class="sender-badge">You</span>
                                            <?php echo sanitize($_SESSION['customer_email']); ?>
                                        </div>
                                        <span class="msg-time"><?php echo formatDate($ticket['created_at']); ?></span>
                                    </div>
                                    <div class="msg-body"><?php echo nl2br(sanitize($ticket['description'])); ?></div>
                                </div>

                                <?php foreach ($replies as $reply): ?>
                                <div class="thread-message from-<?php echo $reply['sender_type']; ?>">
                                    <div class="msg-header">
                                        <div class="msg-sender">
                                            <span class="sender-badge"><?php echo $reply['sender_type'] === 'admin' ? 'Support' : 'You'; ?></span>
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

                    <?php if (!in_array($ticket['status'], ['closed'])): ?>
                    <div class="card fade-in-up">
                        <div class="card-header"><h3>Post a Reply</h3></div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <textarea name="message" class="form-control auto-resize" placeholder="Type your reply here..." required rows="4"></textarea>
                                </div>
                                <div style="text-align:right;">
                                    <button type="submit" class="btn btn-primary">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                        Send Reply
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="card fade-in-up">
                        <div class="card-body text-center" style="padding:32px;">
                            <p class="text-muted">This ticket is closed. If you need further help, please create a new ticket.</p>
                            <a href="<?php echo url('/new-ticket.php'); ?>" class="btn btn-primary btn-sm" style="margin-top:12px;">Create New Ticket</a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Sidebar -->
                <div class="ticket-sidebar">
                    <div class="card fade-in-up">
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
                </div>

            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?> · <a href="<?php echo MAIN_SITE_URL; ?>">Visit Main Website</a></p>
    </footer>

</div>

<script src="<?php echo url('/assets/js/app.js?v=1.1'); ?>"></script>
</body>
</html>
