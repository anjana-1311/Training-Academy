<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>About Us Page</title>
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

<body class="aboutPage">
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
	<section class="bannerSubpages">
		<section class="wrapper grid2">	
			<div class="bannerText">
				<h1>About Us</h1>
				<p>HTML is the foundation of all web pages. Without HTML
				 you wouldn’t be able to organize text or add images or
				 videos to your web pages.?</p>
			</div>
		
			<div class="bannerImage">
				<img src="images/about_banner_bg.png">
			</div>
			
		</section>
	</section>
	
	<section class="wrapper">
	<!--
		==============
		about Section
		==============
	-->
	<section class="distanceLearning title grid2">
		<div class="aboutUsImages">
			<img src="images/about_img1.png">
			<img src="images/about_img2.png">
			<img src="images/about_img3.png">
			<img src="images/about_img4.png">	
		</div>
		
		<div class="">
			<h4 style="text-align:left;">Distance Learning</h4>
			<h2>89% of people learning for
			professional development report
			career benefits like getting a
			promotion, starting a new career</h2>
			
			<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
			eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
			
			<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
			eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
			
			<div class="userIcon grid2">
				<a href=""><span class="redCircle"><img src="images/expert_instruction_icon.svg"></span>Expert Instruction</a>
				<a href=""><span class="redCircle"><img src="images/lifetime_acces_icon.svg"></span>Lifetime Acces</a>
				<a href=""><span class="redCircle"><img src="images/remote_learning_icon.svg"></span>Remote Learning</a>
				<a href=""><span class="redCircle"><img src="images/self_development_icon.svg"></span>Self Development</a>
			</div>
		</div>
	</section>
	
	<!--
		==============
		flexibleStudy Section
		==============
	-->
	<section class="flexibleStudy distanceLearning title">
	<div class="grid2">
		<div class="">
			<h4>Distance Learning</h4>
			<h2>Flexible Study at Your Own Pace, 
			According to Your Own Needs</h2>
			
			<span>With the Odemy, you can study whenever and wherever you choose.We have students in over 175 countries and a global reputation as a pioneer in the field of  flexible learning. Our teaching also means, if you travel often or need to relocate, you can continue to study wherever you go.</span>
			
			<div class="card shape">
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat </p>
				
				<div class="userProfile">
					<label>John Smith</label>
					<strong>Python Developer</strong>
					<span><img src="images/user_img.jpg" style="width:50px;"></span>
				</div>
			</div>
		</div>
		
		<div class="grid2">
			<div class="states">
				<strong>1,932</strong>
				<label>Finished Sessions</label>
			</div>
			
			<div class="states">
				<strong>3,279</strong>
				<label>Enrolled Learners</label>
			</div>
			
			<div class="states">
				<strong>250</strong>
				<label>Online Instructors</label>
			</div>
			
			<div class="states">
				<strong>100%</strong>
				<label>Satisfaction Rat</label>
			</div>
		</div>
	</div>
	<div class="videosImg"><img src="images/videoimg1.jpg"></div>
	</section>
	
			
	<!--
		================
		Education Section
		================
	-->
	<section class="headingCenter title">
		<h4>Education for everyone</h4>
		<h2>Affordable Online Courses and 
		Learning Opportunities​</h2>
	
		<p>Finding your own space and utilize better learning options can result in faster than 
		the traditional ways. Enjoy the beauty of eLearning!</p>
		
		<div class="grid4 learnLatestTopSkill">
			<div class="card">
				<i><img src="images/setting_icon.svg"></i>
				<strong>Learn the Latest Top Skills</strong>
				<label>Learning top skills can bring 
				an extra-ordinary outcome in a career.</label>
				<a href="">Start Now!</a>
			</div>
			
			<div class="card">
			<i><img src="images/setting_icon.svg"></i>
				<strong>Learn in Your Own Pace</strong>
				<label>Learning top skills can bring 
				an extra-ordinary outcome in a career.</label>
				<a href="">Start Now!</a>
			</div>
			
			<div class="card">
				<i><img src="images/setting_icon.svg"></i>
				<strong>Learn From Industry Experts</strong>
				<label>Learning top skills can bring 
				an extra-ordinary outcome in a career.</label>
				<a href="">Start Now!</a>
			</div>
			
			<div class="card">
				<i><img src="images/setting_icon.svg"></i>
				<strong>Enjoy Learning From Anywhere</strong>
				<label>Learning top skills can bring 
				an extra-ordinary outcome in a career.</label>
				<a href="">Start Now!</a>
			</div>
		</div>
		
	</section>
	
	<!--
		================
		Instructor Section
		================
	-->
	<section class="headingCenter title">
		<h4>Instructor</h4>
		<h2>Course Advisor​</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
		tempor incididunt ut labore et dolore magna aliqua.</p>
		
		<div class="slider grid2">
			<div class="">
				<span><img src="images/project_manager.jpg"></span>
				<div class="card">
					<label>Sarah Taylor</label>
					<strong>Agile Project Expert</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<div class="socialIcon">
						<i><img src="images/facebook_small_icon.svg"></i>
						<i><img src="images/instagram_small_icon.svg"></i>
						<i><img src="images/twitter_small-icon.svg"></i>
						<i><img src="images/linkedin_small_icon.svg"></i>
					</div>
				</div>
			</div>
			
			<div class="">
				<span><img src="images/project_manager.jpg"></span>
				<div class="card">
					<label>Sarah Taylor</label>
					<strong>Agile Project Expert</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
					tempor incididunt ut labore et dolore magna aliqua.</p>
					
					<div class="socialIcon">
						<i><img src="images/facebook_small_icon.svg"></i>
						<i><img src="images/instagram_small_icon.svg"></i>
						<i><img src="images/twitter_small-icon.svg"></i>
						<i><img src="images/linkedin_small_icon.svg"></i>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	
	<!--
		================
		Certification Section
		================
	-->
	<section class="headingCenter title">
		<h4>Affordable Certification</h4>
		<h2>Get Your Quality Skills Certificate
		Through Online Exam</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
		tempor incididunt ut labore et dolore magna aliqua.</p>
		<div class="button" style="">
				<div class="btnLoader" style="display:none">
					<span class="spinLoader"></span>
				</div>			
				<input type="submit" class="btn" value="Get Start Now!">
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


	

	


