<?php include 'includes/_global_vars.php';?>
  <?php

//Controller Section
$page_name = "reviews";
$page_title="Reviews | Car tours";

?>

    <!DOCTYPE html>
    <html lang="en">
    <?php include 'includes/_head.php';?>
      <?php include 'includes/_databaseStart.php';?>

        <body class="homepage">
          <?php include 'includes/_header.php';?>
            <?php
$sql = "SELECT DATE_FORMAT(timestamp,'%d %b %y') as date,name,story_title,story FROM reviews order by timestamp desc";
$result = $conn->query($sql);
?>
              <section id="blog" class="container">
                <div class="center">
                  <h2>Reviews</h2>
                  <p class="lead">What people said about us.......</p>
                </div>

                <div class="blog">
                  <div class="row">
                    <div class="col-md-8">

                      <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
                        <div class="blog-item">
                          <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                              <div class="entry-meta">
                                <span id="publish_date"><?php echo $row["date"]?></span>
                                <span><i class="fa fa-user"></i> <a href="#"><?php echo $row["name"]?></a></span>
                                <!--span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span-->
                                <!--span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span-->
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 blog-content">
                              <!--a href="#"><img class="img-responsive img-blog" src="tourImages/unnamed6.jpg" width="100%" alt="" /></a-->
                              <h2><a href="#"><?php echo $row["story_title"]?></a></h2>
                              <h3><?php echo $row["story"]?></h3>
                              <!--a class="btn btn-primary readmore" href="blog-item.html">Read More <i class="fa fa-angle-right"></i></a-->
                              <br/>
                            </div>
                          </div>
                        </div>
                        <!--/.blog-item-->
                        <?php
    }
    
}
?>
                          <div class="blog-item">
                            <div class="row">
                              <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                  <span id="publish_date">07 NOV 2017</span>
                                  <span><i class="fa fa-user"></i> <a href="#">Kwang</a></span>
                                  <!--span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span-->
                                  <!--span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span-->
                                </div>
                              </div>

                              <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="tourImages/unnamed6.jpg" width="100%" alt="" /></a>
                                <h2><a href="#">Tajmahal Diaries !!</a></h2>
                                <h3>I really enjoyed travelig with Dharam.</h3>
                                <!--a class="btn btn-primary readmore" href="blog-item.html">Read More <i class="fa fa-angle-right"></i></a-->
                                <br/>
                              </div>
                            </div>
                          </div>
                          <!--/.blog-item-->
                          <!--.pagination start-->
                          </ul>
                          <!--/.pagination end-->
                          <a class="btn btn-primary readmore" href="shareReviews.php">Share Your Story</a>
                    </div>
                    <!--/.col-md-8-->

                    <aside class="col-md-4">

                    </aside>
                  </div>
                  <!--/.row-->
                </div>
                <!-- /. blog end-->
              </section>
              <!--/#blog-->





              <?php include 'includes/_footer.php';?>
                <?php include 'includes/_script.php';?>
                  <?php include '../includes/_databaseEnd.php';?>
        </body>

    </html>