<?php

include_once"../../control/config.php";

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = 'product.date'; // Column name
$columnSortOrder = 'desc'; // asc or desc
$searchValue = $_POST['search']['value']; // Search value
## Search 
$searchQuery = " ";
if ($searchValue != '') {
    $searchQuery = " and ( productName like '%" . $searchValue . "%'  or  product.date like '%" . $searchValue . "%' or product.status like'%" . $searchValue . "%' ) ";
}

## Total number of records without filtering
$sel = "SELECT count(*) as allcount FROM product INNER JOIN company ON company.id = product.companyId where product.status = 0";
$sel = queryRun($sel, $debug = 3);
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = "SELECT count(*) as allcount FROM product INNER JOIN company ON company.id = product.companyId where product.status = 0 $searchQuery";
$sel = queryRun($sel, $debug = 3);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "SELECT *,product.id as productId, date_format(product.date, '%b %e %Y') as formatted_date, product.date as ldate, product.status as lstatus FROM product INNER JOIN company ON company.id = product.companyId WHERE product.status = 0 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
$empRecords = queryRun($empQuery, $debug = 3);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    if ($row['lstatus'] == 1) {
        $status = '<select class="status" id="status_' . $row['productId'] . '"><option value="1" selected>Active</option> <option value="0">Disable</option></select>';
    } else {
        $status = '<select class="status" id="status_' . $row['productId'] . '"><option value="1">Active</option> <option value="0" selected>Disable</option></select>';
    }


    $sr = '<div class="custom-checkbox custom-control" style=" display: inline-block">
            <input type="checkbox" name="check[]" id="' . $row['productId'] . '" class="row_check custom-control-input" value="' . $row['productId'] . '">
            <label class="custom-control-label" for=""></label>
            </div>';

    $sr1 = '<div class="custom-checkbox custom-control" style=" display: inline-block">
            <input type="checkbox" name="check[]" id="' . $row['productId'] . '" class="row_check custom-control-input" value="' . $row['productId'] . '">
            </div>';

    $productName = '<a href="#">' . $row['productName'] . '</a>';
    $companyName = $row['brand'];
    //$date = date('M j', strtotime($row['ldate']));
    $date = $row['formatted_date'];
    $action = '<a class="btn-primary btn action_btn" href="index.php?page=product-edit&id=' . $row['productId'] . '"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                  <a class="btn-danger btn action_btn delete-button deleteAction" id="' . $row['productId'] . '"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
                  <a class="btn-success btn action_btn approve_btn" style="display: none;" id="' . $row['productId'] . '" title="Approve this Business">A</a>';

    $data[] = array(
        "sr" => $sr,
        "productName" => $productName,
        "companyName" => $companyName,
        "date" => $date,
        "action" => $action,
    );
}
## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);
echo json_encode($response);
