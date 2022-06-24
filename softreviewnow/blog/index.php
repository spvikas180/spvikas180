<?php include("../admin/control/config.php"); ?>
<?php include("../temp/site-settings.php"); ?>
<?php
$domain = $_SERVER['HTTP_HOST'];
$urlPath = $_SERVER['REQUEST_URI'];
$urlArr = explode('/', $urlPath);

if ($domain == 'localhost') {
    $key = $urlArr[3];
    $value = @$urlArr[4];
} else {
    $key = $urlArr[2];
    $value = $urlArr[3];
}

$rowperpage = 10;
if ($key == 'page') {
    $page = $value;
    if ($page <= 1) {
        $start_limit = 0;
    } else {
        $start_limit = ($page - 1) * $rowperpage;
    }
} else {
    $page = 1;
    $start_limit = 0;
}

if ($key != 'index' && $key != 'index.php' && $key != 'tag' && $key != 'category' && $key != '' && !isset($_GET['s']) && $key != 'page') {
    echo "<script>window.location.href='" . BASE_URL . "blog/';</script>";
}
if ($key == 'index' || $key == 'index.php') {
    echo "<script>window.location.href='" . BASE_URL . "blog/';</script>";
}

if (isset($_GET['s']) && $_GET['s'] != '' && !empty($_GET['s'])) {
    $searchVal = explode(' ', $_GET['s']);
    $catMetaTitle = 'You searched for ' . $_GET['s'];
    for ($i = 0; $i < count($searchVal); $i++) {
        $data_blogs = "SELECT * FROM `blogs` LEFT JOIN author on blogs.blogAuthor = author.authorId where blogs.blogStatus IN (1) AND blogs.blogDraft = 1 AND (blogs.blogTitle LIKE '%$searchVal[$i]%' OR blogs.blogDesp LIKE '%$searchVal[$i]%') order by blogs.blogCreated desc";
    }
} elseif ($key == 'tag') {
    $tagTitleInfo = $value;
    $data_tag = dbAction('tags', $operation = 4, $from_data = "", " where tagTitleInfo='$tagTitleInfo'");
    $data_tag_row = $data_tag->fetch_assoc();
    $tagId = $data_tag_row['tagId'];
    $catMetaTitle = $data_tag_row['tagTitle'] . ' Archives - ' . $site_settings['site_title'];
    $catMetaDesp = $catMetaTitle;
    $catMetaKey = $catMetaTitle;

    $data_blogs = "SELECT * FROM blogs AS bg"
            . " LEFT JOIN author AS ac ON bg.blogAuthor = ac.authorId"
            . " INNER JOIN tag_mapping AS tm ON tm.blogId=bg.blogId"
            . " where tm.tagId='$tagId' AND bg.blogStatus IN (1) AND blogDraft = 1 ORDER BY bg.blogCreated DESC";
} elseif ($key == 'category') {
    $catInfo = $value;
//    $catInfo = end($urlArr);
    $data_cat = dbAction('post_cat', $operation = 4, $from_data = "", " where catInfo='$catInfo'");
    $data_cat_row = $data_cat->fetch_assoc();
    $catId = $data_cat_row['catId'];
    if ($data_cat_row['catMetaTitle'] == '') {
        $catMetaTitle = $data_cat_row['catName'] . ' Archives - ' . $site_settings['site_title'];
    } else {
        $catMetaTitle = $data_cat_row['catMetaTitle'];
    }
    if ($data_cat_row['catMetaDesp'] == '') {
        $catMetaDesp = $data_cat_row['catName'] . ' Archives - ' . $site_settings['site_title'];
    } else {
        $catMetaDesp = $data_cat_row['catMetaDesp'];
    }
    if ($data_cat_row['catMetaKey'] == '') {
        $catMetaKey = $data_cat_row['catName'] . ' Archives - ' . $site_settings['site_title'];
    } else {
        $catMetaKey = $data_cat_row['catMetaKey'];
    }


    $data_blogs = "SELECT * FROM blogs AS bg"
            . " LEFT JOIN author AS ac ON bg.blogAuthor = ac.authorId"
            . " INNER JOIN blog_cat_mapping ON blog_cat_mapping.blogId=bg.blogId"
            . " where blog_cat_mapping.blogcatId = '$catId' AND bg.blogStatus IN (1) AND blogDraft = 1 GROUP BY bg.blogId ORDER BY bg.blogCreated DESC";
} else {
    $data_blogs = "SELECT * FROM `blogs`"
            . " LEFT JOIN author on blogs.blogAuthor = author.authorId where blogs.blogStatus IN (1) AND blogDraft = 1 order by blogs.blogCreated desc LIMIT $start_limit,$rowperpage";

    $pagination_data = "SELECT * FROM `blogs`"
            . " LEFT JOIN author on blogs.blogAuthor = author.authorId where blogs.blogStatus IN (1) AND blogDraft = 1 order by blogs.blogCreated desc";

    $catMetaTitle =  'Official blog of ' . brand_title;
    $catMetaDesp = $catMetaTitle;
    $catMetaKey = $catMetaTitle;
}
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?php echo $catMetaTitle; ?></title>
        <meta name="description" content="<?php echo $catMetaDesp; ?>">
        <meta name="keywords" content="<?php echo $catMetaKey; ?>">
        <?php include '../head.php'; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/blog.css">
    </head>
    <body class="blog bg-color3">
        <?php include '../header.php'; ?>
        <section class="blog-section">
            <div class="container blogContainer">
                
                <div class="col-md-12">
                    <h3 style=" margin-top: 0;">Latest</h3>
                </div>
                <div class="col-md-9">
                    <div id="primary" class="content-area">
                        <?php
                        $data_blogs = queryRun($data_blogs, $debug = 3);
                        if ($data_blogs->num_rows > 0) {
                            foreach ($data_blogs as $row) {
                                $blogDesp = preg_replace("/<img[^>]+\>/i", "", $row['blogDesp']);
                                if ($row['blogImage'] != '') {
                                    $blogImage = '<img src="' . BASE_URL . $row['blogImage'] . '" alt="' . $row['blogTitle'] . '">';
                                } else {
                                    $blogImage = '';
                                }
                                $blogId = $row['blogId'];
                                $data_tags = "SELECT * FROM `tags` INNER JOIN tag_mapping on tags.tagId = tag_mapping.tagId where tag_mapping.blogId = $blogId";
                                $data_tags = queryRun($data_tags, $debug = 3);

                                $data_catName = "SELECT * FROM `post_cat` INNER JOIN blog_cat_mapping on post_cat.catId  = blog_cat_mapping.blogcatId where blog_cat_mapping.blogId = $blogId";
                                $data_catName = queryRun($data_catName, $debug = 3);
                                ?>
                                <article class="hentry ">
                                    <div class="col-md-3">
                                        <a class="post-thumbnail" href="<?php echo BASE_URL . 'blog/' . $row['blogInfo']; ?>" aria-hidden="true">
                                            <?php echo $blogImage; ?>
                                            <span class="updated rpwwt-post-date" style=" display: inline-block; margin-top: 10px;"><?php echo date('M j Y', strtotime($row['blogCreated'])); ?></span>
                                        </a>
                                    </div>

                                    <div class="col-md-9">
                                        <div class="entry-meta">
                                            <header class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="<?php echo BASE_URL . 'blog/' . $row['blogInfo']; ?>" rel="bookmark"><?php echo $row['blogTitle']; ?></a>
                                                </h2>
                                            </header>
        <!--                                            <span class="byline"> By <span class="author vcard"><a class="url fn n" href=""><?php echo $row['authorName']; ?></a></span>
                                            </span><span class="posted-on">Posted on <a rel="bookmark"><time class="updated"><?php echo date('M j Y', strtotime($row['blogCreated'])); ?></time></a></span>
                                            <span class="cat-links">Posted in 
                                            <?php
                                            if ($data_catName->num_rows > 0) {
                                                foreach ($data_catName as $data_catName_row) {
                                                    ?>
                                                                        <a href="////<?php echo BASE_URL . 'blog/category/' . $data_catName_row['catInfo']; ?>"><?php echo $data_catName_row['catName'] . ', '; ?></a>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            </span>-->

                                            <div class="entry-content">
                                                <div class="">
                                                    <?php echo $blogDesp = strip_tags(substr($blogDesp, 0, 280)) . '...'; ?>
                                                </div>
                                                <div class="tg-read-more-wrapper clearfix tg-text-align--left">
                                                    <a href="<?php echo BASE_URL . 'blog/' . $row['blogInfo']; ?>" class="tg-read-more">
                                                        Read More
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <?php
                            }
                            if ($key == '' || $key == 'page') {
                                $pagination_data = queryRun($pagination_data, $debug = 3);
                                $url_page = BASE_URL . 'blog/page/';
                                include '../temp/pagination.php';
                            }
                        } else {
                            ?>
                            <div class="col-12 col-md-12">
                                <h3 class="text-center">Page Not Found</h3>
                                <p class="text-center">The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.</p>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php $page = 5; ?>
                    <?php include 'sidebar.php'; ?>
                </div>
            </div>
        </section>
        <?php include '../footer.php'; ?>
    </body>
</html>
