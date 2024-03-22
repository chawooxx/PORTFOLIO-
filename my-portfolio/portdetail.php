
<?php include "z_db.php"; ?>
<!doctype html>
<html class="no-js" lang="en">
<?php
$rrs = mysqli_query($con, "SELECT * FROM section_title Where id=1");
$rs = mysqli_fetch_array($rrs);
$educ_title = "$rs[educ_title]";
$educ_text = "$rs[educ_text]";
$enquiry_title = "$rs[enquiry_title]";
$enquiry_text = "$rs[enquiry_text]";
$enquiry_text = "$rs[enquiry_text]";
$contact_title = "$rs[contact_title]";
$contact_text = "$rs[contact_text]";
$port_title = "$rs[port_title]";
$port_text = "$rs[port_text]";
$service_title = "$rs[service_title]";
$service_text = "$rs[service_text]";
$skills_title = "$rs[skills_title]";
$skills_text = "$rs[skills_text]";
$about_title = "$rs[about_title]";
$about_text = "$rs[about_text]";
?>



<?php
$rt = mysqli_query($con, "SELECT * FROM sitecontact where id=1");
$tr = mysqli_fetch_array($rt);
$phone1 = "$tr[phone1]";
$phone2 = "$tr[phone2]";
$email1 = "$tr[email1]";
$email2 = "$tr[email2]";
$longitude = "$tr[longitude]";
$latitude = "$tr[latitude]";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <meta name="description" content="">
    <meta name="author" content="Themeland">
    <?php
$rr = mysqli_query($con, "SELECT * FROM siteconfig where id=1");
$r = mysqli_fetch_array($rr);
$site_title = "$r[site_title]";
$site_about = "$r[site_about]";
$site_footer = "$r[site_footer]";
$follow_text = "$r[follow_text]";
?>
   
    <title>Arasain | <?php print $site_title ?></title>

    <link rel="icon" href="assets/img/Logo-1.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
   
    <!-- Preloader Starts -->
    <div id="preloader">
        
        <div id="digimax-preloader" class="digimax-preloader">
            
            <div class="preloader-animation">
                
                <div class="spinner"></div>
                
                <div class="loader">
                    <span data-text-preloader="C" class="animated-letters">C</span>
                    <span data-text-preloader="H" class="animated-letters">H</span>
                    <span data-text-preloader="I" class="animated-letters">I</span>
                    <span data-text-preloader="A" class="animated-letters">A</span>
                    <span data-text-preloader="O" class="animated-letters">O</span>

                </div>
                <p class="fw-5 text-center text-uppercase">Loading</p>
            </div>
            
            <div class="loader-animation">
                <div class="row h-100">
                    
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Ends -->

    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
   

    <div class="main overflow-hidden">
       
        <!-- Header Starts -->
        <header id="header">
            
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">
                    
                    <?php
$rt = mysqli_query($con, "SELECT ufile FROM logo where id=1");
$tr = mysqli_fetch_array($rt);
$ufile = "$tr[ufile]";

$rt = mysqli_query($con, "SELECT xfile FROM logo where id=1");
$tr = mysqli_fetch_array($rt);
$xfile = "$tr[xfile]";
?>

                    <a class="navbar-brand" href="index.php">
                        <img class="navbar-brand-regular" src="dashboard/uploads/logo/<?php print $xfile ?>" alt="brand-logo">
                        <img class="navbar-brand-sticky" src="dashboard/uploads/logo/<?php print $ufile ?>" alt="sticky brand-logo">
                    </a>
                    <div class="ml-auto"></div>
                   
                    <ul class="navbar-nav items">
                        <li class="nav-item">
                            <a class="nav-link" href="home">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home">Portfolio</a>
                        </li>

                        
                    </ul>

                    <ul class="navbar-nav icons">
                    <?php
$q = "SELECT * FROM  social ORDER BY id DESC LIMIT 5";
$r123 = mysqli_query($con, $q);

while ($ro = mysqli_fetch_array($r123))
{

    $id = "$ro[id]";
    $fa = "$ro[fa]";
    $social_link = "$ro[social_link]";

    print "
<li class='nav-item social'>
<a href='$social_link' class='nav-link'><i class='fab $fa'></i></a>
</li>
";
} ?>
                            </ul>
                    
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="fas fa-bars toggle-icon m-0"></i>
                            </a>
                        </li>
                    </ul>

                    
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="#contact" class="btn ml-lg-auto btn-bordered-white"><i class="fas fa-paper-plane contact-icon mr-md-2"></i>Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Header Ends -->

        <?php
$todo = mysqli_real_escape_string($con, $_GET["id"]);
?>

        <!-- Portfolio Details Breadcrumb Start -->
        <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        
                        <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                            <h2 class="text-white text-uppercase mb-3">Portfolio Details</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.php">Home</a></li>

                                <li class="breadcrumb-item text-white active">Portfolio</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Details Breadcrumb Ends -->

        <!-- Portfolio Details Content Start-->
        <section class="section about-area ptb_100">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-lg-6">

                    <?php
$rt = mysqli_query($con, "SELECT * FROM portfolio where id='$todo'");
$tr = mysqli_fetch_array($rt);
$port_title = "$tr[port_title]";
$port_detail = "$tr[port_detail]";
$ufile = "$tr[ufile]";
?>    
                        
                        <div class="about-thumb text-center">
                            <img src="dashboard/uploads/portfolio/<?php print $ufile; ?>" alt="img">
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-6">
                        <div class="about-content section-heading text-center text-lg-left pl-md-4 mt-5 mt-lg-0 mb-0">
                            <h2 class="mb-3"><?php print $port_title ?></h2>
                            <p class="text-justify"><?php print $port_detail; ?></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Details Content Ends -->

    
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
    $to = "alrasidarasain@gmail.com";
    $formcontent = "NAME:$name \n EMAIL: $email  \n PHONE: $phone  \n MESSAGE: $message";

    $subject = "New Enquiry from your Website";
    $mailheader = "From: $name";
    $result = mail($to, $subject, $formcontent);

if ($result) {
    $errormsg = "<div class='alert alert-success alert-dismissible alert-outline fade show'>
                    Enquiry Sent Successfully. We shall get back to you ASAP.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>"; 
        }
    } 
        
elseif ($status !== "OK") {
    $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>"  
                .$msg . " <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>";
    } 

     else {
        $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                        Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                     </div>";
        }
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
        <!-- Map Area End -->"

    <?php include "footer.php"; ?>
