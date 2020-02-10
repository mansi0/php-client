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
<html>
<title>Delivery boy Details</title>
<head>
    <p>Delivery boy Details<p>
  <link rel="stylesheet" href="">
</head> 
     <link rel="stylesheet" href="./css/css/dbdetails.css">

</head>
<body>
    <div class="details">
    <div class="name">
    <p1>Name:</p1>
    <?php echo $obj->deliveryboyName; ?>
    </div>
    <hr style="width:25%">

    <div class="email">
    <p2>Email:</p2>
    <?php echo $obj->deliveryboyEmailId; ?>
    </div>
    <hr style="width:25%">
    
    <div class="address">
    <p3>Address:</p3>
    <?php echo $obj->deliveryboyAddress; ?>
    </div>
    <hr style="width:25%">

    <div class="city">
    <p4>City:</p4>
    <?php echo $obj->deliveryboyContNo; ?>
    </div>
    <hr style="width:25%">

    <div class="state">
    <p5>State:</p5>
    <?php echo $obj->deliveryArea; ?>
    </div>
    <hr style="width:25%">
</div>
<a href="dbhomepage.php">Back</a>
</body>
<script src="./js/dblogin.js"></script>
</html>
