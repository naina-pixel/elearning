
<?php include "trainer_header.php" ?>
<main>
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Courses</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="trainer_dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="add_courses.php">Add Courses</a></li> 
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </section>
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php
                  if(isset($_REQUEST['msg']))
                  {

                    echo '<div class="alert alert-info mt-5">'.$_REQUEST['msg'].'</div>';
                  }
              ?>
                    <h1 class="tittle display-1 text-center">Add Courses</h1>
                </div>
                <div class="col-lg-8 offset-md-2 mt-5 box1">
                    <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            

                        <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="form-control valid" name="category">
                                        <option selected disabled>Select Category</option>
                                        <?php
                                              include "../config.php";
                                              $query="select * from `categories`";
                                              $result=mysqli_query($con,$query);
                                              while($row=mysqli_fetch_array($result)){
                                              ?>
                                              <option value="<?php echo $row['id']?>"><?php echo $row['category_name']?></option>
                                          <?php }?>
                                    </select>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Course Name</label>
                                    <input class="form-control valid" name="course_name" id="name" type="text"  placeholder="Enter Course Name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Insert Image</label>
                                    <input class="form-control valid" name="image" id="email" type="file"  placeholder="Insert Image">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Duration</label>
                                    <input class="form-control valid" name="duration" id="name" type="text"  placeholder="Enter duration of course">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input class="form-control valid" name="price" id="name" type="text"  placeholder="Enter Price">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3 offset-md-5">
                            <button type="submit" name="submit" class="button button-contactForm boxed-btn">Save</button>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>
<?php

include "trainer_header.php";
include "../config.php";

if(isset($_POST['submit'])) {
    $course_name = $_POST['course_name'];
    $duration = $_POST['duration'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $imaget = $_FILES['image']['tmp_name'];
    $trainer_id = $_SESSION['id'];


    $check_query = "SELECT * FROM `courses` WHERE `course_name` = '$course_name' AND `trainer_id` = '$trainer_id'";
    $check_result = mysqli_query($con, $check_query);

    if(mysqli_num_rows($check_result) > 0) {
       
        echo "<script>window.location.assign('add_courses.php?msg=Course already exists')</script>";
    } else {
        
        $query = "INSERT INTO `courses`(`course_name`, `category_id`, `trainer_id`, `image`, `duration`, `price`, `status`)
                  VALUES ('$course_name', '$category', '$trainer_id', '$image', '$duration', '$price', 'Active')";
        $result = mysqli_query($con, $query);

        if($result) {
            move_uploaded_file($imaget, "../upload/" . $image);
            echo "<script>window.location.assign('manage_courses.php?msg=Data Added Successfully')</script>";
        } else {
            echo "<script>window.location.assign('add_courses.php?msg=TRY AGAIN!!!!!!')</script>";
        }
    }
}
?>
     
<?php include "../footer.php" ?>