<?php
/**
 * Nexhop Support Ticket Platform - Helper Functions
 */
// ── URL Helper (prepends BASE_PATH) ───────────────
function url($path = '') {
    return BASE_PATH . $path;
}

// ── Case ID Generator ─────────────────────────────
function generateCaseId($pdo) {
    do {
        $id = 'FF-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM tickets WHERE case_id = ?");
        $stmt->execute([$id]);
    } while ($stmt->fetchColumn() > 0);
    return $id;
}

// ── Auth Checks ───────────────────────────────────
function isCustomerLoggedIn() {
    return isset($_SESSION['customer_id']) && !empty($_SESSION['customer_id']);
}

function isAdminLoggedIn() {
    return isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id']);
}

function requireCustomerLogin() {
    if (!isCustomerLoggedIn()) {
        header('Location: ' . url('/index.php'));
        exit;
    }
}

function requireAdminLogin() {
    if (!isAdminLoggedIn()) {
        header('Location: ' . url('/admin/login.php'));
        exit;
    }
}

// ── Sanitization ──────────────────────────────────
function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// ── Redirect ──────────────────────────────────────
function redirect($url) {
    header("Location: " . url($url));
    exit;
}

// ── Time Ago ──────────────────────────────────────
function timeAgo($datetime) {
    $now = new DateTime();
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    if ($diff->y > 0) return $diff->y . ' year' . ($diff->y > 1 ? 's' : '') . ' ago';
    if ($diff->m > 0) return $diff->m . ' month' . ($diff->m > 1 ? 's' : '') . ' ago';
    if ($diff->d > 0) return $diff->d . ' day' . ($diff->d > 1 ? 's' : '') . ' ago';
    if ($diff->h > 0) return $diff->h . ' hour' . ($diff->h > 1 ? 's' : '') . ' ago';
    if ($diff->i > 0) return $diff->i . ' min' . ($diff->i > 1 ? 's' : '') . ' ago';
    return 'just now';
}

// ── Format Date ───────────────────────────────────
function formatDate($datetime, $format = 'M j, Y g:i A') {
    return date($format, strtotime($datetime));
}

// ── Status Badge HTML ─────────────────────────────
function statusBadge($status) {
    $classes = [
        'open'        => 'badge-open',
        'in-progress' => 'badge-progress',
        'waiting'     => 'badge-waiting',
        'resolved'    => 'badge-resolved',
        'closed'      => 'badge-closed',
    ];
    $labels = [
        'open'        => 'Open',
        'in-progress' => 'In Progress',
        'waiting'     => 'Waiting',
        'resolved'    => 'Resolved',
        'closed'      => 'Closed',
    ];
    $class = $classes[$status] ?? 'badge-open';
    $label = $labels[$status] ?? ucfirst($status);
    return "<span class=\"badge $class\">$label</span>";
}

// ── Priority Badge HTML ───────────────────────────
function priorityBadge($priority) {
    $classes = [
        'low'      => 'priority-low',
        'medium'   => 'priority-medium',
        'high'     => 'priority-high',
        'critical' => 'priority-critical',
    ];
    $class = $classes[$priority] ?? 'priority-medium';
    return "<span class=\"badge $class\">" . ucfirst($priority) . "</span>";
}

// ── Generate Magic Link Token ─────────────────────
function generateLoginToken($pdo, $customerId) {
    $token = bin2hex(random_bytes(32));
    $expires = date('Y-m-d H:i:s', strtotime('+' . TOKEN_EXPIRY_MINUTES . ' minutes'));

    // Invalidate old tokens
    $stmt = $pdo->prepare("UPDATE login_tokens SET used = 1 WHERE customer_id = ? AND used = 0");
    $stmt->execute([$customerId]);

    // Insert new token
    $stmt = $pdo->prepare("INSERT INTO login_tokens (customer_id, token, expires_at) VALUES (?, ?, ?)");
    $stmt->execute([$customerId, $token, $expires]);

    return $token;
}

// ── Send Email ────────────────────────────────────
function sendEmail($to, $subject, $htmlBody) {
    $headers = "From: " . COMPANY_NAME . " <" . ADMIN_EMAIL . ">\r\n";
    $headers .= "Reply-To: " . ADMIN_EMAIL . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    return mail($to, $subject, $htmlBody, $headers);
}

