<?php

include_once"../control/config.php";
//print_r($_FILES);
if ($_POST['upload_type'] == 'blogImage') {
    if (!empty($_FILES['upload_file']) && !empty($_POST['send'])) {
        if ($_FILES['upload_file']['error']) {
            echo 'status: error in file';
        } else {
            $allowed_ext = ['jpg', 'png', 'gif', 'jpeg'];
            $file_ext = explode('.', $_FILES['upload_file']['name']);
            $ext = end($file_ext);
            if (in_array(strtolower($ext), $allowed_ext)) {
                if ($_FILES['upload_file']['size'] < 2048000000) {
                    if ($_FILES['upload_file']['type'] === 'image/jpeg' || $_FILES['upload_file']['type'] === 'image/jpg' || $_FILES['upload_file']['type'] === 'image/png' || $_FILES['upload_file']['type'] === 'image/gif') {
                        $imageFolder = "../../upload/";
                        /*                         * ******************************************
                         * Change this line to set the upload folder *
                         * ******************************************* */
                        $filepath = BASE_URL . "upload/blog/";

                        $file = $imageFolder . $_FILES['upload_file']['name'];
                        $filepath = $filepath . $_FILES['upload_file']['name'];
                        if (file_exists($file)) {
                            unlink($file);
                        }
                        if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $file)) {
                            echo '{"status":"success","msg":"' . $filepath . '"}';
                        } else {
                            echo '{"status":"success","msg":"error"}';
                        }
                    } else {
                        echo '{"status":"error", "msg":"incorrect file type"}';
                    }
                } else {
                    echo '{"status":"error","msg":"file size > 2 mb"}';
                }
            } else {
                echo '{"status":"error","msg":"incorrect file extension"}';
            }
        }
    }
} else {
    if (!empty($_FILES['upload_file']) && !empty($_POST['send'])) {
        if ($_FILES['upload_file']['error']) {
            echo 'status: error in file';
        } else {
            $allowed_ext = ['jpg', 'png', 'gif', 'jpeg'];
            $file_ext = explode('.', $_FILES['upload_file']['name']);
            $ext = end($file_ext);
            if (in_array(strtolower($ext), $allowed_ext)) {
                if ($_FILES['upload_file']['size'] < 2048000000) {
                    if ($_FILES['upload_file']['type'] === 'image/jpeg' || $_FILES['upload_file']['type'] === 'image/jpg' || $_FILES['upload_file']['type'] === 'image/png' || $_FILES['upload_file']['type'] === 'image/gif') {
                        $imageFolder = "../../upload/";
                        /*                         * ******************************************
                         * Change this line to set the upload folder *
                         * ******************************************* */
                        $filepath = BASE_URL . "upload/";

                        $file = $imageFolder . $_FILES['upload_file']['name'];
                        $filepath = $filepath . $_FILES['upload_file']['name'];
                        if (file_exists($file)) {
                            unlink($file);
                        }
                        if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $file)) {
                            echo '{"status":"success","msg":"' . $filepath . '"}';
                        } else {
                            echo '{"status":"success","msg":"error"}';
                        }
                    } else {
                        echo '{"status":"error", "msg":"incorrect file type"}';
                    }
                } else {
                    echo '{"status":"error","msg":"file size > 2 mb"}';
                }
            } else {
                echo '{"status":"error","msg":"incorrect file extension"}';
            }
        }
    }
}

