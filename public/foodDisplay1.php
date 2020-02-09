<?php include("phpCurl.php"); 

$ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>

<html>
<title>Food Display</title>
<head>
  <link rel="stylesheet" href="./css/css/foodDisplay1.css">
</head>
<body>
  
  <p>Food</p>

  

  <div class="navigation">
            <nav>
            <ul>
                <li><a href="foodDisplay2.php" value="1" onclick=getValue(1)>Breakfast </a></li><br>
                <li><a href="foodDisplay2.php" value="2" onclick=getValue(2)>Staters</a></li><br>
                <li><a href="foodDisplay2.php" value="3" onclick=getValue(3)>Main Course</a></li><br>
                <li><a href="foodDisplay2.php" value="4" onclick=getValue(4)>Desserts</a></li><br>
                <li><a href="foodDisplay2.php" value="5" onclick=getValue(5)>Fast Food</a></li><br>
                <li><a href="foodDisplay2.php" value="6" onclick=getValue(6)>Drinks With Alcohol</a></li><br>
                <li><a href="foodDisplay2.php" value="7" onclick=getValue(7)>Cappuccino</a></li><br>
                <li><a href="foodDisplay2.php" value="8" onclick=getValue(8)>Juice</a></li><br>
                <li><a href="foodDisplay2.php" value="9" onclick=getValue(9)>Mocktail</a></li><br>
                <li><a href="foodDisplay2.php" value="10" onclick=getValue(10)>Ice Cream</a></li><br>

            </ul>
            </nav>
</div>




   <?php 

   $hotelId= $_COOKIE["hotelId"];

  // $hotelId=getHotelId();
   
   $apiResult = callAPI('GET','http://localhost:5000/hotelfood/getdetailsbyhotelid/'.$hotelId,'');
     
    $result = json_decode($apiResult);
    

   
   ?>
    <?php foreach($result as $obj) {

         // $foodId=$_COOKIE["foodId"];
          
          $apiResult1 = callAPI('GET','http://localhost:5000/food/getdetailbyid/'.$obj->foodId,'');
     
          $result1 = json_decode($apiResult1);  
          
          foreach($result1 as $obj2) {
                    /* $value=$_COOKIE["val"];
                    if($value == json_encode($obj2->foodType)) {*/

        ?>

        

    
     <div class="main">
     <div class="row sideBar-body" >
     <a onclick=food(<?php echo $obj->hotelId; ?>,<?php echo $obj->hotelId; ?>)>
      <!--<a href = '1'></a> -->
       <div class="col-sm-3 col-xs-3 sideBar-avatar">
         <div class="avatar-icon">
           <img src="./hotelimages/1.jpg">

         </div>
       </div>
       <div class="col-sm-9 col-xs-9 sideBar-main">
         <div class="row" id="<?php echo $obj->hotelId; ?>">
           <div class="col-sm-8 col-xs-8 sideBar-name">
           <span class="name-meta"> <?php echo $obj2->foodName; ?>
           </span>
           </div> 
            
           <div class="col-sm-7 col-xs-7 sideBar-name">
           <span class="spec-meta"> <?php echo $obj->foodSpeciality; ?>
           </span>
           </div> 

           <div class="col-sm-6 col-xs-6 sideBar-name">
            <?php $p=(string)$obj->price; ?>
             <span class="price-meta"> <?php echo(json_encode($obj->price)); ?>
           </span>
           </div>
           
           <div class="col-sm-5 col-xs-5 sideBar-name">
             <span class="state-meta"> <?php echo $obj->size; ?>
           </span>
           </div>
           
           <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
             <span class="time-meta pull-right">
           </span>
           </div>
         </div>
       </div></a>
     </div>
     </div>
     <div class="textbox">
        <input type="number" class="text" id="<?php echo $obj->hotelFoodId ?>" placeholder="QUANTITY">
    </div>
    <div class="flash-container">
                <div class="flash-message" data-type="error" data-timeout="8000" id="bodyfooddisplay"></div>
            </div>

    <div class="btn">  
      <button type="submit" onclick=setValue(<?php echo json_encode($url); ?>,<?php echo json_encode($obj->hotelFoodId); ?>)>Add to Cart</button>
    </div>
     <?php  }} ?>

    


   </div>
  <div class="link">
   <a onclick=deleteOrder(<?php echo json_encode($url); ?>) href="./hotelDisplay.php">Back</a>
  </div> 
  <div class="link2">
   <a href="cartpage.php">View Cart</a>
  </div>
   </body>
   <script src="./js/hotelDisplayCuisine.js"></script>
  
   </html>