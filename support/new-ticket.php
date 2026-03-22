<?php
/**
 * Nexhop Support - Create New Ticket
 */
require_once __DIR__ . '/config.php';
requireCustomerLogin();

$error = '';
$customerId = $_SESSION['customer_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subject     = trim($_POST['subject'] ?? '');
    $category    = trim($_POST['category'] ?? '');
    $priority    = trim($_POST['priority'] ?? 'medium');
    $description = trim($_POST['description'] ?? '');

    // Validate
    if (empty($subject) || strlen($subject) < 5) {
        $error = 'Subject must be at least 5 characters long.';
    } elseif (empty($category)) {
        $error = 'Please select a category.';
    } elseif (empty($description) || strlen($description) < 10) {
        $error = 'Description must be at least 10 characters long.';
    } else {
        $caseId = generateCaseId($pdo);

        $stmt = $pdo->prepare("
            INSERT INTO tickets (case_id, customer_id, subject, description, priority, category, status)
            VALUES (?, ?, ?, ?, ?, ?, 'open')
        ");
        $stmt->execute([$caseId, $customerId, $subject, $description, $priority, $category]);
        $ticketId = $pdo->lastInsertId();

        // Send confirmation email
        sendTicketCreatedEmail($_SESSION['customer_email'], $caseId, $subject, $priority);

        setFlash('success', "Ticket $caseId created successfully! We'll get back to you shortly.");
        redirect('/ticket.php?id=' . $ticketId);
    }
}

$categories = ['IT Support', 'Network', 'Security', 'Cloud', 'Hardware', 'Software', 'Other'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Ticket | <?php echo SITE_NAME; ?></title>
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
            <a href="<?php echo url('/logout.php'); ?>" class="btn btn-secondary btn-sm" title="Logout">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
            </a>
        </div>
    </nav>

    <div class="main-content">
        <div class="container-md">
            <div class="page-header fade-in-up">
                <div>
                    <h1>Create New Ticket</h1>
                    <p class="subtitle">Describe your issue and our team will assist you</p>
                </div>
            </div>

            <?php if ($error): ?>
                <div style="background:rgba(239,68,68,0.1);border:1px solid rgba(239,68,68,0.3);border-radius:var(--radius-md);padding:14px 18px;margin-bottom:24px;color:#F87171;font-size:13px;font-weight:500;" class="fade-in-up">
                    <?php echo sanitize($error); ?>
                </div>
            <?php endif; ?>

            <div class="card fade-in-up">
                <div class="card-body">
                    <form method="POST" action="" data-validate>
                        <div class="form-group">
                            <label class="form-label">Subject *</label>
                            <input type="text" name="subject" class="form-control" placeholder="Brief summary of your issue" required maxlength="255"
                                   value="<?php echo isset($_POST['subject']) ? sanitize($_POST['subject']) : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Category *</label>
                            <select name="category" class="form-control" required>
                                <option value="" disabled <?php echo empty($_POST['category']) ? 'selected' : ''; ?>>Select a category...</option>
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?php echo $cat; ?>" <?php echo (isset($_POST['category']) && $_POST['category'] === $cat) ? 'selected' : ''; ?>>
                                        <?php echo $cat; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Priority *</label>
                            <div class="priority-selector">
                                <div class="priority-option">
                                    <input type="radio" name="priority" value="low" id="p-low" <?php echo (isset($_POST['priority']) && $_POST['priority'] === 'low') ? 'checked' : ''; ?>>
                                    <label for="p-low" class="p-low"><span class="p-dot"></span>Low</label>
                                </div>
                                <div class="priority-option">
                                    <input type="radio" name="priority" value="medium" id="p-medium" <?php echo (!isset($_POST['priority']) || $_POST['priority'] === 'medium') ? 'checked' : ''; ?>>
                                    <label for="p-medium" class="p-medium"><span class="p-dot"></span>Medium</label>
                                </div>
                                <div class="priority-option">
                                    <input type="radio" name="priority" value="high" id="p-high" <?php echo (isset($_POST['priority']) && $_POST['priority'] === 'high') ? 'checked' : ''; ?>>
                                    <label for="p-high" class="p-high"><span class="p-dot"></span>High</label>
                                </div>
                                <div class="priority-option">
                                    <input type="radio" name="priority" value="critical" id="p-critical" <?php echo (isset($_POST['priority']) && $_POST['priority'] === 'critical') ? 'checked' : ''; ?>>
                                    <label for="p-critical" class="p-critical"><span class="p-dot"></span>Critical</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Description *</label>
                            <textarea name="description" id="description" class="form-control auto-resize" placeholder="Describe your issue in detail. Include any error messages, steps to reproduce, affected systems, etc." required rows="6" maxlength="5000"><?php echo isset($_POST['description']) ? sanitize($_POST['description']) : ''; ?></textarea>
                            <p id="desc-counter" style="font-size:11px;color:var(--text-soft);margin-top:6px;text-align:right;">5000 characters remaining</p>
                        </div>

                        <div style="display:flex;gap:12px;justify-content:flex-end;padding-top:8px;">
                            <a href="<?php echo url('/dashboard.php'); ?>" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                Submit Ticket
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?> · <a href="<?php echo MAIN_SITE_URL; ?>">Visit Main Website</a></p>
    </footer>

</div>

<script src="<?php echo url('/assets/js/app.js?v=1.1'); ?>"></script>
<script>initCharCounter('description', 'desc-counter', 5000);</script>
</body>
</html>
