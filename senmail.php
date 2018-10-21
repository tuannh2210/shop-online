<?php 
require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();// Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";// Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'tuannhph04848@fpt.edu.vn';                 // SMTP username
    $mail->Password = 'Deonoi123'; // SMTP password
    $mail->SMTPSecure = "ssl"; // Enable TLS encryption, `ssl` also accepted
    $mail->Port=465;
    //Recipients
    $mail->setFrom('tuannhph04848@fpt.edu.vn', 'Test');
     $mail->addAddress('tuannh2210@gmail.com', 'TuanNguyen');  
    $mail->addReplyTo('doremonconan8@gmail.com', 'Tuanth');
    //Attachments
    // $mail->addAttachment('./public/img/1.jpg');         // Add attachments
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test send email from localhost';
    $mail->Body    = '
        <h1>Hello world!</h1>
        <strong>cong!</strong>
    ';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
 ?>