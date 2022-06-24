<?php include("admin/control/config.php"); ?>
<?php include("temp/site-settings.php"); ?>
<?php
$domain = $_SERVER["HTTP_HOST"];
$urlPath = $_SERVER["REQUEST_URI"];
$urlArr = explode("/", $urlPath);
if ($domain == 'localhost') {
    $pageSlug = $urlArr[2];
} else {
   $pageSlug = $urlArr[1];
}

$pageSlug = str_replace(".php", "", $pageSlug);
$data = dbAction("pages", $operation = 4, $from_data = "", " where status = 1 AND pageSlug = '$pageSlug'");
if ($data->num_rows > 0) {
    foreach ($data as $row_page) {
        $id = $row_page["id"];
        $pageName = $row_page["pageName"];
        $pageDesc = $row_page["pageDesc"];
        $metaTitle = $row_page["metaTitle"];
        $metaKey = $row_page["metaKey"];
        $metaDesc = $row_page["metaDesc"];
    }
} else {
    echo "<script>window.location.href='" . constant("BASE_URL") . "'</script>";
}
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?php echo $metaTitle; ?></title>
        <meta name="description" content="<?php echo $metaDesc; ?>">
        <meta name="keywords" content="<?php echo $metaKey; ?>">
        <?php include 'head.php'; ?>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <!-- Hero Bg-->
        <section class="hero">
            <div class="container text-center">
                <div class="row padding">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <h1 class="h1-tittle"><?php echo $pageName; ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Bg End-->
        <section class="bg-color3 pad-tb" style="padding-bottom: 0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-40 text-left">
                        <?php echo $pageDesc; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
    </body>
</html>
