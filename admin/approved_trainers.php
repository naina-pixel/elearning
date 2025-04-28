<?php include "admin_header.php" ?>
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Trainers</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="approved_trainers.php">Approved Trainers</a></li> 
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
                    <h1 class="tittle display-1 text-center">Approved Trainers</h1>
                </div>
                <div class="col-lg-10 offset-md-1 mt-5 box1">
                <table class="table table-bordered table-hover">
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                            <?php 
                                $s=1;
                                include "config.php";
                                 $q=mysqli_query($con,"select * from `trainer_register` where status= 'Approved'");
                               
                                while($row=mysqli_fetch_array($q)){
                                   echo '<tr>
                                        <td>'.$s.'</td>
                                        <td>'.$row['name'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td><img height="40" width="100" src="../upload/'.$row['image'].'"></td>
                                        <td>'.$row['contact'].'</td>
                                        <td>'.$row['address'].'</td>
                                        <td>'.$row['status'].'</td>';

                                        echo'<td>
                                        <a href="rejecting_trainer.php?s=r&id='.$row['id'].'" class="text-danger display-4">&#10007;</a></td>
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

     
<?php include "footer.php" ?>