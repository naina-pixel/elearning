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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Users</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="view_users.php">View Users</a></li> 
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
                    <h1 class="tittle display-1 text-center">Users</h1>
                </div>
                <div class="col-lg-10 offset-md-1 mt-5 box1">
                <table class="table table-bordered table-hover">
                  <tr>
                    <th>S.no.</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                  </tr>
                  <?php
                  $s=1;
                  include "config.php";
                  $query="select * from `users`";
                  $result=mysqli_query($con,$query);
                  while($row=mysqli_fetch_array($result)){
                  ?>
                  <tr>
                    <td><?php echo $s;?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact'];?></td>
                    <td><?php echo $row['address'];?></td>
                  </tr>
                <?php $s++; } ?>
                </table>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>

     
<?php include "footer.php" ?>