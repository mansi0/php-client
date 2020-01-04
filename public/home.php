<?php
  $ini_array = parse_ini_file("../config/config.ini", true);
  $url = $ini_array['url'];
?>
<!DOCTYPE html> 
<html lang="en">
    <head>
        <title>Taste On Way</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap"rel="stylesheet">

        <link rel="stylesheet" href="./css/css/home.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
        <script src="jquery.tiltedpage-scroll.js"></script>
        <link rel="stylesheet" href="./css/css/tiltedpage-scroll.css">   
    </head>
    <body>
     <div class="main">
        <section class="header">
            <div class="content-box1">
                <div class="menu">
                    <!--<img src="">-->
                    <ul>
                        <li> <a href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a></li>
                        <li> <a href="reg1.php"><i class="fas fa-user-plus"></i>Register</a></li>
                    </ul>
                </div>
                <div class="banner-text">
                <h2>Taste On Way!!!</h2>
                </div>
            </div>
        </section>

        <!--services-->
        <section class ="service">
                <div class="content-box2">
                    <div class="container">
                        <h1>Our Services</h1>
                        <div class="row services">
                            <div class="col-md-3 text-center">
                                <div class="icon">
                                    <i class="fab fa-renren"></i>   
                                 </div>
                                <h3><span>Work With Us</span></h3>
                                <p>You can work with us.hsdgkjhska sahgkjasfhkjsfh asjhfkjafhkjfh fjhkjfhkfhfkhf fbfkjfhkfjhkfhdfkdhfkfj</p>
                        </div>

                        <div class="col-md-3 text-center">
                            <div class="icon">
                                <i class="fas fa-user-tie"></i>
                             </div>
                            <h3><span>Join Our Business</span></h3>
                            <p>You can work with us.hsdgkjhska sahgkjasfhkjsfh asjhfkjafhkjfh fjhkjfhkfhfkhf fbfkjfhkfjhkfhdfkdhfkfj</p>
                         </div>

                         <div class="col-md-3 text-center">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>

                            </div>
                            <h3><span>Contact With Us</span></h3>
                            <p>You can work with us.hsdgkjhska sahgkjasfhkjsfh asjhfkjafhkjfh fjhkjfhkfhfkhf fbfkjfhkfjhkfhdfkdhfkfj</p>
                        </div>

                        <div class="col-md-3 text-center">
                            <div class="icon">
                                <i class="fab fa-renren"></i>   
                             </div>
                            <h3><span>Work With Us</span></h3>
                            <p>You can work with us.hsdgkjhska sahgkjasfhkjsfh asjhfkjafhkjfh fjhkjfhkfhfkhf fbfkjfhkfjhkfhdfkdhfkfj</p>
                       </div>

                        </div>
                    </div>
                </div>
        </section>
<!--features-->
        <section class="features">
            <div class="content-box">
                <div class="container2">
                    <div class="card">
                        <div class="imgBx" data-text="Feature1">
                            <img src="./projectphoto/f2.png">
                        </div>
                        <div class="content">
                        <div>
                            <h3>Feature1</h3>
                            <p>Self-Pickup</p>
                            <a href="#">Read More</a>
                        </div>
                         </div>
                    </div>
    
                    <div class="card">
                        <div class="imgBx" data-text="Feature2">
                            <img src="./projectphoto/f2.png">
                        </div>
                        <div class="content">
                        <div>
                            <h3>Feature2</h3>
                            <p>Express-Delivery</p>
                            <a href="#">Read More</a>
                        </div>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="imgBx" data-text="Feature3">
                            <img src="./projectphoto/f2.png">
                        </div>
                        <div class="content">
                        <div>
                            <h3>Feature3</h3>
                            <p>Items are categorized.</p>
                            <a href="#">Read More</a>
                        </div>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="imgBx" data-text="Feature4">
                            <img src="./projectphoto/f2.png">
                         </div>
                        <div class="content">
                        <div>
                            <h3>Feature4</h3>
                            <p>features will be added later</p>
                            <a href="#">Read More</a>
                        </div>
                        </div>
                    </div>
    
    </div>
    </div>
</section>
  
<!--Footer-->
<section class="footer">
    <div class="content-box3">
        <div class="container">
            <h1>Get In Touch</h1>
        <div class ="row">
            <div class="col-md-6">
                <form class="contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>

                   <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone Number">
                   </div>

                   <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Id">
                   </div>

                   <div class="form-group">
                    <textarea class="form-control" rows="4" placeholder="Your Message">
                    </textarea>
                   </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-6 contact-info">
                <div class="follow">
                    <i class="fas fa-map-marker-alt"></i><span>Shivajingar,Pune</span>
                </div>

                <div class="follow">
                    <i class="fas fa-mobile-alt"></i><span>9049771781,7083988679</span>
                </div>

                <div class="follow">
                    <i class="fas fa-envelope"></i><span>tasteonwayservice@gmail.com</span>
                </div>
                
                <div class="follow">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

        </div>

        </div>
    </div>  
     
 </section>
</div>
    <script>
        $(".main").tiltedpage_scroll({
            sectionContainer:"> section",
            angle:50,
            opacity:true,
            scale:true,
            outAnimation:true
        });
    </script>
</body>
</html>
    