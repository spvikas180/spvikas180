<?php

include("../admin/control/config.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    require '../admin/control/PHPMailer/PHPMailerAutoload.php';
    require '../admin/control/PHPMailer/class.phpmailer.php';
    extract($_POST);
    $ip = $_SERVER['REMOTE_ADDR'];
    $companySlug = UrlClean($userCompany);
    if (isset($_POST['reg_pass'])) {

        $str = $userWebsite;
        if (strpos($str, 'www.') !== false) {
            echo '{"status":"error","msg":"Please enter valid domain name. Domain must be without www, http, and https. Like (google.com)"}';
            exit();
        }

        $re = '/^(?!\-)(?:(?:[a-zA-Z\d][a-zA-Z\d\-]{0,61})?[a-zA-Z\d]\.){1,126}(?!\d+)[a-zA-Z\d]{1,63}$/m';
        if (preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0) == false) {
            echo '{"status":"error","msg":"Please enter valid domain name. Domain must be without www, http, and https. Like (google.com)"}';
            exit();
        }

        $data_list = dbAction('listing', $operation = 4, $from_data = "", " where website = '$userWebsite' ");
        if ($data_list->num_rows > 0) {
            echo '{"status":"error","msg":"Sorry, it looks like this website has already been claimed.!!"}';
            exit();
        }
        $data = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' ");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"This work email address is already registered with the system.!!"}';
            exit();
        }
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
            "status" => 1,
            "number" => $number,
            "country" => $country,
            "userType" => 1
        );
        $data_user = dbAction('users', $operation = 1, $from_data);
        if ($data_user == true) {
            $data_user = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' ");
            $user_row = $data_user->fetch_assoc();
            $_SESSION['userId'] = $user_row['id'];

            $from_data_listing = array(
                "website" => $userWebsite,
                "companyName" => $userCompany,
                "companySlug" => $companySlug,
                "catId" => $catId,
//                "subCatId" => $subCatId,
                "userId" => $_SESSION['userId']
            );
            $data_listing = dbAction('listing', $operation = 1, $from_data_listing);

            $url = '' . BASE_URL . 'review/' . $userWebsite . '';
            sitemap_create($url);

            echo '{"status":"success","msg":"Thanks for signing up!","url":"' . BASE_URL . 'user"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please try again!"}';
        }
    } elseif (isset($_POST['reg_email'])) {

        $str = $userWebsite;
        if (strpos($str, 'www.') !== false) {
            echo '{"status":"error","msg":"Please enter valid domain name. Domain must be without www, http, and https. Like (google.com)"}';
            exit();
        }

        $re = '/^(?!\-)(?:(?:[a-zA-Z\d][a-zA-Z\d\-]{0,61})?[a-zA-Z\d]\.){1,126}(?!\d+)[a-zA-Z\d]{1,63}$/m';
        if (preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0) == false) {
            echo '{"status":"error","msg":"Please enter valid domain name. Domain must be without www, http, and https. Like (google.com)"}';
            exit();
        }

        $data_list = dbAction('listing', $operation = 4, $from_data = "", " where website = '$userWebsite' ");
        if ($data_list->num_rows > 0) {
            echo '{"status":"error","msg":"Sorry, it looks like this website has already been claimed.!!"}';
            exit();
        }
        $data = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' AND status = 1");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"This work email address is already registered with the system.!!"}';
            exit();
        }
        $data = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' AND status = 0");
        if ($data->num_rows > 0) {
            activationEmail($email);
            echo '{"status":"success","msg":"Thanks for signing up. Please check your email to activate your account. Give it a few minutes, and don’t forget to check your spam folder."}';
        } else {
            $from_data = array(
                "email" => $email,
                "name" => $name,
                "ip" => $ip,
                "status" => 0,
                "number" => $number,
                "country" => $country,
                "userType" => 1
            );
            $data_user = dbAction('users', $operation = 1, $from_data);
            if ($data_user == true) {
                activationEmail($email, $name);

                $data_user = dbAction('users', $operation = 4, $from_data = "", " where email = '$email' ");
                $user_row = $data_user->fetch_assoc();
                $userId = $user_row['id'];
                $from_data_listing = array(
                    "website" => $userWebsite,
                    "companyName" => $userCompany,
                    "companySlug" => $companySlug,
                    "catId" => $catId,
//                    "subCatId" => $subCatId,
                    "userId" => $userId
                );
                $data_listing = dbAction('listing', $operation = 1, $from_data_listing);
                
                $url = '' . BASE_URL . 'review/' . $userWebsite . '';
                sitemap_create($url);
                echo '{"status":"success","msg":"Thanks for signing up. Please check your email to activate your account. Give it a few minutes, and don’t forget to check your spam folder.","url":"login"}';
            } else {
                echo '{"status":"error","msg":"Error in server, please try again!"}';
            }
        }
    }
}
?>