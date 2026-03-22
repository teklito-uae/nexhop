<?php
/**
 * Nexhop Support - Magic Link Verification
 */
require_once __DIR__ . '/config.php';

$error = '';
$token = $_GET['token'] ?? '';

if (empty($token)) {
    redirect('/index.php');
}

// Validate token
$stmt = $pdo->prepare("
    SELECT lt.*, c.email, c.full_name 
    FROM login_tokens lt 
    JOIN customers c ON c.id = lt.customer_id 
    WHERE lt.token = ? AND lt.used = 0 AND lt.expires_at > NOW()
");
$stmt->execute([$token]);
$record = $stmt->fetch();

if (!$record) {
    $error = 'This login link has expired or is invalid. Please request a new one.';
} else {
    // Mark token as used
    $stmt = $pdo->prepare("UPDATE login_tokens SET used = 1 WHERE id = ?");
    $stmt->execute([$record['id']]);

    // Update last login
    $stmt = $pdo->prepare("UPDATE customers SET last_login = NOW() WHERE id = ?");
    $stmt->execute([$record['customer_id']]);

    // Start session
    $_SESSION['customer_id'] = $record['customer_id'];
    $_SESSION['customer_email'] = $record['email'];
    $_SESSION['customer_name'] = $record['full_name'] ?: $record['email'];

    setFlash('success', 'Welcome! You are now logged in.');
    redirect('/dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Login | <?php echo COMPANY_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo url('/assets/css/style.css'); ?>">
</head>
<body>
<div class="login-page">
    <div class="login-card fade-in-up" style="text-align:center;">
        <div style="width:64px;height:64px;margin:0 auto 20px;background:rgba(239,68,68,0.15);border-radius:50%;display:flex;align-items:center;justify-content:center;">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#F87171" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/>
            </svg>
        </div>
        <h2 style="font-size:20px;margin-bottom:12px;">Link Expired</h2>
        <p style="color:var(--text-muted);font-size:14px;margin-bottom:24px;"><?php echo sanitize($error); ?></p>
        <a href="<?php echo url('/index.php'); ?>" class="btn btn-primary">
            Request New Link
        </a>
    </div>
</div>
</body>
</html>
