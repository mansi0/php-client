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

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
        <title></title>
        <link rel="stylesheet" href="./css/css/hotelhomepage.css">
    </head>
<body> 

<div class="main">
                <ul>
                    <!--<li class="active"> <a href="">Home</a></li>
                    <li> <a href="reg1.html">Register</a></li>
                    <li><a href="#">Services</a></li>
                  <li><a href="#">Gallery</a></li>-->
                    <li><a href="hotelDisplay.php">Order Now</a></li>
                    <li><a href onclick=getOrder(<?php echo json_encode(url); ?>) >Get Orders</a></li>
                    <li><a href="#"><?php echo $email2 ?></a></li>


                    <li><a href="#"><i class="fas fa-user"></i>
                    <select id="list" style="max-width:70%;" onchange="location = this.value;">
                    <option value="">Click Here</option>
                    <option value="hoteldetails.php" >Hotel Details</option>
                   <option value="hotlogin.php">Log Out</a></option></li>
                    </select>
                   
                
                </ul>
 </div>



 

<?php 
$apiResult = callAPI('GET','http://localhost:5000/order/getorderbyhotelid/'.$hotelId,'');
  
 $result = json_decode($apiResult);

   foreach($result as $obj) {
    
      ?>
       <div class="col-sm-9 col-xs-9 sideBar-name">
          <span class="id-meta"> <?php echo $obj->orderId; ?>
        </span>
        </div>
        <?php

      if($obj->status==1) {?>
        <div class="hm">
        <?php echo "Homedelivery";?></div>
      <div class="homedelivery"><a href onclick=accepthomedelivery(<?php echo json_encode($url);?>,2)>Accept Order</a></div>
      <?php }
      else {?>
        <div class="sf">
        <?php echo "Selfpickup";?></div>
      <div class="selfpickup"> <a href onclick=acceptselfpickup(<?php echo json_encode($url); ?>,2)>Accept Order</a></div>
        <?php }

        $apiResult = callAPI('GET','http://localhost:5000/customer/getcustomerbycustomerid/'.$obj->customerId,'');
  
         $result = json_decode($apiResult);

          foreach($result as $cust) {

            ?>
            <div class="col-sm-6 col-xs-6 sideBar-name">
            <span class="cname-meta"> <?php echo $cust->name; ?>
            </span>
            </div>
            <div class="col-sm-6 col-xs-6 sideBar-name">
            <span class="email-meta"> <?php echo $cust->emailId; ?>
            </span>
            </div>
            <div class="col-sm-6 col-xs-6 sideBar-name">
            <span class="cn-meta"> <?php echo $cust->contNo; ?>
            </span>
            </div>
            <hr align="center" width="55%"> 
            
        <?php
          }
          ?>
    <?php

    $apiResult1 = callAPI('GET','http://localhost:5000/foodorder/getdetailsbyorderid/'.$obj->orderId,'');
  
    $result1 = json_decode($apiResult1);



        foreach($result1 as $obj1) {

          $apiResult2 = callAPI('GET','http://localhost:5000/hotelfood/getdetailsbyhotelfoodid/'.$obj1->hotelFoodId,'');
  
          $result2 = json_decode($apiResult2);

          

          foreach($result2 as $obj2) {

            $apiResult3 = callAPI('GET','http://localhost:5000/food/getdetailbyid/'.$obj2->foodId,'');
  
            $result3 = json_decode($apiResult3);

            foreach($result3 as $obj3) {






    ?>
  <div class="sideBar">
  <div class="main">
  <div class="row sideBar-body" >
  <!--<a href="foodDisplay1.php">-->
   <!-- <a href = '1'></a> -->
   
    <div class="col-sm-3 col-xs-3 sideBar-avatar">
      <div class="avatar-icon">
        <!-- <img src="./hotelimages/<?php echo $obj->hotelImage?>"> -->

      </div>
    </div>
    <div class="col-sm-9 col-xs-9 sideBar-main">
      <div class="row" id="<?php echo $obj3->foodName; ?>">

      <div class="col-sm-9 col-xs-9 sideBar-name">
          <span class="nm-meta"> <?php echo $obj3->foodName; ?>
        </span>
        </div>

        <div class="col-sm-8 col-xs-8 sideBar-name">

        <span class="name-meta"> <?php echo $obj2->price; ?>Rs.
        </span>
        </div> 

        <div class="col-sm-7 col-xs-7 sideBar-name">
          <span class="locality-meta"> Qty:<?php echo $obj1->quantity; ?>
        </span>
        </div>
        
        <div class="col-sm-6 col-xs-6 sideBar-name">
          <span class="state-meta">Time: <?php echo $obj->orderTime; ?>
        </span>
        </div>
        
        <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
          <span class="time-meta pull-right">
        </span>
        </div>
      </div>
    </div>
    
   </a>
  </div>
  </div>
  <!--<div class="btn">  
   <button type="submit" onClick="./public/hoteldetails.php">View Details</button>
   </div>-->
  <?php }}}} ?>

</div>

</body>
<script src="./js/hotlogin.js"></script>
</html>