<?php include "header.php"; ?>


        <!-- Home Start -->
        <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center ptb_100">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Home Content -->
                    <div class="col-12 col-md-7">

        <?php
$rr = mysqli_query($con, "SELECT * FROM static");
$r = mysqli_fetch_row($rr);
    $stitle = $r[1];
    $stext = $r[2];
?>

     <?php
$rt = mysqli_query($con, "SELECT ufile FROM avatar where id=1");
$tr = mysqli_fetch_array($rt);
    $ufile = "$tr[ufile]";
?>

    <?php
$rt = mysqli_query($con, "SELECT yfile FROM resume where id=1");
$tr = mysqli_fetch_array($rt);
    $yfile = "$tr[yfile]";
?>

                        <div class="welcome-intro" data-aos="fade-left" data-aos-duration="1000">
                            <h2 class="text-white" style='line-height: 1.68;'>Hi there!</h2>
                            <h1 class="text-white">I am <?php print $stitle ?></h1>
                            <h4 class="text-white my-4"><?php print $stext ?></h4>

                            <!-- Home Contact Btn -->
                            <div class="button-group" data-aos="fade-left" data-aos-duration="1200">
                                <a href="dashboard/uploads/resume/<?php print $yfile ?>" download class="btn btn-bordered-white">Download CV</a>
                            </div>
                            
                        </div>
                    </div>

                    <!-- Home Avatar -->
                    <div class="col-12 col-md-5">
                        <div class="welcome-thumb-wrapper mt-5 mt-md-0">
                            <span class="welcome-thumb-1">
                                <img class="welcome-animation d-block ml-auto" src="dashboard/uploads/avatar/<?php print $ufile;?>" alt="">
                            </span>

                        </div>
                    </div>

                </div>
            </div>
            
            <div class="shape shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
                    <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>

        </section>
        <!-- Home Ends -->
        

        <!-- About Start -->
        <section id="about" class="section about-area ptb_100">
            <div class="container">

            <?php
$rt = mysqli_query($con, "SELECT ufile FROM avatar where id=1");
$tr = mysqli_fetch_array($rt);
    $ufile = "$tr[ufile]";
?>

                <div class="row justify-content-center align-items-center">
                    <!-- About Title -->
                    <div class="col-12 col-md-10 col-lg-7" data-aos="fade-left" data-aos-duration="1000">
                        <div class="section-heading text-center">
                            <h2 class="mb-3"><?php print $about_title; ?></h2>
                        </div>
                    </div>
                    <!-- About Avatar -->
                    <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-duration="1200">
                        <div class="about-thumb text-center">
                            <img src="dashboard/uploads/avatar/<?php print $ufile;?>" alt="img">
                        </div>
                    </div>
                    <!-- About Content -->
                    <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-duration="1400">
                        <div class="about-content section-heading text-center text-lg-left pl-md-4 mt-5 mt-lg-0 mb-0">
                            <h4 class='text-justify' style='line-height: 3;'>Hi there!</h4>
                            <p class='text-justify'><strong><?php print $about_text; ?></strong></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- About End -->
 
        <!-- Skills Start -->
        <section class="section promo-area ptb_100" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
            <div class="container">
                <div class="row justify-content-center">
                     <!-- Skills Content -->
                    <div class="col-12 col-md-10 col-lg-7" data-aos="fade-left" data-aos-duration="1000">
                        <div class="section-heading text-center">
                            <h2><?php print $skills_title ?></h2>
                            <p class="d-none d-sm-block mt-4"><h5><?php print $skills_text ?><h5></p>
                        </div>
                    </div>
                </div>

                <div class="row">


        <?php
$q = "SELECT * FROM  skills ORDER BY id DESC LIMIT 3";
$r123 = mysqli_query($con, $q);

while ($ro = mysqli_fetch_array($r123))
{
    $skill_title = "$ro[skill_title]";
    $skill_detail = "$ro[skill_detail]";

        print " <div class='col-12 col-md-6 col-lg-4 res-margin' data-aos='fade-left' data-aos-duration='1200'>
                    <div class='single-promo color-1 bg-hover hover-bottom text-center p-5'>
                        <h4 class='mb-3'>$skill_title</h4>
                        <p><h5>$skill_detail</h5></p>
                    </div>
                </div>";
}
        ?>

                </div>
            </div>

        </section>
        <!-- Skills End -->
        
        <!-- Education Start -->
        <section class="section review-area bg-overlay ptb_100" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
            <div class="container">
                <div class="row justify-content-center">

                         <!-- Education Content -->
                         <div class="col-12 col-md-10 col-lg-7" data-aos="fade-left" data-aos-duration="1000" style='border-radius: 25%'>
                            <div class="section-heading text-center">
                                <h2 class="text-white"><?php print $educ_title; ?></h2>
                                <p class="text-white d-none d-sm-block mt-4"><h5 class='text-white'><?php print $educ_text; ?></h5></p>
                            </div>
                        </div>
                </div>
                
                <div class="row">
                    <div class="client-reviews owl-carousel">   


        <?php
