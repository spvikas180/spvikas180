<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
trim(extract($_POST));
$review = trim($review);
$review = addslashes($review);

if (isset($_POST['add_review'])) {
    $from_data = array(
        "rating" => $rating,
        "review" => $review,
        "status" => $status
    );
    $data = dbAction('rating_review', $operation = 1, $from_data);
    if ($data == true) {
        echo '{"status":"success","msg":"Review Added Successfully!","page_url":"active-review"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_review'])) {
    $reviewId = $_POST['id'];
    $from_data = array(
        "rating" => $rating,
        "review" => $review,
        "status" => $status
    );
    $data = dbAction('rating_review', $operation = 2, $from_data, ' reviewId=' . $reviewId . '');
    if ($data == true) {
        echo '{"status":"success","msg":"Review Successfully Updated!"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>
