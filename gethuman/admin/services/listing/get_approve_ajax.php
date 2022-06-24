<?php

include_once"../../control/config.php";

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = 'listing.date'; // Column name
$columnSortOrder = 'desc'; // asc or desc
$searchValue = $_POST['search']['value']; // Search value
## Search 
$searchQuery = " ";
if ($searchValue != '') {
    $searchQuery = " and ( companyName like '%" . $searchValue . "%' or  users.email like '%" . $searchValue . "%' or address like '%" . $searchValue . "%' or  listing.date like '%" . $searchValue . "%' or listing.status like'%" . $searchValue . "%' ) ";
}

## Total number of records without filtering
$sel = "SELECT count(*) as allcount FROM listing INNER JOIN users ON listing.userId = users.id INNER JOIN category ON category.id = listing.catId where listing.status = 1 AND listing.verified = 0";
$sel = queryRun($sel, $debug = 3);
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = "SELECT count(*) as allcount FROM listing INNER JOIN users ON listing.userId = users.id INNER JOIN category ON category.id = listing.catId where listing.status = 1 AND listing.verified = 0 $searchQuery";
$sel = queryRun($sel, $debug = 3);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "SELECT *,date_format(listing.date, '%b %e %Y') as formatted_date,users.email as uemail, listing.date as ldate, listing.status as lstatus FROM listing INNER JOIN users ON listing.userId = users.id INNER JOIN category ON category.id = listing.catId WHERE listing.status = 1 AND listing.verified = 0 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
$empRecords = queryRun($empQuery, $debug = 3);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    if ($row['lstatus'] == 1) {
        $status = '<select class="status" id="status_' . $row['listId'] . '"><option value="1" selected>Active</option> <option value="0">Disable</option></select>';
    } else {
        $status = '<select class="status" id="status_' . $row['listId'] . '"><option value="1">Active</option> <option value="0" selected>Disable</option></select>';
    }


    $sr = '<div class="custom-checkbox custom-control" style=" display: inline-block">
            <input type="checkbox" name="check[]" id="' . $row['listId'] . '" class="row_check custom-control-input" value="' . $row['listId'] . '">
            <label class="custom-control-label" for=""></label>
            </div>';

    $sr1 = '<div class="custom-checkbox custom-control" style=" display: inline-block">
            <input type="checkbox" name="check[]" id="' . $row['listId'] . '" class="row_check custom-control-input" value="' . $row['listId'] . '">
            </div>';

    $companyName = '<a href="' . BASE_URL . 'reviews/' . $row['website'] . '" target="_new">' . $row['companyName'] . '</a>';
    $email = $row['name'] . '<br>' . $row['email'];
    $address = $row['address'];
    //$date = date('M j', strtotime($row['ldate']));
    $date = $row['formatted_date'];
    $action = '<a class="btn-primary btn action_btn" href="index.php?page=edit-businesses&id=' . $row['listId'] . '"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                  <a class="btn-danger btn action_btn delete-button deleteAction" id="' . $row['listId'] . '"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
                  <a class="btn-info btn action_btn despModel" id="' . $row['listId'] . '"><i class="fa fa-eye" aria-hidden="true" title="View"></i></a>
                  <a class="btn-success btn action_btn disapprove_btn" id="' . $row['listId'] . '" title="Disapprove this Business">DA</a>
            <a class="btn-warning btn action_btn feature_btn" id="' . $row['listId'] . '" title="Make this Business Featured?">MF</a>';

    $data[] = array(
        "sr" => $sr,
        "companyName" => $companyName,
        "email" => $email,
        "address" => $address,
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
