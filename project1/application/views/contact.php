<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contact</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/contact.css">
	<script type="application/x-javascript"> 
		addEventListener("load", function() { 
			setTimeout(hideURLbar, 0); 
		}, false); 
		function hideURLbar(){ 
			window.scrollTo(0,1);
		} 
	</script>
	<!-- webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,600,500,900,700,100,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<!-- // webfonts -->
</head>
<body>
	<div id="header" class="contact-header">
		<span class="nav-icon"></span>
		<div id="nav">
			<div class="nav-wrap"></div>	
			<ul class="nav-menu-list">
				<li><a href="index.php">HOME</a></li>
				<li><a href="#aboutme">ABOUT</a></li>
				<li><a href="#myservice">SERVICES</a></li>
				<li><a href="#portfolio">PORTFOLIO</a></li>
				<li><a href="#myblog">BLOG</a></li>
				<li><a href="#contact">CONTACT</a></li>
			</ul>
			<span class="close"></span>
		</div>
	</div>
	<div id="contact-container">
		<div class="wrap">
			<div class="container-left">
				<form action="welcome/message" method="post">
					<p>
						<label for="name">Your Name:</label>
						<input type="text" name="username" id="username">
					</p>
					<p>
						<label for="mail">Email:</label>
						<input type="text" name="email" id="email">
					</p>
					<p>
						<label for="">Message:</label>
						<textarea   cols="30" rows="10" id="content"></textarea>
					</p>
						<input name="submit" type="button" id="submit" class="submit-btn" value="Submit">
				</form>
						
			</div>
			<div class="container-right">
				<h3>Address</h3>
				<p class="right-content">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non</p>
				<p class="right-phone">1-25-2568-897</p>
				<a href="mailto:lw.588@163.com">lw.588@163.com</a>
			</div>
		</div>
	</div>
	
	<div id="error">
		<img src="img/error.png" alt="" title="操作超时。">
	</div>
	

	<div id="footer">
		<div class="wrap">
			<div class="bbs">
				<div class="bbs-left">
					<p>Template by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
				</div>
				<div class="bbs-right">
					<ul>
						<li><a href="#"><span class="facebook"></span></a></li>
						<li><a href="#"><span class="twitter"> </span></a></li>
						<li><a href="#"><span class="dribbble"></span></a></li>
						<li><a href="#"><span class="tech"></span></a></li>
					</ul>
				</div>
			</div>
		</div>	
	</div>






















<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>






	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/index.js"></script>
	<script src="js/contact.js"></script>

	<!-- start-smoth-scrolling-->
	<script src="js/easing.js"></script>
	<script src="js/move-top.js"></script>
	<!-- // start-smoth-scrolling-->

	<!-- light-box-script -->
	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css"/>
	<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.port-list a').Chocolat({linkImages:false});
		});
	</script>
	<!-- // light-box-script -->

</body>
</html>