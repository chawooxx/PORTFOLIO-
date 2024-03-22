<?php include "z_db.php"; ?>

  
  <footer class="section footer-area mt-5">
           
            <div class="footer-top ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="footer-items">
                            <h3 class="footer-title text-center mb-2" data-aos="fade-left" data-aos-duration="1000">ABOUT</h3>
                                <p class="text-justify mb-2" data-aos="fade-left" data-aos-duration="1200"><?php print $site_about ?></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="footer-items">
                                <h3 class="footer-title text-center mb-2" data-aos="fade-left" data-aos-duration="1000">SERVICES  </h3>
                                <ul>

 <?php
$q = "SELECT * FROM  service ORDER BY id DESC LIMIT 5";
$r123 = mysqli_query($con, $q);

while ($ro = mysqli_fetch_array($r123))
{

    $id = "$ro[id]";
    $service_title = "$ro[service_title]";

    print "
<li class='text-center py-2' data-aos='fade-left' data-aos-duration='1200'><a class='text-black-50' href='servicedetail.php?id=$id'>$service_title</a></li>
";
}
?>


                                </ul>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">

                            <div class="footer-items">
                    
                                <h3 class="footer-title text-center mb-2" data-aos="fade-left" data-aos-duration="1000">FOLLOW ME</h3>
                                <p class="text-center mb-2" data-aos="fade-left" data-aos-duration="1200"><?php print $follow_text ?></p>
                                
                                <ul class="social-icons list-inline pt-2">
                                <ul class="social-icons text-center pt-2">

                                <?php
$q = "SELECT * FROM  social ORDER BY id DESC LIMIT 5";
$r123 = mysqli_query($con, $q);

while ($ro = mysqli_fetch_array($r123))
{

    $id = "$ro[id]";
    $fa = "$ro[fa]";
    $social_link = "$ro[social_link]";

    print "
    <li class='list-inline-item px-1' data-aos='fade-left' data-aos-duration='1400'><a href='$social_link'><i class='fab $fa'></i></a></li>
";
}
?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                           
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4" >
                              

                                <div class="copyright-left"><?php print $site_footer ?></div>
                               
                                <div class="copyright-right">All Rights Reserved.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
       
        <div id="menu" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
    
    <!-- Animation js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
