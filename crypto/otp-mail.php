<?php

extract($_POST);


$otp = rand(10000,999999);

    $customerEmailer = '<!DOCTYPE html>
                                <html>
                                    <head>
                                        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
                                        <style>p{ margin:0 !important; padding:0 !important;}</style>
                                    </head>
                                    <body>
                                        <p>Hi,<br> Your OTP : - '.$otp.'</p>
                                     </body>
                                </html>';
    $subject = 'Alert - Crypto.com OTP';
 

$message = $customerEmailer;
$toAddress = $email;
$fromTitle = $_SERVER['HTTP_HOST'];
$fromEmail = 'info@' . $_SERVER['HTTP_HOST'];
$mail = new PHPMailer;
//$mail->IsSMTP();
//$mail->Mailer = 'smtp';
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'egsswork7@gmail.com';
$mail->Password = 'seo@9761#global';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom($fromEmail, $fromTitle);
$mail->addAddress($toAddress);
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $message;
$mailS = $mail->send();
?>