$q = "SELECT * FROM  education ORDER BY id DESC LIMIT 6";
$r123 = mysqli_query($con, $q);

while ($ro = mysqli_fetch_array($r123))
{
    $educ_level = "$ro[educ_level]";
    $educ_year = "$ro[educ_year]";
    $educ_name = "$ro[educ_name]";
    $ufile = "$ro[ufile]";

    print " <div class='single-review p-5'>

                <div class='reviewer media mt-3' data-aos='fade-left' data-aos-duration='1200'>
                    <div class='reviewer-thumb'>
                        <img class='avatar-lg radius-100' src='dashboard/uploads/education/$ufile' alt='img'>
                    </div>
   
                    <div class='reviewer-meta media-body align-self-center ml-4' data-aos='fade-left' data-aos-duration='1400'>
                        <h5 class='reviewer-name color-primary mb-2'>$educ_level</h5>
                        <h6 class='text-secondary fw-6'>$educ_name</h6>
                        <div class='review-content'>
                            <div class='review-text'>
                                <h6 class='mt-2'>$educ_year</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
}
?>

                    </div>
                </div>
            </div>
        </section>
        <!-- Education Ends -->

        
        <!-- Services Start -->
        <section id="service" class="section service-area ptb_150">
            <div class="container">
                <div class="row justify-content-center">

                        <!-- Services Content -->
                        <div class="col-12 col-md-10 col-lg-7" data-aos="fade-left" data-aos-duration="1000">
                            <div class="section-heading text-center">
                                <h2><?php print $service_title ?></h2>
                            </div>
                        </div>
                </div>

                <div class="row">

        <?php
$qs = "SELECT * FROM  service ORDER BY id DESC";
$r1 = mysqli_query($con, $qs);

while ($rod = mysqli_fetch_array($r1))
{
    $id = "$rod[id]";
    $serviceg = "$rod[service_title]";
    $service_desc = "$rod[service_desc]";

    print " <div class='col-12 col-md-6 col-lg-4' data-aos='fade-left' data-aos-duration='1200'>
                <div class='single-service p-4 mt-4'  style='border: solid 1px #788282; '>
                    <h3 class='my-3'>$serviceg</h3>
                    <p>$service_desc</p>
                    <a class='service-btn mt-3' href='servicedetail.php?id=$id'>Learn More</a>
                </div>
            </div>";
}
?>
                </div>
            </div>

        </section>
        <!-- Services Ends -->

        
        <!-- Portfolio Start -->
        <section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                        <!-- Porfolio Content -->
                        <div class="col-12 col-md-10 col-lg-7" data-aos="fade-left" data-aos-duration="1000">
                            <div class="section-heading text-center">
                                <h2><?php print $port_title?></h2>
                            </div>
                        </div>
                </div>
                <!-- Portfolio Items -->
                <div class="row items portfolio-items">

        <?php
$q = "SELECT * FROM  portfolio ORDER BY id DESC";
$r123 = mysqli_query($con, $q);

