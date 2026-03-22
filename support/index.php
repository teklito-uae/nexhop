<?php
/**
 * Nexhop Support - Customer Login (Magic Link)
 */
require_once __DIR__ . '/config.php';

// If already logged in, go to dashboard
if (isCustomerLoggedIn()) {
    redirect('/dashboard.php');
}

$emailSent = false;
$error = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);

    if (!$email) {
        $error = 'Please enter a valid email address.';
    } else {
        // Find or create customer
        $stmt = $pdo->prepare("SELECT id FROM customers WHERE email = ?");
        $stmt->execute([$email]);
        $customer = $stmt->fetch();

        if (!$customer) {
            $stmt = $pdo->prepare("INSERT INTO customers (email) VALUES (?)");
            $stmt->execute([$email]);
            $customerId = $pdo->lastInsertId();
        } else {
            $customerId = $customer['id'];
        }

        // Generate token and send email
        $token = generateLoginToken($pdo, $customerId);
        sendMagicLinkEmail($email, $token);
        $emailSent = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Portal | <?php echo COMPANY_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo url('/assets/css/style.css?v=1.1'); ?>">
</head>
<body>
<div class="login-page">
    <div class="login-card fade-in-up">
        <?php if (!$emailSent): ?>
            <div class="login-logo">
                <h1>Flash<span class="text-accent">Fix</span></h1>
                <p>Support Portal</p>
            </div>

            <?php if ($error): ?>
                <div style="background:rgba(239,68,68,0.1);border:1px solid rgba(239,68,68,0.3);border-radius:var(--radius-md);padding:12px 16px;margin-bottom:20px;color:#F87171;font-size:13px;font-weight:500;">
                    <?php echo sanitize($error); ?>
                </div>
            <?php endif; ?>

            <p style="color:var(--text-soft);font-size:14px;margin-bottom:28px;text-align:center;line-height:1.7;">
                Enter your email address to receive a secure login link. No password needed.
            </p>

            <form method="POST" action="">
                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="you@company.com" required autofocus
                           value="<?php echo isset($_POST['email']) ? sanitize($_POST['email']) : ''; ?>">
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg" style="margin-top:8px;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    Send Login Link
                </button>
            </form>

            <div style="margin-top:28px;padding-top:20px;border-top:1px solid var(--border-100);text-align:center;">
                <p style="font-size:12px;color:var(--text-soft);margin-bottom:8px;">
                    <a href="<?php echo url('/help.php'); ?>" style="color:var(--primary-light);font-weight:600;">How does this work? →</a>
                </p>
                <p style="font-size:12px;color:var(--text-soft);">
                    Need an admin account? <a href="<?php echo url('/admin/login.php'); ?>" style="color:var(--primary-light);font-weight:600;">Admin Login →</a>
                </p>
            </div>
        <?php else: ?>
            <div style="text-align:center;">
                <div class="email-sent-icon">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <h2 style="font-size:22px;font-weight:800;margin-bottom:12px;">Check Your Email</h2>
                <p style="color:var(--text-muted);font-size:14px;line-height:1.7;margin-bottom:24px;">
                    We've sent a secure login link to your email address. Click the link to access your support dashboard.
                </p>
                <div style="background:var(--bg-base);border:1px solid var(--border-100);border-radius:var(--radius-md);padding:16px;margin-bottom:24px;">
                    <p style="font-size:12px;color:var(--text-soft);margin-bottom:4px;">Link expires in</p>
                    <p style="font-size:18px;font-weight:700;color:var(--accent-light);"><?php echo TOKEN_EXPIRY_MINUTES; ?> minutes</p>
                </div>
                <a href="<?php echo url('/index.php'); ?>" class="btn btn-secondary">
                    ← Back to Login
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
