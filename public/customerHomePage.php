<?php  

$ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>

<html>
<title>Customer Home Page</title>
<head>
  <link rel="stylesheet" href="./css/css/foodDisplay1.css">
</head>
<body>

<?php 

   $customerId= $_COOKIE["customerId"];

  // $hotelId=getHotelId();
   
   $apiResult = callAPI('GET','http://localhost:5000/customer/getcustomerbycustomerid/'.$customerId,'');
     
    $result = json_decode($apiResult);
    
?>

<?php foreach($result as $obj) {



?>

<div class="main">
<div class="row sideBar-body" >
        <div class="col-sm-9 col-xs-9 sideBar-main">
         <div class="row" id="<?php echo $obj->customerId; ?>"  onclick=custlog(<?php echo $obj->customerId; ?>)>

</div>
</div>

<?php }?>
</div>

</body>
</html>