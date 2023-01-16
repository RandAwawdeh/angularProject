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
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="font-family: Homemade Apple; ">
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
						<a class="nav-link active" href="UserControl.php">User Control</a>
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
	<?php
		$_SESSION[AdminUsername];
		$_SESSION[AdminPassword];
	?>	
	<div class="container text-light pt-5" style="margin-top: 60px; align-items: center; justify-content: center">
		<?php 
			$conn= new mysqli("localhost","root","00000000","Chapters");
			
			$sql = "SELECT * FROM users";
			$result = $conn -> query($sql);
			
			if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
		
				echo '<h2 class="text-muted">'.$_SESSION['success'].'</h2>';
				unset($_SESSION['success']);
			}
			
			if(isset($_SESSION['status']) && $_session['status'] !=''){
				
				echo '<h2 class="text-muted">'.$_SESSION['status'].'</h2>';
				unset($_SESSION['status']);
			}
		?>
		<table class="table table-hover">
			<thead style="color: #ca6368; font-size: 1.1rem;">
				<tr>
					<th scope="col">#</th>
					<th scope="col">First Name</th>
					<th scope="col">Last Name</th>
					<th scope="col">Username</th>
					<th scope="col">Password</th>
					<th scope="col">Phone</th>
					<th scope="col">eMail</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody style="font-size: 0.9rem;">
			<?php
				
				if($result-> num_rows > 0){
					WHILE ($row = $result-> fetch_assoc()){
				?> 
				<tr>
				<th scope="row"><?php echo $row['ID']; ?></th>
					<td><?php echo $row['FirstName']; ?></td>
					<td><?php echo $row['LastName']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['Password']; ?></td>
					<td><?php echo $row['Phone']; ?></td>
					<td><?php echo $row['eMail']; ?></td>
					<td class="row">
						<form action ="UEdit.php" method="post" class="mr-1">
							<input type="hidden" name="Uedit_id" value="<?php echo $row['ID']; ?>">
							<button type="submit" name="Ubtnedit" class="btn btn-secondary">Edit</button>  
						</form>	
						
						<form action ="UDelete.php" method="post">
							<input type="hidden" name="Udelete_id" value="<?php echo $row['ID']; ?>">
							<button type="submit" name="Ubtndelete" class="btn btn-danger">Delete</button>
						</form>										
					</td>
				</tr>
			<?php }
				}
			?>
			</tbody>
		</table>
	</div>
</body>
</html>