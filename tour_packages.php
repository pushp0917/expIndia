<?php include 'includes/_global_vars.php';?>
  <?php

// Controller Section
$page_name = "tour_pacages";
$page_title = "Tour Packages";

?>

    <!DOCTYPE html>
    <html lang="en">
    <?php include 'includes/_head.php';?>

      <body class="homepage">
        <?php include 'includes/_header.php';?>
          <?php

function imageSlider($city) {
    $siteArray = array (
    "delhi" => 0,
    "agra" => 0,
    "jaipur" => 0,
    "haridwar" => 0
    );
    $siteDir = "sites";
    $DelhiCounter = 4;
    
    $files1 = scandir ( $siteDir );
    $arrlength = count ( $files1 );
    
    for($x = 2; $x < $arrlength; $x ++) {
        if (0 === strpos ( $files1 [$x], "haridwar" )) {
            $siteArray ["haridwar"] = $siteArray ["haridwar"] + 1;
        } else if (0 === strpos ( $files1 [$x], "jaipur" )) {
            $siteArray ["jaipur"] = $siteArray ["jaipur"] + 1;
        } else if (0 === strpos ( $files1 [$x], "agra" )) {
            $siteArray ["agra"] = $siteArray ["agra"] + 1;
        } else if (0 === strpos ( $files1 [$x], "delhi" )) {
            $siteArray ["delhi"] = $siteArray ["delhi"] + 1;
        }
    }
    
    print "<div id=\"$city-slider\" class=\"carousel slide\" data-ride=\"carousel\">\n";
    
    echo '<ol class="carousel-indicators visible-xs">';
    for($i = 1; $i <= $siteArray [$city]; $i ++) {
        $counter=$i-1;
        if ($i == 1) {
            print "<li data-target=\"#$city-slider\" data-slide-to=\"0\" class=\"active\"></li>\n";
        } else {
            print "<li data-target=\"#$city-slider\" data-slide-to=\"$counter\"></li>\n";
        }
    }
    print '</ol>
    <div class="carousel-inner">';
    
    for($i = 1; $i <= $siteArray [$city]; $i ++) {
        if ($i == 1) {
            print '<div class="item active">';
        } else {
            print '<div class="item">';
        }
        print "<img src=\"images/sites/$city$i.jpg\" class=\"img-responsive\" style=\"width: 100%;height:350px\" alt=\"\"\n>
        </div>";
    }
    print '</div>';
    echo '<a class="left carousel-control hidden-xs" href="#'.$city.'-slider" data-slide="prev">
    <i class="fa"></i>
    </a>
    
    <a class=" right carousel-control hidden-xs"href="#'.$city.'-slider" data-slide="next">
    <i class="fa"></i>
    </a>';
    
    print "</div><br>";
}


?>




            <section id="blog" class="container">
              <div class="center">
                <h2>India Tour Packages</h2>
                <!--p class="lead">
<strong>Experience Delhi and cities around it in day tour packages</strong>
</p-->
              </div>

              <div class="blog">
                <div class="row">
                  <div class="col-md-8">
                    <div class="blog-item">
                      <?php imageSlider("agra");?>
                        <div class="row">
                          <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                              <span id="publish_date">4 Day</span> <span><i class="fa"></i> <a
href="#"></a></span>
                              <!--span><i class="fa"></i> <a href="blog-item.html#comments">2 Comments</a></span>
<span><i class="fa"></i><a href="#">56 Likes</a></span-->
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-10 blog-content">
                            <h2>4 Days Delhi Agra Jaipur Tour</h2>
                            <p>
                              <strong>Destination</strong> : Delhi - Agra - Jaipur
                              <br>
                              <strong>Itinerary</strong> : Golden Triangle Tour comprises of three prominent destinations of India - Delhi, Agra, and Jaipur – thus giving an opportunity to unearth its rich cultural legacy.
                            </p>

                            <p>
                              <strong>Places to visit </strong>: Taj Mahal, Agra Fort, Sikandra, Itimad-Ud-Daulah (Baby Taj), Mehtab Bagh.
                            </p>

                            <!--  div class="post-tags">
