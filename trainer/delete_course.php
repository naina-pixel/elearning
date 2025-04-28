<?php 
	$id=$_REQUEST['id'];

	include "../config.php";
	$query="delete from `courses` where id = '$id'";

	$result = mysqli_query($con,$query);

	if($result>0)
	{
	
		echo "<script>window.location.assign('manage_courses.php?msg=Course deleted successfully')</script>";
	}
	else{
		//echo mysqli_error($con);
		echo "<script>window.location.assign('manage_courses.php?msg=Try Again!!!!')</script>";
	}
?>