<?php
require 'PHPMailer/PHPMailerAutoload.php';

$name=$_GET['name'];
$email=$_GET['email'];
//$address=$_GET['address'];


if(!isset($_COOKIE["address"])) {
    echo "Error: Mail sent without address";
} else {
    
$address= $_COOKIE["address"];
}

#$trip=$_GET['trip'].'?name='.$tripname;
$zipcode=$_GET['zipcode'];
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'uberlyfttripplanner@gmail.com';                 // SMTP username
$mail->Password = 'cmpe273sithuaung';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('uberlyfttripplanner@gmail.com', 'Mailer');

$mail->addAddress($email, $name); 

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$temp='Hi '.$name .' , <p> This is Sherpaa. <p> You ordered from our website.Consider this as order confirmation. <p>The order will be delivered at the following address- <p><b>Address :</b>'.$address.' <p> </p> <p> Happy Holidays,<p> Sherpaa Team';
$mail->Subject = 'Your Order Details by Sherpaa ';
$mail->Body    = $temp;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<img src="./assets/thankyou.jpg">';
    echo " <a href=\"javascript:history.go(-1)\">GO BACK</a>";

}