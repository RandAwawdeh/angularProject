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
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php

$_SESSION["UserUsername"];
$_SESSION["UserPassword"];

?>
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

	$servername="localhost";
	$username="root";
	$password="00000000";
	$db_name="Chapters";
	
	$conn= new mysqli($servername,$username,$password,$db_name);
	
	if(isset($_POST['submit-search'])){
		
		$search = mysqli_real_escape_string($conn,$_POST['search']);
		$sql = "SELECT * FROM library WHERE BName  LIKE '%$search%' OR Author LIKE '%$search%' OR Cat LIKE '%$search%'";
		$result = mysqli_query($conn,$sql);
		$queryResult = mysqli_num_rows($result);
		
		if($queryResult > 0){
			$ShBook = "";
			while ($row = mysqli_fetch_assoc($result)){
				$ShBook =$ShBook."<div class='col-3 pt-2'>
						<div class='card text-white bg-dark' style='width: 18rem;'>
							<a href='http://localhost/Chapters/bdf/".$row["pdf_Link"]."'>
							<img class='card-img' src='http://localhost/Chapters/img/book.png' alt='book image'>
							</a>
							<div class='card-header'>".$row["Author"]."</div>
							<div class='card-body'>
								<h5 class='card-title'>".$row["BName"]."</h5>
								<p class='card-text'>".$row["Cat"]."</p>
							</div>
						</div>
						</div>";
			}
		}else{
			echo "<p class='h2 font-weight-light text-white text-center pt-3'>There are no results matching your search!</p>";
		}
	}
?>
	<div class="container-center" style="position: absolute; top: 25%; left: 50%; transform: translate(-50%,-50%);">
		
		<form action="SearchBT.php" method="POST">
			<input type="text" class="box" name="search" placeholder="Search any book" style="height: 40px; width: 300px; border-radius: 50px; border: 3px; padding: 20px;">
			<button class="fa fa-search" type="submit" name="submit-search" style="font-size: 20px; padding: 18px;color: #aaa; border-radius: 50%; left: -10%; top: 1px; transation-duration: .5s; position: relative; background: #9b7b73"></button>
		</form>
		
	</div>
	
	<div class="container-center px-3" style="padding-top: 10%;">
	<div class="row d-flex justify-content-around ">
		<? echo $ShBook;?>
    </div>
	</div>
	
</body>
<html>