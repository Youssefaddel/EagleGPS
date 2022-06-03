
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = '2';                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.gps-eagletrack.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@gps-eagletrack.com';                     //SMTP username
    $mail->Password   = 'TEQGL-W7Lg.f';                               //SMTP password
    // $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('youssefhaddad@gps-eagletrack.com');
    $mail->addAddress('info@gps-eagletrack.com', 'Joe User');     //Add a recipient
    	$mail->addCC($_POST['email']);

	print_r($_POST);
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
	$body = "<b>Email :</b>" . $_POST['email']  . "<br/>";
	$body .= "<b>name :</b>" . $_POST['Fname']  . " " . $_POST['Lname']  . "<br/>";
	$body .= "<b>phone :</b>" . $_POST['mob']  . "<br/>";
	$mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo 0;
}
?>