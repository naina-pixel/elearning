<?php 
	$id=$_REQUEST['id'];

	include "config.php";
	$query="update `trainer_register` set `status`='Approved' where  id='$id'";

	$result = mysqli_query($con,$query);

	if($result>0)
	{
	
		echo "<script>window.location.assign('approved_trainers.php?msg=TRAINER APPROVED')</script>";
	}
	else{
		//echo mysqli_error($con);
		echo "<script>window.location.assign('trainer_requests.php?msg=TRY AGAIN!!!!')</script>";
	}
?>