// ── Email Template Wrapper ────────────────────────
function emailTemplate($title, $content) {
    return '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin:0;padding:0;background-color:#0B1120;font-family:Arial,Helvetica,sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#0B1120;padding:40px 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color:#1E293B;border-radius:16px;overflow:hidden;border:1px solid #334155;">
                    <!-- Header -->
                    <tr>
                        <td style="background:linear-gradient(135deg,#2563EB,#06B6D4);padding:30px 40px;text-align:center;">
                            <h1 style="margin:0;color:#fff;font-size:22px;font-weight:800;letter-spacing:-0.5px;">
                                Flash<span style="color:#22D3EE;">Fix</span> Support
                            </h1>
                            <p style="margin:8px 0 0;color:rgba(255,255,255,0.8);font-size:13px;">' . htmlspecialchars($title) . '</p>
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                        <td style="padding:32px 40px;color:#F8FAFC;font-size:14px;line-height:1.7;">
                            ' . $content . '
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="padding:20px 40px;border-top:1px solid #334155;text-align:center;">
                            <p style="margin:0;color:#64748B;font-size:12px;">
                                © ' . date('Y') . ' ' . COMPANY_NAME . ' · Part of Hiba Computer Group
                            </p>
                            <p style="margin:6px 0 0;color:#64748B;font-size:11px;">
                                Dubai, UAE · ' . ADMIN_EMAIL . '
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';
}

// ── Send Magic Link Email ─────────────────────────
function sendMagicLinkEmail($email, $token) {
    $link = SITE_URL . '/verify.php?token=' . $token;
    $content = '
        <h2 style="margin:0 0 16px;color:#F8FAFC;font-size:18px;">Your Login Link</h2>
        <p style="color:#94A3B8;">Click the button below to access your support dashboard. This link expires in ' . TOKEN_EXPIRY_MINUTES . ' minutes.</p>
        <div style="text-align:center;margin:28px 0;">
            <a href="' . $link . '" style="display:inline-block;background:linear-gradient(135deg,#2563EB,#06B6D4);color:#fff;text-decoration:none;padding:14px 40px;border-radius:50px;font-weight:700;font-size:14px;letter-spacing:0.5px;">
                Access Support Portal
            </a>
        </div>
        <p style="color:#64748B;font-size:12px;">If the button doesn\'t work, copy and paste this link:<br>
        <a href="' . $link . '" style="color:#3B82F6;word-break:break-all;">' . $link . '</a></p>
        <p style="color:#64748B;font-size:12px;margin-top:20px;">If you didn\'t request this, please ignore this email.</p>';

    return sendEmail($email, 'Your Nexhop Support Login Link', emailTemplate('Login Verification', $content));
}

// ── Send Ticket Created Email ─────────────────────
function sendTicketCreatedEmail($email, $caseId, $subject, $priority) {
    $content = '
        <h2 style="margin:0 0 16px;color:#F8FAFC;font-size:18px;">Ticket Created Successfully</h2>
        <p style="color:#94A3B8;">Your support ticket has been received. Our team will review it and get back to you shortly.</p>
        <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#0B1120;border-radius:12px;padding:20px;margin:20px 0;border:1px solid #334155;">
            <tr>
                <td style="padding:8px 16px;color:#64748B;font-size:13px;">Case ID</td>
                <td style="padding:8px 16px;color:#22D3EE;font-weight:700;font-size:15px;">' . $caseId . '</td>
            </tr>
            <tr>
                <td style="padding:8px 16px;color:#64748B;font-size:13px;">Subject</td>
                <td style="padding:8px 16px;color:#F8FAFC;font-size:13px;">' . htmlspecialchars($subject) . '</td>
            </tr>
            <tr>
                <td style="padding:8px 16px;color:#64748B;font-size:13px;">Priority</td>
                <td style="padding:8px 16px;color:#F8FAFC;font-size:13px;">' . ucfirst($priority) . '</td>
            </tr>
            <tr>
                <td style="padding:8px 16px;color:#64748B;font-size:13px;">Status</td>
                <td style="padding:8px 16px;color:#3B82F6;font-size:13px;font-weight:600;">Open</td>
            </tr>
        </table>
        <div style="text-align:center;margin:24px 0;">
            <a href="' . SITE_URL . '/dashboard.php" style="display:inline-block;background:linear-gradient(135deg,#2563EB,#06B6D4);color:#fff;text-decoration:none;padding:12px 36px;border-radius:50px;font-weight:700;font-size:13px;">
                View Your Ticket
            </a>
        </div>';

    return sendEmail($email, "Ticket $caseId Created - " . SITE_NAME, emailTemplate('Ticket Confirmation', $content));
}

