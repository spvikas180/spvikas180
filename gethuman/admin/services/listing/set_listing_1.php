<?php

include '../../functions.php';
if (!isset($_SESSION['id'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
trim(extract($_POST));
$description = trim($description);
$description = addslashes($description);
$companySlug = UrlClean($companyName);
$companyName = trim($companyName);
if ($catId == '0' || $catId == '') {
    echo '{"status":"error","msg":"Please choose profile category!"}';
    exit();
}

if (isset($_POST['add_category'])) {

    if (isset($_FILES['logo']['name'])) {
        $topads = $_FILES['logo']['name'];
        $file_pic = preg_replace('/\s+/', '_', $topads);
        $temp = explode(".", $file_pic);
        $extension = end($temp);
        if ($extension == 'png' || $extension == 'jpeg' || $extension == 'jpg' || $extension == 'svg' || $extension == 'JPEG') {
            
        } else {
            echo '{"status":"error","msg":"Please image upload in jpg, png, jpeg, svg format!"}';
            exit();
        }
        $file_path = "../../../upload/listing/";
        $file_pic = $temp[0] . "." . $extension;
        $upload_url = 'upload/listing/' . $file_pic;
        $file_path = $file_path . basename($file_pic);
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        if (move_uploaded_file($_FILES["logo"]["tmp_name"], $file_path)) {
            $upload_url = $upload_url;
        }
        chmod("$file_path", 0777);
    } else {
        $upload_url = '';
    }


    $from_data = array(
        "logo" => $upload_url,
        "companyName" => $companyName,
        "companySlug" => $companySlug,
        "catId" => $catId,
        "userId" => $userId,
        "address" => $address,
        "description" => $description,
        "country" => $country,
        "state" => $state,
        "city" => $city,
        "zipcode" => $zipcode,
        "number" => $number,
        "otherNumber" => $otherNumber,
        "fax" => $fax,
        "email" => $email,
        "website" => $website,
        "number" => $number,
        "status" => $status,
        "userStatus" => 1
    );
    $data = dbAction('listing', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Listing Added Successfully!","page_url":"add-listing"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_category'])) {
    $id = $_POST['id'];

    if (isset($_FILES['logo']['name'])) {
        $topads = $_FILES['logo']['name'];
        $file_pic = preg_replace('/\s+/', '_', $topads);
        $temp = explode(".", $file_pic);
        $extension = end($temp);
        if ($extension == 'png' || $extension == 'jpeg' || $extension == 'jpg' || $extension == 'svg' || $extension == 'JPEG') {
            
        } else {
            echo '{"status":"error","msg":"Please image upload in jpg, png, jpeg, svg format!"}';
            exit();
        }
        $file_path = "../../../upload/listing/";
        $file_pic = $temp[0] . "." . $extension;
        $upload_url = 'upload/listing/' . $file_pic;
        $file_path = $file_path . basename($file_pic);
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        if (move_uploaded_file($_FILES["logo"]["tmp_name"], $file_path)) {
            $upload_url = $upload_url;
        }
        chmod("$file_path", 0777);

        $from_data = array(
            "logo" => $upload_url,
            "companyName" => $companyName,
            "companySlug" => $companySlug,
            "catId" => $catId,
//            "userId" => $userId,
            "address" => $address,
            "description" => $description,
            "country" => $country,
            "state" => $state,
            "city" => $city,
            "zipcode" => $zipcode,
            "number" => $number,
            "otherNumber" => $otherNumber,
            "fax" => $fax,
            "email" => $email,
            "website" => $website,
            "number" => $number,
            "status" => $status
        );
        $data = dbAction('listing', $operation = 2, $from_data, 'listId=' . $id . '');
    } else {
        $from_data = array(
            "companyName" => $companyName,
            "companySlug" => $companySlug,
            "catId" => $catId,
//            "userId" => $userId,
            "address" => $address,
            "description" => $description,
            "country" => $country,
            "state" => $state,
            "city" => $city,
            "zipcode" => $zipcode,
            "number" => $number,
            "otherNumber" => $otherNumber,
            "fax" => $fax,
            "email" => $email,
            "website" => $website,
            "number" => $number,
            "status" => $status
        );
    }
    $data = dbAction('listing', $operation = 2, $from_data, 'listId=' . $id . '');
    if ($data == true) {

        if ($status == 1) {

            require '../../PHPMailer/PHPMailerAutoload.php';
            require '../../PHPMailer/class.phpmailer.php';

            $listing_qs = "SELECT * FROM `listing` INNER JOIN users on users.id = listing.userId where listing.status = 1 AND listId = '$id' ";
            $conn = OpenCon();
            $listing_data = $conn->query($listing_qs);
            if ($listing_data->num_rows > 0) {
                $listing_row = $listing_data->fetch_assoc();
                $companySlug = $listing_row['companySlug'];
                $companyName = $listing_row['companyName'];
                $email = $listing_row['email'];
            }
            $customerEmailer = '<!DOCTYPE html>
                                    <html>
                                        <head>
                                            <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                                            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
                                        </head>
                                        <body>
                                            <p>Hi</p>
                                            <p>We`re excited that you`ve added your business profile on www.smallbizfinder.com. Your profile can be viewed here: http://www.smallbizfinder.com/user/</p>
                                           <p>
                                           Now we suggest you claim your profile by verifying the contact details. Verification gives you access to our Dashboard area where you can add images, special offers, and other rich content to entice your customers! The verification service is free, fully automated and only takes a minute.
                                            </p>
                                            <p>
                                            We hope you enjoy using our service - we`re trying to make our system as easy to use and intuitive as possible so please feel free to share any feedback with us on how you think we can improve. 
                                            </p>
                                            <p>haribook Team<br/>
                                                <a href="http://www.smallbizfinder.com/">www.smallbizfinder.com</a><br/>
                                                The FREE directory that ANYONE can edit<br/>
                                                <a href="http://www.smallbizfinder.com/">www.smallbizfinder.com</a>
                                            </p>
                                        </body>
                                    </html>';

            $subject = 'Your ' . $companyName . ' Live on haribook';
            $message = $customerEmailer;
            $toAddress = $email;
            $fromTitle = 'Your ' . $companyName . ' Live on haribook';
            $fromEmail = 'no-reply@smallbizfinder.com';
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


        echo '{"status":"success","msg":"Listing Update Successfully!","page_url":"all-listing"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>
