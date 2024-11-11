<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start(); // Start the session for rate limiting

// Define blocked IPs
$blocked_ips = isset($_SESSION['blocked_ips']) ? $_SESSION['blocked_ips'] : [];

// Get the user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Check if the user's IP is in the blocked list
if (in_array($user_ip, $blocked_ips)) {
    // Send alert email for blocked IP
    $alertMail = new PHPMailer(true);
    try {
        // Server settings for the alert email
        $alertMail->isSMTP();
        $alertMail->Host = 'smtp.titan.email'; // Titan Email SMTP server
        $alertMail->SMTPAuth = true;
        $alertMail->Username = 'info@rapidsol4tech.com'; // Your Titan Email address
        $alertMail->Password = 'Abd123321@'; // Your Titan Email password
        $alertMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption method
        $alertMail->Port = 587; // Titan Email SMTP port

        // Recipients
        $alertMail->setFrom('info@rapidsol4tech.com', 'RapidSol4Tech');
        $alertMail->addAddress('info@rapidsol4tech.com'); // Your email to receive the blocked IP alert

        // Content
        $alertMail->isHTML(true);
        $alertMail->Subject = "Blocked IP Attempt";
        $alertMail->Body = "
            <html>
            <head>
                <title>Blocked IP Alert</title>
            </head>
            <body>
                <p><strong>Blocked IP:</strong> {$user_ip}</p>
                <p><strong>Details:</strong> A blocked IP attempted to submit the form after exceeding rate limit.</p>
            </body>
            </html>
        ";

        // Send alert email
        $alertMail->send();
    } catch (Exception $e) {
        // Log or handle the error if the alert email fails
        error_log("Blocked IP alert email could not be sent. Mailer Error: {$alertMail->ErrorInfo}");
    }

    echo "Your IP address is blocked from submitting the form.";
    exit(); // Exit script after blocking
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Rate limiting: Define time limit and max attempts
    $time_limit = 600; // 600 seconds = 10 minutes
    $max_attempts = 2; // Maximum allowed submissions within the time limit

    // Initialize submission tracking if not already set
    if (!isset($_SESSION['submission_times'])) {
        $_SESSION['submission_times'] = [];
    }

    // Clean up old submission times
    $_SESSION['submission_times'] = array_filter($_SESSION['submission_times'], function ($timestamp) use ($time_limit) {
        return $timestamp > (time() - $time_limit);
    });

    // Check if the user has exceeded the maximum number of submissions
    if (count($_SESSION['submission_times']) >= $max_attempts) {
        // Block the IP after exceeding the rate limit
        $_SESSION['blocked_ips'][] = $user_ip;

        // Send alert email about rate limit being exceeded
        $alertMail = new PHPMailer(true);
        try {
            // Server settings for alert email
            $alertMail->isSMTP();
            $alertMail->Host = 'smtp.titan.email'; // Titan Email SMTP server
            $alertMail->SMTPAuth = true;
            $alertMail->Username = 'info@rapidsol4tech.com'; // Your Titan Email address
            $alertMail->Password = 'Abd123321@'; // Your Titan Email password
            $alertMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption method
            $alertMail->Port = 587; // Titan Email SMTP port

            // Recipients
            $alertMail->setFrom('info@rapidsol4tech.com', 'RapidSol4Tech');
            $alertMail->addAddress('info@rapidsol4tech.com'); // Your email to receive the rate limit alert

            // Content
            $alertMail->isHTML(true);
            $alertMail->Subject = "Rate Limit Exceeded Alert!";
            $alertMail->Body = "
                <html>
                <head>
                    <title>Rate Limit Exceeded</title>
                </head>
                <body>
                    <p><strong>Alert:</strong> The rate limit for form submissions has been exceeded.</p>
                    <p><strong>Details:</strong> More than {$max_attempts} submissions were made within {$time_limit} seconds.</p>
                    <p><strong>IP Address:</strong> " . $_SERVER['REMOTE_ADDR'] . "</p>
                </body>
                </html>
            ";

            // Send rate limit alert email
            $alertMail->send();
        } catch (Exception $e) {
            // Log or handle the error if the rate limit alert email fails
            error_log("Rate limit alert email could not be sent. Mailer Error: {$alertMail->ErrorInfo}");
        }

        echo "You have exceeded the maximum number of submissions. Please try again later.";
        exit();
    }

    // Log the current submission time
    $_SESSION['submission_times'][] = time();

    // Honeypot field check
    if (!empty($_POST['hidden_field'])) { // Check if honeypot field is filled
        // If the honeypot field has data, it's likely spam
        
        // Create a new PHPMailer instance to send spam alert
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
                    <p><strong>Submitted Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>
                </body>
                </html>
            ";

            // Send spam alert email
            $mail->send();
        } catch (Exception $e) {
            // Log or handle the error if the spam alert email fails
            error_log("Spam alert email could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }

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

    // Create a new PHPMailer instance for the actual form submission
    $mail = new PHPMailer(true);

    try {
        // Server settings for the actual form submission
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email'; // Titan Email SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@rapidsol4tech.com'; // Your Titan Email address
        $mail->Password = 'Abd123321@'; // Your Titan Email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption method
        $mail->Port = 587; // Titan Email SMTP port

        // Recipients
        $mail->setFrom('info@rapidsol4tech.com', 'RapidSol4Tech');
        $mail->addAddress('info@rapidsol4tech.com');
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "
            <html>
            <head>
                <title>{$subject}</title>
            </head>
            <body>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Subject:</strong> {$subject}</p>
                <p><strong>Message:</strong> {$message}</p>";
                
        if ($service) {
            $mail->Body .= "<p><strong>Service:</strong> {$service}</p>";
        }
        if ($referral) {
            $mail->Body .= "<p><strong>Referral:</strong> {$referral}</p>";
        }
        
        $mail->Body .= "
            </body>
            </html>
        ";

        // Send email
        $mail->send();

        // Redirect to thank you page or index
        header("Location: ../thank-you.php");
        exit();
    } catch (Exception $e) {
        echo "Sorry, there was an error sending your message. Please try again later. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
