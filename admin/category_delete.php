<?php 
	$id=$_REQUEST['id'];

	include "config.php";
	$query="delete from `categories` where id = '$id'";

	$result = mysqli_query($con,$query);

	if($result>0)
	{
	
		echo "<script>window.location.assign('manage_category.php?msg=Category deleted successfully')</script>";
	}
	else{
		//echo mysqli_error($con);
		echo "<script>window.location.assign('manage_category.php?msg=Try Again!!!!')</script>";
	}
?>