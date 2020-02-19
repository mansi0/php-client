<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>
<html>
    <head>
      <meta charset="utf-8">
      <title></title>
        <link rel="stylesheet" href="./css/css/report.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    </head>

<body>

<p>Report</p>

<div class="main">

    <div class="customer">
        Number of customers:
    </div><br>
    <hr style="width:200%">

    <div class="deliveryboy">
        Number of delivery boys:
    </div><br>
    <hr style="width:200%">

    <div class="restaurants">
        Number of restaurants:
    </div><br>
    <hr style="width:200%">

    <div class="orders">
        Number of orders:
    </div><br>
    <hr style="width:200%">

    <div class="earning">
        Total earning of the day:
    </div><br>
    <hr style="width:200%">

<a href="home.php">Back</a>
    
</body>
<script src="./js/login.js"></script> 
</html>