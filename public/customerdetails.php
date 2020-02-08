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

}

?>

<html>
<title>User Details</title>
<head>
    <p>User Details<p>
  <link rel="stylesheet" href="">
</head> 
     <link rel="stylesheet" href="./css/css/customerdetails.css">

</head>
<body>
    <div class="details">
    <div class="name">
    <p1>Name:</p1>
    <?php echo $obj->name; ?>
    </div>
    <hr style="width:25%">

    <div class="email">
    <p2>Email:</p2>
    <?php echo $obj->emailId; ?>
    </div>
    <hr style="width:25%">
    
    <div class="address">
    <p3>Address:</p3>
    <?php echo $obj->address; ?>
    </div>
    <hr style="width:25%">

    <div class="city">
    <p4>City:</p4>
    <?php echo $obj->city; ?>
    </div>
    <hr style="width:25%">

    <div class="state">
    <p5>State:</p5>
    <?php echo $obj->state; ?>
    </div>
    <hr style="width:25%">
</div>
<a href="customerhomepage.php">Back</a>
</body>
<script src="./js/customerhomepage.js"></script>
</html>
