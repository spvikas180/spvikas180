<footer class="footer dark-footer black-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<img src="<?php echo BASE_URL;?>assets/img/logo-white.png" class="logo logo-display" alt="">
								<div class="address-box">
									<div class="sing-add">
										<i class="ti-location-pin"></i><?php echo $site_settings['site_address']; ?>
									</div>									
									<div class="sing-add">
										<i class="ti-mobile"></i><?php echo $site_settings['site_phone']; ?>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<div class="textwidget">
								<h3 class="widgettitle widget-title"> </h3>
								</div>
								<div class="row popup-gallery">
									<div class="col-lg-4 plr-2">
										<div class="f-thumb">
											<a href="<?php echo BASE_URL;?>assets/img/image-3.jpg" data-fancybox="gallery"><img src="<?php echo BASE_URL;?>assets/img/image-3.jpg" class="img-responsive" alt=""> </a>
										</div>
									</div>
									<div class="col-lg-4 plr-2">
										<div class="f-thumb">
											<a href="<?php echo BASE_URL;?>assets/img/image-3.jpg" data-fancybox="gallery"><img src="<?php echo BASE_URL;?>assets/img/image-3.jpg" class="img-responsive" alt=""> </a>
										</div>
									</div>
									<div class="col-lg-4 plr-2">
										<div class="f-thumb">
											<a href="<?php echo BASE_URL;?>assets/img/image-3.jpg" data-fancybox="gallery"><img src="<?php echo BASE_URL;?>assets/img/image-3.jpg" class="img-responsive" alt=""> </a>
										</div>
									</div>
									<div class="col-lg-4 plr-2">
										<div class="f-thumb">
											<a href="<?php echo BASE_URL;?>assets/img/image-3.jpg" data-fancybox="gallery"><img src="<?php echo BASE_URL;?>assets/img/image-3.jpg" class="img-responsive" alt=""> </a>
										</div>
									</div>
									<div class="col-lg-4 plr-2">
										<div class="f-thumb">
											<a href="<?php echo BASE_URL;?>assets/img/image-3.jpg" data-fancybox="gallery"><img src="<?php echo BASE_URL;?>assets/img/image-3.jpg" class="img-responsive" alt=""> </a>
										</div>
									</div>
									<div class="col-lg-4 plr-2">
										<div class="f-thumb">
											<a href="<?php echo BASE_URL;?>assets/img/image-3.jpg" data-fancybox="gallery"><img src="<?php echo BASE_URL;?>assets/img/image-3.jpg" class="img-responsive" alt=""> </a>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="col-md-offset-1 col-md-2 col-sm-6">
							<div class="footer-widget">
								<h3 class="widgettitle widget-title">Links</h3>
								
								<ul class="footer-navigation sinlge">
									<li><a href="#">Home</a></li>
			                    <?php
			                    $data_page = dbAction("pages", $operation = 4, $from_data = "", " where status = 1");
			                    if ($data_page->num_rows > 0) {
			                        foreach ($data_page as $row_page) {
			                            $pageName = $row_page["pageName"];
			                            $pageSlug = $row_page["pageSlug"];
			                            ?>
			                            <li> 
			                                <a class="up_case" href="<?php echo BASE_URL ?><?php echo $pageSlug; ?>">
			                                    <?php echo $pageName; ?>
			                                </a>
			                            </li>
			                            <?php
			                        }
			                    }
			                    ?>
			                </ul>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<h3 class="widgettitle widget-title">Latest News</h3>
								<div class="widget-boxed">
									
									<div class="widget-boxed-body padd-top-5">
										<div class="side-list">
											<ul class="side-blog-list">
												<li>
													
													<div class="blog-list-info">
														<h5><a href="#" title="blog">Freel Documentry</a></h5>
														<div class="blog-post-meta">
															<span class="updated">Nov 26, 2017</span>					
														</div>
													</div>
												</li>
												
												<li>
													
													<div class="blog-list-info">
														<h5><a href="#" title="blog">Tour travel Tick</a></h5>
														<div class="blog-post-meta">
															<span class="updated">Sep 27, 2017</span>					
														</div>
													</div>
												</li>

											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</footer>
			<!-- ================ End Footer Section ======================= -->
			
			 			
			<!-- ===================== End Login & Sign Up Window =========================== -->
			<a id="back2Top" class="theme-bg" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

			<!-- START JAVASCRIPT -->
			<script src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
			<script src="<?php echo BASE_URL;?>assets/js/jquery.form.min.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/bootstrap.min.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/bootsnav.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/bootstrap-select.min.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/bootstrap-touch-slider-min.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/jquery.touchSwipe.min.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/chosen.jquery.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/datedropper.min.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/dropzone.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/jquery.counterup.min.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/jquery.fancybox.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/jquery.nice-select.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/jqueryadd-count.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/jquery-rating.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/slick.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/timedropper.js"></script>
			<script src="<?php echo BASE_URL;?>assets/plugins/js/waypoints.min.js"></script>
			<script src="<?php echo BASE_URL;?>assets/js/magnific-popup.min.js"></script>

			<!-- <script src="<?php echo BASE_URL;?>assets/js/jQuery.style.switcher.js"></script> -->
			<!-- Custom Js -->
			<script src="<?php echo BASE_URL;?>assets/js/custom.js"></script>
			
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}
				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>
			
			<script>
				$(document).ready(function(){
					$('[data-toggle="tooltip"]').tooltip();   
				});
			</script>
			
			<script type="text/javascript">
				  $(document).ready(function() {
				  $('select').niceSelect();
				});	
			</script>
			<script type="">
				$(document).ready(function() {
					$('.popup-gallery').magnificPopup({
						delegate: 'a',
						type: 'image',
						tLoading: 'Loading image #%curr%...',
						mainClass: 'mfp-img-mobile',
						gallery: {
							enabled: true,
							navigateByImgClick: true,
							preload: [0,1] // Will preload 0 - before current, and 1 after the current image
						},
						
					});
				});
			</script>