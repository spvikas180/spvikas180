<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}

if (isset($_FILES['logo_site']['name'])) {
    // Get Image Dimension
    $fileinfo = @getimagesize($_FILES["logo_site"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];

    $allowed_image_extension = array(
        "png"
    );
    // Get image file extension
    $file_extension = pathinfo($_FILES["logo_site"]["name"], PATHINFO_EXTENSION);

    // Validate file input to check if is with valid extension
    if (!in_array($file_extension, $allowed_image_extension)) {
        echo '{"status":"error","msg":"Upload valiid images. Only png allowed."}';
        exit();
    }
    // Validate image file size
    else if (($_FILES["logo_site"]["size"] > 204800)) {
        echo '{"status":"error","msg":"Image size exceeds 200kb"}';
        exit();
    }
    // Validate image file dimension
//        else if ($width != "200" || $height != "40") {
//            echo '{"status":"error","msg":"Image dimension should be within 230X63"}';
//            exit();
//        }
    else {
        $target = "../../../assets/img/" . 'logo' . "." . $file_extension;
        $upload_url = 'assets/img/' . 'logo' . "." . $file_extension;
        if (file_exists($target)) {
            unlink($target);
        }
        if (move_uploaded_file($_FILES["logo_site"]["tmp_name"], $target)) {
            echo '{"status":"success","msg":"Logo Successfully Uploaded!","page_url":"site-setting"}';
        } else {
            echo '{"status":"error","msg":"Problem in uploading logo files"}';
            exit();
        }
    }
} elseif (isset($_FILES['favicon_site']['name'])) {
    // Get Image Dimension
    $fileinfo = @getimagesize($_FILES["favicon_site"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];

    $allowed_image_extension = array(
        "png"
    );
    // Get image file extension
    $file_extension = pathinfo($_FILES["favicon_site"]["name"], PATHINFO_EXTENSION);

    // Validate file input to check if is with valid extension
    if (!in_array($file_extension, $allowed_image_extension)) {
        echo '{"status":"error","msg":"Upload valiid images. Only png allowed."}';
        exit();
    }
    // Validate image file size
    else if (($_FILES["favicon_site"]["size"] > 204800)) {
        echo '{"status":"error","msg":"Image size exceeds 200kb"}';
        exit();
    } else {
        $target = "../../../assets/img/" . 'favicon' . "." . $file_extension;
        $upload_url = 'assets/img/' . 'favicon' . "." . $file_extension;
        if (file_exists($target)) {
            unlink($target);
        }
        if (move_uploaded_file($_FILES["favicon_site"]["tmp_name"], $target)) {
            echo '{"status":"success","msg":"Favicon Successfully Uploaded!","page_url":"site-setting"}';
        } else {
            echo '{"status":"error","msg":"Problem in uploading logo files"}';
            exit();
        }
    }
} elseif (isset($_FILES['home_banner']['name'])) {
    // Get Image Dimension
    $fileinfo = @getimagesize($_FILES["home_banner"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];

    $allowed_image_extension = array(
        "jpg"
    );
    // Get image file extension
    $file_extension = pathinfo($_FILES["home_banner"]["name"], PATHINFO_EXTENSION);

    // Validate file input to check if is with valid extension
    if (!in_array($file_extension, $allowed_image_extension)) {
        echo '{"status":"error","msg":"Upload valiid images. Only jpd allowed."}';
        exit();
    }
    // Validate image file size
    else if (($_FILES["home_banner"]["size"] > 409600)) {
        echo '{"status":"error","msg":"Image size exceeds 400kb"}';
        exit();
    } else {
        $target = "../../../assets/img/" . 'hero' . "." . $file_extension;
        $upload_url = 'assets/img/' . 'hero' . "." . $file_extension;
        if (file_exists($target)) {
            unlink($target);
        }
        if (move_uploaded_file($_FILES["home_banner"]["tmp_name"], $target)) {
            echo '{"status":"success","msg":"Home Banner Successfully Uploaded!","page_url":"site-setting"}';
        } else {
            echo '{"status":"error","msg":"Problem in uploading logo files"}';
            exit();
        }
    }
} elseif (isset($_POST['submit_btn_home_title'])) {

    $home_title = $_POST['home_title'];
    $from_data = array(
        "home_title" => $home_title,
    );
    $data = dbAction('settings', $operation = 2, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Home Promo Text successfully updated.","page_url":"site-setting"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} elseif (isset($_POST['submit_btn_head_code'])) {
    $head_code = addslashes($_POST['head_code']);
    $from_data = array(
        "head_code" => $head_code,
    );
    $data = dbAction('settings', $operation = 2, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Head code successfully updated.","page_url":"site-setting"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} elseif (isset($_POST['status'])) {
    $status = $_POST['status'];
    $checkId = $_POST['checkId'];

    if ($checkId == 'auto_listings') {
        $from_data = array(
            "active_listings" => $status,
        );
    } elseif ($checkId == 'auto_reviews') {
        $from_data = array(
            "active_reviews" => $status,
        );
    } elseif ($checkId == 'email_active') {
        $from_data = array(
            "email_active_users" => $status,
        );
    } elseif ($checkId == 'captcha_signup') {
        $from_data = array(
            "captcha_signup" => $status,
        );
    } elseif ($checkId == 'captcha_signin') {
        $from_data = array(
            "captcha_signin" => $status,
        );
    }
    $data = dbAction('settings', $operation = 2, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Settings successfully updated.","page_url":"site-setting"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} elseif (isset($_POST['submit_btn_site_map'])) {

    if (isset($_FILES['site_map']['name'])) {
        // Get Image Dimension
        $fileinfo = @getimagesize($_FILES["site_map"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];

        $allowed_image_extension = array(
            "xml",
            "txt",
            "htaccess",
            "html"
        );
        // Get image file extension
        $file_extension = pathinfo($_FILES["site_map"]["name"], PATHINFO_EXTENSION);

        // Validate file input to check if is with valid extension
        if (!in_array($file_extension, $allowed_image_extension)) {
            echo '{"status":"error","msg":"Only xml, txt, htaccess and html file allowed."}';
            exit();
        }
        // Validate image file size
        else if (($_FILES["site_map"]["size"] > 1048576)) {
            echo '{"status":"error","msg":"Image size exceeds 1MB"}';
            exit();
        }
        $target = "../../../" . basename($_FILES["site_map"]["name"]);
        if (file_exists($target)) {
            unlink($target);
        }

        if (move_uploaded_file($_FILES["site_map"]["tmp_name"], $target)) {
            echo '{"status":"success","msg":"File Uploaded Successfully!","page_url":"logo-upload"}';
        } else {
            echo '{"status":"error","msg":"Problem in uploading files"}';
            exit();
        }
    }
} elseif (isset($_POST['submit_btn_h_color'])) {
    $headerColor = $_POST['headerColor'];
    $headerTextColor = $_POST['headerTextColor'];
    $from_data = array(
        "headerColor" => $headerColor,
        "headerTextColor" => $headerTextColor,
    );
    $data = dbAction('settings', $operation = 2, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Header color successfully updated.","page_url":"site-setting"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} elseif (isset($_POST['submit_btn_f_color'])) {
    $footerColor = $_POST['footerColor'];
    $footerTextColor = $_POST['footerTextColor'];
    $from_data = array(
        "footerColor" => $footerColor,
        "footerTextColor" => $footerTextColor,
    );
    $data = dbAction('settings', $operation = 2, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Footer color successfully updated.","page_url":"site-setting"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} elseif (isset($_POST['submit_btn_home_btn'])) {
    $btnTitle = trim($_POST['btnTitle']);
    $btnColor = trim($_POST['btnColor']);
    $btnUrl = trim($_POST['btnUrl']);
    $from_data = array(
        "btnTitle" => $btnTitle,
        "btnColor" => $btnColor,
        "btnUrl" => $btnUrl,
    );
    $data = dbAction('settings', $operation = 2, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Home Button Created successfully.","page_url":"site-setting"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>