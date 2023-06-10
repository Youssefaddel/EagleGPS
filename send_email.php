
<?php
require 'PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\src\SMTP.php';
require 'PHPMailer-master\src\Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["Fname"];
    $email = $_POST["email"];
    $mob = $_POST["mob"];
    $company = $_POST["company"];
    $country = $_POST["country"];
    $message = $_POST["msg"];
    $server = $_POST["server"];
    $accName = $_POST["accName"];
    $subject = $_POST["subbj"];

    switch ($subject) {
    case "purchase":
        $to = "yara.sherief@eagle-iot.net";
        break;
    case "partner":
        $to = "ahmed.saad@eagle-iot.net";
        break;
    case "issue":
        $to = "youssef.haddad@eagle-iot.net";
        break;
    case "others":
        $to = "youssef.haddad@eagle-iot.net";
        break;
    default:
        // Handle the case where no option is selected or an invalid option is chosen
        // Display an error message or perform appropriate actions
        
        error_log('Debug message', $to, 'debug.log');
        break;
    }
    // $to = "youssef.haddad@eagle-iot.net";
    $headers = "From: $fname <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    $body = "Full Name: $fname<br>";
    $body .= "Email: $email<br>";
    $body .= "Mobile: $mob<br>";
    $body .= "Company: $company<br>";
    $body .= "Country: $country<br><br>"; 
    $body .= "Server: $server<br>";
    $body .= "Account Name: $accName<br>";
    $body .= "Message: $message<br>";

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'eagle-iot.net';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@eagle-iot.net';
        $mail->Password   = 'fakepassword2';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom("info@eagle-iot.net", $fname );
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        echo 'Email sent successfully!';
    } catch (Exception $e) {
        echo 'Failed to send email. Error: ' . $mail->ErrorInfo;
    }
}

?>