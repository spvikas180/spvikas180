<?php include("../common-file.php"); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Setup Guide - Top Industry</title>
  <?php include('../head.php') ?>
	</head>
	<body class="home-2">
		<div class="wrapper mainWrap">  
			<!-- Start Navigation -->
			<?php include('../header.php') ?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Main Banner Section Start -->
				<div class="banner dark-opacity allcategory-page" style="background-image:url(assets/img/home-banner.jpg);" data-overlay="8">  
				<div class="container-fluid">
					<div class="banner-caption">
						<div class="col-md-5 col-sm-12 banner-text">
							<h2>JOIN THE</h2>
							<h1>world's biggest <br><span>Setup Guide Book</span> <br>market place!</h1>
						</div>
					</div>
				</div>
				
			</div>
			<div class="clearfix"></div>
			
			<!-- Main Banner Section End -->

			<section class="cat2-msec">
			    <div class="container container-m">
			        <div class="row d-flex justify-content-center">
						<div class="col-md-10 ">
						<div class="heading">
							<h2>Top Companies</h2>
						</div>
						</div>
					</div>
			        <div class="row d-flex justify-content-center">
			            <?php 

			            $company_qs = "SELECT *,company.id as companyId FROM `company`
			             INNER JOIN industry on industry.id = company.industryId where status = 1 ORDER by company.date desc";
								$company_data = queryRun($company_qs, $debug = 3);
								
								if ($company_data->num_rows > 0) {
									$num = 1;
									 foreach ($company_data as $company_data_row) { 
									 	?>
									 	 <div class="col-sm-9 mrg-bot-25">
			                    <div class="row compny-sec no-gutter">
			                     <div class="col-sm-8">
			                         <div class="d-flex align-items-center">
			                             <div class="comp-n"><p><?php echo $num;?></p></div>
			                        	<div class="comp-deta">
    			                        <a href="<?php echo BASE_URL;?>industry/<?php echo $company_data_row['companySlug']?>"><h3><?php echo $company_data_row['brand']?></h3></a>
    			                        <p><?php echo(rand(1000,9999));?> Quadra Street </p>
    			                        <p class="comp-catp"><span class="cat-bg">Category: <?php echo $company_data_row['industryName']?></span> <span>(<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>)</span></p>
			                        </div>
			                         </div>
			                    </div>
			                    <div class="col-sm-4">
			                        <div class="comp-btn"><a href="#" class="btn theme-btn " title="">Resolve Your Issue?</a></div>
			                        <div class="comp-btn"><a href="#" class="btn theme-btn " title="">Read More</a></div>
			                    </div>
			                </div>
			               </div>
									 <?php	
									 $num ++;
										}
										
									 } 
									 ?>
							
			              
			        </div>
			    </div>
			</section>
			
			<!-- ================ Start Footer ======================= -->
			<?php include('../footer.php') ?>
		</div>
	</body>
</html>