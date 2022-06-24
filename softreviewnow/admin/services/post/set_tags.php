<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);
$tagTitleInfo = UrlClean($tagTitle);
$tagTitle = addslashes(trim($tagTitle));

if (isset($_POST['add_category'])) {
    if (isset($catName)) {
        $data = dbAction('tags', $operation = 4, $from_data = "", " where tagTitleInfo = '$tagTitleInfo'");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"' . $tagTitle . ' allready exist!!"}';
            exit();
        }
    }
    $from_data = array(
        "tagTitle" => $tagTitle,
        "tagTitleInfo" => $tagTitleInfo,
        "tagStatus" => $tagStatus,
    );
    $data = dbAction('tags', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Tag Added Successfully!","page_url":"tags"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_category'])) {
    $id = $_POST['id'];
    $from_data = array(
        "tagTitle" => $tagTitle,
        "tagTitleInfo" => $tagTitleInfo,
        "tagStatus" => $tagStatus,
    );
    $data = dbAction('tags', $operation = 2, $from_data, 'tagId =' . $id . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Tags Update Successfully!","page_url":"tags"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>