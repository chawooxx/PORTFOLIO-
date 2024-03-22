<?php include "../z_db.php";?>

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 
<div class="app-menu navbar-menu">
  <!-- LOGO -->
  <div class="navbar-brand-box">
    <!-- Dark Logo-->
<?php
    $rr=mysqli_query($con,"SELECT ufile FROM logo");
    $r = mysqli_fetch_row($rr);
    $ufile = $r[0];

    $rr=mysqli_query($con,"SELECT xfile FROM logo");
    $r = mysqli_fetch_row($rr);
    $xfile = $r[0];
?>

    <a href="dashboard.php" class="logo logo-dark">
      <span class="logo-sm">
        <img src="uploads/logo/<?php print $ufile?>" alt="" height="20">
      </span>
      <span class="logo-lg">
        <img src="uploads/logo/<?php print $ufile?>" alt="" height="60">
      </span>
    </a>
    <!-- Light Logo-->
    <a href="dashboard.php" class="logo logo-light">
      <span class="logo-sm">
        <img src="uploads/logo/<?php print $xfile?>" alt="" height="20">
      </span>
      <span class="logo-lg">
        <img src="uploads/logo/<?php print $xfile?>" alt="" height="60">
      </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
      <i class="ri-record-circle-line"></i>
    </button>
  </div>

  <div id="scrollbar">
    <div class="container-fluid">

      <div id="two-column-menu">
      </div>
      <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title"><span data-key="t-menu">Menu</span></li>


        <li class="nav-item">
                <a href="dashboard" class="nav-link" data-key="t-analytics">  <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards"> Dashboard </span></a>
              </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarK" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing"> Site Configuration </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarK" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="settings" class="nav-link" data-key="t-one-page"> Site Settings </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="sections" class="nav-link" data-key="t-nft-landing"> Section Titles </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="logo" class="nav-link" data-key="t-nft-landing"> Edit Logo </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="avatar" class="nav-link" data-key="t-nft-landing"> Edit Avatar </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="resume" class="nav-link" data-key="t-nft-landing"> Edit Resume/CV </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact" class="nav-link" data-key="t-nft-landing"> Edit Contact </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarSl" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-image-fill"></i> <span data-key="t-landing">Manage Home Page</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarSl" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="static" class="nav-link" data-key="t-nft-landing"> Edit Home </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarX" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-chrome-fill"></i> <span data-key="t-landing">Manage Social Links</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarX" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="createsocial" class="nav-link" data-key="t-one-page"> Add New Social Link </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="social" class="nav-link" data-key="t-nft-landing">Social Link List </a>
                                    </li>
                                </ul>
                            </div>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarW" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-rocket-line"></i> <span data-key="t-landing"> Manage Skills</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarW" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="addskills" class="nav-link" data-key="t-one-page"> Add New </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="skills" class="nav-link" data-key="t-nft-landing"> All lists </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-checkbox-multiple-line"></i> <span data-key="t-landing">Manage Services</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarLanding" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="createservice" class="nav-link" data-key="t-one-page"> Add New Service </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services" class="nav-link" data-key="t-nft-landing"> Services List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarPot" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-rhythm-fill"></i> <span data-key="t-landing">Manage Portfolio</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarPot" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="createportfolio" class="nav-link" data-key="t-one-page"> Add New Portfolio </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="portfolio" class="nav-link" data-key="t-nft-landing"> Portfolio List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarT" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-message-line"></i> <span data-key="t-landing">Manage Education</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarT" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="neweducation" class="nav-link" data-key="t-one-page">Add New School</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="education" class="nav-link" data-key="t-nft-landing"> Education List </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    
      </ul>
    </div>
    <!-- Sidebar -->
  </div>

  <div class="sidebar-background"></div>
</div>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
