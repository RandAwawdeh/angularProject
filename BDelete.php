<?php
	session_start();
	
	$conn= new mysqli("localhost","root","00000000","Chapters");
	
	if(isset($_POST['btndelete']))
	{
		$IDB = $_POST['delete_id'];
		
		$query = "DELETE FROM library WHERE IDB='$IDB'";
		$query_run = mysqli_query($conn,$query);
		
		if($query_run)
		{
			$_SESSION['success']="Your data deleted";
			header('Location: LibraryControl.php');
			
		}
		else{
			
			$_SESSION['status']="Your data not deleted";
			header('Location: LibraryControl.php');
		}
	}
	
?>