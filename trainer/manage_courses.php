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
                                        <li class="breadcrumb-item"><a href="manage_courses.php">Manage Courses</a></li> 
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
                    <h1 class="tittle display-1 text-center">Manage Courses</h1>
                </div>
                <div class="col-lg-10 offset-md-1 mt-5 box1">
                <table class="table table-bordered table-hover">
                  <tr>
                    <th>S.no.</th>
                    <th>Course Name</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Duration</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  <?php
                  $s=1;
                  include "../config.php";
                  $query="select courses.*,categories.category_name
                  from courses
                  inner join categories
                  on courses.category_id=categories.id where `trainer_id` = '$_SESSION[id]'";
                  $result=mysqli_query($con,$query);
                  while($row=mysqli_fetch_array($result)){
                  ?>
                  <tr>
                    <td><?php echo $s;?></td>
                    <td><?php echo $row['course_name'];?></td>
                    <td><?php echo $row['category_name'];?></td>
                    <td><img src="../upload/<?php echo $row['image'] ?>" height="100" width="100"></td>
                    <td><?php echo $row['duration'];?></td>
                    <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                    <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
                    </svg>    
                    <?php echo $row['price'];?></td>
                    <td><a class="text-primary display-4" href="edit_course.php?id=<?php echo $row['id']?>">&#9997;</a></td>
                    <td><a class="text-danger display-4" href="delete_course.php?id=<?php echo $row['id']?>"><i class="bi bi-trash-fill"></i></a></td>
                  </tr>
                <?php $s++; } ?>
                </table>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>

     
<?php include "../footer.php" ?>