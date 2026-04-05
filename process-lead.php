<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $service = strip_tags(trim($_POST["service"]));
    $message = trim($_POST["message"]);

    if (empty($name) || empty($message) || empty($service) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }

    // ✅ Updated recipient
    $recipient = "info@nexhop.ae";

    $subject = "New Service Request: $service from $name";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Service Requested: $service\n\n";
    $email_content .= "Message:\n$message\n";

    // Better headers (prevents spam issues)
    $headers = "From: info@nexhop.ae\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($recipient, $subject, $email_content, $headers)) {
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }

} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>