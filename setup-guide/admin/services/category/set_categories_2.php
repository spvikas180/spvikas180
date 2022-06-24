<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);
if ($catSlug == '') {
    $catSlug = UrlClean($catName);
} else {
    $catSlug = UrlClean($catSlug);
}

$catName = addslashes(trim($catName));
$catTitle = addslashes(trim($catTitle));
$catMetaDesc = addslashes(trim($catMetaDesc));
//$catMetaKey = addslashes(trim($catMetaKey));

if (isset($_POST['add_category'])) {

    if (isset($catSlug)) {
        $data = dbAction('category', $operation = 4, $from_data = "", " where catSlug = '$catSlug'");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"(' . $catSlug . ') category slug allready exist!!"}';
            exit();
        }
    }

    $from_data = array(
        "catName" => $catName,
        "catStatus" => $catStatus,
        "catTitle" => $catTitle,
        "catMetaDesc" => $catMetaDesc,
//        "catMetaKey" => $catMetaKey,
        "catSlug" => $catSlug,
        "catId" => $catId,
    );
    $data = dbAction('category', $operation = 1, $from_data);
    $url = '' . BASE_URL . 'category/' . $catSlug . '';
    sitemap_create_admin($url);
    if ($data == true) {
        echo '{"status":"success","msg":"Category Added Successfully!","page_url":"category"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_category'])) {
    if ($catId == $id) {
        echo '{"status":"error","msg":"Choose right category selection (Category and Parent category same)!!"}';
        exit();
    }
    $id = $_POST['id'];

    $from_data = array(
        "catName" => $catName,
        "catStatus" => $catStatus,
        "catTitle" => $catTitle,
        "catMetaDesc" => $catMetaDesc,
//        "catMetaKey" => $catMetaKey,
        "catSlug" => $catSlug,
        "catId" => $catId
    );

    $data = dbAction('category', $operation = 2, $from_data, 'id=' . $id . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Category Update Successfully!","page_url":"category"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>