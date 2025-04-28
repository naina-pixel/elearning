<?php include "trainer_header.php";
// if(isset($_SESSION['id'])){
//     echo $_SESSION['id'];
// }
// ?>
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Tutorials</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="trainer_dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="add_tutorials.php">Add Tutorials</a></li> 
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
                    <h1 class="tittle display-1 text-center">Add Tutorials</h1>
                </div>
                <div class="col-lg-8 offset-md-2 mt-5 box1">
                    <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            

                        <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Course</label>
                                    <select class="form-control valid" name="course">
                                        <option selected disabled>Select Course</option>
                                        <?php
                                              include "../config.php";
                                              $query="SELECT * FROM `courses` WHERE `trainer_id` = '$_SESSION[id]'";
                                              $result=mysqli_query($con,$query);
                                              while($row=mysqli_fetch_array($result)){
                                              ?>
                                              <option value="<?php echo $row['id']?>"><?php echo $row['course_name']?></option>
                                          <?php }?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Tutorial Name</label>
                                    <input class="form-control valid" name="tutorial_name" id="name" type="text"  placeholder="Enter Tutorial Name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Insert File</label>
                                    <input class="form-control valid" name="image" id="email" type="file"  placeholder="Insert Image">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control valid" name="description" id="name"   placeholder="Enter Description"></textarea>
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
if(isset($_POST['submit'])){
    $tutorial_name  = $_REQUEST['tutorial_name'];
    $course = $_REQUEST['course'];
    $description = $_REQUEST['description'];
    $image = $_FILES['image']['name'];
    $imaget = $_FILES['image']['tmp_name'];

    include "../config.php";

    
    $check_query = "SELECT * FROM `tutorials` WHERE `tutorial_name`='$tutorial_name'";
    $check_result = mysqli_query($con, $check_query);
    if(mysqli_num_rows($check_result) > 0) {
        echo "<script>window.location.assign('add_tutorials.php?msg=Tutorial with the same name already exists')</script>";
        exit(); 
    }

    
    $query = "INSERT INTO `tutorials` (`tutorial_name`, `course_id`,`trainerid`, `image`, `description`, `status`) VALUES ('$tutorial_name', '$course','$_SESSION[id]', '$image', '$description', 'Active')";
    $result = mysqli_query($con, $query);

    if($result) {
        move_uploaded_file($imaget, "../upload/".$image);
        echo "<script>window.location.assign('manage_tutorials.php?msg=Data Added Successfully')</script>";
    } else {

        echo "<script>window.location.assign('add_tutorials.php?msg=TRY AGAIN!!!!!!')</script>";
    }
}
?>
     
<?php include "../footer.php" ?>