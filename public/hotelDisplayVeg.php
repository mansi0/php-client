<?php include("phpCurl.php"); 

$ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>

<html>
<title>Hotel Display</title>
<head>
  <link rel="stylesheet" href="./css/css/hotelDisplay.css">
</head>
<body>
  
  <p>Restaurants</p>

   <div class="row sideBar">

   <?php 
   $apiResult = callAPI('GET','http://localhost:5000/hotel/gethoteldetailbyhotelmenutype/'."veg",'');
     
    $result = json_decode($apiResult);
   
   ?>
     <?php foreach($result as $obj) {?>

     <div class="main">
     <div class="row sideBar-body" >
     <!--<a href="foodDisplay1.php">-->
      <!-- <a href = '1'></a> -->
      <a onclick=food(<?php echo (json_encode($obj->hotelId)); ?>,<?php echo (json_encode($url)); ?>)>
       <div class="col-sm-3 col-xs-3 sideBar-avatar">
         <div class="avatar-icon">
           <img src="./hotelimages/<?php echo $obj->hotelImage?>">

         </div>
       </div>
       <div class="col-sm-9 col-xs-9 sideBar-main">
         <div class="row" id="<?php echo $obj->hotelId; ?>">
           <div class="col-sm-8 col-xs-8 sideBar-name">

           <span class="name-meta"> <?php echo $obj->hotelName; ?>
           </span>
           </div> 

           <div class="col-sm-7 col-xs-7 sideBar-name">
             <span class="locality-meta"> <?php echo $obj->hotelLocality; ?>
           </span>
           </div>
           
           <div class="col-sm-6 col-xs-6 sideBar-name">
             <span class="state-meta"> <?php echo $obj->hotelState; ?>
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
     <div class="btn">  
      <button type="submit" onClick="./public/hoteldetails.php">View Details</button>
      </div>
     
     <?php } ?>

   </div>
   <div class="link">
  <a href="customerhomepage.php">Back</a>
  </div>
   
  
   </body>
   <script src="./js/foodDisplay.js"></script>
   </html>