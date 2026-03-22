<?php
/**
 * Nexhop Support - Admin Login
 */
require_once __DIR__ . '/../config.php';

if (isAdminLoggedIn()) {
    redirect('/admin/index.php');
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $error = 'Please enter both email and password.';
    } else {
        $stmt = $pdo->prepare("SELECT * FROM admins WHERE (email = ? OR username = ?) AND is_active = 1");
        $stmt->execute([$email, $email]);
        $admin = $stmt->fetch();

        if ($admin && password_verify($password, $admin['password_hash'])) {
            $_SESSION['admin_id']    = $admin['id'];
            $_SESSION['admin_name']  = $admin['full_name'];
            $_SESSION['admin_email'] = $admin['email'];

            $pdo->prepare("UPDATE admins SET last_login = NOW() WHERE id = ?")->execute([$admin['id']]);

            redirect('/admin/index.php');
        } else {
            $error = 'Invalid credentials. Please try again.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo url('/assets/css/style.css'); ?>">
</head>
<body>
<div class="login-page">
    <div class="login-card fade-in-up">
        <div class="login-logo">
            <h1>Flash<span class="text-accent">Fix</span></h1>
            <p>Admin Portal</p>
        </div>

        <?php if ($error): ?>
            <div style="background:rgba(239,68,68,0.1);border:1px solid rgba(239,68,68,0.3);border-radius:var(--radius-md);padding:12px 16px;margin-bottom:20px;color:#F87171;font-size:13px;font-weight:500;">
                <?php echo sanitize($error); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label class="form-label">Email or Username</label>
                <input type="text" name="email" class="form-control" placeholder="admin@nexhop.ae" required autofocus
                       value="<?php echo isset($_POST['email']) ? sanitize($_POST['email']) : ''; ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg" style="margin-top:8px;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                Sign In
            </button>
        </form>

        <div style="margin-top:28px;padding-top:20px;border-top:1px solid var(--border-100);text-align:center;">
            <p style="font-size:12px;color:var(--text-soft);">
                Customer? <a href="<?php echo url('/index.php'); ?>" style="color:var(--primary-light);font-weight:600;">Go to Support Portal →</a>
            </p>
        </div>
    </div>
</div>
</body>
</html>
