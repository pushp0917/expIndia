<?php include 'includes/_global_vars.php';?>
  <?php include 'includes/_databaseStart.php';?>
    <?php

// Controller Section
$page_name = "dayTours";
$page_title = "Day Tours";

?>

      <!DOCTYPE html>
      <html lang="en">
      <?php include 'includes/_head.php';?>

        <body class="homepage">
          <?php include 'includes/_header.php';?>
            <?php

function imageSlider($city) {
    
    $city=strtolower($city);
    $siteArray = array (
    "delhi" => 0,
    "agra" => 0,
    "jaipur" => 0,
    "haridwar" => 0
    );
    $siteDir = "images/sites";
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
                  <h2>Day Tours</h2>
                  <p class="lead">
                    <strong>Experience Delhi and cities around it in day tour packages</strong>
                  </p>
                </div>

                <div class="blog">
                  <div class="row">
                    <?php
$sql = "SELECT tour_id, no_of_days, city,places_to_visit,short_description FROM day_tours";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tour_id=$row["tour_id"];
        $city=$row["city"];
        $no_of_days=$row["no_of_days"];
        $places_to_visit=$row["places_to_visit"];
        $short_description=$row["short_description"];
        ?>
                      <div class="col-md-8">
                        <div class="blog-item">
                          <?php imageSlider(strtolower($city));?>
                            <div class="row">
                              <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                  <span id="publish_date"><?php echo $no_of_days?> Day</span> <span><i class="fa"></i> <a
        href="#"><?php echo strtoupper($city)?></a></span>
                                  <!--span><i class="fa"></i> <a href="blog-item.html#comments">2 Comments</a></span>
        <span><i class="fa"></i><a href="#">56 Likes</a></span-->
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-10 blog-content">
                                <h2>Day Tour - <?php echo $city?></h2>
                                <p>
                                  <?php echo $short_description?>
                                </p>

                                <p>
                                  <strong>Places to visit </strong>:
                                  <?php echo $places_to_visit?>
                                </p>
                                <a class="btn btn-primary readmore" href="dayTourQuery.php?tour_id=<?php echo $tour_id ?>">Inquire</i></a>
                              </div>
                            </div>
                        </div>
                        <!--/.blog-item-->
                      </div>
                      <!--/.col-md-8-->
                      <?php
    } //Close while
}  else {
    ?>
                        <h2>Some issues at our end.</h2
    <?
}
?>


<aside class="col-md-4"></aside>

</div>
<!--/.row-->

</div>
<!--/.blog-->

</section>
<!--/#blog-->
<?php include 'includes/_footer.php';?>
<?php include 'includes/_script.php';?>
<?php include 'includes/_databaseEnd.php';?>
</body>
</html>