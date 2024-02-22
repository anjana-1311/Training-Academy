<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Testimonial Page</title>
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

<body class="testimonial bannerHeadingCenter">
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
		<section class="wrapper">	
			<div class="bannerText">
				<h1>Testimonial</h2>
				<h3>A customer testimonial video is simply a happy</h3>
				<h4>We have filled this page with</h4>
			</div>
		</section>
	</section>
	
	<section class="wrapper">
	<!--
		===========================
		testimonial client Section
		==========================
	-->
	<section class="grid2 left testimonialClientDetails">
		<div class="clientProfile">
			<span><img src="images/user_img_1.png"></span>
		</div>
		
		<div class="text">
			<p><span class="quoteLeftIcon"><img src="images/quote_left_icon.svg"></span>The standard chunk of Lorem Ipsum used since the 1500s is
			reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are
			<span class="quoteRightIcon"><img src="images/quote_right_icon.svg"></span></p>
		
			<span class="clientName">
				<strong>John Smith</strong>
				<label>Python Developer</label>
			</span>
		</div>
	</section>
	
	<section class="grid2 right testimonialClientDetails ">
		<div class="text">
			<p><span class="quoteLeftIcon"><img src="images/quote_left_icon.svg"></span>The standard chunk of Lorem Ipsum used since the 1500s is
			reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are
			<span class="quoteRightIcon"><img src="images/quote_right_icon.svg"></span></p>
			
			<span class="clientName">
				<strong>John Smith</strong>
				<label>Python Developer</label>
			</span>
		</div>
		
		<div class="clientProfile flexItemImage">
			<span><img src="images/user_img_2.png"></span>
		</div>
	</section>
	
	
	<section class="grid2 left testimonialClientDetails flexcontainerImage">
		<div class="clientProfile flexItemImage">
			<span><img src="images/user_img_3.png"></span>
		</div>
		
		<div class="text flexItemImage">
			<p><span class="quoteLeftIcon"><img src="images/quote_left_icon.svg"></span>The standard chunk of Lorem Ipsum used since the 1500s is
			reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are
			<span class="quoteRightIcon"><img src="images/quote_right_icon.svg"></span></p>
			
			<span class="clientName">
				<strong>John Smith</strong>
				<label>Python Developer</label>
			</span>
		</div>
	</section>
	
	
	<section class="grid2 left testimonialClientDetails">
	
		<div class="text">
			<p><span class="quoteLeftIcon"><img src="images/quote_left_icon.svg"></span>The standard chunk of Lorem Ipsum used since the 1500s is
			reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are
			<span class="quoteRightIcon"><img src="images/quote_right_icon.svg"></span></p>
			
			<span class="clientName">
				<strong>John Smith</strong>
				<label>Python Developer</label>
			</span>
		</div>
		
		<div class="clientProfile">
		<video width="700" height="400" controls>
			<source src="images/video.mp4">
		</video>
		<!--<iframe width="700" height="400" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>-->
		</div>
	</section>

	<!--
		==============
		Section
		==============
	-->
	
	</section>
	
	<!--
		==================
		Footer Start
		==================
	-->
	<?php require_once ('inc/php/footer.php');?>

</body>
</html>