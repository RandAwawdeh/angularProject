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
  
  <link href="Style.css" rel="stylesheet" type="text/css">
</head>

<body class=" bg-dark" style="background-image: url('http://localhost/Chapters/img/sarah-dorweiler.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="font-family: Homemade Apple; ">
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
						<a class="nav-link" href="About.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Contact.html">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Login.php">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid pt-5">
		
		<div class="container py-5 px-5">
			<div class="row">
				<div class="col-md-6 px-5 py-5 bg-secondary align-content-center flex-wrap" style="opacity: 0.8;">
					<h2 class="text-center py-5" style="font-family: Homemade Apple; ">As User</h2>
					<form action="LoginUser.php" method="post" class="pb-5">
						<div class="form-group py-2">
							<input type="text" class="form-control" name ="usernameU" placeholder="Username">
						</div>
						<div class="form-group py-2">
							<input type="password" name ="passwordU" class="form-control" placeholder="Password">
						</div>
						<button type="submit" name="btn_LoginU" class="btn btn-lg btn-block btn-outline-light" id="LoginU">Login</button>
						<?php
							
							if(isset($_SESSION['NotFound']) && $_SESSION['NotFound'] !=''){
		
								echo '<p class="text-light text-center">'.$_SESSION['NotFound'].'</p>';
								unset($_SESSION['NotFound']);
							}
						?>
					</form>
				</div>
				<div class="col-md-6 px-5 py-5 bg-white align-content-center flex-wrap" style="opacity: 0.7;">
					<h2 class="text-center py-5" style="font-family: Homemade Apple; ">As Admin</h2>
					<form action="ALogin.php" method="post" class="pb-5">
						<div class="form-group py-2">
							<input type="text" class="form-control " name ="usernameA" id="usernameA" placeholder="Username">
						</div>
						<div class="form-group py-2">
							<input type="password" name ="passwordA" class="form-control" id="passwordA" placeholder="Password">
						</div>
						<button type="submit" name="btn_LoginA" class="btn btn-lg btn-block btn-secondary">Login</button>
						<?php
							
							if(isset($_SESSION['ANotFound']) && $_SESSION['ANotFound'] !=''){
							
								echo '<p class="text-dark text-center">'.$_SESSION['ANotFound'].'</p>';
								unset($_SESSION['ANotFound']);
							}
						?>
					</form>
				</div>
			</div>
		</div>
		
    </div>
</body>
</html>
	