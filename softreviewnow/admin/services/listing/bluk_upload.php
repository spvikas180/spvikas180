<?php

if (isset($_POST['sb_csv'])) {

    include_once"../../control/config.php";
    if (!isset($_SESSION['adminId'])) {
        echo "<script>window.location.href='login.php';</script>";
        die();
    }

    extract($_POST);
    $allowed_image_extension = array(
        "csv"
    );
// Get image file extension
    $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
// Validate file input to check if is with valid extension
    if (!in_array($file_extension, $allowed_image_extension)) {
        echo '{"status":"error","msg":"Upload valid File. Only csv file allowed."}';
        exit();
    }
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");
    $c = 0;
    fgetcsv($handle);
    $duplicate = 0;
    $success = 0;
    while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {

        $website = addslashes(trim($filesop[0]));
        $website = get_domain($website);

        $companyName = addslashes(trim($filesop[1]));
        $latitude = addslashes(trim($filesop[2]));
        $longitude = addslashes(trim($filesop[3]));
        $address = addslashes(trim($filesop[4]));
        $catName = addslashes(trim($filesop[5]));
        $number = addslashes(trim($filesop[6]));
        $email = addslashes(trim($filesop[7]));
        $description = addslashes(trim($filesop[8]));


        $cat_data = dbAction("category", $operation = 4, $form_data = "", "catName='$catName'");
        if ($cat_data->num_rows > 0) {
            $cat_edit_row = $cat_data->fetch_assoc();
            $catId = $cat_edit_row['id'];
        } else {
            $catSlug = UrlClean($catName);
            $from_data = array(
                "catName" => $catName,
                "catStatus" => 1,
                "catSlug" => $catSlug,
            );
            $data = dbAction('category', $operation = 1, $from_data);

            $url = '' . BASE_URL . 'category/' . $catSlug . '';
            sitemap_create_admin($url);

            $table_name = 'category';
            $lastId = lastId($table_name);
            $catId = $lastId['id'];
        }

        $data_list = dbAction('listing', $operation = 4, $from_data = "", " where website = '$website' ");
        if ($data_list->num_rows > 0) {
            $duplicate++;
        } else {
            $from_data = array(
                "website" => $website,
                "companyName" => $companyName,
                "address" => $address,
                "catId" => $catId,
                "number" => $number,
                "email" => $email,
                "userId" => $userId,
                "description" => $description,
                "status" => 1,
            );
            $data = dbAction('listing', $operation = 1, $from_data);
            $url = '' . BASE_URL . 'reviews/' . $website . '';
            sitemap_create_admin($url);
            $success++;
        }
    }
    if (@$data == true) {
        echo '{"status":"success","msg":"Business successfully added.","duplicate":"' . $duplicate . '","insert":"' . $success . '"}';
    } else {
        echo '{"status":"error","msg":"All Business duplicate","duplicate":"' . $duplicate . '","insert":"' . $success . '"}';
    }
}
?> 