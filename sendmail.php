<?php
/**
 * Nexhop Computers - Contact Form Processing
 * Handles form submission and email sending with validation and security
 */

// Set appropriate headers
header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

// Error reporting for development (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Configuration
$to_email = 'sales@nexhop.ae'; // Change this to your actual email
$subject_prefix = 'Nexhop Computers - Contact Form';
$allowed_domains = ['nexhop.ae', 'localhost']; // Add your domain

// Response array
$response = ['success' => false, 'message' => ''];

try {
    // Check if form was submitted
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }
    
    // Validate honeypot (optional spam protection)
    if (!empty($_POST['honeypot'])) {
        throw new Exception('Spam detected');
    }
    
    // Get and sanitize form data
    $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
    $company = isset($_POST['company']) ? sanitize_input($_POST['company']) : '';
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : '';
    $service = isset($_POST['service']) ? sanitize_input($_POST['service']) : '';
    $message = isset($_POST['message']) ? sanitize_input($_POST['message']) : '';
    $privacy = isset($_POST['privacy']) ? true : false;
    
    // Validate required fields
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Name is required';
    } elseif (strlen($name) < 2) {
        $errors[] = 'Name must be at least 2 characters long';
    }
    
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address';
    }
    
    if (empty($phone)) {
        $errors[] = 'Phone number is required';
    } elseif (!preg_match('/^[0-9\s\-\+\(\)]+$/', $phone)) {
        $errors[] = 'Please enter a valid phone number';
    }
    
    if (empty($service)) {
        $errors[] = 'Please select a service';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required';
    } elseif (strlen($message) < 10) {
        $errors[] = 'Message must be at least 10 characters long';
    }
    
    if (!$privacy) {
        $errors[] = 'You must agree to the privacy policy';
    }
    
    // Check for errors
    if (!empty($errors)) {
        throw new Exception(implode(', ', $errors));
    }
    
    // Additional validation
    if (strlen($name) > 100) {
        throw new Exception('Name is too long');
    }
    
    if (strlen($company) > 100) {
        throw new Exception('Company name is too long');
    }
    
    if (strlen($phone) > 20) {
        throw new Exception('Phone number is too long');
    }
    
    if (strlen($message) > 2000) {
        throw new Exception('Message is too long');
    }
    
    // Validate email domain
    $email_domain = substr(strrchr($email, "@"), 1);
    if (!checkdnsrr($email_domain, "MX")) {
        throw new Exception('Please enter a valid email domain');
    }
    
    // Prepare email content
    $subject = $subject_prefix . ' - ' . $service;
    
    $body = "New contact form submission from Nexhop Computers website:\n\n";
    $body .= "Name: {$name}\n";
    $body .= "Company: {$company}\n";
    $body .= "Email: {$email}\n";
    $body .= "Phone: {$phone}\n";
    $body .= "Service Required: {$service}\n";
    $body .= "Message:\n{$message}\n\n";
    $body .= "---\n";
    $body .= "Submitted from: " . get_client_ip() . "\n";
    $body .= "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n";
    $body .= "Date: " . date('Y-m-d H:i:s') . "\n";
    
    // Prepare HTML email
    $html_body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #0066cc; color: white; padding: 20px; text-align: center; }
            .content { background-color: #f8f9fa; padding: 20px; margin: 20px 0; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #0066cc; }
            .footer { background-color: #e9ecef; padding: 15px; text-align: center; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Nexhop Computers - Contact Form</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Name:</span> " . htmlspecialchars($name) . "
                </div>
                <div class='field'>
                    <span class='label'>Company:</span> " . htmlspecialchars($company) . "
                </div>
                <div class='field'>
                    <span class='label'>Email:</span> " . htmlspecialchars($email) . "
                </div>
                <div class='field'>
                    <span class='label'>Phone:</span> " . htmlspecialchars($phone) . "
                </div>
                <div class='field'>
                    <span class='label'>Service Required:</span> " . htmlspecialchars($service) . "
                </div>
                <div class='field'>
                    <span class='label'>Message:</span><br>
                    " . nl2br(htmlspecialchars($message)) . "
                </div>
            </div>
            <div class='footer'>
                <p>Submitted on " . date('F j, Y \a\t g:i A') . "</p>
                <p>From IP: " . get_client_ip() . "</p>
            </div>
        </div>
    </body>
    </html>";
    
    // Set email headers
    $headers = "From: {$name} <{$email}>\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/alternative; boundary=\"boundary\"\r\n";
    
    // Create multipart message
    $multipart_message = "--boundary\r\n";
    $multipart_message .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $multipart_message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $multipart_message .= $body . "\r\n";
    $multipart_message .= "--boundary\r\n";
    $multipart_message .= "Content-Type: text/html; charset=UTF-8\r\n";
    $multipart_message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $multipart_message .= $html_body . "\r\n";
    $multipart_message .= "--boundary--";
    
    // Send email
    $mail_sent = mail($to_email, $subject, $multipart_message, $headers);
    
    if ($mail_sent) {
        // Send confirmation email to user
        send_confirmation_email($email, $name);
        
        $response['success'] = true;
        $response['message'] = 'Thank you for your message! We will get back to you within 24 hours.';
    } else {
        throw new Exception('Failed to send email. Please try again later.');
    }
    
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
    http_response_code(400);
}

// Return JSON response
echo json_encode($response);

// Helper functions
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function get_client_ip() {
    $ip_keys = ['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'];
    foreach ($ip_keys as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip);
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                    return $ip;
                }
            }
        }
    }
    return $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
}

function send_confirmation_email($user_email, $user_name) {
    global $to_email;
    
    $subject = 'Thank you for contacting Nexhop Computers';
    
    $html_body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #0066cc; color: white; padding: 20px; text-align: center; }
            .content { background-color: #f8f9fa; padding: 20px; margin: 20px 0; }
            .footer { background-color: #e9ecef; padding: 15px; text-align: center; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Nexhop Computers</h2>
            </div>
            <div class='content'>
                <h3>Dear " . htmlspecialchars($user_name) . ",</h3>
                <p>Thank you for contacting Nexhop Computers. We have received your message and will get back to you within 24 hours.</p>
                <p>Our team of IT experts is ready to assist you with your technology requirements.</p>
                <p>If your inquiry is urgent, please don't hesitate to call us at +971 55 902 6521.</p>
                <p>Best regards,<br>The Nexhop Computers Team</p>
            </div>
            <div class='footer'>
                <p>Part of Hiba Computer Group | Dubai, UAE</p>
                <p>Email: sales@nexhop.ae | Phone: +971 55 902 6521</p>
            </div>
        </div>
    </body>
    </html>";
    
    $headers = "From: Nexhop Computers <{$to_email}>\r\n";
    $headers .= "Reply-To: {$to_email}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    mail($user_email, $subject, $html_body, $headers);
}