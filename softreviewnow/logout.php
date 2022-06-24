<?php

include("admin/control/config.php");
unset($_SESSION["userid"]);
session_destroy();
echo "<script>window.location.href='" . $_SERVER['HTTP_REFERER'] . "'</script>";
?>