<?php
	session_start();
	
	$conn= new mysqli("localhost","root","00000000","Chapters");
		
	if(isset($_POST['btnUpdate']))
	{
		$IDB = $_POST['edit_id'];
		
		$EBName = $_POST['EBName'];
		$EBAuther = $_POST['EBAuther'];
		$EBCAT = $_POST['EBCAT'];
		$EBLink = $_POST['EBLink'];
		
		$query = "UPDATE library SET BName='$EBName' , Author='$EBAuther' , Cat='$EBCAT' , pdf_link='$EBLink'  WHERE IDB='$IDB' ";
		$query_run = mysqli_query($conn,$query);
		
		if($query_run)
		{
			$_SESSION['success']="Your data is updated";
			header('Location: LibraryControl.php');
		}
		else{
			
			$_SESSION['status']="Your data isn't updated";
			header('Location: LibraryControl.php');
		}
	}
?>