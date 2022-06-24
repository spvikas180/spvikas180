<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    include_once"../admin/control/config.php";
    require '../admin/control/PHPMailer/PHPMailerAutoload.php';
    require '../admin/control/PHPMailer/class.phpmailer.php';

    trim(extract($_POST));
    if (isset($_POST['downloadTrailBtn'])) {




  
    $from_data = array(
        "name" => $name,
        "email" => $email,
        "number" => $number,
        "pageName" => $pageName,
        "pageUrl" => $pageUrl,
        "btnName" => $btnName
    );
    $data = dbAction('form_data', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Verified Successfully!"}';

        $customerEmailer = 
'<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
            <style>p{ margin:0 !important; padding:0 !important;}</style>
        </head>
        <body>
            <p>Email : ' . $email . '</p>
            <p>Name : ' . $name . '</p>
            <p>Page Name : ' . $pageName . '</p>
            <p>Page Url : ' . $pageUrl . '</p>
            <p>Button Name : ' . $btnName . '</p>
            </body>
    </html>';
        
       // $subject = $pageName . " - Details Received";
       //  $message = $customerEmailer;
       //  $toAddress = 'vikaskumareglobalsoft@gmail.com';
       //  $toAddress1 = 'vikaskumareglobalsoft@gmail.com';
       //  $fromTitle = $_SERVER['HTTP_HOST'];
       //  $fromEmail = 'details@' . $_SERVER['HTTP_HOST'];
       //  $mail = new PHPMailer;
       //  //$mail->IsSMTP();
       //  //$mail->Mailer = 'smtp';
       //  $mail->SMTPDebug = 2;
       //  $mail->Host = 'smtp.gmail.com';
       //  $mail->SMTPAuth = true;
       //  $mail->Username = 'egsswork7@gmail.com';
       //  $mail->Password = 'seo@9761#global';
       //  $mail->SMTPSecure = 'tls';
       //  $mail->Port = 587;
       //  $mail->setFrom($fromEmail, $fromTitle);
       //  $mail->addAddress($toAddress);
       //  $mail->AddCC($toAddress1);
       //  $mail->isHTML(true);
       //  $mail->Subject = $subject;
       //  $mail->Body = $message;
       //  $mailS = $mail->send();
            } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }

        
    } 
}
?>
