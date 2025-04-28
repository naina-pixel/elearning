<?php
$category_name = $_REQUEST['category_name'];
$image = $_FILES['image']['name'];
$imaget = $_FILES['image']['tmp_name'];

include "config.php";

$check_query = "SELECT * FROM `categories` WHERE `category_name` = '$category_name'";
$check_result = mysqli_query($con, $check_query);

if(mysqli_num_rows($check_result) > 0) {
    echo "<script>window.location.assign('category.php?msg=Category already exists')</script>";
} else {
    $query = "INSERT INTO `categories`(`category_name`,`image`,`status`) VALUES ('$category_name','$image','Active')";
    $result = mysqli_query($con, $query);

    if($result) {
        move_uploaded_file($imaget, "../upload/" . $image);
        echo "<script>window.location.assign('manage_category.php?msg=Data saved successfully')</script>";
    } else {
        echo mysqli_error($con);
        echo "<script>window.location.assign('category.php?msg=TRY AGAIN!!')</script>";
    }
}
// else {
//     echo "<script>alert('No file uploaded or there was an upload error');</script>";
// }
?>
