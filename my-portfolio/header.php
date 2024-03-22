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
   
    <title>Chiao Yee Ku| <?php print $site_title ?></title>

    <link rel="icon" href="assets/img/bb1.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    

</head>

<body>
   
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
    
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
   

    <div class="main overflow-hidden">
       
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
                        <img class="navbar-brand-regular" src="dashboard/uploads/logo/<?php print $ufile ?>" alt="brand-logo">
                        <img class="navbar-brand-sticky" src="dashboard/uploads/logo/<?php print $ufile ?>" alt="sticky brand-logo">
                    </a>
                    <div class="ml-auto"></div>

                
                    <ul class="navbar-nav items">
                        <li class="nav-item">
                            <a class="nav-link" href="home">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
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

    