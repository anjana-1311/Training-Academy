<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us Page</title>
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

<body class="contactUs bannerHeadingCenter">
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
				<h1>Contact Us</h1>
				<h3>A simple hello can lead to a million things..</h3>
				<h4>Let's start the  discussion.</h4>
			</div>
		</section>
	</section>
	
	<section class="wrapper">
	<!--
		==============
		about Section
		==============
	-->
	<section class="grid2">
		<div class="text">
		<div class="left">
			<p>We have worked with Startups, Individuals, Corporates
			and some of the Fortune 500 Companies including
			Samsung, MTN Telecom, KFC, Audi and More!
			We are backed with building
			
			<span>100+ Awesome Apps!</span></p>
			
			<p>CrossShore is one of such company who understands
			our business requirements and transforms it in to
			usable software that’s worth their fee
			<span>Carlos</span></p>
		</div>
		
		</div>
		
		<div class="contactUsForm" style="display:block;">
			<ul class="form" style="width:500px;" >
                <li>
                    <div class="label">Name<span>*</span></div>
                    <div class="value">
                        <input type="text" class="input" placeholder="Enter your Name"> 
                        <div class="validation">
                            <span style="display:block;">validation Message in this span</span>
                        </div>
                    </div> <!-- value Ends -->
                </li>
                
                <li>
                    <div class="label">Email<span>*</span></div>
                    <div class="value">
                        <input type="text" class="input" placeholder="Enter Your Email" value=""> 
                        <div class="validation">
                            <span style="display:block;">validation Message in this span</span>
                        </div>
                    </div> <!-- value Ends -->
                </li>
				
				<li>
                    <div class="label">Mobile No.<span>*</span></div>
                    <div class="value">
                        <input type="text" class="input" placeholder="Enter Mobile No." value="" > 
                        <div class="validation">
                            <span id="emailIdError" style="display: block;">validation Message in this span</span>
                        </div>
                    </div> <!-- value Ends -->
                </li>
				
				<li>
                    <div class="label">Message<span>*</span></div>
                    <div class="value">
                        <input type="text" class="input" placeholder="Enter Your Message..." value="">
                        <div class="validation">
                            <span id="emailIdError" style="display:block;">validation Message in this span</span>
                        </div>
                    </div> <!-- value Ends -->
                </li>
				
				<div class="submitBtn button" style="">
					<div class="btnLoader" id="btnLoader" style="display:none;">
						<span class="spinLoader"></span>
					</div>
					<input type="submit" name="submit" value="Submit" class="btn">
				</div>
            </ul>
		</div>
		
		<div class="contactUsForm" style="display:none;">
		<div class="form" style="width:500px;">
			<div class="emailImg"><img src="images/@email-icon.png"></div>
			
			<strong>Thank You, Enjoy!</strong>
			<span>We've Sent the download to your Inbox</span>
				
			<div class="submitBtn button" style="">
				<div class="btnLoader" style="display:none;">
					<span class="spinLoader"></span>
				</div>
				<input type="submit" name="submit" value="Back to Home" class="btn">
			</div>
			<span>If You have any Issue<a href="">Contact Us</a></span>
			
          </div>
		</div>
	</section>
	
	<!--
		==============
		getInTouch Section
		==============
	-->
	<section class="getInTouch title">
	<h2>Get In Touch with us</h2>
	<div class="grid2">
			<ul class="">
				<li class="">
					<span><img src="images/pin_icon.svg"></span> 
					<label>317, 318 Abhinav Arcade, Beside Bank
					of Baroda,Pritamnagar, Ashram Road,
					Ahmedabad 380006</label>
				</li>
				
				<li>
					<span><img src="images/phone_icon.svg"></span> 
					<label>+91 79 40091152</label>
				</li>
				
				<li>
					<span><img src="images/email_icon.svg"></span> 
					<label>info@crossshoresolutions.com</label>
				</li>
			</ul>
			
			
		<div class="contactUsImg">
			<img src="images/contact_us_img.png">
		</div>
	</div>
	</section>
</section>

	<!--
		==================
		Footer Start
		==================
	-->
	<?php require_once ('inc/php/footer.php');?>

</body>
</html>