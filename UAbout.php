<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Chapters</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css?family=Homemade+Apple&display=swap" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <link href="Style.css" rel="stylesheet">
</head>

<body class="bg-dark">
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="font-family: Homemade Apple;  ">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">
				<img src="img/bookshelf3.png" alt="logo" class="logo">
				Chapters
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="Library.php">Library</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Search.php">Search</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="UAbout.php">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="UContact.php">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Login.php">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<?php

	$_SESSION["UserUsername"];
	$_SESSION["UserPassword"];

	?>	
	<div class="container text-light">

		<div class="row justify-content-center py-5" style="font-family: Homemade Apple;">
			<div class="col-md-7 text-center">
				<h3 class="mb-3">About Chapters</h3>
			</div>
		</div>

		<!-- Intro Content -->
		<div class="row ">
			<div class="col-lg-6">
				<img class="img-fluid rounded mb-4" src="http://localhost/Chapters/img/adolfo-felix.jpg" alt="">
			</div>
			<div class="col-lg-6">
				<p>Some text should be writen here tell you about who we are and what our mission .. and what this website for.Some text should be writen here tell you about who we are and what our mission .. and what this website for.</p>
				<p>Some text should be writen here tell you about who we are and what our mission .. and what this website for.Some text should be writen here tell you about who we are and what our mission .. and what this website for.</p>
				<p>Some text should be writen here tell you about who we are and what our mission .. and what this website for.</p>
				<p>Some text should be writen here tell you about who we are and what our mission .. and what this website for.</p>
				<p>Some text should be writen here tell you about who we are and what our mission .. and what this website for.</p>
			</div>
		</div>
		<!-- /.row -->
		<hr class="featurette-divider">
	</div>
	
	<div class="py-5 text-light">
	
	  <div class="container">
			<div class="row justify-content-center mb-4" style="font-family: Homemade Apple;">
				<div class="col-md-7 text-center">
					<h3 class="mb-3">Meet Our Team</h3>
				</div>
			</div>
			
			<div class="row">
			<!-- column  -->
			<div class="col-lg-3 mb-4">
			<!-- Row -->
				<div class="row">
					<div class="col-md-12">
						<img src="http://localhost/Chapters/img/almostdesigner.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
					</div>
					
					<div class="col-md-12 text-center">
						<div class="pt-2">
							<h5 class="mt-4 font-weight-medium mb-0">Somebody's Name</h5>
							<h6 class="subtitle mb-3">Property Specialist</h6>
							<p>Somthnig should be written here about this team member and i have no idea what but he definitly hard worker and nice person.</p>
						</div>
					</div>
				</div>
			<!-- Row -->
			</div>
			<!-- column  -->
			<!-- column  -->
			
			<div class="col-lg-3 mb-4">
			<!-- Row -->
				<div class="row">
					<div class="col-md-12">
						<img src="http://localhost/Chapters/img/teamplayerg.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
					</div>
					
					<div class="col-md-12 text-center">
						<div class="pt-2">
							<h5 class="mt-4 font-weight-medium mb-0">Somebody's Name</h5>
							<h6 class="subtitle mb-3">Property Specialist</h6>
							<p>Somthnig should be written here about this team member and i have no idea what but he definitly hard worker and nice person.</p>
						</div>
					</div>
				</div>
			<!-- Row -->
			</div>
			<!-- column  -->
			<!-- column  -->
		  
			<div class="col-lg-3 mb-4">
			<!-- Row -->
				<div class="row">
					<div class="col-md-12">
						<img src="http://localhost/Chapters/img/stefanstefancik.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
					</div>
			  
					<div class="col-md-12 text-center">
						<div class="pt-2">
							<h5 class="mt-4 font-weight-medium mb-0">Somebody's Name</h5>
							<h6 class="subtitle mb-3">Property Specialist</h6>
							<p>Somthnig should be written here about this team member and i have no idea what but he definitly hard worker and nice person.</p>
						</div>
					</div>
				</div>
			<!-- Row -->
			</div>
			<!-- column  -->
			<!-- column  -->
		  
			<div class="col-lg-3 mb-4">
			<!-- Row -->
				<div class="row">
					<div class="col-md-12">
						<img src="http://localhost/Chapters/img/orangesweater.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
					</div>
			  
					<div class="col-md-12 text-center">
						<div class="pt-2">
							<h5 class="mt-4 font-weight-medium mb-0">Somebody's Name</h5>
							<h6 class="subtitle mb-3">Property Specialist</h6>
							<p>Somthnig should be written here about this team member and i have no idea what but he definitly hard worker and nice person.</p>
						</div>
					</div>
				</div>
			<!-- Row -->
			</div>
		
			</div>
		</div>
	</div>

</body>
</html>