<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    include_once"../admin/control/config.php";
    require '../admin/control/PHPMailer/PHPMailerAutoload.php';
    require '../admin/control/PHPMailer/class.phpmailer.php';
    if (!isset($_SESSION['userId'])) {
        echo "<script>window.location.href='login.php';</script>";
        die();
    }
    trim(extract($_POST));
    $nameSlug = UrlClean($name);
    if (isset($_POST['submit_btn_user'])) {
        
    } else if (isset($_POST['update_user'])) {
        if (isset($_FILES['logoUser']['name'])) {
            $topads = $_FILES['logoUser']['name'];
            $file_pic = preg_replace('/\s+/', '_', $topads);
            $temp = explode(".", $file_pic);
            $extension = end($temp);
            if ($extension == 'png' || $extension == 'jpeg' || $extension == 'jpg' || $extension == 'JPEG') {
                
            } else {
                echo '{"status":"error","msg":"Please image upload in jpg, png, jpeg format!"}';
                exit();
            }
            $maxsize = 204800;
            if (($_FILES['logoUser']['size'] >= $maxsize)) {
                echo '{"status":"error","msg":"File too large. File must be less than 200kb"}';
                exit();
            }
            $file_path = "../upload/profile-pic/";
            $file_pic = $nameSlug . '-' . $userId . "." . $extension;
            $upload_url = 'upload/profile-pic/' . $file_pic;
            $file_path = $file_path . basename($file_pic);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
            if (move_uploaded_file($_FILES["logoUser"]["tmp_name"], $file_path)) {
                $upload_url = $upload_url;
            }

            $tempName = $_FILES["logoUser"]["tmp_name"];
            $width = 150;
            $height = 150;
            resizeImage($tempName, $file_path, $extension, $width, $height);

            $from_data = array(
                "name" => $name,
                "number" => $number,
                "gender" => $gender,
                "country" => $country,
                "pic" => $upload_url
            );
        } else {
            $from_data = array(
                "name" => $name,
                "number" => $number,
                "gender" => $gender,
                "country" => $country,
            );
        }
        $data = dbAction('users', $operation = 2, $from_data, 'id=' . $userId . '');
        if ($data == true) {
            echo '{"status":"success","msg":"Your profile has now been updated!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
}
?>
