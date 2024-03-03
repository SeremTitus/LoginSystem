<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function send_auth($p_usermail,$p_code,$url,$p_deadline = "10"){
    $mailerPHP = new PHPMailer(true);
    $body = '<h1>Your Authentication Code</h1> <p>We sent you this code to verify your identity. Please use the following code to complete your request:</p><p class="code">' . $p_code . '</p><p>Or click: <a href= "' . $url . '">' . $url . '</a></p><p>This code is valid for ' . $p_deadline. ' minutes. If you did not request this code, please ignore this email.</p><p>Sincerely,</p><p>Serem Titus (kabarak university)</p>';
    try {
        $mailerPHP->isSMTP();
        $mailerPHP->Host       = 'smtp.sendgrid.net';
        $mailerPHP->SMTPAuth   = true;
        $mailerPHP->Username   = 'apikey';
        $mailerPHP->Password   = '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';
        $mailerPHP->SMTPSecure = 'tls';
        $mailerPHP->Port       = 587;
        $mailerPHP->setFrom('seremtitusdev+ls@gmail.com', 'Serem Titus');
        $mailerPHP->addAddress($p_usermail);
        $mailerPHP->addReplyTo('seremtitusdev+ls@gmail.com', 'Serem Titus');
        $mailerPHP->isHTML(true);
        $mailerPHP->Subject = 'Auth code';
        $mailerPHP->Body    = $body;
        $mailerPHP->AltBody = strip_tags($body);    
        $mailerPHP->send();
        return True;
    } catch (Exception $e) {
        #echo "Message could not be sent. Mailer Error: {$mailerPHP->ErrorInfo}";
        return False;
    }
}

