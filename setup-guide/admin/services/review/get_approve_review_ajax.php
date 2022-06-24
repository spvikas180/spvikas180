<?php

include_once"../../control/config.php";
//SELECT *,rating_review.status as rstatus,rating_review.date as rdate,users.email as uemail FROM `rating_review` INNER JOIN users on rating_review.userId = users.id INNER join listing on listing.listId = rating_review.listId INNER join category on category.id = listing.catId where rating_review.status IN (1,0) order by listing.companyName asc, rating_review.date asc
## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = 'rating_review.date'; // Column name
$columnSortOrder = 'desc'; // asc or desc
$searchValue = $_POST['search']['value']; // Search value
## Search 
$searchQuery = " ";
if ($searchValue != '') {
    $searchQuery = " and ( companyName like '%" . $searchValue . "%' or  users.email like '%" . $searchValue . "%' or review like'%" . $searchValue . "%' or rating like'%" . $searchValue . "%' or rating like '%" . $searchValue . "%' or  rating_review.date like '%" . $searchValue . "%' or rating_review.status like'%" . $searchValue . "%' ) ";
}

## Total number of records without filtering
$sel = "SELECT count(*) as allcount FROM `rating_review` INNER JOIN users on rating_review.userId = users.id INNER join listing on listing.listId = rating_review.listId INNER join category on category.id = listing.catId where rating_review.status = 1";
//$sel = "SELECT count(*) as allcount FROM listing INNER JOIN users ON listing.userId = users.id INNER JOIN category ON category.id = listing.catId where listing.status = 0";
$sel = queryRun($sel, $debug = 3);
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
//$sel = "SELECT count(*) as allcount FROM listing INNER JOIN users ON listing.userId = users.id INNER JOIN category ON category.id = listing.catId where listing.status = 0 $searchQuery";
$sel = "SELECT count(*) as allcount FROM `rating_review` INNER JOIN users on rating_review.userId = users.id INNER join listing on listing.listId = rating_review.listId INNER join category on category.id = listing.catId where rating_review.status = 1 $searchQuery";
$sel = queryRun($sel, $debug = 3);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "SELECT *,date_format(rating_review.date, '%b %e %Y') as formatted_date,rating_review.status as rstatus,rating_review.date as rdate,users.email as uemail FROM `rating_review` INNER JOIN users on rating_review.userId = users.id INNER join listing on listing.listId = rating_review.listId INNER join category on category.id = listing.catId where rating_review.status = 1 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
//$empQuery = "SELECT *,date_format(listing.date, '%b %e %Y') as formatted_date,users.email as uemail, listing.date as ldate, listing.status as lstatus FROM listing INNER JOIN users ON listing.userId = users.id INNER JOIN category ON category.id = listing.catId WHERE listing.status = 0 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
$empRecords = queryRun($empQuery, $debug = 3);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {

    $sr = '<div class="custom-checkbox custom-control" style=" display: inline-block">
            <input type="checkbox" name="check[]" id="' . $row['reviewId'] . '" class="row_check custom-control-input" value="' . $row['reviewId'] . '">
            <label class="custom-control-label" for=""></label>
            </div>';

    $sr1 = '<div class="custom-checkbox custom-control" style=" display: inline-block">
            <input type="checkbox" name="check[]" id="' . $row['reviewId'] . '" class="row_check custom-control-input" value="' . $row['reviewId'] . '">
            </div>';

    $companyName = '<a href="' . BASE_URL . 'reviews/' . $row['website'] . '" target="_new">' . $row['companyName'] . '</a>';
    $email = $row['name'] . '<br>' . $row['uemail'];
    $review = $row['review'];
    $rating = $row['rating'];
    //$date = date('M j', strtotime($row['ldate']));
    $date = $row['formatted_date'];
    $action = '<a class="btn-primary btn action_btn" href="index.php?page=active-review&id=' . $row['reviewId'] . '"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
               <a class="btn-danger btn action_btn delete-button deleteAction" id="' . $row['reviewId'] . '"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
               <a class="btn-success btn action_btn disapprove_btn" id="' . $row['reviewId'] . '" title="Disapprove this Business">D</a>';

    $data[] = array(
        "sr" => $sr,
        "companyName" => $companyName,
        "email" => $email,
        "review" => $review,
        "rating" => $rating,
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
