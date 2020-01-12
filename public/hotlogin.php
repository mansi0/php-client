<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>
<html>
    <head>
      <meta charset="utf-8">
      <title></title>
        <link rel="stylesheet" href="./css/css/hotlogin.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    </head>

<body>
  <div class="login-box">

    <h1>Login Form</h1>

   <!-- <div class="textbox">
        <i class="fas fa-user" aria-hidden="true"></i>
      <input type="text" class="text" id="Name" placeholder="Username"><br><br>
    </div> -->
  
    <div class="textbox">
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <input type="text" class="text" placeholder="Hotel Email" id="emailid"><br><br>
    </div>
  
    <div class="textbox">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Password" id="password"><br><br>
    </div>
    <span id='msg' style="color: red" font-size=10px>
    </span>
    <div class="flash-container">
                <div class="flash-message" data-type="error" data-timeout="8000" id="bodydblogin"></div>
            </div>

    <button type="submit" class="btn btn-success btn-block" onclick=setValue(<?php echo(json_encode($url)); ?>)>Login</button>
  <div class="col-md-4 col-sm-4 col-xs-12"></div>
  </div>
  <!--<button type="button"><a href="/home/aishwariya/fooddelivery/demo/src/main/resources/index1.html">Register</a></button> -->

  <!--<script type="text/javascript">
    $(".textbox input").on("focus",function() {
    $(this).addClass("focus");
  });

  $(".textbox input").on("blur",function(){
      if($(this).val()=="")
      $(this).removeClass("focus");
  });-->

  </div>
</body>
<script src="./js/login.js"></script> 
</html>