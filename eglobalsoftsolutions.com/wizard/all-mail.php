<?php

//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    extract($_POST);
    $url = 'https://nexuswebworld.com/wizard/';
    require 'PHPMailer/PHPMailerAutoload.php';
    require 'PHPMailer/class.phpmailer.php';
    $customerEmailer = '<!DOCTYPE html>
                                <html>
                                    <head>
                                        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
                                    </head>
                                    <body>
                                        <p>Hi</p>
                                        <p>Questionnaire for WD Details</p>
                                        <h3>Who is your target market ?</h3>
                                        <p>Profession your target market : ' . $target_market_profession . '</p>
                                        <p>Age : ' . $target_market_age . '</p>
                                        <p>Income : ' . $target_market_income . '</p>
                                        <p>Gender : ' . $target_market_gender . '</p>
                                        </body>
                                </html>';

    $subject = 'Questionnaire for WD';
    $message = $customerEmailer;
    $toAddress = 'vikaskumareglobalsoft@gmail.com';
    $fromTitle = 'Questionnaire for WD';
    $fromEmail = 'info@nexuswebworld.com';
    $mail = new PHPMailer;
//$mail->IsSMTP();
//$mail->Mailer = 'smtp';
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'noreplyzonefirewall@gmail.com';
    $mail->Password = 'Zonefire732@';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom($fromEmail, $fromTitle);
    $mail->addAddress($toAddress);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mailS = $mail->send();
//    if ($mailS) {
//        header("location:" . $url);
//    } else {
//        header("location:" . $url);
//    }
//}
?>