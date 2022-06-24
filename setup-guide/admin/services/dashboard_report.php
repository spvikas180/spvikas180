<?php

//total business
$data_business = "SELECT count(*) as totalBusiness, (SELECT count(*) from company where status = 0) as disableBusiness, (SELECT count(*) from company where status = 1) as activeBusiness FROM `company`";
$data_business = queryRun($data_business, $debug = 3);
$data_business = $data_business->fetch_assoc();

//total business
$data_product = "SELECT count(*) as totalProduct, (SELECT count(*) from product where status = 0) as disableProduct, (SELECT count(*) from product where status = 1) as activeProduct FROM `product`";
$data_product = queryRun($data_product, $debug = 3);
$data_product = $data_product->fetch_assoc();


//total posts
$totalPosts = "SELECT COUNT(*) as totalPosts, (SELECT COUNT(*) from blogs where blogStatus = 1) as activePosts, (SELECT COUNT(*) from blogs where blogStatus = 0) as disablePosts FROM `blogs`";
$totalPosts = queryRun($totalPosts, $debug = 3);
$totalPosts = $totalPosts->fetch_assoc();

//total users
$totalUsers = "SELECT COUNT(*) as totalUsers, (SELECT COUNT(*) from users where status = 1) as activeUsers, (SELECT COUNT(*) from users where status = 0) as disableUsers FROM `users`";
$totalUsers = queryRun($totalUsers, $debug = 3);
$totalUsers = $totalUsers->fetch_assoc();
?>