// ── Send Reply Notification Email ─────────────────
function sendReplyNotificationEmail($email, $caseId, $subject, $replierName, $message) {
    $content = '
        <h2 style="margin:0 0 16px;color:#F8FAFC;font-size:18px;">New Reply on Your Ticket</h2>
        <p style="color:#94A3B8;">There\'s a new update on your support ticket <strong style="color:#22D3EE;">' . $caseId . '</strong>.</p>
        <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#0B1120;border-radius:12px;padding:20px;margin:20px 0;border:1px solid #334155;">
            <tr>
                <td style="padding:8px 16px;color:#64748B;font-size:13px;">From</td>
                <td style="padding:8px 16px;color:#F8FAFC;font-size:13px;">' . htmlspecialchars($replierName) . '</td>
            </tr>
            <tr>
                <td colspan="2" style="padding:12px 16px;color:#94A3B8;font-size:13px;line-height:1.6;border-top:1px solid #334155;">
                    ' . nl2br(htmlspecialchars(substr($message, 0, 500))) . '
                </td>
            </tr>
        </table>
        <div style="text-align:center;margin:24px 0;">
            <a href="' . SITE_URL . '/dashboard.php" style="display:inline-block;background:linear-gradient(135deg,#2563EB,#06B6D4);color:#fff;text-decoration:none;padding:12px 36px;border-radius:50px;font-weight:700;font-size:13px;">
                View & Reply
            </a>
        </div>';

    return sendEmail($email, "Reply on $caseId - $subject", emailTemplate('Ticket Update', $content));
}

// ── Send Status Change Email ──────────────────────
function sendStatusChangeEmail($email, $caseId, $subject, $oldStatus, $newStatus) {
    $statusColors = [
        'open'        => '#3B82F6',
        'in-progress' => '#F59E0B',
        'waiting'     => '#8B5CF6',
        'resolved'    => '#10B981',
        'closed'      => '#64748B',
    ];
    $color = $statusColors[$newStatus] ?? '#3B82F6';

    $content = '
        <h2 style="margin:0 0 16px;color:#F8FAFC;font-size:18px;">Ticket Status Updated</h2>
        <p style="color:#94A3B8;">The status of your ticket <strong style="color:#22D3EE;">' . $caseId . '</strong> has been updated.</p>
        <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#0B1120;border-radius:12px;padding:20px;margin:20px 0;border:1px solid #334155;">
            <tr>
                <td style="padding:8px 16px;color:#64748B;font-size:13px;">Subject</td>
                <td style="padding:8px 16px;color:#F8FAFC;font-size:13px;">' . htmlspecialchars($subject) . '</td>
            </tr>
            <tr>
                <td style="padding:8px 16px;color:#64748B;font-size:13px;">Previous Status</td>
                <td style="padding:8px 16px;color:#94A3B8;font-size:13px;">' . ucfirst(str_replace('-', ' ', $oldStatus)) . '</td>
            </tr>
            <tr>
                <td style="padding:8px 16px;color:#64748B;font-size:13px;">New Status</td>
                <td style="padding:8px 16px;font-size:14px;font-weight:700;">
                    <span style="color:' . $color . ';">●</span> <span style="color:#F8FAFC;">' . ucfirst(str_replace('-', ' ', $newStatus)) . '</span>
                </td>
            </tr>
        </table>
        <div style="text-align:center;margin:24px 0;">
            <a href="' . SITE_URL . '/dashboard.php" style="display:inline-block;background:linear-gradient(135deg,#2563EB,#06B6D4);color:#fff;text-decoration:none;padding:12px 36px;border-radius:50px;font-weight:700;font-size:13px;">
                View Ticket
            </a>
        </div>';

    return sendEmail($email, "Ticket $caseId - Status: " . ucfirst($newStatus), emailTemplate('Status Update', $content));
}

// ── Get Ticket Stats ──────────────────────────────
function getTicketStats($pdo, $customerId = null) {
    $where = $customerId ? "WHERE customer_id = ?" : "";
    $params = $customerId ? [$customerId] : [];

    $stats = [];
    $statuses = ['open', 'in-progress', 'waiting', 'resolved', 'closed'];

    foreach ($statuses as $status) {
        $sql = "SELECT COUNT(*) FROM tickets $where" . ($where ? " AND" : " WHERE") . " status = ?";
        $p = array_merge($params, [$status]);
        $stmt = $pdo->prepare($sql);
        $stmt->execute($p);
        $stats[$status] = (int)$stmt->fetchColumn();
    }

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM tickets $where");
    $stmt->execute($params);
    $stats['total'] = (int)$stmt->fetchColumn();

    return $stats;
}

// ── Flash Messages ────────────────────────────────
function setFlash($type, $message) {
    $_SESSION['flash'] = ['type' => $type, 'message' => $message];
}

function getFlash() {
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

function renderFlash() {
    $flash = getFlash();
    if (!$flash) return '';
    $typeClass = $flash['type'] === 'success' ? 'toast-success' : ($flash['type'] === 'error' ? 'toast-error' : 'toast-info');
    return '<div class="toast ' . $typeClass . '" id="flash-toast">' . htmlspecialchars($flash['message']) . '</div>';
}
