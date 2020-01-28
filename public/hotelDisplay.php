<?php include("hotelDisplayCurl.php"); 

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
   $apiResult = callAPI('GET','http://localhost:5000/hotel/gethoteldetail','');
     
    $result = json_decode($apiResult);
   
   ?>
     <?php foreach($result as $obj) {?>
     <div class="main">
     <div class="row sideBar-body" >
      <!-- <a href = '1'></a> -->
       <div class="col-sm-3 col-xs-3 sideBar-avatar">
         <div class="avatar-icon">
           <img src="./projectphoto/h2.jpeg">
         </div>
       </div>
       <div class="col-sm-9 col-xs-9 sideBar-main">
         <div class="row" id="<?php $obj->hotelId; ?>">
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
     </div>
     </div>

     <?php } ?>

   </div>
  
   </body>
   </html>