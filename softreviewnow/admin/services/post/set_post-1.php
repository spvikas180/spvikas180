<?php

include_once"../../control/config.php";
if (!isset($_SESSION['adminId'])) {
    echo "<script>window.location.href='login.php';</script>";
    die();
}
extract($_POST);
$blogInfo = UrlClean($blogTitle);
$blogTitle = addslashes(trim($blogTitle));
$blogDesp = addslashes(trim($blogDesp));

$blogMetaTitle = addslashes(trim($blogMetaTitle));
$blogMetaKey = addslashes(trim($blogMetaKey));
$blogMetaDesp = addslashes(trim($blogMetaDesp));
$tags = $_POST['tags'];

if (empty($blogcatId)) {
    echo '{"status":"error","msg":"Please choose Category"}';
    exit();
}
if (isset($_FILES['blogImage']['name']) && !empty($_POST['blogImage1'])) {
    echo '{"status":"error","msg":"Please Select Only One Image form [ server and feature ].!"}';
    exit();
}

if (isset($_POST['add_category'])) {

    $data = dbAction('blogs', $operation = 4, $from_data = "", " where blogInfo = '$blogInfo'");
    if ($data->num_rows > 0) {
        echo '{"status":"error","msg":"' . $blogTitle . ' allready exist!!"}';
        exit();
    }

    if (isset($_FILES['blogImage']['name'])) {
        $topads = $_FILES['blogImage']['name'];
        $file_pic = preg_replace('/\s+/', '_', $topads);
        $temp = explode(".", $file_pic);
        $extension = end($temp);
        $file_path = "../../../upload/blog/";

        $file_pic = $blogInfo . "." . $extension;
        $upload_url = 'upload/blog/' . $file_pic;
        $file_path = $file_path . basename($file_pic);
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        if (move_uploaded_file($_FILES["blogImage"]["tmp_name"], $file_path)) {
            $upload_url = $upload_url;
        }
        $from_data = array(
            "blogTitle" => $blogTitle,
            "blogInfo" => $blogInfo,
            "blogAuthor" => $blogAuthor,
            "blogStatus" => $blogStatus,
            "blogMetaTitle" => $blogMetaTitle,
            "blogMetaKey" => $blogMetaKey,
            "blogMetaDesp" => $blogMetaDesp,
            "blogDesp" => $blogDesp,
            "blogImage" => $upload_url,
        );
    } elseif (!empty($_POST['blogImage1'])) {
        $upload_url = $_POST['blogImage1'];
        $from_data = array(
            "blogTitle" => $blogTitle,
            "blogInfo" => $blogInfo,
            "blogAuthor" => $blogAuthor,
            "blogStatus" => $blogStatus,
            "blogMetaTitle" => $blogMetaTitle,
            "blogMetaKey" => $blogMetaKey,
            "blogMetaDesp" => $blogMetaDesp,
            "blogDesp" => $blogDesp,
            "blogImage" => $upload_url,
        );
    } else {
        $from_data = array(
            "blogTitle" => $blogTitle,
            "blogInfo" => $blogInfo,
            "blogAuthor" => $blogAuthor,
            "blogStatus" => $blogStatus,
            "blogMetaTitle" => $blogMetaTitle,
            "blogMetaKey" => $blogMetaKey,
            "blogMetaDesp" => $blogMetaDesp,
            "blogDesp" => $blogDesp,
        );
    }
    $data_blogs = dbAction('blogs', $operation = 1, $from_data);
    if ($data_blogs == true) {

//        $url = '' . BASE_URL . 'blog/' . $blogInfo . '';
//        sitemap_create($url);

        $data_get = dbAction('blogs', $operation = 4, $from_data = "", " where blogInfo = '$blogInfo'");
        $blog_data_row = $data_get->fetch_assoc();
        $blogId = $blog_data_row['blogId'];

        if (!empty($tags)) {
            $tmp_tag = explode(',', $tags);
            for ($i = 0; $i < count($tmp_tag); $i ++) {
                $data_tags_id = dbAction('tags', $operation = 4, $from_data = "", " where tagTitle = '$tmp_tag[$i]'");
                if ($data_tags_id->num_rows > 0) {
                    $data_tags_id_row = $data_tags_id->fetch_assoc();
                    $tagId = $data_tags_id_row['tagId'];
                } else {
                    $tagTitleInfo = UrlClean($tmp_tag[$i]);
                    $from_data = array(
                        "tagTitle" => $tmp_tag[$i],
                        "tagTitleInfo" => $tagTitleInfo,
                        "tagStatus" => 1,
                    );
                    $data_tags_insert = dbAction('tags', $operation = 1, $from_data);
                    $data_tags_id = dbAction('tags', $operation = 4, $from_data = "", " where tagTitle = '$tmp_tag[$i]'");
                    $data_tags_id_row = $data_tags_id->fetch_assoc();
                    $tagId = $data_tags_id_row['tagId'];
//                    $urlTag = '' . BASE_URL . 'blog/tag/' . $tagTitleInfo . '';
//                    sitemap_create($urlTag);
                }
                $data_tags_map = dbAction('tag_mapping', $operation = 4, $from_data = "", " where tagId = $tagId AND blogId = $blogId");
                if ($data_tags_map->num_rows == 0) {
                    $from_data = array(
                        "tagId" => $tagId,
                        "blogId" => $blogId,
                    );
                    $data_tags_map_insert = dbAction('tag_mapping', $operation = 1, $from_data);
                }
            }
        }
        if (!empty($blogcatId)) {
            for ($i = 0; $i < count($blogcatId); $i ++) {

                $data_in_catmap = dbAction('blog_cat_mapping', $operation = 4, $from_data = "", " where blogcatId = $blogcatId[$i]");
                if ($data_in_catmap->num_rows == 0) {
                    $data_post_cat = dbAction('post_cat', $operation = 4, $from_data = "", " where catId = $blogcatId[$i]");
                    $data_post_cat_row = $data_post_cat->fetch_assoc();
                    $catInfo = $data_post_cat_row['catInfo'];
//                    $urlCat = '' . BASE_URL . 'blog/category/' . $catInfo . '';
//                    sitemap_create($urlCat);
                }

                $from_data = array(
                    "blogcatId" => $blogcatId[$i],
                    "blogId" => $blogId,
                );
                $data_blog_cat_mapping = dbAction('blog_cat_mapping', $operation = 1, $from_data);
            }
        }
        echo '{"status":"success","msg":"Post Added Successfully!","page_url":"all-post"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
} else if (isset($_POST['update_category'])) {
    $blogId = $_POST['id'];

    if (isset($_FILES['blogImage']['name'])) {
        $topads = $_FILES['blogImage']['name'];
        $file_pic = preg_replace('/\s+/', '_', $topads);
        $temp = explode(".", $file_pic);
        $extension = end($temp);
        $file_path = "../../../upload/blog/";

        $file_pic = $blogInfo . "." . $extension;
        $upload_url = 'upload/blog/' . $file_pic;
        $file_path = $file_path . basename($file_pic);
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        if (move_uploaded_file($_FILES["blogImage"]["tmp_name"], $file_path)) {
            $upload_url = $upload_url;
        }
        $from_data = array(
            "blogTitle" => $blogTitle,
            "blogInfo" => $blogInfo,
            "blogAuthor" => $blogAuthor,
            "blogStatus" => $blogStatus,
            "blogMetaTitle" => $blogMetaTitle,
            "blogMetaKey" => $blogMetaKey,
            "blogMetaDesp" => $blogMetaDesp,
            "blogDesp" => $blogDesp,
            "blogImage" => $upload_url,
        );
    } elseif (!empty($_POST['blogImage1'])) {
        $upload_url = $_POST['blogImage1'];
        $from_data = array(
            "blogTitle" => $blogTitle,
            "blogInfo" => $blogInfo,
            "blogAuthor" => $blogAuthor,
            "blogStatus" => $blogStatus,
            "blogMetaTitle" => $blogMetaTitle,
            "blogMetaKey" => $blogMetaKey,
            "blogMetaDesp" => $blogMetaDesp,
            "blogDesp" => $blogDesp,
            "blogImage" => $upload_url,
        );
    } else {
        $from_data = array(
            "blogTitle" => $blogTitle,
            "blogInfo" => $blogInfo,
            "blogAuthor" => $blogAuthor,
            "blogStatus" => $blogStatus,
            "blogMetaTitle" => $blogMetaTitle,
            "blogMetaKey" => $blogMetaKey,
            "blogMetaDesp" => $blogMetaDesp,
            "blogDesp" => $blogDesp,
        );
    }
    $data_blogs = dbAction('blogs', $operation = 2, $from_data, 'blogId =' . $blogId . '');
    if ($data_blogs == true) {
        if (!empty($tags)) {
            $tmp_tag = explode(',', $tags);
            for ($i = 0; $i < count($tmp_tag); $i ++) {
                $data_tags_id = dbAction('tags', $operation = 4, $from_data = "", " where tagTitle = '$tmp_tag[$i]'");
                if ($data_tags_id->num_rows > 0) {
                    $data_tags_id_row = $data_tags_id->fetch_assoc();
                    $tagId = $data_tags_id_row['tagId'];
                } else {
                    $tagTitleInfo = UrlClean($tmp_tag[$i]);
                    $from_data = array(
                        "tagTitle" => $tmp_tag[$i],
                        "tagTitleInfo" => $tagTitleInfo,
                        "tagStatus" => 1,
                    );
                    $data_tags_insert = dbAction('tags', $operation = 1, $from_data);
                    $data_tags_id = dbAction('tags', $operation = 4, $from_data = "", " where tagTitle = '$tmp_tag[$i]'");
                    $data_tags_id_row = $data_tags_id->fetch_assoc();
                    $tagId = $data_tags_id_row['tagId'];
                }
                $data_tags_map = dbAction('tag_mapping', $operation = 4, $from_data = "", " where tagId = $tagId AND blogId = $blogId");
                if ($data_tags_map->num_rows == 0) {
                    $from_data = array(
                        "tagId" => $tagId,
                        "blogId" => $blogId,
                    );
                    $data_tags_map_insert = dbAction('tag_mapping', $operation = 1, $from_data);
                }
            }
        }
        if (!empty($blogcatId)) {
            $data_delete = dbAction('blog_cat_mapping', $operation = 3, $from_data = "", 'where blogId=' . $blogId . '');
            for ($i = 0; $i < count($blogcatId); $i ++) {
                $from_data = array(
                    "blogcatId" => $blogcatId[$i],
                    "blogId" => $blogId,
                );
                $data_blog_cat_mapping = dbAction('blog_cat_mapping', $operation = 1, $from_data);
            }
        }
        echo '{"status":"success","msg":"Post Added Successfully!","page_url":"all-post"}';
    } else {
        echo '{"status":"error","msg":"Error in server, please contact admin!"}';
    }
}
?>