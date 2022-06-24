<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
// $mail = new PHPMailer(true);

//     $mail->SMTPDebug = 3;                               
//     $mail->isSMTP();                                     
//     $mail->Host = "smtp.gmail.com";
//     $mail->SMTPAuth = true;                           
//     $mail->Username = "vikaskumareglobalsoft@gmail.com";                 
//     $mail->Password = "Vikas112@";                           
//     $mail->SMTPSecure = "tls";                           
//     $mail->Port = 587;                                   

//     $mail->From = "vikaskumareglobalsoft@gmail.com";
//     $mail->FromName = "Vikas";

//     $mail->addAddress("rahulphpeglobalsoft@gmail.com", "Rahul");

//     $mail->isHTML(true);

//     $mail->Subject = "Subject Text";
//     $mail->Body = "<i>Mail body in HTML</i>";
//     $mail->AltBody = "This is the plain text version of the email content";

//     if(!$mail->send()) 
//     {
//         echo "Mailer Error: " . $mail->ErrorInfo;
//     } 
//     else 
//     {
//         echo "Message has been sent successfully";
//     }


define('GUSER', 'spvikas180@gmail.com'); // GMail username
define('GPWD', 'Vikas112@'); // GMail password
smtpmailer('spvikas180@mail.com', 'spvikas180@mail.com', 'NWW', 'test mail message', 'Hello World!');
function smtpmailer($to, $from, $from_name, $subject, $body) { 
 global $error;
 $mail = new PHPMailer(true);  // create a new object
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true;  // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = 465; 
 $mail->Username = GUSER;  
 $mail->Password = GPWD;           
 $mail->SetFrom($from, $from_name);
 $mail->Subject = $subject;
 $mail->Body = $body;
 $mail->AddAddress($to);
 if(!$mail->Send()) {
 $error = 'Mail error: '.$mail->ErrorInfo; 
 return false;
 } else {
 $error = 'Message sent!';
 return true;
 }
}
?>
