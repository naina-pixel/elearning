<?php 
	$id=$_REQUEST['id'];

	include "config.php";
	$query="update `trainer_register` set `status`='Rejected' where  id='$id'";

	$result = mysqli_query($con,$query);

	if($result>0)
	{
	
		echo "<script>window.location.assign('rejected_trainers.php?msg=COMPANY REJECTED')</script>";
	}
	else{
		//echo mysqli_error($con);
		echo "<script>window.location.assign('trainer_requests.php?msg=TRY AGAIN!!!')</script>";
	}
?>