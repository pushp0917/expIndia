<?php include 'includes/_global_vars.php';?>
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

<section id="contact-page">
        <div class="container">
            <div class="center">
                <br/>        
                <h2 id="storyTile">Write your review..</h2>
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
                        <!-- div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div-->                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label><strong>Review Title *</strong></label>
                            <input type="text" id="form_story_title" name="story_title" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Review *</strong></label>
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

<?php include 'includes/_footer.php';?>
<?php include 'includes/_script.php';?>
</body>

</html>