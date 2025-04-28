<?php

$id=$_GET['id'];
$status=$_GET['status'];

include "../config.php";
$query="update `applications` set `status`='$status' where  `id`='$id'";

$result = mysqli_query($con,$query);
        if($result>0){
            echo "<script>window.location.assign('pending_applications.php?msg=Updated successfully')</script>";
        }else{
            echo "<script>window.location.assign('pending_applications.php?msg=Error!!! Try again later')</script>";
        }
?>
