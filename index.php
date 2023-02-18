<?php $title = "Home Page";
$game1 = "Home";
$logo = "pic/black.jpg";
$style1 = "style1.css";
include("header.php") ?>

<div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">

<!-- The slideshow/carousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="pic/league3.png" alt="Los Angeles" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h1 style="font-size: 75px; text-align:center;" class = "background-tint">WELCOME TO OUR E-SPORTS PAGE</h1>
        <p style="font-size: 40px;">Where we update you on the news and meta of all games</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="pic/league1.jpg" alt="Chicago" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h1 style="font-size: 75px; text-align:center;" class = "background-tint">WELCOME TO OUR E-SPORTS PAGE</h1>
        <p style="font-size: 40px;">Where we update you on the news and meta of all games</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="font-size: 75px; text-align:center;" class = "background-tint">WELCOME TO OUR E-SPORTS PAGE</h1>
        <p style="font-size: 40px;">Where we update you on the news and meta of all games</p>
      </div>
      <img src="pic/league2.jpg" alt="New York" class="d-block w-100" >
    </div>
  </div>
</div>
<?php 
$margin = "0px";
include("footer.php") ?>

