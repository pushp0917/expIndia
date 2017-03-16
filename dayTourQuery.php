<?php include 'includes/_global_vars.php';?>
<?php include 'includes/_databaseStart.php';?>
<?php 

//Controller Section
$page_name = "reviews";
$page_title="Reviews | Car tours";

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/_head.php';?>

<body class="homepage">
<?php include 'includes/_header.php';?>

<?php
$tour_id=$_GET["tour_id"];
$sql = "SELECT tour_id city FROM day_tours where tour_id=$tour_id";
echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $city=$row["city"];
    echo $city;
?>

<section id="contact-page">
        <div class="container">
            <div class="center">
                <br/>        
                <h2 id="storyTile">Send your inquery..</h2>
                <p class="lead"></p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="services/_addReview.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label><strong>Name *</strong></label>
                            <input type="text" id="form_name" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Email *</strong></label>
                            <input type="email" id="form_email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Phone</trong></label>
                            <input type="number" id="form_phone" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label><strong><?php echo $city?> Day Tour</strong></label>
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label><strong>Inquery Tile *</strong></label>
                            <input type="text" id="form_story_title" name="story_title" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Inquery *</strong></label>
                            <textarea name="story" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" >Submit</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
<?php 
}else{
    ?>
<h1>Invalid tour selectd</h1>
    <?php
}

?>
<?php include 'includes/_footer.php';?>
<?php include 'includes/_script.php';?>
<?php include 'includes/_databaseEnd.php';?>
</body>

</html>