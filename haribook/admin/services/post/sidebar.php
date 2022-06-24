<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);

if (isset($_POST['submit_btn_ads_blog'])) {
    $showLatest = addslashes(trim($showLatest));
    $showPage = addslashes(trim($showPage));
    $adsCode = addslashes(trim($adsCode));
    $ad_client_key = addslashes(trim($ad_client_key));
    $ad_slot_key = addslashes(trim($ad_slot_key));

    $from_data = array(
        "adsCode" => $adsCode,
        "showPage" => $showPage,
        "showLatest" => $showLatest,
        "ad_client_key" => $ad_client_key,
        "ad_slot_key" => $ad_slot_key,
        "status" => $status,
        "adsCode" => $adsCode,
        "mainAdsCode" => $mainAdsCode,
    );
//    print_r($from_data);
    $data = dbAction('sidebar_setting', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Blog Sidebar successfully Added.","page_url":"' . $url . '"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} elseif (isset($_POST['submit_btn_ads_blog_update'])) {
    $showLatest = addslashes(trim($showLatest));
    $showPage = addslashes(trim($showPage));
    $adsCode = addslashes(trim($adsCode));
    $ad_client_key = addslashes(trim($ad_client_key));
    $ad_slot_key = addslashes(trim($ad_slot_key));
    $id = $_POST['id'];
    $from_data = array(
        "adsCode" => $adsCode,
        "showPage" => $showPage,
        "showLatest" => $showLatest,
        "ad_client_key" => $ad_client_key,
        "ad_slot_key" => $ad_slot_key,
        "status" => $status,
        "adsCode" => $adsCode,
        "mainAdsCode" => $mainAdsCode,
    );
//    print_r($from_data);
    $data = dbAction('sidebar_setting', $operation = 2, $from_data, "id=$id");
    if ($data == true) {
        echo '{"status":"success","msg":"Blog Sidebar successfully Updated.","page_url":"' . $url . '"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>

