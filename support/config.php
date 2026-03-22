<?php
/**
 * Nexhop Support Ticket Platform - Configuration
 * 
 * UPDATE THESE VALUES BEFORE DEPLOYING:
 * 1. Database credentials (DB_HOST, DB_NAME, DB_USER, DB_PASS)
 * 2. Site URL (SITE_URL) to your subdomain
 * 3. Admin email (ADMIN_EMAIL)
 */

session_start();

// ── Database ──────────────────────────────────────
define('DB_HOST', 'localhost');
define('DB_NAME', 'u887613492_ff_support');
define('DB_USER', 'u887613492_ff_support');
define('DB_PASS', 'F$drQSBL8t=');
define('DB_CHARSET', 'utf8mb4');

// ── Site Settings ─────────────────────────────────
define('SITE_NAME', 'Nexhop Support');
// For localhost: 'http://localhost/flashfix/support'
// For production: 'https://support.nexhop.ae'
define('SITE_URL', 'https://support.nexhop.ae');
define('MAIN_SITE_URL', 'https://nexhop.ae');
define('ADMIN_EMAIL', 'support@nexhop.ae');
define('COMPANY_NAME', 'Nexhop Computers');
define('COMPANY_PHONE', '+971 55 902 6521');

// ── Base Path (auto-detect) ──────────────────────
// Handles both localhost/subdirectory and production root
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$supportPos = strpos($scriptDir, '/support');
if ($supportPos !== false) {
    define('BASE_PATH', substr($scriptDir, 0, $supportPos) . '/support');
} else {
    define('BASE_PATH', '');
}

// ── Upload Settings ───────────────────────────────
define('UPLOAD_DIR', __DIR__ . '/uploads/');
define('MAX_FILE_SIZE', 10 * 1024 * 1024); // 10MB
define('ALLOWED_EXTENSIONS', ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'txt', 'zip']);

// ── Token Settings ────────────────────────────────
define('TOKEN_EXPIRY_MINUTES', 30);

// ── Timezone ──────────────────────────────────────
date_default_timezone_set('Asia/Dubai');

// ── Database Connection ───────────────────────────
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
} catch (PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
    die("Service temporarily unavailable. Please try again later.");
}

// ── Include Helpers ───────────────────────────────
require_once __DIR__ . '/functions.php';
