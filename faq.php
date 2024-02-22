<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Faq Page</title>
	<meta name="viewport" content="wedth=device-wedth, initial-scale=1.0">
	<link rel="stylesheet" href="inc/css/style.css">
	<link rel="stylesheet" href="inc/css/theme.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
	function openMenu()
	{	
		/* if(currentWindowWidth > 1050)
		{
			$("responsiveMenuIcon").toggleClass("collapseMenu");
			$(".navbar").toggleClass("collapse");
		}
		else
		{ */
			$(".navbar").toggle();
			$("#menuOverlay").toggle();			
		// }
	}
	</script>
</head>

<body class="faq">
<!--
	===============
	Header 
	=============== 
-->
<header class="header headerMain">
	<section class="wrapper">
	<a href="#" class="logo"><img src="images/logo.png"></a>
	
	<a href="javascript:;" onclick="openMenu()" class="responsiveMenu"></a>

	<span class="searchInput"><input type="search" class="input" placeholder="Search for anything"></span>

	<nav class="navbar">
		<a class="active" href="index.php">Home</a>
		<a href="about_us.php">About Us</a>
		<a href="detail_page.php">Courses<span class="icon"></span></a>
		<a href="testimonial.php">Testimonial</a>
		<a href="contact_us.php">Contact Us</a>
		
		
		<div class="button">
			<div class="btnLoader" style="display:none;">
				<span class="spinLoader"></span>
			</div>			
			<input type="submit" class="btn" value="Login/Register">
		</div>
	</nav>
	</section>
</header>

<div class="overlay" id="menuOverlay" style="display:none;" onClick="openMenu()"></div>
	
	<!-- 
		==============
		banner Section
		==============
	-->
	<section class="bannerSubpages">
		<section class="wrapper grid2">	
			<div class="bannerText">
				<h2>Frequently Asked Questions ?</h2>
				<p>HTML is the foundation of all web pages. Without HTML you wouldn’t be able to organize text or add images or videos to your web pages.?</p>
			</div>
			
			<div class="bannerImage">
				<img src="images/faq_banner.png">
			</div>
		</section>
	</section>
	
	<section class="wrapper">
	<!--
		===========================
		FAQ section
		==========================
	-->
	<div class="questionList">
		<div class="question">
			<h2>1. Amazon Web Services</h2>
			<a href="">
				<img src="images/down-arrow.svg" style="display:none;"> 
				<img src="images/up-arrow.svg">
			</a>
			<label>The Amazon Web Services FAQs may not be the prettiest, but they are incredibly functional, and you can find your answer with ease.</label>
		</div>
		
		<div class="question">
			<h2>2. Great FAQ Pages to Inspire You</h2>
			<a href="">
				<img src="images/down-arrow.svg" style="display:none;"> 
				<img src="images/up-arrow.svg">
			</a>
			<label>The Amazon Web Services FAQs may not be the prettiest, but they are incredibly functional, and you can find your answer with ease.</label>
		</div>
		
		<div class="question">
			<h2>3. Great FAQ Pages to Inspire You</h2>
			<a href="">
				<img src="images/down-arrow.svg" style="display:none;"> 
				<img src="images/up-arrow.svg">
			</a>
			<label>The Amazon Web Services FAQs may not be the prettiest, but they are incredibly functional, and you can find your answer with ease.</label>
		</div>
		
		<div class="question">
		<h2>4. Great FAQ Pages to Inspire You</h2>
			<a href="">
				<img src="images/down-arrow.svg" style="display:none;"> 
				<img src="images/up-arrow.svg">
			</a>
			<label>The Amazon Web Services FAQs may not be the prettiest, but they are incredibly functional, and you can find your answer with ease.</label>
		</div>
		
		<div class="question">
			<h2>5. Great FAQ Pages to Inspire You</h2>
			<a href="">
				<img src="images/down-arrow.svg">
				<img src="images/up-arrow.svg" style="display:none;">
			</a>
		</div>
	</div>

	</section>
	
	<!--
		==================
		Footer Start
		==================
	-->
	<?php require_once ('inc/php/footer.php');?>

</body>
</html>