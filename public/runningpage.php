<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>

<html>
    <head>
        <title>Running vehicle animation </title>
        <link rel="stylesheet" href="./css/css/runningpage.css">
    </head>
    <body>
            <div class="hero">
                   
            <div class="highway"></div>
            <div class="city"></div>
            <div class="vehicle">
                    <img src="./projectphoto/1576083508486.png">
            </div>
           
            <div class="wheel">
               <img src="./projectphoto/Car_Animation_Img/wheel.png" class="back-wheel">
              <img src="./projectphoto/Car_Animation_Img/wheel.png" class="frontwheel">
            </div>
            <div class="title">
                    <img src="./projectphoto/1578200184350.png">
            </div>

           <!-- <header>
              <div class="main">
                    <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </header>-->
   
            <!--<button onclick="window.location.href = 'home.html';">Order Now>></button>-->
                   <!-- <a href="/home/aishwariya/fooddelivery/demo/src/main/resources/reg2.html"> -->
                    <a href="reg1.html">Order Now>></a>
            
        </div>
    </body>
</html>