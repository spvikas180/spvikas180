
<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<?php include "head.php"; ?>
</head>
<body>
	<!-- banner -->
	<div  id="home" class="w3banner about-banner">
		<div class="banner-info">
			<!-- navigation -->
			<?php include "header.php"; ?>
			<!-- //navigation -->
			<div class="banner-text">
				<h2>You wanna get a new look from us</h2>
			</div>	
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class="about">
		<div class="container">
			<h3 class="wthree-title">About Us</h3>
			<div class="about-agileinfo">
				<div class="col-md-7 about-grids">
					<div class="about-w3layoutsrow">
						<div class="col-md-4 about-wthreeimgs">
							<img src="images/g1.jpg" alt="" class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-wthreeimgs">
							<img src="images/g2.jpg" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-wthreeimgs">
							<img src="images/g3.jpg" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="clearfix"> </div>
					</div>
					<h4>Blanditiis praesentium deleniti atque corrupti quos </h4>
					<p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat </p>		
				</div>
				<div class="col-md-5 about-grids">
					<div class="pince w3-agileits">
						<div class="pince-left">
							<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
						</div>
						<div class="pince-right">
							<h4>Why Choosing Us? </h4>
							<p>Vero vulputate enim non justo posuere placerat. Phasellus eget mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
						</div>
						<div class="pince-right">
							<h4>Our Tasks</h4>
							<p>Dero vulputate enim non justo posuere placerat. purus vel mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
						</div>
						<div class="pince-right">
							<h4>Our History</h4>
							<p>Justo posuere placerat. Vero vulputate enim non  Phasellus eget mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3 class="wthree-title">Testimonials</h3>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="testimonials-grid agileinfo">
								<img src="images/quote.png" alt=" " class="img-responsive" />
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									Ut enim ad minim veniam sed do eiusmod.</p>
								<h5>John Doe,<span> Tempor</span></h5>
							</div>
						</li>
						<li>
							<div class="testimonials-grid">
								<img src="images/quote.png" alt=" " class="img-responsive" />
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									Ut enim ad minim veniam sed do eiusmod.</p>
								<h5>Elit semper,<span> Veniam</span></h5>
							</div>
						</li>
						<li>
							<div class="testimonials-grid">
								<img src="images/quote.png" alt=" " class="img-responsive" />
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									Ut enim ad minim veniam sed do eiusmod.</p>
								<h5>Daniel Nyari,<span> Enim </span></h5>
							</div>
						</li>
					</ul>
				</div>
			</section>
				<!-- FlexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- End-slider-script -->
		</div>
	</div>
	<!-- //testimonials -->
	<!-- team -->
	<div class="team">
		<div class="container">
			<h3 class="wthree-title">Meet Our Team</h3>
			<div class="team-grids">
				<section class="main">
					<ul class="ch-grid">
						<li>
							<div class="ch-item ch-img-1">
								<div class="ch-info">
									<h3>Spa Manager</h3>
									<p>by Daniel Nyari</p>
									<div class="footer-bottom">
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="ch-item ch-img-2">
								<div class="ch-info">
									<h3>Stylist</h3>
									<p>by Johnathen</p>
									<div class="footer-bottom">
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="ch-item ch-img-3">
								<div class="ch-info">
									<h3>Manicurist</h3>
									<p>by Fedrick Paul</p>
									<div class="footer-bottom">
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="ch-item ch-img-4">
								<div class="ch-info">
									<h3>Specialist</h3>
									<p>by Stellawil vari</p>
									<div class="footer-bottom">
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</section>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- footer -->
	<?php include "head.php"; ?>
</body>
</html>