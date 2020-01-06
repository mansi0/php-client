<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./css/css/reg2.css">
    </head>
<body> 

        <div class="main">
                <ul>
                    <li class="active"> <a href="">Home</a></li>
                    <li> <a href="login.html">Login</a></li>
                    <!--<li> <a href="reg1.html">Register</a></li>-->
                    <li><a href="#">Services</a></li>
                    <!--<li><a href="#">Gallery</a></li>-->
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                    </div>
         
                    <br><br>
    <div class="register">
        
        <div class="login-box" >
        <h1>  More details  </h1>
            <!--<div class="textbox">
                <i class="fas fa-user" aria-hidden="true"></i>
                <input type="text"   class="text" id="Name" placeholder="FULL NAME">
                
            </div> -->
                
            <div class="textbox">           
                <i class="fa fa-address-card" aria-hidden="true"></i>
                <input type="text"class="text" placeholder="ADDRESS" id="address" required>
            </div>

            <div class="textbox">
                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                <input type="text" class="text" id="locality" placeholder="Locality" required>
            </div>
            
            <div class="textbox">
                <i class="fas fa-landmark"></i>
                <!---<i class="fa fa-envelope" aria-hidden="true"></i>-->
                <input type="text"   class="text" placeholder="Landmark" id="landmark" required>
            </div>
                
            <div class="textbox">
                <i class="fas fa-city"></i>
                <input type="text" placeholder="City" id="city" required>
            </div> 

            <div class="textbox">
                <i class="fas fa-map-marked-alt"></i>
                <input type="text" placeholder="State" id="state" required>
            </div>

            <div class="flash-container">
                <div class="flash-message" data-type="error" data-timeout="8000" id="body"></div>
            </div>


            <button type="submit" class="btn btn-success btn-block" onclick=reg(<?php echo(json_encode($url)); ?>)>
            submit</button>
        </div>
        <a href="reg1.php">Back</a>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</body>

<script src="./js/reg2.js"></script>

</html>