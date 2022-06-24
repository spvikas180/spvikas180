<?php

include '../../functions.php';
/* Database connection start */
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "haribook";

$conn = OpenCon();

//$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */
 


// storing  request (ie, get/post) global array to a variable  
$requestData = $_REQUEST;


$columns = array(
// datatable column index  => database column name
    0 => 'id',
    1 => 'pic',
    2 => 'name',
    3 => 'email',
    5 => 'date',
    4 => 'status'
);

// getting total number records without any search
$sql = "SELECT name, email, status,pic,id,date ";
$sql .= " FROM users where status IN (0,1) AND adminStatus = 0 order by date Desc";
$query = mysqli_query($conn, $sql) or die("user-data.php: get user");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT name,email,status,pic,id,date ";
$sql .= " FROM users WHERE 1=1";
if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
    $sql .= " AND ( name LIKE '" . $requestData['search']['value'] . "%' ";
    $sql .= " OR email LIKE '" . $requestData['search']['value'] . "%' ";
    $sql .= " OR id LIKE '" . $requestData['search']['value'] . "%' ";
    $sql .= " OR status LIKE '" . $requestData['search']['value'] . "%' ";
    $sql .= " OR pic LIKE '" . $requestData['search']['value'] . "%' ";
    $sql .= " OR date LIKE '" . $requestData['search']['value'] . "%' )";
}
$query = mysqli_query($conn, $sql) or die("user-data.php");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql .= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "  LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */
$query = mysqli_query($conn, $sql) or die("user-data.php");

$data = array();
while ($row = mysqli_fetch_array($query)) {  // preparing an array
    $nestedData = array();
    if ($row['pic'] == '') {
        $pic = '';
    } else {
        $pic = BASE_URL . $row['pic'];
    }
    if ($row["status"] == 1) {
        $status = '<div class="badge badge-success">Active</div>';
    } else {
        $status = '<div class="badge badge-danger">Disable</div>';
    }

    $nestedData[] = '<input type="checkbox" name="check[]" id="' . $row["id"] . '" class="row_check custom-control-input" value="' . $row["id"] . '">';
    $nestedData[] = $row["id"];
    $nestedData[] = '<img src="' . $pic . '" width="30px" />';
    $nestedData[] = $row["name"];
    $nestedData[] = $row["email"];
    $nestedData[] = $row["date"];
    $nestedData[] = $status;
    $nestedData[] = '<a class="delete-button" id="' . $row["id"] . '"><i class="fa fa-fw" aria-hidden="true" title="Delete" style="color: #d92550"></i></a>';
    $data[] = $nestedData;
}

$json_data = array(
    "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
    "recordsTotal" => intval($totalData), // total number of records
    "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
    "data" => $data   // total data array
);

echo json_encode($json_data);  // send data as json format

mysqli_close($conn);
?>
