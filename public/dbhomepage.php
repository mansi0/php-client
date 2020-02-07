<?php include("phpCurl.php");
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
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


<?php 

   $deliveryBoyId= $_COOKIE["deliveryBoyId"];

   echo $deliveryBoyId;

  // $hotelId=getHotelId();
   
   $apiResult = callAPI('GET','http://localhost:5000/hotelfood/getdeliveryboybydeliveryboyid/'.$deliveryBoyId,'');
     
    $result = json_decode($apiResult);
    
?>

<?php foreach($result as $obj) {

  echo $obj->name;



?>

<div class="main">
<div class="row sideBar-body" >
        <div class="col-sm-9 col-xs-9 sideBar-main">
         <div class="row" id="<?php echo $obj->deliveryBoyId; ?>"  onclick=dboylog(<?php echo $obj->deliveryBoyId; ?>)>

</div>
</div>

<?php }?>
</div>


</body>
<script src="./js/hotelhomepage.js"></script>
</html>