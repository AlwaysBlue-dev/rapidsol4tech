<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
