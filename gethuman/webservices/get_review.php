<?php

if (isset($_POST['id'])) {
    include_once"../admin/control/config.php";
    extract($_POST);
    $id = $_POST['id'];
    $userId = $_SESSION['userId'];
    $data = "SELECT *,rating_review.status as rstatus,date_format(rating_review.date, '%b %e %Y') as formatted_date,users.email as uemail FROM `rating_review`"
            . " INNER JOIN users on rating_review.userId = users.id"
            . " INNER join listing on listing.listId = rating_review.listId where rating_review.reviewId  = $id";
    $data = queryRun($data, $debug = 3);
    $my_array = array();
    if ($data->num_rows > 0) {
        while ($row = $data->fetch_assoc()) {
            $my_array[] = $row;
        }
    }
    $data_json = json_encode($my_array);
    print_r($data_json);
}
?>
