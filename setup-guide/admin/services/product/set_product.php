<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
trim(extract($_POST)); 
$ip = $_SERVER['REMOTE_ADDR'];

$productSlug = UrlClean($productName);
$productName = addslashes(trim($productName));
$companyId = addslashes(trim($companyId));
$productDesp = addslashes(trim($productDesp));

$btn1Name = addslashes(trim($btn1Name));
$btn1Url = addslashes(trim($btn1Url));
$btn1BgColor = addslashes(trim($btn1BgColor));

$btn2Name = addslashes(trim($btn2Name));
$btn2Url = addslashes(trim($btn2Url));
$btn2BgColor = addslashes(trim($btn2BgColor));

$btn3Name = addslashes(trim($btn3Name));
$btn3Url = addslashes(trim($btn3Url));
$btn3BgColor = addslashes(trim($btn3BgColor));

$status = addslashes(trim($status));


if (isset($_POST['add_business'])) {

    $data = dbAction('product', $operation = 4, $from_data = "", " where productSlug = '$productSlug' ");
        if ($data->num_rows > 0) {
            echo '{"status":"error","msg":"This Product is already registered with the system.!!"}';
            exit();
        }
    
    $from_data = array(
        "productSlug" => $productSlug,
        "productName" => $productName,
        "companyId" => $companyId,
        "productDesp" => $productDesp,
        "btn1Name" => $btn1Name,
        "btn1Url" => $btn1Url,
        "btn1BgColor" => $btn1BgColor,
        "btn2Name" => $btn2Name,
        "btn2Url" => $btn2Url,
        "btn2BgColor" => $btn2BgColor,
        "btn3Name" => $btn3Name,
        "btn3Url" => $btn3Url,
        "btn3BgColor" => $btn3BgColor,
        "status" => $status
    );
    $data = dbAction('product', $operation = 1, $from_data);

    if ($data == true) {

            $data_get = dbAction('product', $operation = 4, $from_data = "", " where productSlug = '$productSlug'");
            $product_data_row = $data_get->fetch_assoc();
            $productId = $product_data_row['id'];

        // Faqs added
            if (!empty($faq_title)) {
                for ($i = 0; $i < count($faq_title); $i ++) {
                    $from_data_faq = array(
                        "faq_title" => $faq_title[$i],
                        "faq_des" => $faq_des[$i],
                        "productId" => $productId,
                    );
                    $data_faq = dbAction('faq', $operation = 1, $from_data_faq);
                }
            }

             // issue resolve added
            if (!empty($title)) {
                for ($i = 0; $i < count($title); $i ++) {
                    $from_data_reslove = array(
                        "title" => $title[$i],
                        "issueStatus" => $issueStatus[$i],
                        "productId" => $productId,
                    );
                    $data_resolve = dbAction('issue_resolve', $operation = 1, $from_data_reslove);
                }
            }

             // quation answer added
            if (!empty($quation)) {
                for ($i = 0; $i < count($quation); $i ++) {
                    $from_data_qua_ans = array(
                        "quation" => $quation[$i],
                        "answer" => $answer[$i],
                        "productId" => $productId,
                    );
                    $data_resolve = dbAction('quation_answer', $operation = 1, $from_data_qua_ans);
                }
            }

        echo '{"status":"success","msg":"Product Added Successfully!","page_url":"product-add"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_business'])) {
    $id = $_POST['id'];

      $from_data = array(
        "productSlug" => $productSlug,
        "productName" => $productName,
        "companyId" => $companyId,
        "productDesp" => $productDesp,
        "btn1Name" => $btn1Name,
         "btn1Url" => $btn1Url,
        "btn1BgColor" => $btn1BgColor,
        "btn2Name" => $btn2Name,
        "btn2Url" => $btn2Url,
        "btn2BgColor" => $btn2BgColor,
        "btn3Name" => $btn3Name,
        "btn3Url" => $btn3Url,
        "btn3BgColor" => $btn3BgColor,
        "status" => $status
    );
   
    $data = dbAction('product', $operation = 2, $from_data, 'id=' . $id . '');
    if ($data == true) {

         // Faqs added
        $data_dfaq = dbAction('faq', $operation = 3, $from_data, 'productId=' . $id . '');
        if (!empty($faq_title)) {
            for ($i = 0; $i < count($faq_title); $i ++) {
                $from_data_faq = array(
                    "faq_title" => $faq_title[$i],
                    "faq_des" => $faq_des[$i],
                    "productId" => $id,
                );
                $data_faq = dbAction('faq', $operation = 1, $from_data_faq);
            }
        }

         // issue resolve added
        $data_dresolve = dbAction('issue_resolve', $operation = 3, $from_data, 'productId=' . $id . '');
            if (!empty($title)) {
                for ($i = 0; $i < count($title); $i ++) {
                    $from_data_reslove = array(
                        "title" => $title[$i],
                         "issueStatus" => $issueStatus[$i],
                        "productId" => $id,
                    );
                    $data_resolve = dbAction('issue_resolve', $operation = 1, $from_data_reslove);
                }
            }


              // quation answer added
            $data_qua_ans = dbAction('quation_answer', $operation = 3, $from_data, 'productId=' . $id . '');
            if (!empty($quation)) {
                for ($i = 0; $i < count($quation); $i ++) {
                    $from_data_qua_ans = array(
                        "quation" => $quation[$i],
                        "answer" => $answer[$i],
                        "productId" => $id,
                    );
                    $data_qua_ans_add = dbAction('quation_answer', $operation = 1, $from_data_qua_ans);
                }
            }

        echo '{"status":"success","msg":"Product Update Successfully!","page_url":"product-approve"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?> 
