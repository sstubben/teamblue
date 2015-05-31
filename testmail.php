<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'team@teamblue.my';                 // SMTP username
$mail->Password = '1234qwer';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'team@teamblue.my';
$mail->FromName = 'Mailer';
$mail->addAddress('simon.stubben@lionandlion.com');     // Add a recipient
$mail->addReplyTo('info@example.com', 'Information');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>


<?php
    $result ='';
    if ($_POST["submit"]) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'simon.stubben@lionandlion.com'; 
        $to = 'simon.stubben@lionandlion.com'; 
        $subject = 'Message from TeamBlue.my ';
        
        $body ="From: $name\n E-Mail: $email\n Message:\n $message";
        
        if (mail ($to, $subject, $body, $from)) {
                $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
        } else {
                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }

    }