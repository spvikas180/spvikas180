<?php include("../../../admin/control/config.php"); ?>
<?php include("../../../temp/site-settings.php"); ?>
<?php include '../../../head.php'; ?>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/blog.css">
<?php
$blogId = $_GET['id'];
$blog_data = "SELECT * FROM `blogs` LEFT JOIN author on blogs.blogAuthor = author.authorId where blogId='$blogId'";
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
        $blogMetaTitle = $blogTitle . ' - ' . $site_settings['site_title'];
    }
    if ($blogMetaKey == '') {
        $blogMetaKey = $blogTitle . ' - ' . $site_settings['site_title'];
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
<?php include '../../../header.php'; ?>
<section class="blog-section">
    <div class="container">
        <div class="col-md-8">
            <div id="primary" class="content-area">
                <?php if ($blog_data->num_rows > 0) { ?>
                    <article class="hentry ">
                        <header class="entry-header">
                            <h1 class="entry-title"><?php echo $blogTitle; ?></h1>
                        </header>
                        <div class="entry-meta">
                            <span class="byline"> By <span class="author vcard"><a class="url fn n"><?php echo $authorName; ?></a></span>
                            </span><span class="posted-on">Posted on <a rel="bookmark"><time class="updated"><?php echo date('M j Y', strtotime($blogDate)); ?></time></a></span>
                        </div>
                        <div class="entry-content">
                            <?php echo $blogDesp; ?>   
                        </div>
                        <span class="cat-links">Posted in  <?php
                            if ($data_catName->num_rows > 0) {
                                foreach ($data_catName as $data_catName_row) {
                                    ?>
                                    <a href="<?php echo BASE_URL . 'blog/category/' . $data_catName_row['catInfo']; ?>"><?php echo $data_catName_row['catName'] . ', '; ?></a>
                                    <?php
                                }
                            }
                            ?>
                        </span>
                        <span class="cat-links">
                            <?php
                            if ($data_tags->num_rows > 0) {
                                echo '<i class="fa fa-tag" aria-hidden="true"></i> ';
                                foreach ($data_tags as $tags_row) {
                                    ?>
                                    <a class="color tagName" href="<?php echo BASE_URL . 'blog/tag/' . $tags_row['tagTitleInfo']; ?>"><?php echo $tags_row['tagTitle'] . ', '; ?> </a>
                                    <?php
                                }
                            }
                            ?>
                        </span>
                    </article>
                <?php } else { ?>
                    <div class="col-12 col-md-9 text-center">
                        <img src="<?php echo BASE_URL; ?>images/error.png" width="150" alt="404">
                        <h1>Whoops!</h1>
                        <p>
                            The page you're looking for could not be found. 
                            <a href="/" id="previous-page" style="display: none;">Go back?</a>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-4">
            <?php $page = 6;?>
            <?php include '../../../blog/sidebar.php'; ?>
        </div>
    </div>
</section>
<?php include '../../../footer.php'; ?>
