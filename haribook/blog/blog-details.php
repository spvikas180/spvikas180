<?php include("../admin/control/config.php"); ?>

<?php include("../temp/site-settings.php"); ?>

<?php
$domain = $_SERVER['HTTP_HOST'];

$urlPath = $_SERVER['REQUEST_URI'];

$urlArr = explode('/', $urlPath);

if ($domain == 'localhost') {

    $blogInfo = $urlArr[3];
} else {

    $blogInfo = $urlArr[2];
}



//$blog_data = dbAction("blogs", $operation = 4, $form_data = "", "blogInfo='$blogInfo'");

$blog_data = "SELECT * FROM `blogs` LEFT JOIN author on blogs.blogAuthor = author.authorId where  blogDraft = 1 AND blogStatus=1 AND blogInfo='$blogInfo'";

$blog_data = queryRun($blog_data, $debug = 3);

if ($blog_data->num_rows > 0) {

    $blog_data_row = $blog_data->fetch_assoc();

    $blogId = $blog_data_row['blogId'];

    $blogTitle = $blog_data_row['blogTitle'];

    $blogDesp = $blog_data_row['blogDesp'];

    $blogStatus = $blog_data_row['blogStatus'];

    $authorName = $blog_data_row['authorName'];

    $blogDate = $blog_data_row['blogCreated'];

    $blogImage = $blog_data_row['blogImage'];

    if ($blogImage != '') {

        $blogImage = '<img src="' . BASE_URL . $blog_data_row['blogImage'] . '" alt="' . $blog_data_row['blogTitle'] . '">';
    } else {

        $blogImage = '';
    }



    $blogMetaTitle = $blog_data_row['blogMetaTitle'];

    $blogMetaKey = $blog_data_row['blogMetaKey'];

    $blogMetaDesp = $blog_data_row['blogMetaDesp'];



    if ($blogMetaTitle == '') {

        $blogMetaTitle = $blogTitle;
    }

    if ($blogMetaKey == '') {

        $blogMetaKey = $blogTitle;
    }

    if ($blogMetaDesp == '') {

        $blogMetaDesp = substr(strip_tags($blogDesp), 0, 160);
    }




    $data_tags = "SELECT * FROM `tags` INNER JOIN tag_mapping on tags.tagId = tag_mapping.tagId where tag_mapping.blogId = $blogId";

    $data_tags = queryRun($data_tags, $debug = 3);



    $data_catName = "SELECT * FROM `post_cat` INNER JOIN blog_cat_mapping on post_cat.catId  = blog_cat_mapping.blogcatId where blog_cat_mapping.blogId = $blogId";

    $data_catName = queryRun($data_catName, $debug = 3);
} else {

    $blogMetaTitle = 'Page Not Found';
}
?>

<!DOCTYPE html>

<html lang="en-US">

    <head>

        <title><?php echo $blogMetaTitle; ?></title>

        <meta name="description" content="<?php echo $blogMetaDesp; ?>">

        <meta name="keywords" content="<?php echo $blogMetaKey; ?>">

        <?php include '../head.php'; ?>

        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/blog.css">

    </head>

    <body class="blog blog-details bg-color3">

        <?php include '../header.php'; ?>

        <section class="blog-section ">
            <!--<div class="container blogContainer mb-20">-->
            <!--    <div class="col-md-12">-->
            <!--    </div>-->
            <!--</div>-->
            <div class="container blogContainer">
                <div class="col-md-12">
                    <ul class="breadcrumb wizard">
                        <li class="completed"><a href="<?php echo BASE_URL; ?>">Home</a></li>
                        <li class="completed"><a href="<?php echo BASE_URL . 'blog/'; ?>">Blog</a></li>
                        <li><a href="javascript:void(0);"><?php echo $blogTitle; ?></a></li>
                    </ul>
                    <header class="entry-header">
                        <h1 style=" margin-top: 0;"><?php echo $blogTitle; ?></h1>
                    </header>

                </div>
                <div class="col-md-9">

                    <p class="text-center imgBlggDetails"><?php echo $blogImage; ?></p>
                    <div id="primary" class="content-area">

                        <?php if ($blog_data->num_rows > 0) {
                            ?>

                            <article class="hentry ">

                                <div class="entry-meta"> <span class="byline"> By  <span class="rpwwt-post-date"><?php echo $authorName; ?></span> </span><span class="posted-on">Posted on <a rel="bookmark">

                                            <span class="rpwwt-post-date"><?php echo date('M j Y', strtotime($blogDate)); ?></span>

                                        </a></span>
                                </div>

                                <div class="entry-content"> <?php echo $blogDesp; ?> </div>

                                <span class="cat-links">Posted in

                                    <?php
                                    if ($data_catName->num_rows > 0) {

                                        foreach ($data_catName as $data_catName_row) {
                                            $catId_related = $data_catName_row['catId'];
                                            ?>

                                            <a href="<?php echo BASE_URL . 'blog/category/' . $data_catName_row['catInfo']; ?>"><span class="rpwwt-post-date"><?php echo $data_catName_row['catName']; ?></span></a>

                                            <?php
                                        }
                                    }
                                    ?>

                                </span> <span class="cat-links">

                                    <?php
                                    if ($data_tags->num_rows > 0) {

                                        echo '<i class="fa fa-tag" aria-hidden="true"></i> ';

                                        foreach ($data_tags as $tags_row) {
                                            ?>

                                            <a class="color tagName" href="<?php echo BASE_URL . 'blog/tag/' . $tags_row['tagTitleInfo']; ?>"><span class="rpwwt-post-date"><?php echo $tags_row['tagTitle']; ?> </span></a>

                                            <?php
                                        }
                                    }
                                    ?>

                                </span> 
                            </article>

                            <div class="col-md-12">
                                <h3 style=" margin-top: 0;">Related </h3>
                            </div>
                            <?php
                            ?>

                            <?php
                            $data_blogs = "SELECT * FROM blogs AS bg"
                                    . " INNER JOIN blog_cat_mapping ON blog_cat_mapping.blogId=bg.blogId"
                                    . " where blog_cat_mapping.blogcatId IN ($catId_related) AND bg.blogStatus IN (1) AND blogDraft = 1 GROUP BY bg.blogId ORDER BY bg.blogCreated DESC limit 3";
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
                                    ?>
                                    <article>
                                        <div class="col-md-4">
                                            <a class="post-thumbnail" href="<?php echo BASE_URL . 'blog/' . $row['blogInfo']; ?>" aria-hidden="true">
                                                <?php echo $blogImage; ?>
                                            </a>
                                            <div class="entry-meta">
                                                <header class="entry-header">
                                                    <h2 class="entry-title">
                                                        <a href="<?php echo BASE_URL . 'blog/' . $row['blogInfo']; ?>" rel="bookmark"><?php echo $row['blogTitle']; ?></a>
                                                    </h2>
                                                </header>
                                            </div>
                                        </div>
                                    </article>
                                    <?php
                                }
                            }
                            ?>
                            <?php
                            ?>

                        <?php } else { ?>

                            <div class="col-12 col-md-9 text-center"> <img src="<?php echo BASE_URL; ?>images/error.png" width="150" alt="404">

                                <h1>Whoops!</h1>

                                <p> The page you're looking for could not be found. <a href="/" id="previous-page" style="display: none;">Go back?</a> </p>

                            </div>

                        <?php } ?>


                    </div>

                </div>

                <div class="col-md-3">

                    <?php $page = 6; ?>

                    <?php include 'sidebar.php'; ?>

                </div>

            </div>

        </section>

        <?php include '../footer.php'; ?>

    </body>

</html>