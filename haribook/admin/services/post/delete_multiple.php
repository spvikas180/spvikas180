<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);
if (isset($_POST['delete_multiple'])) {
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $data = dbAction('post_cat', $operation = 3, $from_data = "", 'where catId=' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Post Category Delete Successfully!","page_url":"post-category"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['delete_multiple_post'])) {
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $data = dbAction('blogs', $operation = 3, $from_data = "", 'where blogId =' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Post Delete Successfully!","page_url":"all-post"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['delete_multiple_tags'])) {
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $data = dbAction('tags', $operation = 3, $from_data = "", 'where tagId  =' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Tags Delete Successfully!","page_url":"tags"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['delete_multiple_author'])) {
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $data = dbAction('author', $operation = 3, $from_data = "", 'where authorId   =' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Author Delete Successfully!","page_url":"author"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
} elseif (isset($_POST['delete_multiple_sidebar'])) {
    $url = $_POST['url'];
    $checkbox = $_POST['check'];
    if (!empty($checkbox)) {
        for ($i = 0; $i < count($checkbox); $i++) {
            $id = $checkbox[$i];
            $data = dbAction('sidebar_setting', $operation = 3, $from_data = "", 'where id  =' . $id . '');
        }
        if ($data == true) {
            echo '{"status":"success","msg":"Sidebar Delete Successfully!","page_url":"' . $url . '"}';
        } else {
            echo '{"status":"error","msg":"Error in server, please contact admin!"}';
        }
    }
}
?>
