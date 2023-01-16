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

<body style="background-color: #c0978d;">
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
						<a class="nav-link" href="Logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<?php

	$_SESSION["UserUsername"];
	$_SESSION["UserPassword"];
	?>	
	<div class="container pt-5 text-light">
		<div style="text-align:center;">
			<h1 class="mt-5 mb-3">CONTACT US</h1>
			<p>If you have any question, feel free to contact us. We'll get back to you as soon as possible. </p>
		</div>
		
	<!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
		<div class="row" style="margin-top: 60px; align-items: center; justify-content: center">
		  <div class="col-lg-8 mb-5">
			<form name="sentMessage" mmethod="post" novalidate>
				<div class="control-group form-group">
					<div class="controls">
						<label>Email us at SomeOnemail@gmail.com</label>
					</div>
					<div class="controls">
						<p>We're available by phone & chat Sun - Thu, 10 a.m - 6 p.m </p>
						<label>Call us at 07901234567</label>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Full Name</label>
						<input type="text" class="form-control" name="name" required data-validation-required-message="Please enter your name.">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Phone Number</label>
						<input type="tel" class="form-control" name="phone" required data-validation-required-message="Please enter your phone number.">
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Email Address</label>
						<input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Message</label>
						<textarea rows="10" cols="100" class="form-control" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
					</div>
				</div>
				<div name="success"></div>
				<!-- For success/fail messages -->
				<button type="submit" class="btn btn-dark" name="sendMessageButton">Send Message</button>
			</form>
			<?php
				if(isset($_POST["sendMessageBtn"])){
				$conn= new mysqli("localhost","root","00000000","chapters");
					if($conn-> connect_error){
						die("Not connected".$conn -> connected_error);
					}else{
						
						$sql="INSERT INTO contact VALUES ('','$_POST[name]','$_POST[phone]','$_POST[email]','$_POST[message]')";
					
				if($conn->multi_query($sql)==TRUE){
					echo "message sent ";
				}else{
					echo "can't send message".$sql."<br>".$conn->error;
				}
				$conn->close;}
			}
			?>	
		</div>

    </div>
</body>
</html>