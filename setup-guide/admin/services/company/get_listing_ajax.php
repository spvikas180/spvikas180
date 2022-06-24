<?php

include_once"../../control/config.php";

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = 'company.date'; // Column name
$columnSortOrder = 'desc'; // asc or desc
$searchValue = $_POST['search']['value']; // Search value
## Search 
$searchQuery = " ";
if ($searchValue != '') {
    $searchQuery = " and ( companyName like '%" . $searchValue . "%'  or  company.date like '%" . $searchValue . "%' or company.status like'%" . $searchValue . "%' ) ";
}

## Total number of records without filtering
$sel = "SELECT count(*) as allcount FROM company INNER JOIN industry ON industry.id = company.industryId where company.status = 0";
$sel = queryRun($sel, $debug = 3);
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = "SELECT count(*) as allcount FROM company INNER JOIN industry ON industry.id = company.industryId where company.status = 0 $searchQuery";
$sel = queryRun($sel, $debug = 3);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "SELECT *,company.id as companyId, date_format(company.date, '%b %e %Y') as formatted_date, company.date as ldate, company.status as lstatus FROM company INNER JOIN industry ON industry.id = company.industryId WHERE company.status = 0 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
$empRecords = queryRun($empQuery, $debug = 3);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    if ($row['lstatus'] == 1) {
        $status = '<select class="status" id="status_' . $row['companyId'] . '"><option value="1" selected>Active</option> <option value="0">Disable</option></select>';
    } else {
        $status = '<select class="status" id="status_' . $row['companyId'] . '"><option value="1">Active</option> <option value="0" selected>Disable</option></select>';
    }


    $sr = '<div class="custom-checkbox custom-control" style=" display: inline-block">
            <input type="checkbox" name="check[]" id="' . $row['companyId'] . '" class="row_check custom-control-input" value="' . $row['companyId'] . '">
            <label class="custom-control-label" for=""></label>
            </div>';

    $sr1 = '<div class="custom-checkbox custom-control" style=" display: inline-block">
            <input type="checkbox" name="check[]" id="' . $row['companyId'] . '" class="row_check custom-control-input" value="' . $row['companyId'] . '">
            </div>';

    $companyName = '<a href="#">' . $row['companyName'] . '</a>';
       $previousName = $row['previousName'];
       $brand = $row['brand'];
    //$date = date('M j', strtotime($row['ldate']));
    $date = $row['formatted_date'];
    $action = '<a class="btn-primary btn action_btn" href="index.php?page=edit-businesses&id=' . $row['companyId'] . '"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                  <a class="btn-danger btn action_btn delete-button deleteAction" id="' . $row['companyId'] . '"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
                  <a class="btn-success btn action_btn approve_btn" style="display: none;" id="' . $row['companyId'] . '" title="Approve this Business">A</a>';

    $data[] = array(
        "sr" => $sr,
        "companyName" => $companyName,
        "brand" => $brand,
        "previousName" => $previousName,
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
