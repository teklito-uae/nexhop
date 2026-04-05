<?php
// Process wholesale lead form submissions
header('Content-Type: application/json');

// Enable CORS if needed
// header('Access-Control-Allow-Origin: *');

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Rate limiting - check if too many submissions from this IP
$rateLimitFile = __DIR__ . '/data/rate_limit.json';
$currentTime = time();
$window = 3600; // 1 hour window
$maxSubmissions = 10;

if (file_exists($rateLimitFile)) {
    $rateData = json_decode(file_get_contents($rateLimitFile), true) ?: [];
} else {
    $rateData = [];
}

// Clean old entries
foreach ($rateData as $ip => $timestamp) {
    if ($currentTime - $timestamp > $window) {
        unset($rateData[$ip]);
    }
}

$clientIP = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

// Check rate limit
if (isset($rateData[$clientIP]) && $rateData[$clientIP] >= $maxSubmissions) {
    http_response_code(429);
    echo json_encode(['error' => 'Too many submissions. Please try again later.']);
    exit;
}

// Sanitize and validate inputs
$company = trim(filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING));
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
$interest = trim(filter_input(INPUT_POST, 'interest', FILTER_SANITIZE_STRING));
$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

// Validate required fields
if (empty($company) || empty($name) || empty($email) || empty($phone) || empty($interest)) {
    http_response_code(400);
    echo json_encode(['error' => 'Please fill in all required fields']);
    exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email address']);
    exit;
}

// Update rate limit
$rateData[$clientIP] = $currentTime;
file_put_contents($rateLimitFile, json_encode($rateData, JSON_PRETTY_PRINT));

// Prepare email content
$recipients = [
    'sales@nexhop.ae',
    'ismail@zeronix.ae',
    'ismail.zeronix@gmail.com'
];

$subject = "Wholesale Inquiry: {$interest} from {$company}";

$emailBody = "=== Nexhop Wholesale Lead ===\n\n";
$emailBody .= "Company: {$company}\n";
$emailBody .= "Contact Name: {$name}\n";
$emailBody .= "Email: {$email}\n";
$emailBody .= "Phone: {$phone}\n";
$emailBody .= "Interest: {$interest}\n";
$emailBody .= "Message: {$message}\n";
$emailBody .= "IP Address: {$clientIP}\n";
$emailBody .= "Submitted: " . date('Y-m-d H:i:s') . "\n";

// Build email headers
$headers = [
    'From: Nexhop Wholesale <noreply@nexhop.ae>',
    'Reply-To: ' . $name . ' <' . $email . '>',
    'X-Mailer: PHP/' . phpversion(),
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=utf-8'
];

// Attempt to send email
$success = false;
foreach ($recipients as $recipient) {
    $headersString = implode("\r\n", $headers);
    $success = mail($recipient, $subject, $emailBody, $headersString) || $success;
}

if ($success) {
    // Log the lead to a JSON file for backup
    $logDir = __DIR__ . '/data/leads';
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }

    $logEntry = [
        'id' => uniqid('lead_'),
        'timestamp' => date('c'),
        'company' => $company,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'interest' => $interest,
        'message' => $message,
        'ip' => $clientIP
    ];

    $logFile = $logDir . '/wholesale_leads.json';
    $existingLeads = file_exists($logFile) ? json_decode(file_get_contents($logFile), true) : [];
    $existingLeads[] = $logEntry;
    file_put_contents($logFile, json_encode($existingLeads, JSON_PRETTY_PRINT));

    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your inquiry has been submitted successfully. Our B2B team will contact you within 4 business hours.'
    ]);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to send email. Please try again or contact us directly at +971 55 902 6521']);
}