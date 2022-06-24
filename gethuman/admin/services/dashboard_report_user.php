<?php

$userId = $_GET['id'];
$users = dbAction("users", $operation = 4, $form_data = "", "id = $userId");
$users_data = $users->fetch_assoc();


//total business
$data_business = "SELECT count(*) as totalBusiness, (SELECT count(*) from listing where status = 0 AND userId = '$userId') as disableBusiness, (SELECT count(*) from listing where status = 1 AND userId = '$userId') as activeBusiness FROM `listing` where userId = '$userId'";
$data_business = queryRun($data_business, $debug = 3);
$data_business = $data_business->fetch_assoc();

//total reviews
$data_review = "SELECT COUNT(*) as totalReview, (SELECT COUNT(*) from rating_review where status = 1 AND userId = '$userId') as activeReview, (SELECT COUNT(*) from rating_review where status = 0 AND userId = '$userId') as disableReview FROM `rating_review` where userId = '$userId'";
$data_review = queryRun($data_review, $debug = 3);
$data_review = $data_review->fetch_assoc();

$country = $users_data['country'];
$countries_data_user = dbAction("countries", $operation = 4, $form_data = "", "id = $country");
$countries_data_user = $countries_data_user->fetch_assoc();
?>