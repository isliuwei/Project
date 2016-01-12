<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>single</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/single.css">
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
	<div id="single-container">
		<div class="wrap">
			<img src="img/single.jpg" alt="">
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil </p>
			<div class="comment">
				<h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
				<img src="img/avatar.png" class="img-responsive" alt="">
				<p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
			</div>
			<div class="new-comment">
				<h3>Add New Comment</h3>
				<form action="welcome/comment" method="post">
					<p>
						<label>Name</label>
						<span>*</span>
						<input name="name" type="text" class="text" value="">
					</p>
					<p>
						<label>Email</label>
						<span>*</span>
						<input name="email" type="text" class="text" value="">
					</p>
					<p>
						<label>Website</label>
						<input name="website" type="text" class="text" value="">
					</p>
					<p>
						<label>Subject</label>
						<span>*</span>
						<textarea name="subject"></textarea>
					</p>
					<p>
						<input type="submit" value="Submit Comment" class="submit-btn">
					</p>
				</form>
			</div>
		</div>
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