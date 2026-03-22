<?php
/**
 * Nexhop Support - Admin All Tickets
 */
require_once __DIR__ . '/../config.php';
requireAdminLogin();

$stats = getTicketStats($pdo);

// Filters
$filterStatus   = $_GET['status'] ?? '';
$filterPriority = $_GET['priority'] ?? '';
$filterSearch   = trim($_GET['search'] ?? '');
$page           = max(1, (int)($_GET['page'] ?? 1));
$perPage        = 20;
$offset         = ($page - 1) * $perPage;

// Build query
$where = [];
$params = [];

if ($filterStatus && in_array($filterStatus, ['open','in-progress','waiting','resolved','closed'])) {
    $where[] = "t.status = ?";
    $params[] = $filterStatus;
}

if ($filterPriority && in_array($filterPriority, ['low','medium','high','critical'])) {
    $where[] = "t.priority = ?";
    $params[] = $filterPriority;
}

if ($filterSearch) {
    $where[] = "(t.case_id LIKE ? OR t.subject LIKE ? OR c.email LIKE ?)";
    $searchTerm = "%$filterSearch%";
    $params[] = $searchTerm;
    $params[] = $searchTerm;
    $params[] = $searchTerm;
}

$whereClause = !empty($where) ? 'WHERE ' . implode(' AND ', $where) : '';

// Count total
$stmt = $pdo->prepare("SELECT COUNT(*) FROM tickets t JOIN customers c ON c.id = t.customer_id $whereClause");
$stmt->execute($params);
$totalCount = $stmt->fetchColumn();
$totalPages = ceil($totalCount / $perPage);

// Fetch tickets
$stmt = $pdo->prepare("
    SELECT t.*, c.email as customer_email, c.company as customer_company
    FROM tickets t
    JOIN customers c ON c.id = t.customer_id
    $whereClause
    ORDER BY 
        CASE t.status WHEN 'open' THEN 1 WHEN 'in-progress' THEN 2 WHEN 'waiting' THEN 3 WHEN 'resolved' THEN 4 ELSE 5 END,
        CASE t.priority WHEN 'critical' THEN 1 WHEN 'high' THEN 2 WHEN 'medium' THEN 3 ELSE 4 END,
        t.updated_at DESC
    LIMIT $perPage OFFSET $offset
");
$stmt->execute($params);
$tickets = $stmt->fetchAll();

$currentPage = 'tickets';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tickets | <?php echo SITE_NAME; ?> Admin</title>
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
                <h1>All Tickets</h1>
                <span class="text-sm text-muted" style="margin-left:8px;"><?php echo $totalCount; ?> total</span>
            </div>
            <button class="theme-toggle-btn" onclick="toggleTheme()" title="Toggle light/dark mode">
                <svg class="icon-sun" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                <svg class="icon-moon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
            </button>
        </header>

        <div class="admin-content">
            <?php echo renderFlash(); ?>

            <form method="GET" action="<?php echo url('/admin/tickets.php'); ?>" class="filters-bar fade-in-up">
                <input type="text" name="search" class="form-control search-input" placeholder="Search by case ID, subject, or email..."
                       value="<?php echo sanitize($filterSearch); ?>">
                <select name="status" class="form-control">
                    <option value="">All Status</option>
                    <option value="open" <?php echo $filterStatus === 'open' ? 'selected' : ''; ?>>Open</option>
                    <option value="in-progress" <?php echo $filterStatus === 'in-progress' ? 'selected' : ''; ?>>In Progress</option>
                    <option value="waiting" <?php echo $filterStatus === 'waiting' ? 'selected' : ''; ?>>Waiting</option>
                    <option value="resolved" <?php echo $filterStatus === 'resolved' ? 'selected' : ''; ?>>Resolved</option>
                    <option value="closed" <?php echo $filterStatus === 'closed' ? 'selected' : ''; ?>>Closed</option>
                </select>
                <select name="priority" class="form-control">
                    <option value="">All Priority</option>
                    <option value="critical" <?php echo $filterPriority === 'critical' ? 'selected' : ''; ?>>Critical</option>
                    <option value="high" <?php echo $filterPriority === 'high' ? 'selected' : ''; ?>>High</option>
                    <option value="medium" <?php echo $filterPriority === 'medium' ? 'selected' : ''; ?>>Medium</option>
                    <option value="low" <?php echo $filterPriority === 'low' ? 'selected' : ''; ?>>Low</option>
                </select>
                <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                <?php if ($filterStatus || $filterPriority || $filterSearch): ?>
                    <a href="<?php echo url('/admin/tickets.php'); ?>" class="btn btn-secondary btn-sm">Clear</a>
                <?php endif; ?>
            </form>

            <div class="card fade-in-up">
                <?php if (empty($tickets)): ?>
                    <div class="empty-state">
                        <div class="empty-icon">🔍</div>
                        <h3>No Tickets Found</h3>
                        <p>No tickets match your current filters.</p>
                        <a href="<?php echo url('/admin/tickets.php'); ?>" class="btn btn-secondary btn-sm">Clear Filters</a>
                    </div>
                <?php else: ?>
                    <div class="table-wrapper">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Case ID</th>
                                    <th>Subject</th>
                                    <th>Customer</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Category</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tickets as $t): ?>
                                <tr>
                                    <td><a href="<?php echo url('/admin/ticket.php?id=' . $t['id']); ?>" class="case-link"><?php echo sanitize($t['case_id']); ?></a></td>
                                    <td><a href="<?php echo url('/admin/ticket.php?id=' . $t['id']); ?>" class="subject-text"><?php echo sanitize($t['subject']); ?></a></td>
                                    <td class="text-sm">
                                        <div style="color:var(--text-main);font-weight:500;"><?php echo sanitize($t['customer_email']); ?></div>
                                        <?php if ($t['customer_company']): ?>
                                            <div style="font-size:11px;color:var(--text-soft);"><?php echo sanitize($t['customer_company']); ?></div>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo priorityBadge($t['priority']); ?></td>
                                    <td><?php echo statusBadge($t['status']); ?></td>
                                    <td class="text-sm text-muted"><?php echo sanitize($t['category']); ?></td>
                                    <td class="text-sm text-muted"><?php echo timeAgo($t['created_at']); ?></td>
                                    <td class="text-sm text-muted"><?php echo timeAgo($t['updated_at']); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <?php if ($totalPages > 1): ?>
                    <div class="card-footer">
                        <div class="pagination">
                            <?php if ($page > 1): ?>
                                <a href="?<?php echo http_build_query(array_merge($_GET, ['page' => $page - 1])); ?>">←</a>
                            <?php endif; ?>
                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                <?php if ($i == $page): ?>
                                    <span class="active"><?php echo $i; ?></span>
                                <?php else: ?>
                                    <a href="?<?php echo http_build_query(array_merge($_GET, ['page' => $i])); ?>"><?php echo $i; ?></a>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <?php if ($page < $totalPages): ?>
                                <a href="?<?php echo http_build_query(array_merge($_GET, ['page' => $page + 1])); ?>">→</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>

<script src="<?php echo url('/assets/js/app.js?v=1.1'); ?>"></script>
</body>
</html>
