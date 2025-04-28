<?php

$id=$_GET['id'];
$status=$_GET['status'];

include "../config.php";
$query="update `trainer_register` set `status`='$status' where  `id`='$id'";

$result = mysqli_query($con,$query);
        if($result>0){
            echo "<script>window.location.assign('trainer_requests.php?msg=Updated successfully')</script>";
        }else{
            echo "<script>window.location.assign('trainer_requests.php?msg=Error!!! Try again later')</script>";
        }
?>
