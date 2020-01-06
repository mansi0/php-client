<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./css/css/dbreg.css">
    </head>
<body> 

        <div class="main">
               <ul>
                 <!--<li class="active"> <a href="">Home</a></li>-->
                    <li> <a href="dblogin.php">Login</a></li>
                 <!--<li> <a href="reg1.html">Register</a></li>
                    <li><a href="#">Services</a></li>
                   <li><a href="#">Gallery</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li> -->
                
                </ul>
        </div>
    <div class="register">
        
        <div class="login-box" >
        <h1> Delivery Boy Registration </h1>
            <div class="textbox">
                <i class="fas fa-user" aria-hidden="true"></i>
                <input type="text"   class="text" id="name" placeholder="FULL NAME" required>
                
            </div>
                
            <div class="textbox">
                <i class="fa fa-address-card" aria-hidden="true"></i>
                <input type="text"class="text" id="address" placeholder="ADDRESS" required>
            </div> 

           
             <div class="textbox">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email"   class="text" placeholder="EMAIL ID" id="emailId" required>
            </div>

            <div class="textbox">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <input type="text" class="text" id="contNo" placeholder="PHONE NUMBER" required>
            </div>

            <div class="textbox">
                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                <input type="text" class="text" id="deliveryArea" placeholder="DELIVERY AREA" required>
            </div>
                
           <!-- <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="USERNAME">
            </div> -->

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="PASSWORD" id="password" required>
            </div>

           <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password"  placeholder=" CONFIRM PASSWORD" id="confirmPassword" required>
            </div>

         <!--   <div class="textbox">           
                <i class="fa fa-address-card" aria-hidden="true"></i>
                <input type="text"class="text" placeholder="ADDRESS" id="address">
            </div>

            <div class="textbox">
                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                <input type="text" class="text" id="locality" placeholder="Locality" id="locality" >
            </div>
            
            <div class="textbox">
                <i class="fas fa-landmark"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="text"   class="text" placeholder="Landmark" id="landmark">
            </div>
                
            <div class="textbox">
                <i class="fas fa-city"></i>
                <input type="text" placeholder="City" id="city">
            </div> 

            <div class="textbox">
                <i class="fas fa-map-marked-alt"></i>
                <input type="text" placeholder="State" id="state">
            </div>


            <button type="submit" class="btn btn-success btn-block" onclick=reg()>
            submit</button>
        </div>-->
   


        <!--   <button type="next" class="btn btn-success btn-block" onclick="window.location.href='reg2.html'">
            Next>>-->
            <button type="submit" class="btn btn-success btn-block" onclick=reg(<?php echo(json_encode($url)); ?>)>
                Submit</button>
               <!-- <a href="/home/aishwariya/fooddelivery/demo/src/main/resources/reg2.html"> -->
        </button>
        </div>
   
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</body>
<script src="./js/dbreg.js"></script> 
</html>