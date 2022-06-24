<?php
include('control/config.php');
unset($_SESSION["adminId"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
session_destroy();
echo "<script>window.location.href='" . constant("BASE_URL") . constant("BASE_URL_ADMIN") . "login.php'</script>";
?>