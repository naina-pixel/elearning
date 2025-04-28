<?php
session_start();
 $course_id = $_REQUEST['course_id'];
 $trainer_id = $_REQUEST['trainer_id'];
 $user_id=$_SESSION['id'];
 include "config.php";
    
  $query = "insert into `applications`(`course_id`,`user_id`,`trainer_id`,`status`)values('$course_id','$user_id','$trainer_id','Pending')";

 $result = mysqli_query($con,$query);

 if($result>0)
 {
    echo '<script>alert("Application submitted successfully!");</script>';
    echo "<script>window.location.assign('mycourses.php?msg=Data saved successfully')</script>";
 }
 else{
     echo mysqli_error($con);
     echo '<script>alert("Error: ' . mysqli_error($con) . '");</script>';
     echo "<script>window.location.assign('courses.php')</script>";
 }
?>
