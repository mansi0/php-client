<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./css/css/food.css">
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
    <div class="register">
        
        <div class="login-box" >
        <h1>  Register   </h1>
            <div class="textbox">
                <i class="fas fa-user" aria-hidden="true"></i>
                <input type="text"   class="text" id="name" placeholder="FOOD NAME" required>
                
            </div>
                
          <!--  <div class="textbox">
                <i class="fa fa-address-card" aria-hidden="true"></i>
                <input type="text"class="text" placeholder="ADDRESS">
            </div> -->

            <div class="textbox">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input placeholder="FOOD TYPE" required>
                <select id="list">
                <option value="breakfast">Breakfast</option>
                <option value="starters">Starters</option>
                <option value="mainCourse">Main Course</option>
                <option value="desserts">Desserts</option>  
                <option value="fastFood">Fast Food</option>
                <option value="drinksWithAlcohol">Drinks With Alcohol</option>
                <option value="cappuccino">Cappuccino</option>
                <option value="juice">Juice</option>
                <option value="mocktail">Mocktail</option>
                <option value="iceCream">Ice Cream</option>

                </select> 
            </div>
                
            <!-- <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="USERNAME">
            </div> -->
            <div class="textbox">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <input type="text" class="text" id="foodCategory" placeholder="FOOD CATEGORY" required>
            </div>

            <div class="textbox">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <input type="text" class="text" id="foodSpeciality" placeholder="FOOD SPECIALITY" required>
            </div>

            <div class="textbox">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <input type="text" class="text" id="foodSize" placeholder="FOOD SIZE" required>
            </div>

            <div class="textbox">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <input type="text" class="text" id="foodPrice" placeholder="FOOD PRICE" required>
            </div>

          <!--  <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="PASSWORD" id="password" required>
            </div>
            <span id='msg' style="color: red" font-size=10px>
            </span>
           <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password"  placeholder=" CONFIRM PASSWORD" id="confirmpassword" required>
            </div>-->

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
        <div class="flash-container">
                <div class="flash-message" data-type="error" data-timeout="8000" id="bodyhtl"></div>
        </div>


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
<script src="./js/food.js"></script>   
</html>
