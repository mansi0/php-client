<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./css/css/hotelreg2.css">
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
                <i class="fas fa-clock" aria-hidden="true"></i>
                <input type="text" class="text" placeholder="Open At hrs:min:sec" id="openAt" required>
            </div>

            <div class="textbox">
                 <i class="fas fa-clock" aria-hidden="true"></i>
                <input type="text" class="text" id="closeAt" placeholder="Close At hrs:min:sec" required>
            </div>
            
            <div class="textbox">
            <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                <!---<i class="fa fa-envelope" aria-hidden="true"></i>-->
                <input type="text"   class="text" placeholder="Approximate Cost for two" id="approximateCost" required>
            </div>
                
            <div class="textbox">
            <i class="far fa-calendar-alt" aria-hidden="true"></i>
                <input type="text" placeholder="Opening Date hh/mm/yyyy" id="openingDate" required>
            </div> 

            <div class="textbox">
            <i class="fas fa-truck" aria-hidden="true"></i>

               &nbsp; Express Delivery &nbsp;
                <input type="radio" name="ExpressDelivery" value="true"> True&nbsp;
                <input type="radio" name="ExpressDelivery" value="false"> False<br>
            </div> 

            <div class="textbox">
                <i class="fas fa-door-open" aria-hidden="true"></i>
                &nbsp; Hotel Status &nbsp;
                <input type="radio" name="HotelStatus" value="open"> Open&nbsp;
                <input type="radio" name="HotelStatus" value="close"> Close<br>
            </div>

            <div class="textbox">
                <i class="fas fa-bars" aria-hidden="true"></i>

                &nbsp; Hotel Menu Type &nbsp;
                <input type="radio" name="hotelMenuType" value="veg"> Veg &nbsp;
                <input type="radio" name="hotelMenuType" value="non-veg"> Non-Veg&nbsp;
                <input type="radio" name="hotelMenuType" value="both"> Both<br>
            </div>

            <div class="textbox">
            <i class="fas fa-concierge-bell" aria-hidden="true"></i>
            &nbsp; Hotel Cuisine &nbsp;
            <input type="checkbox" name="cuisine" value="Indian"> Indian &nbsp;
            <input type="checkbox" name="cuisine" value="Continental"> Italian &nbsp;
            <input type="checkbox" name="cuisine" value="Italian"> Italian &nbsp; 
            <input type="checkbox" name="cuisine" value="Japanese">Japanese <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
            <input type="checkbox" name="cuisine" value="American">American  &nbsp;
            <input type="checkbox" name="cuisine" value="Bengali"> Bengali &nbsp;
            <input type="checkbox" name="cuisine" value="Punjabi"> Punjabi &nbsp;
            <input type="checkbox" name="cuisine" value="Chinese" checked>Chinese<br> <br>

            <div class="flash-container">
                <div class="flash-message" data-type="error" data-timeout="8000" id="body"></div>
            </div>


            <button type="submit" class="btn btn-success btn-block" onclick=reg(<?php echo(json_encode($url)); ?>)>
            submit</button>
        </div>
        <a href="hotelreg1.php">Back</a>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</body>

<script src="./js/reg2.js"></script>

</html>