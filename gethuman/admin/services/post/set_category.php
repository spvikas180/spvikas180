<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);
$catInfo = UrlClean($catName);
$catName = addslashes(trim($catName));

if (isset($_POST['add_category'])) {
    if (isset($catName)) {
        $data = dbAction('post_cat', $operation = 4, $from_data = "", " where catInfo = '$catInfo'");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"' . $catName . ' allready exist!!"}';
            exit();
        }
    }
    $from_data = array(
        "catName" => $catName,
        "catInfo" => $catInfo,
        "catMetaTitle" => $catMetaTitle,
        "catMetaKey" => $catMetaKey,
        "catMetaDesp" => $catMetaDesp,
        "catStatus" => $catStatus,
        "catIdMain" => $catIdMain,
    );
    $data = dbAction('post_cat', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Post Category Added Successfully!","page_url":"post-category"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_category'])) {
    $id = $_POST['id'];

    $from_data = array(
        "catName" => $catName,
        "catInfo" => $catInfo,
        "catMetaTitle" => $catMetaTitle,
        "catMetaKey" => $catMetaKey,
        "catMetaDesp" => $catMetaDesp,
        "catStatus" => $catStatus,
        "catIdMain" => $catIdMain,
    );

    $data = dbAction('post_cat', $operation = 2, $from_data, 'catId=' . $id . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Post Category Update Successfully!","page_url":"post-category"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>