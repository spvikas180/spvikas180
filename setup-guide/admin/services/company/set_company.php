<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
trim(extract($_POST)); 
$industryId = trim($industryId);
$ip = $_SERVER['REMOTE_ADDR'];

$companySlug = UrlClean($brand);
$companyName = addslashes(trim($companyName));
$brand = addslashes(trim($brand));
$previousName = addslashes(trim($previousName));
$industryId = addslashes(trim($industryId));
$incorporationDate = addslashes(trim($incorporationDate));
$founder = addslashes(trim($founder));
$ceo = addslashes(trim($ceo));
$totalWorth = addslashes(trim($totalWorth));
$totalUsers = addslashes(trim($totalUsers));
$monthlyActiveUsers = addslashes(trim($monthlyActiveUsers));
$website = addslashes(trim($website));
$headQuarter = addslashes(trim($headQuarter));
$number = addslashes(trim($number));
$address = addslashes(trim($address));
$history = addslashes(trim($history));
$listProducts = addslashes(trim($listProducts));
$currentStage = addslashes(trim($currentStage));
$competitorAnalysis = addslashes(trim($competitorAnalysis));
$facebook = addslashes(trim($facebook));
$twitter = addslashes(trim($twitter));
$linktree = addslashes(trim($linktree));
$instagram = addslashes(trim($instagram));
$linkedIn = addslashes(trim($linkedIn));
$status = addslashes(trim($status));


if ($industryId == '0' || $industryId == '') {
    echo '{"status":"error","msg":"Please choose industry!"}';
    exit();
}


if (isset($_POST['add_business'])) {
    
    $from_data = array(
        "brand" => $brand,
        "companyName" => $companyName,
        "companySlug" => $companySlug,
        "industryId" => $industryId,
        "previousName" => $previousName,
        "industryId" => $industryId,
        "incorporationDate" => $incorporationDate,
        "founder" => $founder,
        "ceo" => $ceo,
        "totalWorth" => $totalWorth,
        "totalUsers" => $totalUsers,
        "monthlyActiveUsers" => $monthlyActiveUsers,
        "website" => $website,
        "headQuarter" => $headQuarter,
        "number" => $number,
        "address" => $address,
        "history" => $history,
        "listProducts" => $listProducts,
        "currentStage" => $currentStage,
        "competitorAnalysis" => $competitorAnalysis,
        "facebook" => $facebook,
        "twitter" => $twitter,
        "linktree" => $linktree,
        "instagram" => $instagram,
        "linkedIn" => $linkedIn,
        "status" => $status
    );
    $data = dbAction('company', $operation = 1, $from_data);

    if ($data == true) {

            $data_get = dbAction('company', $operation = 4, $from_data = "", " where companySlug = '$companySlug'");
            $company_data_row = $data_get->fetch_assoc();
            $companyId = $company_data_row['id'];

        // Faqs added
            if (!empty($faq_title)) {
                for ($i = 0; $i < count($faq_title); $i ++) {
                    $from_data_faq = array(
                        "faq_title" => $faq_title[$i],
                        "faq_des" => $faq_des[$i],
                        "companyId" => $companyId,
                    );
                    $data_faq = dbAction('faq', $operation = 1, $from_data_faq);
                }
            }

        echo '{"status":"success","msg":"Company Added Successfully!","page_url":"add-businesses"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_business'])) {
    $id = $_POST['id'];

       $from_data = array(
        "brand" => $brand,
        "companyName" => $companyName,
        "companySlug" => $companySlug,
        "industryId" => $industryId,
        "previousName" => $previousName,
        "industryId" => $industryId,
        "incorporationDate" => $incorporationDate,
        "founder" => $founder,
        "ceo" => $ceo,
        "totalWorth" => $totalWorth,
        "totalUsers" => $totalUsers,
        "monthlyActiveUsers" => $monthlyActiveUsers,
        "website" => $website,
        "headQuarter" => $headQuarter,
         "number" => $number,
        "address" => $address,
        "history" => $history,
        "listProducts" => $listProducts,
        "currentStage" => $currentStage,
        "competitorAnalysis" => $competitorAnalysis,
        "facebook" => $facebook,
        "twitter" => $twitter,
        "linktree" => $linktree,
        "instagram" => $instagram,
        "linkedIn" => $linkedIn,
        "status" => $status
    );
   
    $data = dbAction('company', $operation = 2, $from_data, 'id=' . $id . '');
    if ($data == true) {

         // Faqs added
        $data_dfaq = dbAction('faq', $operation = 3, $from_data, 'companyId=' . $id . '');
        if (!empty($faq_title)) {
            for ($i = 0; $i < count($faq_title); $i ++) {
                $from_data_faq = array(
                    "faq_title" => $faq_title[$i],
                    "faq_des" => $faq_des[$i],
                    "companyId" => $id,
                );
                $data_faq = dbAction('faq', $operation = 1, $from_data_faq);
            }
        }

        echo '{"status":"success","msg":"Company Update Successfully!","page_url":"approve-businesses"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?> 
