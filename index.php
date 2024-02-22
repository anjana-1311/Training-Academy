<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index Page</title>
	<meta name="viewport" content="wedth=device-wedth, initial-scale=1.0">
	<!--<meta http-equiv="refresh" content="0; url=http://192.168.1.200/training-academy/index.php"/>-->	
	<link rel="stylesheet" href="inc/css/style.css">
	<link rel="stylesheet" href="inc/css/style.css">
	<link rel="stylesheet" href="inc/css/theme.css">
	<link rel="stylesheet" type="html/css" href="footer.html">
	
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'> 
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

<body>
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
	
	<div class="overlay" id="menuOverlay" style="display:none;" onClick="openMenu()"></div>
</header>


	
	<!--
		==============
		banner Section
		==============
	-->
	<section class="banner">
		<section class="wrapper grid2">
			<div class="bannerText"> 
				<h1>Build Skills With Experts, Any Time, Anywhere</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				
				<span class="searchNow">
					<input type="search" class="input" placeholder="What do want to learn ?" style="width:100%;">
					
					<div class="button searchBtn">
						<div class="btnLoader" style="display:none">
							<span class="spinLoader"></span>
						</div>			
						<input type="submit" class="btn" value="Search Now">
					</div>
				</span>
				
				<div class="popular">
					<label>Popular:</label>
					<a href="">Development</a>
					<a href="">Marketing</a>
					<a href="">Illustration</a>
					<a href="">UX/UI</a>
				</div>
			</div>
			
			<div class="bannerImage">
				<img src="images/banner-img2.png">
			</div>
		</section>
	</section>
	
	<!--
		==============
		states
		==============
	-->
	<section class="wrapper">
	
	<section class="card states grid3">
		<div class="coursesInfo">
			<span><img src="images/system_icon.svg"></span>
			
			<div class="">
				<strong>10,000 Online Courses</strong>
				<label>Lorem ipsum dolor sit amet consectets.</label>
			</div>
		</div>
	
		<div class="coursesInfo">
			<span><img src="images/expert_user_icon.svg"></span>
			<div class="">
				<strong>Experts Teachers</strong>
				<label>Lorem ipsum dolor sit amet consectets.</label>
			</div>
		</div>
	
		<div class="coursesInfo">
			<span><img src="images/lifetime_icon.svg"></span>
			<div class="">
				<strong>Lifetime Access</strong>
				<label>Lorem ipsum dolor sit amet consectets.</label>
			</div>
		</div>
	</section>
	
	<!--
		=============
		Courses level
		=============
	-->
	
	<section class="courseSection title">
	<h4>Go at your own pace</h4>
	<h2>Delivering learning for everyone!</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<div class="grid2">
			<div class="courseDetails">
				<h3 class="titleShapePink">For Beginners</h3>
				<div class="card">
					<h3>Basics Of Programming</h3>
					<p>Lorem Ipsum is simply dummy text printing and typesetting industry.Lorem Ipsum is simply dummy text printing and typesetting industry.</p>
				</div>
				
				<div class="card">
					<h3>Basics Of Programming</h3>
					<p>Lorem Ipsum is simply dummy text printing and typesetting industry.Lorem Ipsum is simply dummy text printing and typesetting industry.</p>
				</div>
			</div>
			
			<div class="imgWrapper">
				<img src="images/img13.jpg">
			</div>
		</div>

		<div class="grid2">
			<div class="imgWrapper">
				<img src="images/img14.jpg">
			</div>
			
			<div class="courseDetails">
				<h3 class="titleShapeGreen">For Intermediate</h3>
				<div class="card"> 
					<h3>Basics Of Programming</h3>
					<p>Lorem Ipsum is simply dummy text printing and typesetting industry.Lorem Ipsum is simply dummy text printing and typesetting industry.</p>
				</div>
				
				<div class="card">
					<h3>Basics Of Programming</h3>
					<p>Lorem Ipsum is simply dummy text printing and typesetting industry.Lorem Ipsum is simply dummy text printing and typesetting industry.</p>
				</div>
			</div>
		</div>
		
		<div class="grid2">
			<div class="courseDetails">
			<h3 class="titleShapeSkyblue">For Super Experince</h3>
				<div class="card">
					<h3>Basics Of Programming</h3>
					<p>Lorem Ipsum is simply dummy text printing and typesetting industry.Lorem Ipsum is simply dummy text printing and typesetting industry.</p>
				</div>
				
				<div class="card">
					<h3>Basics Of Programming</h3>
					<p>Lorem Ipsum is simply dummy text printing and typesetting industry.Lorem Ipsum is simply dummy text printing and typesetting industry.</p>
				</div>
			</div>
			
			<div class="imgWrapper">
				<img src="images/super-experince.png">
			</div>
		</div>
	</section>
	<!---
		===============
		Coaching Lessons
		===============
	--->
	<section class="coachingLessons title">
		<h4>Education for everyone</h4>
		<h2>Online Coaching Lessons For Remote Learning</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<div class="grid3">
			<div class="remoteLearn">
				<span><img src="images/book_icon.svg"></span>
				<strong>Learn the Latest Skills</strong>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
				<a href="">Start Now!</a>
			</div>
			
			<div class="remoteLearn">
				<span><img src="images/airplay_icon.svg"></span>
				<strong>Go at Your Own Pace</strong>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
				<a href="">Start Now!</a>
			</div>
		
			<div class="remoteLearn">
				<span><img src="images/check_icon.svg"></span>
				<strong>Learn from Industry Experts</strong>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
				<a href="">Start Now!</a>
			</div>
		</div>
	</div>
	</section>
	
	<!---
		==================
		Distance Learning
		==================
	--->
	<section class="distanceLearning title grid2">
		<div class="left">
			<h4 style="text-align:left;">Distance Learning</h4>
			<h2>Build   Project 
			Management Skills Online,
			Anytime</h2>
			
			<span>Want to learn and earn PDUs or CEUs on your schedule — anytime, anywhere? Or, pick up a new skill quickly like, project team leadership or agile? Browse our most popular online courses.</span>

			<label>Grow your knowledge and your opportunities with thought leadership, training and tools.</label>
			<a href="">Explore</a>
		</div>
		
		<div class="imgWrapper">
			<img src="images/img3.jpeg">
		</div>	
	</section>
	</section>
	
	<!--
		==================
		Footer Start
		==================
	-->
	<?php require_once ('footer.php'); ?>

	
</body>

</html>