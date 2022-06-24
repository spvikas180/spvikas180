<?php

$site_setting_data = dbAction("settings", $operation = 4, $form_data = "", "id!= 0 order by id desc Limit 1");
$site_settings = $site_setting_data->fetch_assoc();

function siteURL() {
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
            $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    return $protocol;
}

if ($site_settings['site_link'] != '' AND ! empty($site_settings['site_link'])) {
    if ($site_settings['site_port'] != siteURL()) {
        $site_port = $site_settings['site_port'];
        $site_link = $site_settings['site_link'];
//        header("location:" . $site_settings['site_port'] . $site_settings['site_link']);
    }
}


if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
    $users = dbAction("users", $operation = 4, $form_data = "", "id = $userId");
    $users_data = $users->fetch_assoc();
}

$countries_data = dbAction("countries", $operation = 4, $form_data = "");
?>