while ($ro = mysqli_fetch_array($r123))
{
    $id = "$ro[id]";
    $port_title = "$ro[port_title]";
    $port_desc = "$ro[port_desc]";
    $ufile = "$ro[ufile]";

    print " <div class='col-12 col-sm-6 col-lg-4 portfolio-item' data-groups='['','']'>
                <div class='single-case-studies' data-aos='fade-left' data-aos-duration='1400'>
                    <a href='portdetail.php?id=$id'>
                        <img src='dashboard/uploads/portfolio/$ufile' alt=''>
                    </a>

                    <a href='portdetail.php?id=$id' class='case-studies-overlay'>
                        <span class='overlay-text text-center p-3'>
                            <h3 class='text-white mb-3'>$port_title</h3>
                            <p class='text-white'>$port_desc</p>
                        </span>
                    </a>
                </div>
            </div> ";
}
?>

                </div>

            </div>
        </section>
        <!-- Portfolio Ends -->

        <!-- Enquiry Starts -->
        <section class="section cta-area bg-overlay ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                       
                        <div class="section-heading text-center m-0">
                            <h2 class="text-white" data-aos="fade-left" data-aos-duration="1000"><?php print $enquiry_title; ?></h2>
                            <p class="text-white d-none d-sm-block mt-4" data-aos="fade-left" data-aos-duration="1200"><?php print $enquiry_text; ?></p>
                            <a href="#contact" class="btn btn-bordered-white mt-4" data-aos="fade-left" data-aos-duration="1400">Contact Me</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Enquiry Ends -->
 
        
        <!-- Contact Start -->
        <section id="contact" class="contact-area ptb_100">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-lg-5">
                        <!-- Contact Content -->
                        <div class="section-heading text-center mb-3" data-aos="fade-left" data-aos-duration="1000">
                            <h2><?php print $contact_title; ?></h2>
                            <p class="d-none d-sm-block mt-4" data-aos="fade-left" data-aos-duration="1200"><?php print $contact_text; ?></p>
                        </div>
                        
                        <!-- Contact Info -->
                        <div class="contact-us">
                            <ul>
                                <li class="contact-info color-1 bg-hover active hover-bottom text-center p-5 m-3" data-aos="fade-left" data-aos-duration="1400">
                                    <span><i class="fas fa-mobile-alt fa-3x"></i></span>
                                    <a class="d-block my-2" href="tel:<?php print $phone1; ?>">
                                        <h4><?php print $phone1; ?></h4>
                                    </a>
                                </li>
                                
                                <li class="contact-info color-3 bg-hover active hover-bottom text-center p-5 m-3" data-aos="fade-left" data-aos-duration="1600">
                                    <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
                                    <a class="d-none d-sm-block my-2" href="mailto:<?php print $email1; ?>">
                                        <h4><?php print $email1; ?></h4>
                                    </a>
                                    <a class="d-block d-sm-none my-2" href="mailto:<?php print $email1; ?>">
                                        <h4><?php print $email1; ?></h4>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-12 col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-duration="1600">
                        <div class="contact-box text-center">

        <?php
$status = "OK"; 
$msg = "";

if (isset($_POST["save"])) {
    $name = mysqli_real_escape_string($con,$_POST["name"]);
    $email = mysqli_real_escape_string($con,$_POST["email"]);
    $phone = mysqli_real_escape_string($con,$_POST["phone"]);
    $message = mysqli_real_escape_string($con,$_POST["message"]);

        if (strlen($name) < 5) {
            $msg = $msg . "Name Must Be More Than 5 Char Length.<BR>";
            $status = "NOTOK";
            }
        if (strlen($email) < 9) {
            $msg = $msg . "Email Must Be More Than 10 Char Length.<BR>";
            $status = "NOTOK";
            }
        if (strlen($message) < 10) {
            $msg = $msg . "Message Must Be More Than 10 Char Length.<BR>";
            $status = "NOTOK";
            }
        if (strlen($phone) < 8) {
            $msg = $msg . "Phone Must Be More Than 8 Char Length.<BR>";
            $status = "NOTOK";
            }

if ($status == "OK") {
    $to = "ivykhoo963@gmail.com";
    $formcontent = "NAME:$name \n EMAIL: $email  \n PHONE: $phone  \n MESSAGE: $message";

    $subject = "New Enquiry from your Website";
    $mailheader = "From: $name";
    $result = mail($to, $subject, $formcontent);

if ($result) {
    $errormsg = '<div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Your message was successfully <strong>sent!</strong>
                </div>'; 
        }
    } 
        
elseif ($status !== "OK") {
    $errormsg = '<div class="alert alert-danger alert-dismissible">'
                .$msg . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>';
    } 

     else {
        $errormsg = '<div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        Some Technical Glitch is there. Please try again later.
                    </div>';
        }
}
?>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
						{
						print $errormsg = '<div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        Your message was successfully <strong>sent!</strong>
                      </div>';
						}
   ?>
        

                            <!-- Contact form -->
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row" data-aos="fade-left" data-aos-duration="1800">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save">
                                            <span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                                    </div>
                                    
                                </div>
                            </form>
                            <p class="form-message"></p>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Contact Ends -->      

        <!-- Map Area Start-->
        <section class="section map-area">
            <h1 class="text-center mb-3" data-aos="fade-left" data-aos-duration="1000"><b>location</b></h1>
            <iframe src="https://maps.google.com/maps?q=sta.clara,%20basila&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="zoom-in-up" data-aos-duration="1200"></iframe>
        </section>
        <!-- Map Area End -->
        <!-- Map Area End -->
      

    <?php include "footer.php"; ?>
