<?php
/**
 * Nexhop Support - Admin Logout
 */
require_once __DIR__ . '/../config.php';

session_unset();
session_destroy();

header('Location: ' . BASE_PATH . '/admin/login.php');
exit;
