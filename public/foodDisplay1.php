<?php include("hotelDisplayCurl.php"); 

$ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>

<html>
<title>Food Display</title>
<head>
  <link rel="stylesheet" href="./css/css/hotelDisplay.css">
</head>
<body>
  
  <p>Food</p>

   <div class="row sideBar">

   <?php 

   $hotelId= $_COOKIE["hotelId"];

  // $hotelId=getHotelId();
   
   $apiResult = callAPI('GET','http://localhost:5000/hotelfood/getdetailsbyhotelid/'.$hotelId,'');
     
    $result = json_decode($apiResult);

   
   ?>
    <?php foreach($result as $obj) {

          $apiResult1 = callAPI('GET','http://localhost:5000/food/getdetailsbyid/'.$obj->foodId,'');
     
          $result1 = json_decode($apiResult1);  
          
          foreach($result1 as $obj2) {


      ?>
     <div class="main">
     <div class="row sideBar-body" >
     <a href="dbreg.php">
      <!-- <a href = '1'></a> -->
       <div class="col-sm-3 col-xs-3 sideBar-avatar">
         <div class="avatar-icon">
           <img src="./hotelimages/1.jpg">

         </div>
       </div>
       <div class="col-sm-9 col-xs-9 sideBar-main">
         <div class="row" id="<?php echo $obj->hotelId; ?>"  onclick=food(<?php echo $obj->hotelId; ?>)>
           <div class="col-sm-8 col-xs-8 sideBar-name">
           <span class="name-meta"> <?php echo $obj2->foodName; ?>
           </span>
           </div> 
            
           <div class="col-sm-7 col-xs-7 sideBar-name">
           <span class="spec-meta"> <?php echo $obj->foodSpeciality; ?>
           </span>
           </div> 

           <div class="col-sm-6 col-xs-6 sideBar-name">
             <span class="locality-meta"> <?php echo $obj->price; ?>
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
       </div>
     </div>
     </div>
     <?php  }} ?>

   </div>
  
   </body>
   <script src="./js/foodDisplay1.js"></script>
   </html>