<?php include("../common-file.php"); ?>
<?php
$domain = $_SERVER['HTTP_HOST'];
$urlPath = $_SERVER['REQUEST_URI'];
$urlArr = explode('/', $urlPath);

if ($domain == 'localhost') {
    $productSlug = $urlArr[4];
    $productSlugArr = explode('?', $productSlug);
    $productSlug = $productSlugArr[0];
} else {
     $productSlug = $urlArr[4];
    $productSlugArr = explode('?', $productSlug);
    $productSlug = $productSlugArr[0];
}

$product_qs = "SELECT *,product.id as productId FROM `product` INNER JOIN company on company.id = product.companyId where product.status = 1 AND productSlug = '$productSlug'";
$product_data = queryRun($product_qs, $debug = 3);
if ($product_data->num_rows > 0) {
    $product_row = $product_data->fetch_assoc();
    $companyId = $product_row['companyId'];
    $productId = $product_row['productId'];
} 
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title><?php echo $product_row['productName'];?></title>
    <?php include('../head.php') ?>
	</head>
	<body class="home-2 product-det">
		<div class="wrapper mainWrap">  
			<!-- Start Navigation -->
			<?php include('../header.php') ?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<section class="section-csk padd-bot-40 padd-top-40 product-det">
			    <div class="container-fluid">
			        <div class="row">
			            <div class="col-lg-9 col-md-8 bg-light">
			                <div class="row d-flex align-items-center">
			                    <div class="col-md-4 text-center">
			                        <img src="<?php echo BASE_URL ?>assets/img/guide-book.webp" class="img-responsive" alt="">
			                    </div>
			                    <div class="col-md-8 list-cl">
			                         <h1><?php echo $product_row['productName'];?></h1>
			                         <div class="ratrev-sec d-flex align-items-center justify-content-between">
			                            <p>Review: <span><?php echo(rand(10,100));?></span></p> 
			                            <p>Rating: <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></p>
			                         </div>
			                         <?php echo $product_row['productDesp'];?>
			                    </div>
			                </div>
			            </div>
			            <div class="col-lg-3 col-md-4">
			                <div class="row">
			                	<?php if($product_row['btn1Name'] != ''){ ?>
			                <div class="sm-sec">
			                  <div class="btn1-c" style="background-color: <?php echo $product_row['btn1BgColor'];?>;">
			                    <a href="javascript:void(0)" data-toggle="modal" data-target="#downloadTrail"><?php echo $product_row['btn1Name'];?></a>
			                 </div>
			                  <div class=""></div>
			                </div>
			                	<?php }?>
			                   
			                   <?php if($product_row['btn2Name'] != ''){ ?>
			                <div class="btn1-c" style="background-color: <?php echo $product_row['btn2BgColor'];?>;">
			                    <a href="<?php echo $product_row['btn2Url'];?>"><?php echo $product_row['btn2Name'];?></a>
			                </div>
			                <?php }?>

			                <?php if($product_row['btn3Name'] != ''){ ?>
			                <div class="btn1-c" style="background-color: <?php echo $product_row['btn3BgColor'];?>;">
			                    <a href="<?php echo $product_row['btn3Url'];?>"><span><img src="<?php echo BASE_URL ?>assets/img/guide-book.webp"></span> <?php echo $product_row['btn3Name'];?></a>
			                </div>
			                <?php }?>
			                <div class="col-md-12">
			                	*Today 5 users availed this service-free consultantion
			                </div>
			            </div>
			        </div>
			    </div>
			</section>
			
			<section class="comp-detsec padd-top-0">
			    <div class="res-issue mrg-bot-20">
			        <h2>Customer Issues We Resolve Here</h2>
			    </div>
				<div class="container-fluid">
				
					<div class="row">
						<!-- =============== Blog Detail ================= -->
						<div class="col-md-9 col-sm-12">
							<div class="row ">
								<div class="col-md-12 col-sm-12">
									<div class="comments"> 
										<?php 

								// $data_resolve = dbAction('issue_resolve', $operation = 4, $from_data = "", ' where productId=' . $productId . '');
								$data_resolve = "SELECT * from issue_resolve where productId = $productId ORDER BY rand() LIMIT 10000";
                                            $data_resolve = queryRun($data_resolve, $debug = 3);
                                            if ($data_resolve->num_rows > 0) {
                                                $i = 1;
                                                foreach ($data_resolve as $row_data_resolve) {

                                                	?>
                                                	<div class="cdet-cont-m">
													    <div class="row d-flex align-items-center ">
													       <div class="col-sm-2 text-center padd-r-0">
													           <div class="solve-tim">
													               <p><?php echo(rand(1,60));?> min ago</p>
													           </div>
													       </div>
													       <div class="col-sm-7">
													           <div class="cdet-cont">
													               <p>
													               	<?php echo $row_data_resolve['title']; ?>
													               </p>
													           </div>
													       </div>
													       <div class="col-sm-3">
													           <div class="comp-btn"><a href="#" class="btn theme-btn " title=""><?php echo $row_data_resolve['issueStatus']; ?></a></div>
													       </div>
													    </div>
													</div>
                                                <?php }
                                             }?>
										
									</div>
								</div>
							</div>
							
						</div>
						<!-- /.col-md-8 -->
						
						
						
					</div>
					
				</div>
			</section>
			


				<section class="faq-sec-1">
				<div class="container-fluid">
					<div class="row mb-3">
						<div class="col-md-12 text-left">
						<div class="heading">
							<h2>Most Question and Answer</span></h2>
						</div>
						</div>
					</div>
					<div class="faq-sec">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="panel-group style-1" id="accordion2" role="tablist" aria-multiselectable="true">
								<?php 
								   $data_qua_ans = "SELECT * from quation_answer where productId = $productId ORDER BY rand() LIMIT 10000";
                                            $data_qua_ans = queryRun($data_qua_ans, $debug = 3);
                                            if ($data_qua_ans->num_rows > 0) {
                                                $i = 1;
                                                foreach ($data_qua_ans as $row_data_qua_ans) {

                                                	?>


                                <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="faq<?php echo $row_data_qua_ans['id']; ?>">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapsefaq<?php echo $row_data_qua_ans['id']; ?>" aria-expanded="false" aria-controls="collapsefaq<?php echo $row_data_qua_ans['id']; ?>">
											<?php echo $row_data_qua_ans['quation'];?>
											</a>
										</h4>
									</div>
									<div id="collapsefaq<?php echo $row_data_qua_ans['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq<?php echo $row_data_qua_ans['id']; ?>">
										<div class="panel-body">
											<p>
												<?php echo $row_data_qua_ans['answer']; ?>
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
								$data_faq = dbAction('faq', $operation = 4, $from_data = "", ' where productId=' . $productId . '');
                                            if ($data_faq->num_rows > 0) {
                                                $i = 1;
                                                foreach ($data_faq as $row_data_faq) {?>


                                <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="faq<?php echo $row_data_faq['id']; ?>">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefaq<?php echo $row_data_faq['id']; ?>" aria-expanded="false" aria-controls="collapsefaq<?php echo $row_data_faq['id']; ?>">
											<?php echo $row_data_faq['faq_title']; ?>
											</a>
										</h4>
									</div>
									<div id="collapsefaq<?php echo $row_data_faq['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq<?php echo $row_data_faq['id']; ?>">
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
			<!-- ================ Start Footer ======================= -->
			<?php include('../footer.php') ?>
		

			<div class="modal fade" id="downloadTrail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					
						<div class="modal-header">
							<h4 class="modal-title" id="modalLabel2">Please verify your details</h4>
							<button type="button" class="m-close" data-dismiss="modal" aria-label="Close">
								<i class="ti-close"></i>
							</button>
						</div>
						
						<div class="modal-body" id="details_section">
							<div class="wel-back">
								<h2>Please verify your details</h2>
							</div>
							<form id="downloadTrailForm" method="post" action="<?php echo BASE_URL;?>webservices/set_product.php">
								<input type="hidden" name="pageName" value="<?php echo $product_row['productName'];?>">
								<input type="hidden" name="pageUrl" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
								<input type="hidden" name="btnName" value="<?php echo $product_row['btn1Name']; ?>">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control" placeholder="Your Name" required>
								</div>
								
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control" placeholder="Your Email" required>
								</div>
								<div class="form-group">
									<label>Phone Number</label>
									<input type="text" name="number" class="form-control" placeholder="Your Phone Number" required>
								</div>
								<div class="center">
									<button type="submit" id="downloadTrailBtn" name="downloadTrailBtn" class="btn btn-midium theme-btn btn-radius width-200"> Submit </button>
								</div>
							</form>
						</div>

						<div class="modal-body" id="download_section" style=" display: none;">
							<div class="wel-back">
								<h2>Download trail version</h2>
							</div>
								<div class="center">
									<a  href="<?php echo $product_row['btn1Url'];?>" class="btn btn-midium theme-btn btn-radius width-200"> Click Here </a>
								</div>
						</div>
					</div>
				</div>
			</div> 


				<script>
				//download Trail version ajax
				$('#downloadTrailBtn').click(function () {
				    var options = {
				        beforeSend: function () {
				        },
				        success: function (response) {
				            console.log(response);
				            var json = $.parseJSON(response);
				            if (json.status == 'success') {
				               $("#details_section").css('display','none');
				               $("#download_section").css('display','block');
				            } else {
				                alert(json.msg);
				            }
				        },
				        error: function (response) {
				            $('#error').html(response);
				        }
				    };
				    $('#downloadTrailForm').ajaxForm(options);
				});

			</script>


			</div>
		</div>

</div>
	</body>
</html>