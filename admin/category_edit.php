<?php include "admin_header.php" ?>
<?php
                  $id=$_REQUEST['id'];
                  include "config.php";
                  $query="select * from `categories` where id ='$id'";
                  $result=mysqli_query($con,$query);
                  $row=mysqli_fetch_array($result);
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Category</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="manage_category.php">Manage Category</a></li>
                                        <li class="breadcrumb-item"><a href="category_edit.php">Edit Category</a></li> 
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
                    <h1 class="tittle display-1 text-center">Edit Category</h1>
                </div>
                <div class="col-lg-8 offset-md-2 mt-5 box1">
                    <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                <input type="hidden" class="form-control" name="id" id="category" placeholder="Enter Category" value="<?php echo $row['id'];?>">
                                    <label>Catgeory Name</label>
                                    <input class="form-control valid" name="category_name" value="<?php echo $row['category_name']; ?>" id="name" type="text"  placeholder="Enter Category Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                            <label for="category">Previous Image</label><br>
                            <img src="../upload/<?php echo $row['image'] ?>" height="100" width="100">
                                    </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Update Image</label>
                                    <input class="form-control valid" name="image" id="email" type="file"  placeholder="Insert Image">
                                </div>
                            </div>
                           
                        </div>
                        <div class="form-group mt-3 offset-md-5">
                            <button type="submit" name="submit" class="button button-contactForm boxed-btn">Submit</button>
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
    $category_name = $_REQUEST['category_name'];
    $id=$_REQUEST['id'];
    $image=$_FILES['image']['name'];
    $imaget=$_FILES['image']['tmp_name'];
    
    include "config.php";

    if(empty($image)){
     $query = "update `categories` set `category_name`='$category_name'  where id='$id'";     
    }
    else
    $query = "update `categories` set `category_name`='$category_name',`image`='$image'  where id='$id'";

    
    $result = mysqli_query($con,$query);

    if($result>0)
    {
        move_uploaded_file($imaget, "../upload/".$image);
        echo "<script>window.location.assign('manage_category.php?msg=Data has been updated')</script>";
    }
    else{
        echo "<script>window.location.assign('category_edit.php?msg= TRY AGAIN')</script>";
    }
}
?>
     
<?php include "footer.php" ?>