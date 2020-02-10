<?php include("phpCurl.php"); 

$ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>


<?php 

   $hotelId= $_COOKIE["hotelId"];

  // $hotelId=getHotelId();
   
   $apiResult = callAPI('GET','http://localhost:5000/hotel/getdetailsbyhotelid/'.$hotelId,'');
     
    $result = json_decode($apiResult);
    
?>

<?php foreach($result as $obj) {

  $email2= $obj->hotelEmailId;

}

?>

<html>
<title>Hotel Details</title>
<head>
    <p>Hotel Details<p>
  <link rel="stylesheet" href="">
</head> 
     <link rel="stylesheet" href="./css/css/hoteldetails.css">

</head>
<body>
    <div class="details">

    <div class="image">
    <img src="./hotelimages/<?php echo $obj->hotelImage?>">
     </div>

    <div class="name">
    <p1>Name:</p1>
    <?php echo $obj->hotelName; ?>
    </div>
    

    <div class="email">
    <p2>Email:</p2>
    <?php echo $obj->hotelEmailId; ?>
    </div>
    
    <div class="contno">
    <p3>Contact No:</p3>
    <?php echo $obj->hotelContNo; ?>
    </div>
    
    <div class="address">
    <p4>Address:</p4>
    <?php echo $obj->hotelAddress; ?>
    </div>

    <div class="city">
    <p5>City:</p5>
    <?php echo $obj->hotelCity; ?>
    </div>

    <div class="state">
    <p5>State:</p5>
    <?php echo $obj->hotelState; ?>
    </div>
    

</div>
<a href="hotelhomepage.php">Back</a>
</body>
<script src="./js/hotlogin.js"></script>
</html>

