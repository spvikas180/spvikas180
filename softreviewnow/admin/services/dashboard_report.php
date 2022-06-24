<?php

//total business
$data_business = "SELECT count(*) as totalBusiness, (SELECT count(*) from listing where status = 0) as disableBusiness, (SELECT count(*) from listing where status = 1) as activeBusiness FROM `listing`";
$data_business = queryRun($data_business, $debug = 3);
$data_business = $data_business->fetch_assoc();


//total reviews
$data_review = "SELECT COUNT(*) as totalReview, (SELECT COUNT(*) from rating_review where status = 1) as activeReview, (SELECT COUNT(*) from rating_review where status = 0) as disableReview FROM `rating_review`";
$data_review = queryRun($data_review, $debug = 3);
$data_review = $data_review->fetch_assoc();

//total posts
$totalPosts = "SELECT COUNT(*) as totalPosts, (SELECT COUNT(*) from blogs where blogStatus = 1) as activePosts, (SELECT COUNT(*) from blogs where blogStatus = 0) as disablePosts FROM `blogs`";
$totalPosts = queryRun($totalPosts, $debug = 3);
$totalPosts = $totalPosts->fetch_assoc();

//total users
$totalUsers = "SELECT COUNT(*) as totalUsers, (SELECT COUNT(*) from users where status = 1) as activeUsers, (SELECT COUNT(*) from users where status = 0) as disableUsers FROM `users`";
$totalUsers = queryRun($totalUsers, $debug = 3);
$totalUsers = $totalUsers->fetch_assoc();
?>