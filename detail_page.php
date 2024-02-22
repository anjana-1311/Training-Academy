<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Details Page</title>
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

<body class="detailPage">
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
			<div class="btnLoader" style="display:none">
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
	<section class="banner">
		<section class="wrapper grid2">	
			<div class="bannerText">
				<h1>Python for Finance</h1>
				<p>HTML is the foundation of all web pages. Without HTML
				 you wouldn’t be able to organize text or add images or
				 videos to your web pages.?</p>
			</div>
		
			<div class="bannerImg">
				<img src="images/detail_banner.png">
			</div>
		</section>
	</section>
	
	
	<!--
		==============
		about Section
		==============
	-->
	<section class="leftPanel wrapper">
		<div class="aboutSection">
			<div>
				<h3 class="titleShapePink">About Course</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporincididunt 
					magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus commodo viverra  maecenas 
					vel facilisis.  Risus commodo viverra  maecenas  accumsan lacus vel facilisis.
				</p>
				
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporincididunt 
					magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus commodo viverra  maecenas 
					vel facilisis.  Risus commodo viverra  maecenas  accumsan lacus vel facilisis.
				</p>
			</div>
			
			<!--
				================
				Syllabus Section
				================
			-->
				<div class="Syllabus">
				<h3 class="titleShapeSkyblue">Syllabus</h3>
				
				<ul class="syllabusList">
					<li class="">
						<h2><span>1</span>Python Introduction</h2>
						<label>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua.</label>
					</li>
					
					<li class="show">
						<h2><span>2</span>Python MySQL</h2>
						<label>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua.</label>
					</li>
					
					<li class="show">
						<h2><span>3</span>Stepping into the World of Python</h2>
						<label>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua.</label>
					</li>
					
					<li class="show">
						<h2><span>4</span>File Handling</h2>
						<label>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua.</label>
					</li>
					
					<li class="show">
						<h2><span>5</span>Machine Learning</h2>
						<label>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua.</label>
					</li>
				</ul>
				
				<div class="viewMoreBtn" style="width:215px;">
					<div class="btnLoader" style="display:none;">
						<span class="spinLoader"></span>
					</div>
					<a href="" class="btn">View More Details</a>
				</div>
			</div>
		</div>
	
	<!--
		================
		right Panel Section
		================
	-->
	<div class="card rightPanel flex-container">
		<div class="states flex-item">
			<span>Earn<strong>Certificate</strong>of completion with</span>
			<span>Join<strong>5,293,189</strong>People who have taken this course</span>
			<span>Time to Complete<strong>9 Hours</strong></span>
		</div>
			
		<div class="inqueryform flex-item">
				<h3>Inquiry Now</h3>
			<ul class="form">
                <li>
                    <div class="label">First Name<span>*</span></div>
                    <div class="value">
                        <input type="text" class="input" placeholder="Enter First Name" style="width:90%;"> 
                        <div class="validation">
                            <span style="display: block;">validation Message in this span</span>
                        </div>
                    </div> <!-- value Ends -->
                </li>
                
                <li>
                    <div class="label">Last Name<span>*</span></div>
                    <div class="value">
                        <input type="text" class="input" placeholder="Enter Last Name" value="" style="width:90%;"> 
                        <div class="validation">
                            <span id="emailIdError" style="display: block;">validation Message in this span</span>
                        </div>
                    </div> <!-- value Ends -->
                </li>
				
				<li>
                    <div class="label">Mobile No.<span>*</span></div>
                    <div class="value">
                        <input type="text" class="input" placeholder="Enter Mobile No." value="" style="width:90%;"> 
                        <div class="validation">
                            <span id="emailIdError" style="display: block;">validation Message in this span</span>
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
	</div>
	
		
	
</section>

	


	
	
	<!--
		================
		Company logo
		================
	-->
	<section class="companyLogo">
	<h3>Students Got The Job At</h3>
		<span><img src="images/google_icon.svg"></span>
		<span class=""><img src="images/ibm_icon.svg"></span>
		<span class=""><img src="images/nasa_icon.svg"></span>
		<span class=""><img src="images/facebook_icon.svg"></span>
		<span class=""><img src="images/microsoft_icon.svg"></span>
	</section>
	
	
	<!--
		==================
		Footer Start
		==================
	-->
	<?php require_once ('inc/php/footer.php'); ?>

</body>
</html>