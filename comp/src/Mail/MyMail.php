<?php

namespace Mikolka\Comp\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MyMail
{
    function testMail(){
//Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //* Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.zoho.eu';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'noreply@ninydev.com';                     //SMTP username
            $mail->Password   = '!23QweAsdZxc';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //* Recipients
            $mail->setFrom('noreply@ninydev.com', 'Mailer');
            $mail->addAddress('mikolka09@gmail.com', 'Joe User');     //Add a recipient
            //$Mail->addAddress('ellen@example.com');               //Name is optional
            //$Mail->addReplyTo('info@example.com', 'Information');
            //$Mail->addCC('cc@example.com');
            //$Mail->addBCC('bcc@example.com');

            //Attachments
            //$Mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$Mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //* Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML Mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}