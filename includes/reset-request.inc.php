<?php  

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

if (isset($_POST['reset-request-submit'])) { 

	$selector = bin2hex(random_bytes(8));
	$validator = random_bytes(32);

	$url = "www.tagdnotes.xyz/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($validator);

	$expires = date("U") + 600;

	require 'dbh.inc.php';

	$userEmail = $_POST["email"];

	$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error!";
		exit();
	} else {
		mysqli_stmt_bind_param($stmt, "s", $userEmail);
		mysqli_stmt_execute($stmt);
	}

	$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error!";
		exit();
	} else {
		$hashedToken = password_hash($validator, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
		mysqli_stmt_execute($stmt);
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);

	$to = $userEmail;
	
	$subject = 'Reset your password for TagDNotes';

	$message = '<p>We received a password reset request. The link to reset your password is given below. The link will expire in 10 minutes. If you did not make this request, you can ignore this e-mail</p>';
	$message .= '<p>Here is your password reset link: </br>';
	$message .= '<a href="' . $url . '">' . $url . '</a></p>';


	$mail = new PHPMailer(true);

	$mail->SMTPDebug  = SMTP::DEBUG_SERVER;                     // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'tagdnotes@gmail.com';                  // SMTP username
    $mail->Password   = 'tagDnotes@987';                        // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('tagdnotes@gmail.com');
    $mail->addAddress($to);     				// Add a recipient
    $mail->addReplyTo('tagdnotes@gmail.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->send();
    header("Location: ../reset-pwd.php?reset=success");

} else {
	header("Location: ../index.php");
}