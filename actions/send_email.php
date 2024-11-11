<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start(); // Start the session for rate limiting

// Define blocked users by IP or session/user ID
$blocked_users = isset($_SESSION['blocked_users']) ? $_SESSION['blocked_users'] : [];

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

// Check if the user's IP or user ID is in the blocked list
if (in_array($user_ip, $blocked_users) || in_array($user_id, $blocked_users)) {
    // Send alert email for blocked user
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
        $alertMail->addAddress('info@rapidsol4tech.com'); // Your email to receive the blocked user alert

        // Content
        $alertMail->isHTML(true);
        $alertMail->Subject = "Blocked User Attempt";
        $alertMail->Body = "
            <html>
            <head>
                <title>Blocked User Alert</title>
            </head>
            <body>
                <p><strong>Blocked User IP:</strong> {$user_ip}</p>
                <p><strong>Blocked User ID:</strong> {$user_id}</p>
                <p><strong>Details:</strong> A blocked user attempted to submit the form after exceeding rate limit.</p>
            </body>
            </html>
        ";

        // Send alert email
        $alertMail->send();
    } catch (Exception $e) {
        error_log("Blocked user alert email could not be sent. Mailer Error: {$alertMail->ErrorInfo}");
    }

    echo "Your submission is blocked due to exceeding the submission limit.";
    exit(); // Exit script after blocking
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Rate limiting: Define time limit and max attempts
    $time_limit = 600; // 600 seconds = 10 minutes
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
        $_SESSION['blocked_users'][] = $user_ip;
        $_SESSION['blocked_users'][] = $user_id;

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
                    <p><strong>User IP:</strong> {$user_ip}</p>
                    <p><strong>User ID:</strong> {$user_id}</p>
                </body>
                </html>
            ";

            // Send rate limit alert email
            $alertMail->send();
        } catch (Exception $e) {
            error_log("Rate limit alert email could not be sent. Mailer Error: {$alertMail->ErrorInfo}");
        }

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

    // Send the form data via email
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

        $mail->Body .= "</body></html>";

        // Send email
        $mail->send();

        // Redirect to thank you page
        header("Location: ../thank-you.php");
        exit();
    } catch (Exception $e) {
        echo "Sorry, there was an error sending your message. Please try again later. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>
