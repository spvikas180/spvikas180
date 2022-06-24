<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);


if (isset($_POST['site_setting'])) {

    $site_title = addslashes(trim($site_title));
    $meta_description = addslashes(trim($meta_description));
    $site_port = addslashes(trim($site_port));
    $meta_keywords = addslashes(trim($meta_keywords));
    $site_link = addslashes(trim($site_link));
    $site_email = addslashes(trim($site_email));
    $site_phone = addslashes(trim($site_phone));
    $site_address = addslashes(trim($site_address));
    $ga_code = addslashes(trim($ga_code));
    $gm_code = addslashes(trim($gm_code));
    $tiny_code = addslashes(trim($tiny_code));
    $gr_sitekey = addslashes(trim($gr_sitekey));
    $gr_secretkey = addslashes(trim($gr_secretkey));
    $sharethis_key = addslashes(trim($sharethis_key));
//    $id = $_POST['id'];
    $from_data = array(
        "site_title" => $site_title,
        "meta_description" => $meta_description,
        "site_port" => $site_port,
        "meta_keywords" => $meta_keywords,
        "site_link" => $site_link,
        "site_email" => $site_email,
        "site_phone" => $site_phone,
        "site_link" => $site_link,
        "site_address" => $site_address,
        "ga_code" => $ga_code,
        "gm_code" => $gm_code,
        "tiny_code" => $tiny_code,
        "gr_sitekey" => $gr_sitekey,
        "gr_secretkey" => $gr_secretkey,
        "sharethis_key" => $sharethis_key,
        "bus_limt" => $bus_limt,
    );
    $data = dbAction('settings', $operation = 2, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"General settings successfully updated.","page_url":"site-setting"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} elseif (isset($_POST['social_setting'])) {

    $fb_page = addslashes(trim($fb_page));
    $twitter_link = addslashes(trim($twitter_link));
    $pinterest_link = addslashes(trim($pinterest_link));
    $google_pluse_link = addslashes(trim($google_pluse_link));

    $from_data = array(
        "fb_page" => $fb_page,
        "twitter_link" => $twitter_link,
        "pinterest_link" => $pinterest_link,
        "google_pluse_link" => $google_pluse_link,
    );
    $data = dbAction('settings', $operation = 2, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Social Links successfully updated.","page_url":"site-setting"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>