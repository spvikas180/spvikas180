<?php

include_once"../../control/config.php";
## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = 'date'; // Column name
$columnSortOrder = 'desc'; // asc or desc
$searchValue = $_POST['search']['value']; // Search value
## Search 
$searchQuery = " ";
if ($searchValue != '') {
    $searchQuery = " and ( email like '%" . $searchValue . "%' or name like'%" . $searchValue . "%'  ) ";
}

## Total number of records without filtering
$sel = "SELECT count(*) as allcount FROM users where status = 0 AND userType IN(0,1)";
$sel = queryRun($sel, $debug = 3);
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = "SELECT count(*) as allcount FROM users where status = 0 AND userType IN(0,1) $searchQuery";
$sel = queryRun($sel, $debug = 3);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "SELECT *,date_format(users.date, '%b %e %Y') as formatted_date FROM users where status = 0 AND userType IN(0,1) " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
$empRecords = queryRun($empQuery, $debug = 3);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {

    $sr = '<div class="custom-checkbox custom-control" style=" display: inline-block">
            <input type="checkbox" name="check[]" id="' . $row['id'] . '" class="row_check custom-control-input" value="' . $row['id'] . '">
            <label class="custom-control-label" for=""></label>
            </div>';

    $sr1 = '<div class="custom-checkbox custom-control" style=" display: inline-block">
            <input type="checkbox" name="check[]" id="' . $row['id'] . '" class="row_check custom-control-input" value="' . $row['id'] . '">
            </div>';


    if ($row['pic'] == '') {
        $pic = '<img src="upload/profile/user.png" width="40px">';
    } else {
        $pic = '<img src="' . BASE_URL . $row['pic'] . '" width="40px">';
    }

    $name = '<a href="index.php?page=all-info&id=' . $row['id'] . '">' . $row['name'] . '</a>';
    $email = $row['email'];
    //$date = date('M j', strtotime($row['ldate']));
    $date = $row['formatted_date'];
    $action = '<a class="btn-primary btn action_btn" href="index.php?page=pending-user&id=' . $row['id'] . '"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
               <a class="btn-danger btn action_btn delete-button deleteAction" id="' . $row['id'] . '"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
               <a class="btn-success btn action_btn approve_btn" id="' . $row['id'] . '" title="Active this Users">A</a>';

    $data[] = array(
        "sr" => $sr,
        "pic" => $pic,
        "email" => $email,
        "name" => $name,
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
