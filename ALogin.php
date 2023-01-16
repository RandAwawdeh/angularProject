<?php

	if ( !isset($_POST['usernameA'], $_POST['passwordA']) ) {
		die ('Please fill both the username and password field!');
	}else{		
		
		$Username= $_POST['usernameA'];
		$Password = $_POST['passwordA'];

		$servername="localhost";
		$username="root";
		$password="00000000";
		$db_name="Chapters";

		$conn= new mysqli($servername,$username,$password,$db_name);

			if($conn -> connect_error){
				die("Not connected".$conn -> connected_error);
			}else{
	
			$sql = "SELECT * FROM Admins WHERE Username =  '$Username' AND password = '$Password' ";
			$result = $conn -> query($sql);

			if ($result -> num_rows > 0){
				
				echo "welcome";	
				echo "<br>";
				
				session_start();
	
				$_SESSION['AdminUsername'] = $_POST['username'];
				$_SESSION['AdminPassword'] = $_POST['password'];
				header('Location: LibraryControl.php');
				
			}else{
				session_start();
				
				$_SESSION['ANotFound']="No User Found !!";
				header('Location: Login.php');
			}
		}
	}

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

<body class=" bg-dark">
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="font-family: Homemade Apple;  ">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">
				<img src="img/bookshelf3.png" alt="logo" class="logo">
				Chapters
			</a>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item">
						<a class="nav-link" href="AddUsers.php">Add Users</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="UserControl.php">User Control</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="AddToLibrary.php">Add to Library</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="LibraryControl.php">Library Control</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
</body>
</html>