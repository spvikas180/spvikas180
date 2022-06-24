<?php

include '../../functions.php';
if (!isset($_SESSION['id'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
if (isset($_POST['status'])) {
    require '../../PHPMailer/PHPMailerAutoload.php';
    require '../../PHPMailer/class.phpmailer.php';

    $id = $_POST['id'];
    $status = $_POST['status'];
    $from_data = array(
        "status" => $status
    );

    $data = dbAction('listing', $operation = 2, $from_data, 'listId=' . $id . '');

    if ($data == true) {
        if ($status == 1) {
            $listing_qs = "SELECT * FROM `listing` INNER JOIN users on users.id = listing.userId INNER JOIN category ON category.id = listing.catId where listing.status = 1 AND listId = '$id' ";
            $conn = OpenCon();
            $listing_data = $conn->query($listing_qs);

            if ($listing_data->num_rows > 0) {
                $listing_row = $listing_data->fetch_assoc();
                $catId = $listing_row['catId'];
                $catSlug = $listing_row['catSlug'];
                $companySlug = $listing_row['companySlug'];
                $companyName = $listing_row['companyName'];
                $email = $listing_row['email'];
                $listId = $listing_row['listId'];
            }

            $customerEmailer = '<!DOCTYPE html>
                                    <html>
                                        <head>
                                            <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                                            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
                                        </head>
                                        <body>
                                            <p>Hi</p>
                                           <p>We`re excited that you`ve added your business profile on ' . BASE_URL . '. Your profile can be viewed here: ' . BASE_URL . $catSlug . '/' . $companySlug . '-' . $listId . '</p>
                                           <p>
                                           Now we suggest you claim your profile by verifying the contact details. Verification gives you access to our Dashboard area where you can add images, special offers, and other rich content to entice your customers! The verification service is free, fully automated and only takes a minute.
                                            </p>
                                            <p>
                                            We hope you enjoy using our service - we`re trying to make our system as easy to use and intuitive as possible so please feel free to share any feedback with us on how you think we can improve. 
                                            </p>
                                            <p>' . brand . ' Team<br/>
                                            <a href="' . BASE_URL . '">' . brand . '</a><br/>
                                            <a href="https://smallbizfinder.com">smallbizfinder.com</a><br>
                                        </p>
                                        </body>
                                    </html>';

            $subject = 'Your ' . $companyName . ' Live on ' . brand;
            $message = $customerEmailer;
            $toAddress = $email;
            $fromTitle = 'Your ' . $companyName . ' Live on ' . brand;
            $fromEmail = 'no-reply@' . $_SERVER['HTTP_HOST'];
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
        }

        echo '{"status":"success","msg":"Listing Status changed Successfully!"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
    exit();
}
?>