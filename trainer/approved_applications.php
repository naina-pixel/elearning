<?php 

include "trainer_header.php" ?>
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Applications</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="trainer_dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="approved_applications.php">Approved Applications</a></li> 
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
                    <h1 class="tittle display-1 text-center">Approved Applications</h1>
                </div>
                <div class="col-lg-10 offset-md-1 mt-5 box1">
                <table class="table table-bordered table-hover">
                            <tr>
                                <th>S.No.</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Course</th>
                                 <th>Course Duration</th>
                                 <th>Price</th>   
                                <th>Action</th>

                            </tr>
                            <?php 
                                $s=1;
                                include "../config.php";

                                 $q="select applications.*,users.name,users.email,users.contact,courses.course_name, courses.duration, courses.price
                                    from applications
                                    inner join users
                                    on applications.user_id=users.id
                                    inner join courses 
                                    on applications.course_id=courses.id where applications.status='Approved' and applications.trainer_id='$_SESSION[id]'";
                                    $result=mysqli_query($con,$q);
                               
                                while($row=mysqli_fetch_array($result)){
                                   echo '<tr>
                                        <td>'.$s.'</td>
                                        <td>'.$row['name'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['contact'].'</td>
                                        <td>'.$row['course_name'].'</td>
                                        <td>'.$row['duration'].'</td>
                                        <td>'.$row['price'].'</td>';
                                        
                                        echo'<td>
                                        <a href="rejecting_applications.php?s=r&id='.$row['id'].'" class="text-danger display-4">&#10007;</a></td>
                                    </tr>';
                                $s++;
                                }
                            ?>
                        </table>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>

     
<?php include "../footer.php" ?>