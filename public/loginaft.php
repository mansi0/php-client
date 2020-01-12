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
                    <a href="">Home</a><br>
                     <a href="login.html">Login</a><br>
                    <!--<li> <a href="reg1.html">Register</a></li>-->
                    <a href="#">Services</a><br>
                  <!-- <li><a href="#">Gallery</a></li>-->
                    <a href="#">About</a><br>
                    <a href="#">Contact</a><br>
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
        </div>
</body>
</html>