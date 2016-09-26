<?php
  //phpinfo();
  error_reporting(E_ALL);
  ini_set("display_errors", "1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8">
	<meta httpequiv="XUACompatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mike Smith | Developer</title>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!-- Custom Stylesheet & Font -->
	<link href="css/main.css" rel="stylesheet">
	<link href="js/main.js" rel="javascript">
	
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet">
	
	<style type="text/css">
		.navbar {
			border-radius: 0;
			background-color:rgb(196, 186, 186);
			background-image: none;
		}
		.navbar-inverse .navbar-nav > li > a {
			color: white;
		}
		.header-wrapper {
			background-image: url("images/background_images/c9e42240.jpg");
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
			min-height: 300px;
			padding: 40px;
		}
	</style>

	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
		
		<div class="container">
		
			<div class="navbar-header" >
				<a class="navbar-brand">Michael "Mike" Smith</a>
				
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			
			<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-header-right">
						<li><a href="#about">About Page</a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#contact">Contact</a></li>
						<li><a href="blog.html" target="_blank">Blog</a></li>
						<li><a href="#" target="_blank">Facebook</a></li>
						<li><a href="#" target="_blank">Twitter</a></li>
						<li><a href="#" target="_blank">LinkedIn</a></li>
						<li><a href="#" target="_blank">Google+</a></li>
					</ul>
			</div><!-- end of collapse navbar-collapse -->
				
		</div><!-- end of  container -->
			
	</nav><!-- end of navbar navbar-inverse -->
	
	<div class="header-wrapper">
		<div class="hn">
			<h1>Mike Smith</h1>
		</div>
		<div class="hq">
			<p>An aspiring Web Designer.</p>
		</div>
	</div><!-- end of header-wrapper -->
	
	<div class="container">
		<section id="about" class="row">
			<div class="body-container">
				<h1 style="text-align:center;">About who I am</h1>
				<div class="col-md-6 col-sm-12 text-justify">
					<p>I have been interested in IT for over 20+ years and it started with DOS. Over the years I have learned many technical skills. I spent a few years in the Help Desk supporting everything from Apple iOS devices to Microsoft products. The one thing I came to love is writing code and watching the magic happen.</p>
					
					<p>After returning to school I finished with a Bachelor's in Software Engineering back in March 2015. I have since that time, worked in the help desk role and continuing my education on my own through <a href="http://www.freecodecamp.com/">Learn to Code With Me</a> and <a href="https://www.udemy.com/user/cdeafadf-7b61-4f3f-8434-377f000bbe5f/">Udemy</a>.</p>
				</div>
				
				<div class="col-md-6 col-sm-12 text-just">
					<p>Now I am taking my next step into IT with Web Design. I have a strong affinity with small company's looking to make a foot print on the web and getting their services out there or just maintain an existing site.</p>
					
					<p>My studies have consisted of HTML5, CSS3, Javascript, Bootstrap, JQuery to name a few. I have not stopped learning and love taking new challenges. If you're looking for a Web Designer, look no further.</p>
				</div>
			</div>
		</section>
		
	</div><!-- end of container -->
	
	<hr></hr>
	
		<section id="portfolio">
			<p></p>
		</section>
	
	<hr></hr>
	
	<div id="contact">
		<div class="footer">
			<form name="myForm" class="form-horizontal" role="form" method="POST" action="#">
				<div class="form-group">
					<label for="firstName=" class="col-sm-2 control-label">First Name:</label>
					<div class="col-sm-10">
						<input type="text" name="firstName" class="form-control" required>
					</div>
				</div>

				<div class="form-group">
					<label for="lastName=" class="col-sm-2 control-label">Last Name:</label>
					<div class="col-sm-10">
						<input type="text" name="lastName" class="form-control" required>
					</div>
				</div>

				<div class="form-group">
					<label for="emailAddress=" class="col-sm-2 control-label">Email Address:</label>
					<div class="col-sm-10">
						<input type="email" name="emailAddress" class="form-control" required>
					</div>
				</div>

				<div class="form-group">
					<label for="message=" class="col-sm-2 control-label">Message:</label>
					<div class="col-sm-10">
						<textarea name="message" class="form-control" rows="5"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
   
</body>
</html>