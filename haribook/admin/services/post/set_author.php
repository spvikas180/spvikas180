<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);
$authorName = addslashes(trim($authorName));

if (isset($_POST['add_category'])) {
    if (isset($catName)) {
        $data = dbAction('author', $operation = 4, $from_data = "", " where authorName = '$authorName'");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"' . $authorName . ' allready exist!!"}';
            exit();
        }
    }
    $from_data = array(
        "authorName" => $authorName,
        "authorStatus" => $authorStatus,
    );
    $data = dbAction('author', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Author Added Successfully!","page_url":"author"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_category'])) {
    $id = $_POST['id'];
    $from_data = array(
        "authorName" => $authorName,
        "authorStatus" => $authorStatus,
    );
    $data = dbAction('author', $operation = 2, $from_data, 'authorId  =' . $id . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Author Update Successfully!","page_url":"author"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>