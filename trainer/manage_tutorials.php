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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Tutorials</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="trainer_dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="manage_tutorials.php">Manage Tutorials</a></li> 
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
                    <h1 class="tittle display-1 text-center">Manage Tutorials</h1>
                </div>
                <div class="col-lg-10 offset-md-1 mt-5 box1">
                <table class="table table-bordered table-hover">
                  <tr>
                    <th>S.no.</th>
                    <th>Tutorial Name</th>
                    <th>Course</th>
                    <th>File</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  <?php
                  $s=1;
                  include "../config.php";
                  $query="select tutorials.*,courses.course_name
                  from tutorials
                  inner join courses
                  on tutorials.course_id=courses.id WHERE `trainerid` = '$_SESSION[id]'";
                  $result=mysqli_query($con,$query);
                  while($row=mysqli_fetch_array($result)){
                  ?>
                  <tr>
                    <td><?php echo $s;?></td>
                    <td><?php echo $row['tutorial_name'];?></td>
                    <td><?php echo $row['course_name'];?></td>
                    <td><img src="../upload/<?php echo $row['image'] ?>" height="100" width="100"></td>
                    <td><?php echo $row['description'];?></td>
                    <td><a class="text-primary display-4" href="edit_tutorial.php?id=<?php echo $row['id']?>">&#9997;</a></td>
                    <td><a class="text-danger display-4" href="delete_tutorial.php?id=<?php echo $row['id']?>"><i class="bi bi-trash-fill"></i></a></td>
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