<?php
$form_data = http_build_query($_POST);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://flightking.online/flight/test-style-1.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $form_data);
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close ($ch);
?>



