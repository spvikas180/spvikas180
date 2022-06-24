<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    include_once"../../control/config.php";
    require '../../control/PHPMailer/PHPMailerAutoload.php';
    require '../../control/PHPMailer/class.phpmailer.php';
    if (!isset($_SESSION['adminId'])) {
        echo "<script>window.location.href='login.php';</script>";
        die();
    }
    $ip = $_SERVER['REMOTE_ADDR'];
    trim(extract($_POST));
    $email_slug = explode("@", $email);
    $email_slug = $email_slug[0];
    $nameSlug = UrlClean($name);

    if (isset($_POST['submit_btn_user'])) {

        $data = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' ");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"This email address is already registered with the system.!!"}';
            exit();
        }
//        $data = dbAction('administrator', $operation = 4, $from_data = "", " where email = '$email' ");
//        if ($data->num_rows > 0) {
//            echo '{"status":"error","msg":"This email address is already registered with the system.!!"}';
//            exit();
//        }

        $password = trim($password);
        $conf_password = trim($conf_password);
        if ((strlen($password) < 6 ) || (strlen($conf_password) < 6 )) {
            echo '{"status":"error","msg":"password and confirm password should be min 6 characters"}';
            exit();
        } else if ($password != $conf_password) {
            echo '{"status":"error","msg":"password and confirm password don`t match"}';
            exit();
        }
        $password1 = md5($password);
        $from_data = array(
            "email" => $email,
            "name" => $name,
            "ip" => $ip,
            "pwd" => $password1,
            "status" => $status,
            "userType" => $userType,
        );
        $data_user = dbAction('users', $operation = 1, $from_data);

        if ($data_user == true) {
            echo '{"status":"success","msg":"Successfully User Added!"}';
            createAccount($email, $name, $password);
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
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
            $file_path = "../../../upload/profile-pic/";
            $file_pic = $nameSlug . '-' . $id . "." . $extension;
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
                "gender" => $gender,
                "number" => $number,
                "country" => $country,
                "userType" => $userType,
                "status" => $status,
                "pic" => $upload_url
            );
        } else {
            $from_data = array(
                "name" => $name,
                "gender" => $gender,
                "number" => $number,
                "country" => $country,
                "userType" => $userType,
                "status" => $status,
            );
        }
        $data = dbAction('users', $operation = 2, $from_data, 'id=' . $id . '');
        if ($data == true) {
            echo '{"status":"success","msg":"Successfully Updated User Details!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    } else if (isset($_POST['update_user_admin'])) {
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
            $file_path = "../../../upload/profile-pic/";
            $file_pic = $nameSlug . '-' . $id . "." . $extension;
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
                "gender" => $gender,
                "number" => $number,
                "country" => $country,
                "userType" => $userType,
                "status" => $status,
                "pic" => $upload_url
            );
        } else {
            $from_data = array(
                "name" => $name,
                "gender" => $gender,
                "number" => $number,
                "country" => $country,
                "userType" => $userType,
                "status" => $status,
            );
        }
        $data = dbAction('users', $operation = 2, $from_data, 'id=' . $id . '');
        if ($data == true) {
            echo '{"status":"success","msg":"Successfully Updated Admin User Details!"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
}
?>
