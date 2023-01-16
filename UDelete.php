<?php
	session_start();
	
	$conn= new mysqli("localhost","root","00000000","Chapters");
	
	if(isset($_POST['Ubtndelete']))
	{
		$ID = $_POST['Udelete_id'];
		
		$query = "DELETE FROM users WHERE ID='$ID'";
		$query_run = mysqli_query($conn,$query);
		
		if($query_run)
		{
			$_SESSION['success']="Your data deleted";
			header('Location: UserControl.php');
			
		}
		else{
			
			$_SESSION['status']="Your data not deleted";
			header('Location: UserControl.php');
		}
	}
	
?>