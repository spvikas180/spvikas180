<?php include("common-file.php"); ?>
<?php
$domain = $_SERVER["HTTP_HOST"];
$urlPath = $_SERVER["REQUEST_URI"];
$urlArr = explode("/", $urlPath);
if ($domain == 'localhost') {
    $pageSlug = $urlArr[2];
} else {
   $pageSlug = $urlArr[2];
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
    // echo "<script>window.location.href='" . constant("BASE_URL") . "'</script>";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title><?php echo $metaTitle; ?></title>
    <meta name="description" content="<?php echo $metaDesc; ?>">
    <meta name="keywords" content="<?php echo $metaKey; ?>">
    <?php include('head.php') ?>
</head>
	<body class="home-2 pageBody">
		<div class="wrapper mainWrap">  
			<!-- Start Navigation -->
			<?php include('header.php') ?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Main Banner Section Start -->
			<div class="banner dark-opacity" style="background-image:url(assets/img/hero.jpg);" data-overlay="8">  
				<div class="container">
					<div class="banner-caption">
						<div class="col-md-12 col-sm-12 banner-text">
							<h1><?php echo $pageName; ?></h1>							
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
	
			
			<section class="mt-5">
				<div class="container container-m ">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						
						 <?php echo $pageDesc; ?>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ================ Start Footer ======================= -->
			<?php include('footer.php') ?>
		</div>
	</body>
</html>