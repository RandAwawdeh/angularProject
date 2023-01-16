<?php

session_start();

$conn= new mysqli("localhost","root","00000000","Chapters");

if($conn -> connect_error){
	die("Not connected".$conn -> connected_error);
}else{
	
	$sql = "SELECT * FROM library ";
	$result = $conn -> query($sql);
	
	if ($result -> num_rows > 0){
		
		$Book = "";
		
		while ($row = $result -> fetch_assoc()){
			
			$Book =$Book."
						<div class='col-3 pt-2'>
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
		echo "No Data ";
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
	
	<div class="row justify-content-md-center py-5" style="position: relative; width: 100%; min-height: 1px; padding-right: 15px; padding-left: 15px; margin-bottom: 1.5rem; text-align: center; font-family: Homemade Apple;">
		<div class="col-lg-3">
			<form method="POST" action="type.php">
			<input type="hidden" name="CATid" value="Comics">
			<button style="border: none; background-color: Transparent; overflow: hidden; cursor: pointer; outline:none;" type="submit" name="subCat">
				<img src="http://localhost/Chapters/img/jester.png" width="150" height="150">
			</button>
			</form>
			<h2 class="mt-3"  >Comics</h2>
		</div>
		<div class="col-lg-3">
			<form method="POST" action="type.php">
			<input type="hidden" name="CATid" value="Political">
			<button style="border: none; background-color: Transparent; overflow: hidden; cursor: pointer; outline:none;" type="submit" name="subCat">
				<img src="http://localhost/Chapters/img/debate.png" width="150" height="150">
			</button>
			</form>
			<h2 class="mt-3">Political</h2>
		</div>
		<div class="col-lg-3">
			<form method="POST" action="type.php">
			<input type="hidden" name="CATid" value="Finanical">
			<button style="border: none; background-color: Transparent; overflow: hidden; cursor: pointer; outline:none;" type="submit" name="subCat">
				<img src="http://localhost/Chapters/img/money.png" width="150" height="150">
			</button>
			</form>
			<h2 class="mt-3">finanical</h2>
		</div>
		<div class="col-lg-3">
			<form method="POST" action="type.php">
			<input type="hidden" name="CATid" value="Novel">
			<button style="border: none; background-color: Transparent; overflow: hidden; cursor: pointer; outline:none;" type="submit" name="subCat" >
				<img src="http://localhost/Chapters/img/writeink.png" width="150" height="150">
			</button>
			</form>
			<h2 class="mt-3">novel</h2>
		</div>
    </div>
	
<?php

	if( isset($_POST['subCat']) ){
	
	$ct = $_POST['CATid'];

	$query = "SELECT * FROM library WHERE Cat='$ct' ";
	$resultQ = mysqli_query($conn,$query);
	$queryResult = mysqli_num_rows($resultQ);
	
	if($queryResult > 0){
		
		$TBook = "";

		while ($row = mysqli_fetch_assoc($resultQ)){

			$TBook=$TBook."
						<div class='col-3 pt-2'>
						<div class='card text-white bg-dark' style='width: 18rem;'>
							<a href='http://localhost/Chapters/bdf/".$row["pdf_Link"]."'>
								<img class='card-img' src='http://localhost/Chapters/img/BK2.png' alt='book image'>
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
		echo "<h1 class='text-center text-white'> No Data </h1>";
	}
	}
	
?>
	<div class="container-fluid px-3 py-5">
	<div class="row d-flex justify-content-around ">
		<? echo $TBook;?>
    </div>
	</div>
	
	<div class="container-fluid px-3 py-5">
	<div class="row d-flex justify-content ">
		<? echo $Book;?>
    </div>
	</div>
</body>
<html>