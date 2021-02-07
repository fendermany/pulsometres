<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'fendermany@mail.ru';                 // SMTP username
$mail->Password = '@yukbqcrbQ4578';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('fendermany@mail.ru', 'Pulse');
$mail->addAddress('leevoin@yandex.ru', 'Joe User');     // Add a recipient
$mail->addAddress('fendermany@gmail.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Сообщение с сайта Pulse';
$mail->Body    = '
 	Пользователь оставил данные <br> 
 	Имя: ' . $name . ' <br>
 	Номер телефона: ' . $phone . '<br>
 	E-mail: ' . $email . '';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


?>