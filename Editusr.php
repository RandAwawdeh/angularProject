<?php
	session_start();
	
	$conn= new mysqli("localhost","root","00000000","Chapters");
		
	if(isset($_POST['btnUpdateU']))
	{
		$ID = $_POST['Uedit_id'];
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$Username = $_POST['username'];
		$UPassward = $_POST['UPassward'];
		$PhoneNum = $_POST['PhoneNum'];
		$eMail = $_POST['eMail'];
		
		$query = "UPDATE users SET FirstName='$firstname' , LastName='$lastname' , username='$Username' , Password='$UPassward' , Phone='$PhoneNum' , eMail='$eMail' WHERE ID='$ID' ";
		$query_run = mysqli_query($conn,$query);
		
		if($query_run)
		{
			$_SESSION['success']="Your data is updated";
			header('Location: UserControl.php');
		}
		else{
			
			$_SESSION['status']="Your data isn't updated";
			header('Location: UserControl.php');
		}
	}
?>