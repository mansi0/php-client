<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
        <title></title>
        <link rel="stylesheet" href="./css/css/foodDisplay.css">
    </head>
<body> 

<div class="navigation">
            <nav>
            <ul>
                <li><a href="#Indian">Indian</a></li><br>
                <li><a href="#Continental">Continental</a></li><br>
                <li><a href="#Italian">Italian</a></li><br>
                <li><a href="#Japanese">Japanese</a></li><br>
                <li><a href="#American">American</a></li><br>
                <li><a href="#Bengali">Bengali</a></li><br>
                <li><a href="#Punjabi">Punjabi</a></li><br>
                <li><a href="#Chinese">Chinese</a></li><br>
            </ul>
            </nav>
</div>



<div class="row">
		   <div class="tab-content col-xl-12" id="myTabContent">
			  <div class="tab-pane fade" id="Indian" role="tabpanel">
				 <div class="row">
					<div class="col-md-6">
					   <div class="single_menu_list">
						  <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-5.jpg" alt="">
						  <div class="menu_content">
							 <h4>Chicken Fried Salad  <span>$45</span></h4>
							 <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
						  </div>
                       </div>
                        <br><br>
                       <div class="single_menu_list">
						  <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-5.jpg" alt="">
						  <div class="menu_content">
							 <h4>Chicken Fried Salad  <span>$45</span></h4>
							 <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
						  </div>
                       </div>
                    </div>
                 </div>
              </div>
        </div>
</div>
