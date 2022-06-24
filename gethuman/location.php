<?php

// PHP code to extract IP  

function getVisIpAddr() {

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$vis_ip = getVisIPAddr();

$ip = $vis_ip;
$ipdat = @json_decode(file_get_contents(
                        "http://www.geoplugin.net/json.gp?ip=" . $ip));

 $country = $ipdat->geoplugin_countryName;


if ($country != 'United States' && $country != 'Canada' && $country != 'Australia' && $country != 'United Kingdom') {
    header("location:https://" . $_SERVER['HTTP_HOST']);
}
?> 