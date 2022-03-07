<?php
  $json=file_get_contents("data.json");
  $data=json_decode($json);
  $portofolio=$data->portfolio[$_GET['id']];
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Personal Portfolio</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/bg1.JPG" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Personal - v4.1.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <main id="main">
      <!-- ======= Portfolio Details ======= -->
      <div id="portfolio-details" class="portfolio-details">
        <div class="container">
          <div class="row">
            <!-- <div class="col-lg-8">
              <h2 class="portfolio-title"><?php echo $portofolio->title ?></h2>

              <div class="portfolio-details-slider swiper-container">
                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-details-1.jpg" alt="" />
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="" />
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="" />
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div> -->

            <div class="col-lg-12 portfolio-info">
              <h2 class="portfolio-title"><?php echo $portofolio->title ?></h2>
              <h3>Project information</h3>
              <table>
                <tr>
                  <td style="min-width : 150px;">Category</td>
                  <td><?php echo $portofolio->type ?></td>
                </tr>
                
                <tr>
                  <td>Project URL</td>
                  <td><a href="<?php echo $portofolio->link ?>" target="_blank" rel="noopener noreferrer"><?php echo $portofolio->link ?></a></td>
                </tr>
                <tr>
                  <td valign="top">Technology</td>
                  <td>
                    <ul>
                      <?php foreach($portofolio->tech as $tech) : ?>
                        <li><?php echo $tech ?></li>
                      <?php endforeach ?>
                    </ul>
                  </td>
                </tr>
              </table>
              

              <p>
                  <?php echo $portofolio->desc ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Portfolio Details -->
    </main>
    <!-- End #main -->

    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
      <!-- Designed by <a href="#">Maulal Ardi Atqo</a> -->
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
