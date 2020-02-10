<?php include("phpCurl.php");
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>


<?php 

   $deliveryBoyId= $_COOKIE["deliveryBoyId"];


  // $hotelId=getHotelId();
   
   $apiResult = callAPI('GET','http://localhost:5000/deliveryboy/getdeliveryboybydeliveryboyid/'.$deliveryBoyId,'');
     
    $result = json_decode($apiResult);
    
?>

<?php foreach($result as $obj) {

  $email1=$obj->deliveryboyEmailId;

}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
        <title></title>
        <link rel="stylesheet" href="./css/css/dbhomepage.css">
    </head>
<body> 

<div class="main">
                <ul>
                    <!--<li class="active"> <a href="">Home</a></li>
                    <li> <a href="reg1.html">Register</a></li>
                    <li><a href="#">Services</a></li>
                   <li><a href="#">Gallery</a></li>
                    <li><a href="#">About</a></li>-->
                    <li><a href="hotelDisplay.php">Order Now</a></li>
                    <li><a href="#">View Cart</a></li>
                    <li><a href="#"><?php echo $email1?></a></li>


                    <li><a href="#"><i class="fas fa-user"></i>
                    <select id="list" style="max-width:70%;" onchange="location = this.value;">
                    <option value="">Click Here</option>
                    <option value="dbdetails.php" >Delivery boy Details</option>
                   <option value="dblogin.php">Log Out</a></option></li>
                    </select>
                
                </ul>
</div>


</body>
<script src="./js/dblogin.js"></script>
</html>