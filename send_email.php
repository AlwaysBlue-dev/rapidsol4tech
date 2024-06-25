<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);
    $referral = htmlspecialchars($_POST['referral']);
    $message = htmlspecialchars($_POST['message']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email'; // Titan Email SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@rapidsol4tech.com'; // Your Titan Email address
        $mail->Password = 'Abd123321@'; // Your Titan Email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption method
        $mail->Port = 587; // Titan Email SMTP port

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('info@rapidsol4tech.com'); // Your company's email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Form Submission';
        $mail->Body = "
            <html>
            <head>
                <title>Form Submission</title>
            </head>
            <body>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Service:</strong> {$service}</p>
                <p><strong>Referral:</strong> {$referral}</p>
                <p><strong>Message:</strong> {$message}</p>
            </body>
            </html>
        ";

        // Send email
        $mail->send();
        
        // Redirect to thank you page or index
        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        echo "Sorry, there was an error sending your message. Please try again later. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>