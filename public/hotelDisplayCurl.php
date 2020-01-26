<?php

     
 /*  $url = 'http://localhost:5000/hotel/gethoteldetail';
   $method = 'GET';
   echo ">>>>>>>>>>>><<<<<<<<<<<";
*/
function callAPI($method, $url, $data = false){
   
      $curl = curl_init();
      switch ($method){
         case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
         case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
            break;

         case "GET":
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, "GET");

         default:
            if ($data)
               $url = sprintf("%s?%s", $url, http_build_query($data));
      }

      // OPTIONS:
      curl_setopt($curl, CURLOPT_URL, $url);

      // EXECUTE:
      $result = curl_exec($curl);

      if(!$result) {
         die("Connection Failure");
      }

         curl_close($curl);
         
      return $result;
}
?>