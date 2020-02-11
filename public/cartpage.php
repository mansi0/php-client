<?php include("phpCurl.php"); 

$ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="./css/css/cartpage.css">
</head>
<body>

<p>Your Food</p>
  <div class="orderid">
   Orderid: <?php 
   $total=0.0;
   $orderId=$_COOKIE["orderId"];
    echo $orderId;
     



// $hotelId=getHotelId();

$apiResult = callAPI('GET','http://localhost:5000/foodorder/getdetailsbyorderid/'.$orderId,'');
  
 $result = json_decode($apiResult);
 


 foreach($result as $obj) {

       
       
       $apiResult1 = callAPI('GET','http://localhost:5000/hotelfood/getdetailsbyhotelfoodid/'.$obj->hotelFoodId,'');
  
       $result1 = json_decode($apiResult1); 
        
       
       foreach($result1 as $obj1) {

         $apiResult2 = callAPI('GET','http://localhost:5000/food/getdetailbyid/'.$obj1->foodId,'');
  
         $result2 = json_decode($apiResult2); 
         
         
        
            foreach($result2 as $obj2) {
       
                 
     ?>

      </div>  
      <br>
      <br>
      

 
  <div class="main">
  <div class="row sideBar-body" >
  <!-- <a onclick=food(<?php echo $obj->hotelId; ?>,<?php echo $obj->hotelId; ?>)> -->
   <!--<a href = '1'></a> -->
    <div class="col-sm-3 col-xs-3 sideBar-avatar">
      <div class="avatar-icon">
        <img src="./hotelimages/1.jpg">

      </div>
    </div>
    <div class="col-sm-9 col-xs-9 sideBar-main">
      <div class="row" id="<?php echo $obj->hotelfoodId; ?>">
        <div class="col-sm-8 col-xs-8 sideBar-name">
        <span class="name-meta"> <?php echo $obj2->foodName; ?>
        </span>
        </div> 
         
        <div class="col-sm-7 col-xs-7 sideBar-name">
        <span class="spec-meta"> <?php echo $obj->quantity; ?>
        </span>
        </div> 

        <div class="col-sm-6 col-xs-6 sideBar-name">
         <?php $p=(string)$obj1->price; ?>
          <span class="price-meta"> <?php echo $p; ?>
        </span>
        </div>
        
        <div class="col-sm-5 col-xs-5 sideBar-name">
          <span class="state-meta"> <?php echo $obj2->category; ?>
        </span>
        </div>

        <?php 
        // echo json_encode($obj1->price);
        $total=$total + (((float)$obj1->price) * ((int)$obj->quantity));
         ?>
        
        <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
          <span class="time-meta pull-right">
        </span>
        </div>
      </div>
    </div></a>
  </div>
  </div>
  
 <!-- <div class="flash-container"> -->
             <!-- <div class="flash-message" data-type="error" data-timeout="8000" id="bodyfooddisplay"></div> -->
         <!-- </div> -->

 <div class="btn">  
 <button type="submit" onclick=deleteFood(<?php echo json_encode($url); ?>,<?php echo json_encode($obj->hotelFoodId); ?>) href="./cartpage.php">Remove</button>
 </div>
  <?php } }} ?>
<div class="box">
  <div class="total">
   <?php echo "Total= $total Rs.";
       
    ?>
  </div>
  <div class="dcharges">
   <?php   $deliverycharge=(20*$total)/100;
   echo "Delivery Charge=$deliverycharge Rs.";?>
  </div>
  <div class="totalamt">
    <?php    $totalamount=$total+$deliverycharge;
        echo "Total Amount=$totalamount Rs.";
        ?>
</div>
</div>

  <div class="link-2">
<a href onclick=deliverNow(<?php echo json_encode($url); ?>,<?php echo json_encode($total); ?>) >Deliver Now</a>
</div>

<div class="link-3">
<a href onclick=selfPickUp(<?php echo json_encode($url); ?>,<?php echo json_encode($total); ?>) >SelfPickup</a>
</div>



  <div class="link-1">
   <a href="./foodDisplay1.php">Back</a>
  </div>

  <div class="link-4">
   <a onclick=deleteFoodOrder(<?php echo json_encode($url); ?>) href="./foodDisplay1.php">Delete Cart</a>
  </div>

  

 


</div>



</body>
<script src="./js/cartPage.js"></script>
</html>