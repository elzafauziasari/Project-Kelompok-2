<!DOCTYPE html>
<html>
<title>esports-auxilium</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="W3Library.css" type="text/css">
<link rel="stylesheet" href="bg.css" type="text/css">
<link rel='stylesheet' href="FontLibrary.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>
<!-- Navbar -->
<?php include 'menu_bar.html'; ?>
<!-- Page content -->

  <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64 w3-white" style="max-width:1000px" id="About">
	<h2 class="w3-left, w3-padding-16">    Latest News</h2>
	<hr>
	<br>
	<br>
    <?php $con=mysqli_connect("localhost","root","","esports-auxilium.dx.am"); ?>
<html>
<title>Feedback</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="W3Library.css" type="text/css">
<link rel='stylesheet' href="FontLibrary.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft", "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {padding: 16px}
</style>
<body>

<!-- Side Navigation -->


<br>
<br>

     <?php
$query = mysqli_query($con, "select * from news order by news_time desc ");
while ($m = mysqli_fetch_array($query))
{
?>
<div id="<?php $m['news_id'] ?>" class="w3-container person">
  <br>
  <h5><?php print $m['news_title'] ?></h5>
  <? echo $m['news_picutre']; ?>
  <div class="w3-container">
  <?php print $m['news_content'] ?>
  <br>
  <br>
  <br>
  </div>
</div>
	  <?php
}
?>
     
</div>

</body>
</html> 


</body>
</html>
