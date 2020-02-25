<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$mail = new PHPMailer(true);
try { 
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;   
    $mail->isSMTP();     
    // Настройки вашей почты
    $mail->Host       = 'ssl://smtp.rambler.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'nick.kravtsov@rambler.ru'; // Логин на почте
    $mail->Password   = 'AAAAAr204gni'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('nick.kravtsov@rambler.ru', 'NAME'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('yefatot400@jetsmails.com');  
    // $mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен

 
}

$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>