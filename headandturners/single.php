<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog Details</title>
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
	<!-- single-page -->
	<div class="single-page blog">
		<div class="container">			
			<div class="col-md-8 single-page-left">
				<div class="single-agileinfo">
					<img src="images/g6.jpg" alt=""/>
					<h4>Fringilla condi me ntum consectetur</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
						Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor.</p>  
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna  
						in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
						you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> 
					<div class="stag-agileits">
						<ul>
							<li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>Admin</a></li>
							<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>September 30, 2016</li>
							<li><a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>0 Tags</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-comment" aria-hidden="true"></i>10 Comments</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></i>15</a></li>
						</ul>
					</div>
				</div>	
				<div class="admin-text">
					<h5>Written By Admin</h5>
					<div class="admin-w3lsleft">
						<a href="#"><img src="images/icon2.png" alt=""/></a>
					</div>
					<div class="admin-w3lsright">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<span>View all posts by:<a href="#"> Admin </a></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- related-posts -->
				<div class="row related-posts">
					<h3>Related Posts</h3>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="single.php" class="thumbnail wthree">
							<img src="images/g1.jpg" alt=""/>
						</a>
						<h5><a href="single.php">Lorem Ipsum is simply</a></h5>
					</div>	
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="single.php" class="thumbnail wthree">
							<img src="images/g4.jpg" alt=""/>
						</a>
						<h5><a href="single.php">Lorem Ipsum is simply</a></h5>
					</div>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="single.php" class="thumbnail wthree">
							<img src="images/g5.jpg" alt=""/>
						</a>
						<h5><a href="singlepage.php">Lorem Ipsum is simply</a></h5>
					</div>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="single.php" class="thumbnail wthree">
							<img src="images/g6.jpg" alt=""/>
						</a>
						<h5><a href="single.php">Lorem Ipsum is simply</a></h5>
					</div>					
				</div>				
				<!-- //related-posts -->
				<div class="response">
					<h3>Responses</h3>
					<div class="media response-info">
						<div class="media-left res-agileleft">
							<a href="#">
								<img class="media-object" src="images/icon2.png" alt=""/>
							</a>
							<h5><a href="#">Admin</a></h5>
						</div>
						<div class="media-body res-agileright">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>September 12, 2016</li>
								<li><a href="single.php">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left res-agileleft">
									<a href="#">
										<img class="media-object" src="images/icon2.png" alt=""/>
									</a>
									<h5><a href="#">Admin</a></h5>
								</div>
								<div class="media-body res-agileright">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>September 21, 2016</li>
										<li><a href="single.php">Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left res-agileleft">
							<a href="#">
								<img class="media-object" src="images/icon2.png" alt=""/>
							</a>
							<h5><a href="#">Admin</a></h5>
						</div>
						<div class="media-body res-agileright">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>September 28, 2016</li>
								<li><a href="single.php">Reply</a></li>
							</ul>		
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>	
				<div class="coment-form w3">
					<h3>Leave your comment</h3> 
					<form action="#" method="post"> 
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="text" name="Email(will not be published)*" placeholder="Email" required=""> 
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="Submit Comment">
					</form>
				</div>		
			</div>	
			<div class="col-md-4 blog-right">
					<h3>Categories</h3>
					<ul class="catgry w3-agile">
						<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Aliquam erat volutpat</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Integer rutrum ante eu lacus</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Cum sociis natoque penatibus</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Mauris fermentum dictum magna</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Sed laoreet aliquam leo</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Cum sociis natoque penatibus</a></li>
					</ul>
					<div class="blog-tags">
						<h3>Recent Tags</h3>
						<ul>
							<li><a href="#">Make Up</a></li>
							<li><a href="#">Nails</a></li>
							<li><a href="#">Tanning</a></li>
						</ul>
						<ul>
							<li><a href="#">Elemis</a></li>
							<li><a href="#">Hair Removal</a></li>
						</ul>
						<ul>
							<li><a href="#">Massage</a></li>
							<li><a href="#">Beauty party</a></li>
							<li><a href="#">Facials</a></li>
						</ul>
						<ul>
							<li><a href="#">Anti-Aging</a></li>
							<li><a href="#">Weddings</a></li>
						</ul>
					</div>
			</div>
				<div class="clearfix"> </div>
		</div>	
	</div>
	<!-- //single-page -->
	<!-- footer -->
	<?php include "footer.php"; ?>
</body>
</html>