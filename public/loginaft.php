<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
        <title></title>
        <link rel="stylesheet" href="./css/css/loginaft.css">
    </head>
<body> 
<section class="first">
  <div class="content-box">
        <div class="main">
                <ul>
                    <li class="active"> <a href="">Home</a></li>
                    <li> <a href="login.html">Login</a></li>
                    <!--<li> <a href="reg1.html">Register</a></li>-->
                    <li><a href="#">Services</a></li>
                  <!-- <li><a href="#">Gallery</a></li>-->
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                
                </ul>
            </div>

        <div class="navigation">
                    <a href="hotelDisplay.php">Show all restaurants</a><br>
                     <a href="">Login</a><br>
                    <!--<li> <a href="reg1.html">Register</a></li>-->
                    <a href="#">Near by</a><br>
                  <!-- <li><a href="#">Gallery</a></li>-->
                    <a href="#">Veg</a><br>
                    <a href="#">Non-Veg</a><br>
                    <a href="#">Express delivery</a><br>
        </div>

        <div class="slideshow">
        <slider>
        <slide><p>Slide 1</p></slide>
        <slide><p>Slide 2</p></slide>
        <slide><p>Slide 3</p></slide>
        <slide><p>Slide 4</p></slide>
        </slider>
        </div>

        <div class="search">
          <input type="text" name="box" placeholder="Search Here">
          <a href="#"><i class="fas fa-search"></i></a>
          <button type="button">Search Food</button> 
        </div>

        <h2>Browse by Cuisine</h2>
        <div class="circ">
        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
        </div>
        <div class="circle" value="1" onclick=getValue(1)></div>
        <p>Indian</p>
        
        <div class="circle1" value="2" onclick=getValue(2)></div>
        <p1>Continental</p1>
        
        
        <div class="circle2" value="3"  onclick=getValue(3)></div>
        <p2>Italian</p2>
        
        
        <div class="circle3" value="4" onclick=getValue(4)></div>
        <p3>Japanese</p3>
        
        
        <div class="circle4" value="5" onclick=getValue(5)></div>
        <p4>American</p4>
      
        <div class="circle5" value="6" onclick=getValue(6)></div>
        <p5>Bengali</p5>
    
        <div class="circle6" value="7" onclick=getValue(7)></div>
        <p6>Punjabi</p6>
      
        <div class="circle7" value="8" onclick=getValue(8)></div>
        <p7>Chinese</p7>
      </div>
</section>

<section class="second">
<div class="content-box">
      <b>Our Facilties</b>
      <a href="reg1.php">
        <div class="rect1">
          <h>Self Pickup</h>
        </div>
      </a>
      <a href="reg1.php">
        <div class="rect2">
          <h1>Rooftop</h1>
        </div>
      </a>
      <a href="reg1.php">
        <div class="rect3">
          <h10>Outdoor Seating</h10>
        </div>
      </a>
      <a href="reg1.php">
        <div class="rect4">
          <h3>Indoor Seating</h3>
        </div>
      </a>
      <a href="reg1.php">
        <div class="rect5">
          <h4>Vallet Parking</h4>
        </div>
      </a>
      <a href="reg1.php">
        <div class="rect6">
          <h5>Free Parking</h5>
        </div>
      </a>
      <a href="reg1.php">
        <div class="rect7">
          <h6>Bar Facility</h6>
        </div>
      </a>
      <a href="reg1.php">
        <div class="rect8">
          <h7>Ladies Special</h7>
        </div>
      </a>
      <a href="reg1.php">
        <div class="rect9">
          <h8>Live Sports Screening</h8>
        </div>
      </a>
      <a href="reg1.php">
        <div class="rect10">
          <h9>Live Music</h9>
        </div>
      </a>
      <h11>Enjoy Every Moment With Us</h11>
      <h12><i class="fas fa-mobile-alt"></i></h12>
      <a1>Order</a1>
      <h13><i class="fas fa-pizza-slice"></</h13>
      <h14><i class="fas fa-bicycle"></i></h14>
      <a2>Wait for Delivery</a2>
      <h15><i class="fas fa-utensils"></i></h15>
      <a3>Enjoy your Food</a3>

</div>
</section>

</body>
<script src="./js/hotelDisplayCuisine.js"></script>
</html>