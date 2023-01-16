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

<body class=" bg-dark">
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="font-family: Homemade Apple;  ">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">
				<img src="img/bookshelf3.png" alt="logo" class="logo">
				Chapters
			</a>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto align-items-center" >
					<li class="nav-item">
						<a class="nav-link" href="msgCont.php"><img src="img/envelope.png" class="mr-1 mb-2" alt="msg" style="width: 30px ; height: 28px;"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="AddUsers.php">Add Users</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="UserControl.php">User Control</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="AddToLibrary.php">Add to Library </a>
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
	<?php
		$_SESSION[AdminUsername];
		$_SESSION[AdminPassword];
	?>	
	<div class="row text-light" style="margin-top: 60px; align-items: center; justify-content: center">
		<div class="col-lg-5 mb-5">
			<form method="post" name="AddBook">
				<div class="control-group form-group">
					<div class="controls">
						<label>The Book Name</label>
						<input type="text" class="form-control" id="BName" name="BName" required data-validation-required-message="Please enter book name.">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Book Author</label>
						<input type="text" class="form-control" id="BAuther" name="BAuther" required data-validation-required-message="Please enter book author.">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Book Category</label>
						<input type="text" class="form-control" id="BCAT" name="BCAT" required data-validation-required-message="Please enter user book category.">
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Book Link</label>
						<input type="file" class="form-control" id="BLink" name="BLink" required data-validation-required-message="Please enter user book link.">
					</div>
				</div>
				<button type="submit" class="btn btn-light" id="btnAddBk" name="btnAddBk">Add Book</button>
			</form>
			<?php
			if(isset($_POST["btnAddBk"])){
				$conn= new mysqli("localhost","root","00000000","Chapters");
					if($conn-> connect_error){
						die("Not connected".$conn -> connected_error);
					}else{
						
						$sql="INSERT INTO library VALUES ('','$_POST[BName]','$_POST[BAuther]','$_POST[BCAT]','$_POST[BLink]')";
					
				if($conn->multi_query($sql)==TRUE){
					echo "Data Inserted ";
				}else{
					echo "Error".$sql."<br>".$conn->error;
				}
				$conn->close;}
			}
			?>	
		</div>
	</div>
</body>
</html>