<strong>Tag:</strong> <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a>
</div-->

                          </div>
                        </div>
                    </div>
                    <!--/.blog-item-->
                  </div>
                  <!--/.col-md-8-->
                  <div class="col-md-8">
                    <div class="blog-item">
                      <?php imageSlider("delhi");?>
                        <!--/#carousel-slider-->
                        <br>
                        <div class="row">
                          <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                              <span id="publish_date">1 Day</span> <span><i class="fa"></i> <a
href="#">Delhi</a></span>
                              <!--span><i class="fa"></i> <a href="blog-item.html#comments">2 Comments</a></span>
<span><i class="fa"></i><a href="#">56 Likes</a></span-->
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-10 blog-content">
                            <h2>Day Tour - Delhi</h2>
                            <p>Delhi, the heart, the capital has long history. Come and experience the heritage of Delhi.</p>

                            <p>
                              <strong>Places to visit </strong>: India gate, Red Fort, Jama Masjid (Mosque), Raj ghat,Lotus Temple, President house, Parliament House, Humayun Tomb, Qutub Minar and Lodhi Garden.
                            </p>

                            <!--  div class="post-tags">
<strong>Tag:</strong> <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a>
</div-->

                          </div>
                        </div>
                    </div>
                    <!--/.blog-item-->
                  </div>
                  <!--/.col-md-8-->

                  <div class="col-md-8">
                    <div class="blog-item">
                      <?php imageSlider("jaipur");?>
                        <div class="row">
                          <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                              <span id="publish_date">1 Day</span> <span><i class="fa"></i> <a
href="#">Jaipur</a></span>
                              <!--span><i class="fa"></i> <a href="blog-item.html#comments">2 Comments</a></span>
<span><i class="fa"></i><a href="#">56 Likes</a></span-->
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-10 blog-content">
                            <h2>Day Tour - Jaipur</h2>
                            <p>
                              Jaipur is the capital and largest city of the Indian state of Rajasthan.It is also known as the Pink City. It also hosts the World Heritage Sight The Observatory " Jantar Mantar". Included on the <strong>Golden Triangle</strong>                              tourist circuit, along with Delhi and Agra, This place is an extremely popular tourist destination in Rajasthan and India.
                            </p>
                            <p>
                              <strong>Places to visit </strong>: Amber Fort, City Palace, The Observatory " Jantar Mantar", Lake Palace, Hawa Mahal (Wind Palace), Nahargarh Fort (Tiger Fort).
                            </p>
                            <!--  div class="post-tags">
<strong>Tag:</strong> <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a>
</div-->

                          </div>
                        </div>
                    </div>
                    <!--/.blog-item-->
                  </div>
                  <!--/.col-md-8-->
                  <div class="col-md-8">
                    <div class="blog-item">
                      <?php imageSlider("haridwar");?>
                        <div class="row">
                          <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                              <span id="publish_date">1 Day</span> <span><i class="fa"></i> <a
href="#">Haridwar</a></span>
                              <!--span><i class="fa"></i> <a href="blog-item.html#comments">2 Comments</a></span>
<span><i class="fa"></i><a href="#">56 Likes</a></span-->
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-10 blog-content">
                            <h2>Day Tour - Haridwar</h2>
                            <p>Haridwar is an ancient city in State of Uttarakhand, Ganges River, originating from original source at Gaumukh near Gangotri glacier travels almost 250Kms / 150 Miles to enters the Holy City of Haridwar, this is why it is also
                              known as Gangadwara. This is an beautiful and peaceful place to visit.</p>
                            <p>
                              <strong>Places to visit </strong>: Ganges River, Har Ki Pauri (The sacred Stairs), Mansa Devi Temple, Chandi Devi Temple, Sapta Rishi Ashram &amp; Sarovar (Monestary), Kankhal In Law's home of(Lord Shiva).
                            </p>
                            <!--  div class="post-tags">
<strong>Tag:</strong> <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a>
</div-->

                          </div>
                        </div>
                    </div>
                    <!--/.blog-item-->
                  </div>
                  <!--/.col-md-8-->

                  <aside class="col-md-4"></aside>

                </div>
                <!--/.row-->

              </div>
              <!--/.blog-->

            </section>
            <!--/#blog-->
            <?php include 'includes/_footer.php';?>
              <?php include 'includes/_script.php';?>
      </body>

    </html>