<?php include("hotelDisplayCurl.php"); 

$ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>

<html>
<title>Hotel Display</title>
<body>
    <?php
    $apiResult=callAPI('GET','http://localhost:5000/hotel/gethoteldetail','');
    $result=json_decode($apiResult);
    ?>

    <?php foreach($result as $obj){?>
        <table border=1>
        <tr><td><font size=20><?php echo $obj->hotelName;?></font></td></tr>

   <?php } ?>
   </table>
   </body>
   </html>