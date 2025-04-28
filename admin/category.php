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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Category</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="category.php">Add Category</a></li> 
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
                    <h1 class="tittle display-1 text-center">Add Category</h1>
                </div>
                <div class="col-lg-8 offset-md-2 mt-5 box1">
                    <form class="form-contact contact_form" action="insert_category.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Catgeory Name</label>
                                    <input class="form-control valid" name="category_name" id="name" type="text"  placeholder="Enter Category Name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Insert Image</label>
                                    <input class="form-control valid" name="image" id="email" type="file"  placeholder="Insert Image">
                                </div>
                            </div>
                           
                        </div>
                        <div class="form-group mt-3 offset-md-5">
                            <button type="submit" class="button button-contactForm boxed-btn">Submit</button>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>

     
<?php include "footer.php" ?>