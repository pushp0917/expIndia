
<?php include '../includes/_databaseStart.php';?>
<?php 
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$story_title=$_POST["story_title"];
$story=$_POST["story"];

$sql = "INSERT INTO reviews (name, email,phone,story_title,story)
VALUES ('".$name."', '".$email."', '".$phone."','".$story_title."','".$story."')";

if ($conn->query($sql) === TRUE) {
    ?>
    <div class="container">
		<div class="center wow fadeInDown">
			<p class="lead">We feel great that you made memories with us, while on the trip, and shared those candid stories.</p>
			<h5>your stories will soon become a precious part of our travelers journel.</h5>
		</div>
</div>
    <?
} else {
    ?>
    <h2>Some issues at our end.</h2
    <?
}


?>
<?php include '../includes/_databaseEnd.php';?>
