<!DOCTYPE html>
<html>
<title>esport-auxilium</title>
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
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="1.jpg" style="width:100%;height:400px">
    </div>
	<div class="mySlides w3-display-container w3-center">
    <img src="2.jpg" style="width:100%;height:400px">
    </div>
	<div class="mySlides w3-display-container w3-center">
    <img src="3.jpg" style="width:100%;height:400px">
    </div>
	<div class="mySlides w3-display-container w3-center">
    <img src="4.jpg" style="width:100%;height:400px">
    </div>
	</div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64 w3-white" style="max-width:1000px" id="About">
    <h2 class="w3-wide"><img src="logo.png" style="width:400px;height:60px"></h2>
    <p class="w3-opacity"><i>Your daily support for esports</i></p>
    <p class="w3-justify">Welcome to esport-auxilium! your daily support for esports, head on to our tournament page to see the schedule of an ongoing tournament!
	or head to our news page to read our daily updates news on esports, we are also selling esports related gear and merchandise for your need, just head out to our shop to see more! </p>
	<br>
	<br>
	<br>

	<div>
	<h2>PICK YOUR GAMES </h2>
	<h2>_________</h2>
	<br>
	<p class="w3-justify w3-center">Choose the game to see the ongoing tournament schedule</p>
	<br>
	<a href="">
  <div class="w3-row-padding w3-padding-64 w3-center">
    <div class="w3-quarter w3-button">
      <img src="dota_logo.png" alt="dota2" style="width:100%;height:170px">
      <h3>DOTA 2</h3>
    </div>
	</a>
	<a href="">
    <div class="w3-quarter w3-button">
      <img src="csgo_logo.png" alt="csgo" style="width:100%;height:170px">
      <h3>CS:GO</h3>
    </div>
	</a>
	<a href="">
    <div class="w3-quarter w3-button">
      <img src="hearthstone_logo.png" alt="hearthstone" style="width:100%;height:170px">
      <h3>HEARTHSTONE</h3>
    </div>
	</a>
	<div class="w3-quarter w3-button">
      <img src="lol_logo.jpg" alt="league of legends" style="width:100%;height:170px">
      <h3>LOL</h3>
    </div>
	</a>
  </div>
  </div>
  	</div>




<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}
</script>

</body>
</html>
