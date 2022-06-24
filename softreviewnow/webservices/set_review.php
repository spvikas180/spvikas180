<?php

include_once"../admin/control/config.php";
include("../temp/site-settings.php");
if ($site_settings['active_reviews'] == 1) {
    $status = 1;
} else {
    $status = 0;
}
trim(extract($_POST));
if (isset($_POST['add_review'])) {
    if ($listuserId == $_SESSION['userId']) {
        echo '{"status":"error","msg":"You can`t perform this action on you own Business"}';
        exit();
    }
    $review = addslashes(trim($review));
    $subject = addslashes(trim($subject));
    $from_data = array(
        "userId" => $userId,
        "listId" => $listId,
        "rating" => $rating,
        "review" => $review,
        "subject" => $subject,
        "previewId" => $previewId,
        "status" => $status
    );
    $data = dbAction('rating_review', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Review Added Successfully!"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_review'])) {
    $review = addslashes(trim($review));
    $subject = addslashes(trim($subject));
    $reviewId = $_POST['id'];
    $from_data = array(
        "rating" => $rating,
        "review" => $review,
        "subject" => $subject,
        "status" => $status
    );
    $data = dbAction('rating_review', $operation = 2, $from_data, ' reviewId=' . $reviewId . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Review Successfully Updated!"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} elseif (isset($_POST['deleteId'])) {
    $id = $_POST['deleteId'];
    $data = dbAction('rating_review', $operation = 3, $from_data = "", ' reviewId=' . $id . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Review Delete Successfully!"}';
    } else {
        echo '{"status":"error", "msg":"Error in server, please contact admin!"}';
    }
}
?>
