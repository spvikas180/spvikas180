
<?php include("../common-file.php"); ?>

<?php if(isset($_POST['detailsBtn'])){
	include "../mail.php";
}?>

<?php
$domain = $_SERVER['HTTP_HOST'];
$urlPath = $_SERVER['REQUEST_URI'];
$urlArr = explode('/', $urlPath);

if ($domain == 'localhost') {
    $companySlug = $urlArr[3];
    $companySlugArr = explode('?', $companySlug);
    $companySlug = $companySlugArr[0];
} else {
     $companySlug = $urlArr[3];
    $companySlugArr = explode('?', $companySlug);
    $companySlug = $companySlugArr[0];
}

$company_qs = "SELECT *,company.id as companyId FROM `company` INNER JOIN industry on industry.id = company.industryId where status = 1 AND companySlug = '$companySlug'";
$company_data = queryRun($company_qs, $debug = 3);
if ($company_data->num_rows > 0) {
    $company_row = $company_data->fetch_assoc();
    $companyId = $company_row['companyId'];
    $companySlug = $company_row['companySlug'];
    $from_data = array("views" => 'views+1');
    $data_view = 'UPDATE `company` SET views=views+1 WHERE id="' . $companyId . '"';
    $data_view = queryRun($data_view, $debug = 3);
} 
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Company Details</title>
    <?php include('../head.php') ?>
	</head>
	<body class="home-2">
		<div class="wrapper mainWrap">  
			<!-- Start Navigation -->
			<?php include('../header.php') ?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<section class="section-csk padd-bot-40 padd-top-40">
			    <div class="container-fluid">
			        <div class="row">
			            <div class="col-lg-9 col-md-8 bg-light">
			                <div class="row d-flex align-items-center">
			                    <div class="col-md-3">
			                        <img src="../assets/img/guide-book.webp" class="img-responsive img-3" alt="</strong> <?php echo  $company_row['brand'];?>">
			                    </div>
			                    <div class="col-md-9 list-cl">
			                         <p><strong>Name:</strong> <?php echo  $company_row['brand'];?></p>
			                         <p><strong>Company Category:</strong> <?php echo  $company_row['industryName'];?></p>
			                         <p><strong>Famous Product:</strong> <?php echo brand_title;?></p>
			                         <p><strong>Website:</strong> <?php echo  $company_row['website'];?></p>
			                    </div>
			                </div>
			            </div>
			            <div class="col-lg-3 col-md-4">
			                <div class="row">
			                   <?php if($company_row['number'] != ''){?>
			                  <div class="btn1-c">
			                    <a data-toggle="modal" data-target="#detailsModel" href="javascript:void(0)"><?php echo  $company_row['number'];?></a>
			                 </div>
			                 <?php }?>
			                <div class="btn1-c">
			                    <a data-toggle="modal" data-target="#detailsModel" href="javascript:void(0)">Immidiate Support</a>
			                </div>
			                <div class="btn1-c">
			                    <a data-toggle="modal" data-target="#detailsModel" href="javascript:void(0)">Request a Call</a>
			                </div>
			            </div>
			        </div>
			    </div>
			</section>
			
			<section class="comp-detsec">
				<div class="container-fluid">
				
					<div class="row">
						<!-- =============== Blog Detail ================= -->
						<div class="col-md-9 col-sm-12">
							<div class="row ">
								<div class="col-md-12 col-sm-12">
									<div class="comments">      
										<div class="comments-title">
											<h2>COMPANY DETAILS</h2>
										</div>
										<div class="cdet-cont-m">

											<?php if($company_row['previousName'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Previous name</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['previousName'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>
											
											<?php if($company_row['incorporationDate'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Incorporation Date</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['incorporationDate'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>
										
											<?php if($company_row['founder'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Founder</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['founder'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>
											
											<?php if($company_row['ceo'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>CEO</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['ceo'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>

											<?php if($company_row['totalWorth'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Total Worth</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['totalWorth'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>


											<?php if($company_row['totalUsers'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Total Users</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['totalUsers'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>

											<?php if($company_row['monthlyActiveUsers'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Monthly Active Users</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['monthlyActiveUsers'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>

											<?php if($company_row['headQuarter'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Head Quarter</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['headQuarter'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>

											

											<?php if($company_row['facebook'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Facebook</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['facebook'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>

											<?php if($company_row['twitter'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Twitter</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['twitter'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>

											<?php if($company_row['linktree'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Linktree</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['linktree'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>

											<?php if($company_row['instagram'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Instagram</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['instagram'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>

											<?php if($company_row['linkedIn'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>LinkedIn</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['linkedIn'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>

											<?php if($company_row['twitter'] != ''){?>
												<div class="row d-flex align-items-center ">
										       <div class="col-sm-4 text-center ">
										           <h3>Twitter</h3>
										       </div>
										       <div class="col-sm-8">
										           <div class="cdet-cont">
										               <p><?php echo $company_row['twitter'];?></p>
										           </div>
										       </div>
										    </div>
											<?php }?>

										
									</div>
								</div>
							</div>
							<div class="row  hist-sec">
								<div class="col-md-12 col-sm-12">
									<div class="comments">      
										<div class="comments-title">
											<h2>HiSTORY</h2>
										</div>
										<div class="cdet-cont-m">
										   <?php echo  $company_row['history'];?>	
										</div>
									</div>
								</div>
							</div>
							<div class="row det-acc">
								<div class="col-md-12 col-sm-12">
									<div class="comments">
										<div class="faq-sec">
            					            <div class="row">
                    						    <div class="col-md-12 col-sm-12">
                    							<div class="panel-group style-1" id="accordion2" role="tablist" aria-multiselectable="true">
                    								<?php if($company_row['listProducts'] != ''){?>
                    								<div class="panel panel-default">
                    									<div class="panel-heading" role="tab" id="listProducts">
                    										<h4 class="panel-title">
                    											<a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapselistProducts" aria-expanded="true" aria-controls="collapseL1">
                    											List of Products
                    											</a>
                    										</h4>
                    									</div>
                    									<div id="collapselistProducts" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="listProducts">
                    										<div class="panel-body">
                    											<div class="row d-flex align-items-center">
                    											    <div class="col-md-10 col-sm-10">
                    											    	<?php echo  $company_row['listProducts'];?>
                    											       </div>
                    											</div>
                    										</div>
                    									</div>
                    								</div>
                    							   <?php }?>

                    							   <?php if($company_row['competitorAnalysis'] != ''){?>
                    								<div class="panel panel-default">
                    									<div class="panel-heading" role="tab" id="competitorAnalysis">
                    										<h4 class="panel-title">
                    											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsecompetitorAnalysis" aria-expanded="false" aria-controls="collapseL2">
                    											Competitors
                    											</a>
                    										</h4>
                    									</div>
                    									<div id="collapsecompetitorAnalysis" class="panel-collapse collapse" role="tabpanel" aria-labelledby="competitorAnalysis">
                    										<div class="panel-body">
                    											<?php echo  $company_row['competitorAnalysis'];?>
                    										</div>
                    									</div>
                    								</div>
                    								 <?php }?>
                    								<?php if($company_row['currentStage'] != ''){?>
                    								<div class="panel panel-default">
                    									<div class="panel-heading" role="tab" id="currentStage">
                    										<h4 class="panel-title">
                    											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsecurrentStage" aria-expanded="false" aria-controls="collapseL3">
                    											Current Stage & Market Share
                    											</a>
                    										</h4>
                    									</div>
                    									<div id="collapsecurrentStage" class="panel-collapse collapse" role="tabpanel" aria-labelledby="currentStage">
                    										<div class="panel-body">
                    											<?php echo  $company_row['currentStage'];?>
                    										</div>
                    									</div>
                    								</div>
                    								 <?php }?>
                    							</div>
                    						</div>
            					            </div>
				                        </div>	
									</div>
								</div>
							</div>
						</div>
					</div>
						<!-- /.col-md-8 -->
						
						<!-- ===================== Blog Sidebar ==================== -->
						<div class="col-md-3 col-sm-12">
							<div class="sidebar">
							
								<div class="widget-boxed">
									<div class="widget-boxed-header">
										<h4>Company Overview</h4>
									</div>
									<div class="widget-boxed-body com-over padd-top-10 padd-bot-10">
										<h5>Setup Guide Book</h5>
										<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
									</div>
								</div>
				
								<!-- Start: Latest Blogs -->
								<div class="widget-boxed">
									<div class="widget-boxed-body padd-top-5">
										<div class="side-list">
											<ul class="side-blog-list">
												<li>
													<a href="#">
														<div class="blog-list-img">
															<img src="../assets/img/image-3.jpg" class="img-responsive" alt="">
														</div>
													</a>
													<div class="blog-list-info">
														<h5><a href="#" title="blog">Freel Documentry</a></h5>
														<div class="blog-post-meta">
															<span class="updated"><i class="fa fa-user"></i> Admin</span> | <span class="updated"><i class="fa fa-comment"></i>Comment</span>					
														</div>
													</div>
												</li>
												
												<li>
													<a href="#">
														<div class="blog-list-img">
															<img src="../assets/img/image-4.jpg" class="img-responsive" alt="">
														</div>
													</a>
													<div class="blog-list-info">
														<h5><a href="#" title="blog">Preez Food Rock</a></h5>
														<div class="blog-post-meta">
															<span class="updated"><i class="fa fa-user"></i> Admin</span> | <span class="updated"><i class="fa fa-comment"></i>Comment</span>					
														</div>
													</div>
												</li>
												
												<li>
													<a href="#">
														<div class="blog-list-img">
															<img src="../assets/img/image-1.jpg" class="img-responsive" alt="">
														</div>
													</a>
													<div class="blog-list-info">
														<h5><a href="#" title="blog">Cricket Buzz High</a></h5>
													<div class="blog-post-meta">
															<span class="updated"><i class="fa fa-user"></i> Admin</span> | <span class="updated"><i class="fa fa-comment"></i>Comment</span>					
														</div>
													</div>
												</li>
												
												<li>
													<a href="#">
														<div class="blog-list-img">
															<img src="../assets/img/image-5.jpg" class="img-responsive" alt="">
														</div>
													</a>
													<div class="blog-list-info">
														<h5><a href="#" title="blog">Tour travel Tick</a></h5>
														<div class="blog-post-meta">
															<span class="updated"><i class="fa fa-user"></i> Admin</span> | <span class="updated"><i class="fa fa-comment"></i>Comment</span>					
														</div>
													</div>
												</li>

											</ul>
										</div>
									</div>
								</div>
								<!-- End: Latest Blogs -->

							<?php
							$product_qs = "SELECT * FROM `product` where status = 1 AND companyId = $companyId";
							$product_data = queryRun($product_qs, $debug = 3);
							if ($product_data->num_rows > 0) {?>
								<h4>Related Product</h4>
									<div class="widget-boxed">

									<div class="widget-boxed-body padd-top-5">
										<div class="side-list">
											<ul class="side-blog-list">
												 <?php foreach ($product_data as $product_data_row) { 
									 			?>
												<li>
													<div class="blog-list-info">
														<h5><a href="<?php echo BASE_URL.'industry/'.$companySlug.'/'. $product_data_row['productSlug']?>"><?php echo $product_data_row['productName']?></a></h5>
														
													</div>
												</li>
											<?php }?>
											</ul>
										</div>
									</div>
								</div>
							<?php } 
							?>
							
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
				<section class="faq-sec-1">
				<div class="container-fluid">
					<div class="row mb-3">
						<div class="col-md-12 text-left">
						<div class="heading">
							<h2>Most Common <span>FAQ'S</span></h2>
						</div>
						</div>
					</div>
					<div class="faq-sec">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="panel-group style-1" id="accordion" role="tablist" aria-multiselectable="true">
								<?php 
								$data_faq = dbAction('faq', $operation = 4, $from_data = "", ' where companyId=' . $companyId . ' AND faq_title !="" ');
                                if ($data_faq->num_rows > 0) {
                                    $i = 1;
                                    foreach ($data_faq as $row_data_faq) {
                                 ?>
                                <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="faq<?php echo $row_data_faq['id']; ?>">
										<h4 class="panel-title">
											<a  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefaq<?php echo $row_data_faq['id']; ?>" aria-expanded="false" aria-controls="collapsefaq<?php echo $row_data_faq['id']; ?>" aria-expanded="false">
											<?php echo $row_data_faq['faq_title']; ?>
											</a>
										</h4>
									</div>
									<div id="collapsefaq<?php echo $row_data_faq['id']; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="faq<?php echo $row_data_faq['id']; ?>">
										<div class="panel-body">
											<p>
												<?php echo $row_data_faq['faq_des']; ?>
											</p>
										</div>
									</div>
								</div>
                                     <?php }
                                    }
								?>
								
							</div>
						</div>
					</div>
				</div>
				</div>
			</section>

			<section class="faq-sec-1">
				<div class="container-fluid">
					<div class="row mb-3">
						<div class="col-md-12 text-left">
						<div class="heading">
							<h2>What is <?php echo brand_title;?> Relationship to <?php echo  $company_row['brand'];?>?</h2>
						</div>
						<div class="cdet-cont-m">
						<p>
							In short, the two companies are not related. <?php echo brand_title;?> builds free tools and shares information amongst customers of companies like <?php echo  $company_row['brand'];?>. For large companies that includes tools such as our <?php echo brand_title;?> Phone, which allows you to call a company but skip the part where you wait on the line listening to their call technology music. If you look at our United Airlines Phone Number page, you can see an example of those free calling mechanisms and tips shared by other customers. Or take a look at the Sprint Phone Number page. We've created these shortcuts and apps to try to help customers like you (and ourselves!) navigate the messy phone menus, hold times, and confusion with customer service, especially with larger companies like United Airlines or Sprint. And as long as you keep sharing it with your friends and loved ones, we'll keep doing it.
						</p>
					</div>
						</div>
					</div>
				 </div>
			</section>


			<div class="modal fade" id="detailsModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="m-close" data-dismiss="modal" aria-label="Close">
								<i class="ti-close"></i>
							</button>
						</div>
						
						<div class="modal-body">
							<div class="wel-back">
								<h2>Fill Following Details</h2>
							</div>
							
							<form action="" method="post">
								<input type="hidden" name="brand" value="<?php echo  $company_row['brand'];?>">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" name="name" class="form-control" placeholder="Full Name" required>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control" placeholder="Email" required>
								</div>
								<div class="form-group">
									<label>Phone Number</label>
									<input type="text" name="number" class="form-control" placeholder="Phone Number" required>
								</div>
								
								<div class="center">
									<button type="submit" name="detailsBtn" id="login-btn" class="btn btn-midium theme-btn btn-radius width-200"> Submit </button>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div> 	


			<!-- ================ Start Footer ======================= -->
			<?php include('../footer.php') ?>
		</div>
	</body>
</html>