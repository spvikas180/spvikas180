<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
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
	<!-- contact -->
	<div class="w3lscontact">
		<div class="container">
			<div class="contact-agileinfo">
				<div class="col-md-6 contact-grid">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3199.156472268048!2d-122.33322693125768!3d47.60359383772897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ab310200d69%3A0xa61e1b711cec07b5!2s4th+Ave%2C+Seattle%2C+WA+98104!5e0!3m2!1sen!2sin!4v1474030289092"></iframe>
				</div>
				<div class="col-md-6 contact-grid">
					<h3 class="wthree-title">Get in Touch</h3>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum </p>
					<form action="#" method="post"> 
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="text" class="ipt-agileits" name="Email" placeholder="Email" required=""> 
						<input type="text" name="phone" placeholder="Telephone" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3agile-address">
				<ul>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>123 Fourth Avenue,SEATTLE WA 98104,USA</li>
					<li><i class="phon">CALL US :</i> +0955 670 204</li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>
				</ul>
			</div> 
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<?php include "footer.php"; ?>
</body>
</html>