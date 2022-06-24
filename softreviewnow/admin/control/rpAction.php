<?php
function dbAction($table_name, $operation=0, $form_data='', $where_clause='')
{
    $dbActionStatus=array();
    if (empty($form_data)) {
        $form_data=@array_map('addslashes', $_POST);
        array_pop($form_data);
        $fields = array_keys($form_data);
        $values = array_values($form_data);
    } else {
        $fields = array_keys($form_data);
        $values = array_values($form_data);
    }
    $whereSQL = '';
    if (!empty($where_clause)) {
        if (substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE') {
            $whereSQL = " WHERE ".$where_clause;
        } else {
            $whereSQL = " ".trim($where_clause);
        }
    }
    $conn = OpenCon();
    if ($operation==1) {
        $sql_query = "INSERT INTO ".$table_name."

        (`".implode('`,`', $fields)."`)

        VALUES('".implode("','", $values)."')";
        $return="'query'=>".$sql_query;
    }
    if ($operation==2) {
        $sql_query = "UPDATE ".$table_name." SET ";
        $sets = array();
        foreach ($form_data as $column => $value) {
            $sets[] = "`".$column."` = '".$value."'";
        }
        $sql_query .= implode(', ', $sets);
        $sql_query .= $whereSQL;
        //echo $sql_query;
    }
    if ($operation==3) {
        $sql_query = "DELETE FROM ".$table_name.$whereSQL;
        //echo $sql_query;
    }
    if ($operation==4) {
        $sql_query = "SELECT * FROM ".$table_name."";
        $sql_query .= $whereSQL;
        $result = mysqli_query($conn, $sql_query);
        return $result;
    }
    if ($operation==1 or $operation==2 or $operation==3) {
        $run=mysqli_query($conn, $sql_query);
        if ($run==true) {
            array_push($dbActionStatus,$run=1,$sql_query);
            return $dbActionStatus;
        } else {
            $error=mysqli_error_list($conn);
            array_push($dbActionStatus,$run=0,mysqli_error($conn));
            return $dbActionStatus;
            // foreach ($error as $err) {
            //     echo "Error: " .$err['error'];
            //     echo "<br>".$sql_query;
            // }
        }
    }
    mysqli_close($conn);
}
function queryRun($query, $debug=0)
{
    $conn = OpenCon();

    if ($debug == 1) {
        print $query;
        //die();
    }

    if ($debug==3) {
        $query = $conn->query($query);

        if ($query == false) {
            echo "Error: " .mysqli_error($conn);
        }

        if ($query == true) {
            return $query;
        }
    } else {
        echo "<script>alert('invalid debug!')</script>";
    }

    mysqli_close($conn);
}
function isAdmin()
{
    if (isset($_SESSION['role'])) {
       if ($_SESSION['role'] == 2) {
            return true;
        } else {
            return false;
        }
    }
    
}
function isUser()
{
    if (isset($_SESSION['role'])) {
       if ($_SESSION['role'] == 1) {
            return true;
        } else {
            return false;
        }
    }
    
}
function getName($table, $id)
{
    $conn = OpenCon();

    if ($table=='employee') {
        $query="SELECT * FROM $table where emp_id=".$id;
    } else {
        $query="SELECT * FROM $table where id=".$id;
    }

    $name_result = $conn->query($query);

    if ($name_result->num_rows > 0) {
        $row=$name_result->fetch_assoc();

        echo $row['name'];
    }

    mysqli_close($conn);
}

function getRow($table, $id, $name='', $where_clause='',$type=0)
{
    $conn = OpenCon();

    if ($table=='profile') {
        $query="SELECT * FROM $table where u_id=".$id;
    } else {
        $query="SELECT * FROM $table where id=".$id;
    }

    $whereSQL = '';

    if (!empty($where_clause)) {
        $whereSQL = " ".trim($where_clause);

        $query="SELECT * FROM $table $whereSQL";

        $name_result = $conn->query($query);

        return $name_result;
    } else {
        $name_result = $conn->query($query);

        if ($name_result->num_rows > 0) {
            $row=$name_result->fetch_assoc();
            if ($type==0) {
               echo $row[$name];
            }else{return $row[$name];}

            
        }
    }

    mysqli_close($conn);
}
function lastId($table_name) {
    $conn = OpenCon();
    $query = "SELECT id FROM $table_name ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Could not query:' . mysqli_error($conn));
    }
    $id = mysqli_fetch_assoc($result);
    return $id;
    mysqli_close($conn);
}

function table_sum($table, $col, $limits='')
{
    $conn=OpenCon();
    $sum_q="SELECT *, SUM($col) AS Total FROM $table WHERE MONTH(date) = MONTH(CURDATE()) AND status=1 ORDER BY Total DESC";
    if ($limits!="") {
        $sum_q .=" LIMIT ".$limits;
    }
    $sum_run=mysqli_query($conn, $sum_q);
    return $sum_run;
    mysqli_close($conn);
}
function colSum($table, $col, $where_clause='')
{
    $conn=OpenCon();
    $sum_q="SELECT *, SUM($col) AS Total FROM $table";
    if ($where_clause!="") {
        $sum_q .=" WHERE ".$where_clause;
    }
    //echo $sum_q;
    $sum_run=mysqli_query($conn, $sum_q);
    return $sum_run;
    mysqli_close($conn);
}
?>