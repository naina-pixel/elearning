<?php 
	$id=$_REQUEST['id'];

	include "../config.php";
	$query="update `applications` set `status`='Rejected' where  id='$id'";

	$result = mysqli_query($con,$query);

	if($result>0)
	{
	
		echo "<script>window.location.assign('rejected_applications.php?msg=APPLICATION REJECTED')</script>";
	}
	else{
		//echo mysqli_error($con);
		echo "<script>window.location.assign('pending_applications.php?msg=TRY AGAIN!!!')</script>";
	}
?>