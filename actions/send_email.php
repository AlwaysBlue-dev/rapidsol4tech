<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'blocked_users.php'; // Include the file for blocked users functionality

session_start(); // Start the session for rate limiting

// Get the user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Generate or retrieve a unique user ID (using session or cookies)
if (!isset($_COOKIE['user_id'])) {
    // Create a new unique user ID if not set in cookie
    $user_id = uniqid('user_', true);
    setcookie('user_id', $user_id, time() + 3600, '/'); // Store user ID for 1 hour
} else {
    // Retrieve existing user ID from cookie
    $user_id = $_COOKIE['user_id'];
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Rate limiting: Define time limit and max attempts
    $time_limit = 120; // 120 seconds = 2 minutes
    $max_attempts = 2; // Maximum allowed submissions within the time limit

    // Initialize submission tracking if not already set
    if (!isset($_SESSION['submission_times'][$user_ip])) {
        $_SESSION['submission_times'][$user_ip] = [];
    }
    if (!isset($_SESSION['submission_times'][$user_id])) {
        $_SESSION['submission_times'][$user_id] = [];
    }

    // Clean up old submission times based on both IP and user ID
    $_SESSION['submission_times'][$user_ip] = array_filter($_SESSION['submission_times'][$user_ip], function ($timestamp) use ($time_limit) {
        return $timestamp > (time() - $time_limit);
    });
    $_SESSION['submission_times'][$user_id] = array_filter($_SESSION['submission_times'][$user_id], function ($timestamp) use ($time_limit) {
        return $timestamp > (time() - $time_limit);
    });

    // Check if the user (IP or user ID) has exceeded the maximum number of submissions
    if (count($_SESSION['submission_times'][$user_ip]) >= $max_attempts || count($_SESSION['submission_times'][$user_id]) >= $max_attempts) {
        // Block the user (IP or user ID) after exceeding the rate limit
        blockUser($user_ip, $user_id);

        // Send alert email about rate limit being exceeded
        sendRateLimitAlertEmail($user_ip, $user_id);

        echo "You have exceeded the maximum number of submissions. Please try again later.";
        exit();
    }

    // Log the current submission time for the specific user (by IP and user ID)
    $_SESSION['submission_times'][$user_ip][] = time();
    $_SESSION['submission_times'][$user_id][] = time();

    // Honeypot field check
    if (!empty($_POST['hidden_field'])) { // Check if honeypot field is filled
        // If the honeypot field has data, it's likely spam

        // Send spam alert
        sendSpamAlertEmail($_POST['email']);

        // Stop further processing
        echo "Sorry, your submission has been detected as spam.";
        exit();
    }

    // Retrieve form data and sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : 'New Form Submission';
    $message = htmlspecialchars($_POST['message']);
    $service = isset($_POST['service']) ? htmlspecialchars($_POST['service']) : '';
    $referral = isset($_POST['referral']) ? htmlspecialchars($_POST['referral']) : '';

    // Send the form data via email
    sendFormEmail($name, $email, $subject, $message, $service, $referral);
}

// Function to send block alert email
function sendBlockAlertEmail($user_ip, $user_id) {
    $mail = new PHPMailer(true);
    try {
        // Server settings for alert email
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email'; // Titan Email SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@rapidsol4tech.com'; // Your Titan Email address
        $mail->Password = 'Abd123321@'; // Your Titan Email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption method
        $mail->Port = 587; // Titan Email SMTP port

        // Recipients
        $mail->setFrom('info@rapidsol4tech.com', 'RapidSol4Tech');
        $mail->addAddress('info@rapidsol4tech.com'); // Your email to receive the block alert

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Blocked User Attempt Alert";
        $mail->Body = "
            <html>
            <head>
                <title>Blocked User Attempt</title>
            </head>
            <body>
                <p><strong>Alert:</strong> A blocked user attempted to access the site.</p>
                <p><strong>User IP:</strong> {$user_ip}</p>
                <p><strong>User ID:</strong> {$user_id}</p>
            </body>
            </html>
        ";

        // Send alert email
        $mail->send();
    } catch (Exception $e) {
        error_log("Block alert email could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }
}

// Function to send rate limit alert email
function sendRateLimitAlertEmail($user_ip, $user_id) {
    $mail = new PHPMailer(true);
    try {
        // Server settings for alert email
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email'; // Titan Email SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@rapidsol4tech.com'; // Your Titan Email address
        $mail->Password = 'Abd123321@'; // Your Titan Email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption method
        $mail->Port = 587; // Titan Email SMTP port

        // Recipients
        $mail->setFrom('info@rapidsol4tech.com', 'RapidSol4Tech');
        $mail->addAddress('info@rapidsol4tech.com'); // Your email to receive the rate limit alert

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Rate Limit Exceeded Alert!";
        $mail->Body = "
            <html>
            <head>
                <title>Rate Limit Exceeded</title>
            </head>
            <body>
                <p><strong>Alert:</strong> The rate limit for form submissions has been exceeded.</p>
                <p><strong>User IP:</strong> {$user_ip}</p>
                <p><strong>User ID:</strong> {$user_id}</p>
            </body>
            </html>
        ";

        // Send rate limit alert email
        $mail->send();
    } catch (Exception $e) {
        error_log("Rate limit alert email could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }
}

// Function to send spam alert email
function sendSpamAlertEmail($email) {
    $mail = new PHPMailer(true);
    try {
        // Server settings for spam alert
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email'; // Titan Email SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@rapidsol4tech.com'; // Your Titan Email address
        $mail->Password = 'Abd123321@'; // Your Titan Email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption method
        $mail->Port = 587; // Titan Email SMTP port

        // Recipients
        $mail->setFrom('info@rapidsol4tech.com', 'RapidSol4Tech');
        $mail->addAddress('info@rapidsol4tech.com'); // Your email to receive the spam alert

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Spam Alert Detected!";
        $mail->Body = "
            <html>
            <head>
                <title>Spam Alert</title>
            </head>
            <body>
                <p><strong>Spam Detected:</strong> A spam submission was detected on your form.</p>
                <p><strong>Submitted Email:</strong> " . htmlspecialchars($email) . "</p>
            </body>
            </html>
        ";

        // Send spam alert email
        $mail->send();
    } catch (Exception $e) {
        error_log("Spam alert email could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }
}

// Function to send form data email
function sendFormEmail($name, $email, $subject, $message, $service, $referral) {
    $mail = new PHPMailer(true);
    try {
        // Server settings for email
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email'; // Titan Email SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@rapidsol4tech.com'; // Your Titan Email address
        $mail->Password = 'Abd123321@'; // Your Titan Email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption method
        $mail->Port = 587; // Titan Email SMTP port

        // Recipients
        $mail->setFrom('info@rapidsol4tech.com', 'RapidSol4Tech');
        $mail->addAddress('info@rapidsol4tech.com'); // Your email
        $mail->addReplyTo($email, $name); // Reply-to email

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "
            <html>
            <head>
                <title>New Form Submission</title>
            </head>
            <body>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Message:</strong><br>{$message}</p>
                <p><strong>Service:</strong> {$service}</p>
                <p><strong>Referral:</strong> {$referral}</p>
            </body>
            </html>
        ";

        // Send email
        $mail->send();
        // Redirect to thank-you page
        header("Location: /thank-you.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
