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
				<ul class="navbar-nav ml-auto">
				<li class="nav-item">
						<a class="nav-link" href="AddUsers.php">Add Users</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="UserControl.php">User Control</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="AddToLibrary.php">Add to Library </a>
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
	<div class="row text-light" style="margin-top: 60px; justify-content: center">
		<div class="col-lg-4 mb-5">
			<?php
		
			$conn= new mysqli("localhost","root","00000000","Chapters");
			
			if(isset($_POST['Ubtnedit']))
			{
				$ID = $_POST['Uedit_id'];
				
				$query = "SELECT * FROM users WHERE ID='$ID'";
				$query_run = mysqli_query($conn,$query);
				
				foreach($query_run as $row)
				{
			
			?>
			
			<form method="post" action="Editusr.php">
				
				<input type="hidden" name="Uedit_id" value="<?php echo $row['ID']; ?>">
				
				<div class="control-group form-group">
					<div class="controls">
						<label>First Name</label>
						<input type="text" class="form-control" value="<?php echo $row['FirstName'] ?>" name="firstname" required data-validation-required-message="Please enter First name.">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Last Name</label>
						<input type="text" class="form-control" value="<?php echo $row['LastName'] ?>" name="lastname" required data-validation-required-message="Please enter Last name.">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Username</label>
						<input type="text" class="form-control" value="<?php echo $row['username'] ?>" name="username" required data-validation-required-message="Please enter username.">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>User Passward</label>
						<input type="text" class="form-control" value="<?php echo $row['Password'] ?>"  name="UPassward" required data-validation-required-message="Please enter user Passward.">
						<p class="help-block"></p>
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Phone Number</label>
						<input type="text" class="form-control" value="<?php echo $row['Phone'] ?>"  name="PhoneNum" required data-validation-required-message="Please enter user phone number.">
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label>Email Address</label>
						<input type="text" class="form-control" value="<?php echo $row['eMail'] ?>" name="eMail" required data-validation-required-message="Please enter user email address.">
					</div>
				</div>
				<a href="UserControl.php" class=" btn btn-danger">Cancel</a>
				<button type="submit" class="btn btn-light" name="btnUpdateU">Update</button>
			</form>
			<?php
				}
				
			}
			?>
		</div>
	</div>

</body>
</html>