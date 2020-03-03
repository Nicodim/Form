<?php
//  showing errors on your page to see what the fatal PHP error is
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$phone = $_POST['phone'];
$shape_input = $_POST['shape-input'];
$size_input = $_POST['size-input'];
$img_canvas = $_POST['img-canvas'];
// the function converts all the characters that the user tries to add to the form
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);
$phone = htmlspecialchars($phone);
$shape_input = htmlspecialchars($shape_input);
$size_input = htmlspecialchars($size_input);
$img_canvas = htmlspecialchars($img_canvas);
// decodes the url if the user tries to add it to the form.
$name = urldecode($name);
$email = urldecode($email);
$text = urldecode($text);
$phone = urldecode($phone);
$shape_input = urldecode($shape_input);
$size_input = urldecode($size_input);
$img_canvas = urldecode($img_canvas);
// remove spaces from the beginning and end of the line
$name = trim($name);
$email = trim($email);
$text = trim($text); 
$phone = trim($phone); 
$shape_input = trim($shape_input);
$size_input = trim($size_input);
$img_canvas = trim($img_canvas);

//echo ($img_canvas);

function base64ToImage($base64_string, $output_file) {
    $file = fopen($output_file, "wb");

    //$data = explode(',', $base64_string);

    fwrite($file, $base64_string);
    fclose($file);
    
    
    return $output_file;
}

base64ToImage($img_canvas, 'ggg2.png');


try { 
    //base64ToImage($img_canvas, $output_file);
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;   
    $mail->isSMTP();     
    // Настройки вашей почты
    $mail->Host       = 'mail.webstickprojects.co.il';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'nicky@webstickprojects.co.il';                     // SMTP username
    $mail->Password   = 'U^PU64zk575j';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;
    $mail->setFrom('nicky@webstickprojects.co.il'); // Адрес самой почты

    // Получатель письма
    $mail->addAddress($email); 
    // $mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен
 
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'shokoladsheli test';
$mail->Body    = 'Dear '.$name. '<br>Your phone: ' .$phone. '<br>Post: ' .$email. '<br>Comment: ' .$text. '<br>shape: ' .$shape_input. '<br>size: ' .$size_input. '<br>img: '.'<img src="/ggg2.png">';


$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
echo file_get_contents("https://nick.webstickprojects.co.il/shokoladsheli/thank-you.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>