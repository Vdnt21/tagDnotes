<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';
require 'credentials.php';

if (isset($_POST['contact-submit'])) {
			$fname = $_POST['first-name'];
			$lname = $_POST['last-name'];
			$mailFrom = $_POST['email'];
			$subject = $_POST['subject'];
			$contact = $_POST['contact'];
			$message = $_POST['message'];

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                             // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = EMAIL;                     // SMTP username
    $mail->Password   = PASS;                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($mailFrom, $fname.$lname);
    $mail->AddAddress(EMAIL, 'TagDnotes');
    $mail->addReplyTo(EMAIL, 'Support@TagDnotes');

    // Content
    $mail->Subject = $subject;
    $mail->Body    = "You received an e-mail from " . $fname . " " . $lname . ".\nEmail: " . $mailFrom . "\nContact: " . $contact . "\n\n" .$message;

    $mail->send();
    header("Location: ../index.php?mailsent=success");
} catch (Exception $e) {
    header("Location: ../contact.php?mailsent=failed");
    $mail->ErrorInfo;
}
}