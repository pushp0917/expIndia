<?php
$home_class = "";
$about_us_class = "";
$day_tours_class = "";
$tours_class = "";
$blog_class = "";
$contact_class = "";
$gallery_class = "";
$review_class = "";
$tour_packages_class= "";

switch ($page_name) {
    case "index" :
        $home_class = "active";
        break;
    case "aboutUs" :
        $about_us_class = "active";
        break;
    case "dayTours" :
        $day_tours_class = "active";
        break;
    case "tours" :
        $tours_class = "active";
        break;
    case "gallery" :
        $gallery_class = "active";
        break;
    case "contact" :
        $contact_class = "active";
        break;
    case "reviews" :
        $review_class = "active";
        break;
    case "tour_pacages" :
        $tour_packages_class = "active";
        break;
}
?>

  <header id="header">
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-4">
            <div class="top-number">
              <p>
                <i class="fa fa-phone-square"></i>
                <?php echo "$site_phone" ?>
                  <i class="fa fa-whatsapp"></i>
                  <?php echo "$site_whatsapp" ?>
                    <i class="fa fa-envelope"></i>
                    <?php echo $site_email?>
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-xs-8">
            <div class="social">
              <ul class="social-share">
                <li><a href="https://www.facebook.com/DharamCar-Rental-1784191108530609" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/dpannu1203" target="_blank"><i
class="fa fa-twitter"></i></a></li>
              </ul>
              <!--div class="search">
<form role="form">
<input type="text" class="search-form" autocomplete="off"
placeholder="Search"> <i class="fa fa-search"></i>
</form-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
    <!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" style="height: 80%"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="<?php echo $home_class?>"><a href="index.php">Home</a></li>
            <!-- li class="<?php echo $about_us_class?>"><a href="about-us.php">About Us</a></li-->
            <li class="<?php echo $day_tours_class?>"><a href="daytours.php">Day Tours</a></li>
            <li class="<?php echo $tour_packages_class?>"><a href="tour_packages.php">Tour Packages</a></li>
            <li class="<?php echo $gallery_class?>"><a href="gallery.php">Gallery</a></li>
            <li class="<?php echo $review_class?>"><a href="reviews.php">Reviews</a></li>
            <li class="<?php echo $contact_class?>"><a href="contact-us.php">Contact</a></li>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->

  </header>
  <!--/header-->