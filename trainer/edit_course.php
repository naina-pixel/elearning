<?php include "trainer_header.php" ?>
<?php
                  $id=$_REQUEST['id'];
                  include "../config.php";
                  $query="select * from `courses` where id ='$id'";
                  $result=mysqli_query($con,$query);
                  $r=mysqli_fetch_array($result);
                  ?>
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
                                        <li class="breadcrumb-item"><a href="edit_course.php">Edit Courses</a></li> 
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
                    <h1 class="tittle display-1 text-center">Edit Course</h1>
                </div>
                <div class="col-lg-8 offset-md-2 mt-5 box1">
                    <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Course Name</label>
                                    <input class="form-control valid" name="course_name" value="<?php echo $r['course_name']; ?>"  id="name" type="text"  placeholder="Enter Course Name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control valid" name="category">
                                        <?php
                                              include "config.php";
                                              $query="select * from `categories`";
                                              $result=mysqli_query($con,$query);
                                              while($data=mysqli_fetch_array($result)){
                                              if($data['id']==$r['category_id'])
                                            {
                                            ?>
                                            <option selected value="<?php echo $data['id']?>"><?php echo $data['category_name']?></option>
                                            <?php }else{?>
                                                <option value="<?php echo $data['id']?>"><?php echo $data['category_name']?></option>
                                          <?php }}?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <label for="category">Previous Image</label><br>
                            <img src="../upload/<?php echo $r['image'] ?>" height="100" width="100">
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Update Image</label>
                                    <input class="form-control valid" name="image" id="email" type="file"  placeholder="Insert Image">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Duration</label>
                                    <input class="form-control valid" name="duration" value="<?php echo $r['duration']; ?>"  id="name" type="text"  placeholder="Enter duration of course">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input class="form-control valid" name="price" id="name" value="<?php echo $r['price']; ?>"  type="text"  placeholder="Enter Price">
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
    $course_name  = $_REQUEST['course_name'];
    $category = $_REQUEST['category'];
    $duration = $_REQUEST['duration'];
    $price= $_REQUEST['price'];
    $image = $_FILES['image']['name'];
    $imaget = $_FILES['image']['tmp_name'];
    
    include "../config.php";

    if(empty($image)){
        $query = "update `courses` set `course_name`='$course_name',`duration`='$duration',`price`='$price',`category_id`='$category'  where id='$id'";     
       }
       else
       $query = "update `courses` set `course_name`='$course_name',`image`='$image',`duration`='$duration',`price`='$price',`category_id`='$category'  where id='$id'";
       
       $result = mysqli_query($con,$query);
   
       if($result>0)
       {
           move_uploaded_file($imaget, "../upload/".$image);
           echo "<script>window.location.assign('manage_courses.php?msg=Data has been updated')</script>";
       }
       else{
           echo "<script>window.location.assign('edit_course.php?msg= TRY AGAIN')</script>";
       }
}
?>
     
<?php include "../footer.php" ?>