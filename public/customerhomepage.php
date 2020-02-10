<?php include("phpCurl.php");
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>


<?php 

$customerId= $_COOKIE["customerId"];


// $hotelId=getHotelId();

$apiResult = callAPI('GET','http://localhost:5000/customer/getcustomerbycustomerid/'.$customerId,'');
  
 $result = json_decode($apiResult);
 
 
?>

<?php foreach($result as $obj) {

$email=$obj->emailId;

}

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
                    <!--<li class="active"> <a href="">Home</a></li>
                    <li> <a href="reg1.html">Register</a></li>
                    <li><a href="#">Services</a></li>
                  <li><a href="#">Gallery</a></li>
                    <li><a href="#">About</a></li>-->
                    <li><a href="hotelDisplay.php">Order Now</a></li>
                    <li><a href="#">View Cart</a></li>
                    <li><a href="#"><?php echo $email ?></a></li>


                    <li><a href="#"><i class="fas fa-user"></i>
                    <select id="list" style="max-width:70%;" onchange="location = this.value;">
                    <option value="">Click Here</option>
                    <option value="customerdetails.php" >Customer Details</option>
                   <option value="login.php">Log Out</a></option></li>
                    </select>
                   
                
                </ul>
            </div>

        <div class="navigation">
                    <a href="hotelDisplay.php">Show all restaurants</a><br>
                     <a href="">Login</a><br>
                    <!--<li> <a href="reg1.html">Register</a></li>-->
                    <a href="#">Near by</a><br>
                  <!-- <li><a href="#">Gallery</a></li>-->
                    <a href="veg.php">Veg</a><br>
                    <a href="nonveg.php">Non-Veg</a><br>
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
      
        <div class="rect1" value="1" onclick=getValue1(1)>
          <h>Self Pickup</h>
        </div>
      
      
        <div class="rect2"  value="2" onclick=getValue1(2)>
          <h1>Rooftop</h1>
        </div>
      
      
        <div class="rect3" value="3" onclick=getValue1(3)>
          <h10>Outdoor Seating</h10>
        </div>
      
        <div class="rect4" value="4" onclick=getValue1(4)>
          <h3>Indoor Seating</h3>
        </div>
      
        <div class="rect5" value="5" onclick=getValue1(5)>
          <h4>Vallet Parking</h4>
        </div>
     
       <div class="rect6" value="6" onclick=getValue1(6)>
          <h5>Free Parking</h5>
        </div>
      
        <div class="rect7" value="7" onclick=getValue1(7)>
          <h6>Bar Facility</h6>
        </div>
      
        <div class="rect8" value="8" onclick=getValue1(8)>
          <h7>Ladies Special</h7>
        </div>
      
        <div class="rect9" value="9" onclick=getValue1(9)>
          <h8>Live Sports Screening</h8>
        </div>
      
      
        <div class="rect10" value="10" onclick=getValue1(10)>
          <h9>Live Music</h9>
        </div>
      
      <h11>Enjoy Every Moment With Us</h11>
      <h12><i class="fas fa-mobile-alt"></i></h12>
      <a1>Order</a1>
      <h13><i class="fas fa-pizza-slice"></h13>
      <h14><i class="fas fa-bicycle"></i></h14>
      <a2>Wait for Delivery</a2>
      <h15><i class="fas fa-utensils"></i></h15>
      <a3>Enjoy your Food</a3>

</div>



</section>




<!--<div class="main">
<div class="row sideBar-body" >
        <div class="col-sm-9 col-xs-9 sideBar-main">
         <div class="row" id="">

</div>
</div>-->

</div>



</body>
<script src="./js/customerhomepage.js"></script>
</html>