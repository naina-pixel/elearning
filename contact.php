<?php 
include "header.php" 
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Contact</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="contact.php">Contact</a></li> 
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
                    <h1 class="tittle display-1 text-center">Get In Touch</h1>
                </div>
                <div class="col-lg-8 offset-md-2 mt-5">
                    <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control valid" name="name" id="name" type="text"  placeholder="Enter Name" 
                                    <?php if(isset($_SESSION['name']))
                                    {
                                    ?>
                                    value= <?php  echo $_SESSION['name'] ?> readonly
                                    <?php
                                    }?>>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control valid" name="email" id="email" type="email"  placeholder="Enter Email" 
                                    <?php if(isset($_SESSION['email']))
                                    {
                                    ?>
                                    value= <?php echo $_SESSION['email']; ?> readonly
                                    <?php
                                    }?>>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control valid" name="subject" id="email" type="text"  placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control valid" name="message" id="email"   placeholder="Enter Subject">
                                </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3 offset-md-5">
                            <button type="submit" name="submit" class="button button-contactForm boxed-btn">Send</button>
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
    
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject =$_REQUEST['subject'];
    $message = $_REQUEST['message'];
    
    
    include "config.php";
    

    
    $query = "insert into `contact`(`name`,`email`,`subject`,`message`)values('$name','$email','$subject','$message')";

    
    $result = mysqli_query($con,$query);

    if($result>0)
    {
        echo "<script>window.location.assign('contact.php?msg=YOUR MESSAGE HAS BEEN SENT')</script>";
    }
    else{
        //echo mysqli_error($con);
        echo "<script>window.location.assign('contact.php?msg= TRY AGAIN')</script>";
    }
}
?>
     
<?php include "footer.php" ?>