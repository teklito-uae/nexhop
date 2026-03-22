<?php
/**
 * Nexhop Support - Customer Dashboard
 */
require_once __DIR__ . '/config.php';
requireCustomerLogin();

$customerId = $_SESSION['customer_id'];
$stats = getTicketStats($pdo, $customerId);

// Recent tickets
$stmt = $pdo->prepare("
    SELECT * FROM tickets 
    WHERE customer_id = ? 
    ORDER BY updated_at DESC 
    LIMIT 10
");
$stmt->execute([$customerId]);
$tickets = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tickets | <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo url('/assets/css/style.css?v=1.1'); ?>">
</head>
<body>
<div class="page-wrapper">

    <!-- Navbar -->
    <nav class="navbar">
        <a href="<?php echo url('/dashboard.php'); ?>" class="navbar-brand">
            Flash<span class="accent">Fix</span>
            <span class="sub">Support</span>
        </a>
        <div class="navbar-actions">
            <a href="<?php echo url('/new-ticket.php'); ?>" class="btn btn-primary btn-sm">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                New Ticket
            </a>
            <div class="navbar-user">
                <div class="user-avatar"><?php echo strtoupper(substr($_SESSION['customer_email'], 0, 1)); ?></div>
                <span class="text-sm"><?php echo sanitize($_SESSION['customer_email']); ?></span>
            </div>
            <button class="theme-toggle-btn" onclick="toggleTheme()" title="Toggle light/dark mode" style="width:32px;height:32px;margin:0 8px;">
                <svg class="icon-sun" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                <svg class="icon-moon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
            </button>
            <a href="<?php echo url('/logout.php'); ?>" class="btn btn-secondary btn-sm" title="Logout">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
            </a>
        </div>
    </nav>

    <?php echo renderFlash(); ?>

    <div class="main-content">
        <div class="container">

            <!-- Page Header -->
            <div class="page-header fade-in-up">
                <div>
                    <h1>My Support Tickets</h1>
                    <p class="subtitle">Track and manage your support requests</p>
                </div>
                <a href="<?php echo url('/new-ticket.php'); ?>" class="btn btn-primary">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    Create New Ticket
                </a>
            </div>

            <!-- Stats -->
            <div class="stats-grid">
                <div class="stat-card fade-in-up">
                    <div class="stat-icon blue">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <div class="stat-value"><?php echo $stats['open']; ?></div>
                    <div class="stat-label">Open</div>
                </div>
                <div class="stat-card fade-in-up">
                    <div class="stat-icon yellow">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 11-2.12-9.36L23 10"/></svg>
                    </div>
                    <div class="stat-value"><?php echo $stats['in-progress']; ?></div>
                    <div class="stat-label">In Progress</div>
                </div>
                <div class="stat-card fade-in-up">
                    <div class="stat-icon green">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <div class="stat-value"><?php echo $stats['resolved']; ?></div>
                    <div class="stat-label">Resolved</div>
                </div>
                <div class="stat-card fade-in-up">
                    <div class="stat-icon cyan">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <div class="stat-value"><?php echo $stats['total']; ?></div>
                    <div class="stat-label">Total Tickets</div>
                </div>
            </div>

            <!-- Tickets Table -->
            <div class="card fade-in-up">
                <div class="card-header">
                    <h3>Recent Tickets</h3>
                </div>
                <?php if (empty($tickets)): ?>
                    <div class="empty-state">
                        <div class="empty-icon">📋</div>
                        <h3>No Tickets Yet</h3>
                        <p>You haven't created any support tickets. Click below to get started.</p>
                        <a href="<?php echo url('/new-ticket.php'); ?>" class="btn btn-primary">Create Your First Ticket</a>
                    </div>
                <?php else: ?>
                    <div class="table-wrapper">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Case ID</th>
                                    <th>Subject</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tickets as $t): ?>
                                <tr>
                                    <td><a href="<?php echo url('/ticket.php?id=' . $t['id']); ?>" class="case-link"><?php echo sanitize($t['case_id']); ?></a></td>
                                    <td><a href="<?php echo url('/ticket.php?id=' . $t['id']); ?>" class="subject-text"><?php echo sanitize($t['subject']); ?></a></td>
                                    <td><?php echo priorityBadge($t['priority']); ?></td>
                                    <td><?php echo statusBadge($t['status']); ?></td>
                                    <td class="text-sm text-muted"><?php echo timeAgo($t['created_at']); ?></td>
                                    <td class="text-sm text-muted"><?php echo timeAgo($t['updated_at']); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?> · Part of Hiba Computer Group · <a href="<?php echo MAIN_SITE_URL; ?>">Visit Main Website</a></p>
    </footer>

</div>

<script src="<?php echo url('/assets/js/app.js?v=1.1'); ?>"></script>
</body>
</html>
