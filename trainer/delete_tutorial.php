<?php 
	$id=$_REQUEST['id'];

	include "../config.php";
	$query="delete from `tutorials` where id = '$id'";

	$result = mysqli_query($con,$query);

	if($result>0)
	{
	
		echo "<script>window.location.assign('manage_tutorials.php?msg=data deleted successfully')</script>";
	}
	else{
		//echo mysqli_error($con);
		echo "<script>window.location.assign('manage_tutorials.php?msg=Try Again!!!!')</script>";
	}
?>