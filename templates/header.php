<?php include_once __DIR__."/../config/app.php"?>
<!DOCTYPE html>
<html>
    <head>
        <!-- meta tag -->
        <meta charset='UTF-8'>
        <meta name='viewport' content='width-device-width, intial-scale=1,shrink-to-fit=no'>
      
        <!-- bootstrap link  -->
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



      
        
        <!-- fontawsom link -->
        <script src="https://kit.fontawesome.com/5ce671a2b6.js" crossorigin="anonymous"></script>

        <!-- google fonts link -->
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=PT+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&family=Kumbh+Sans:wght@300;700&display=swap" rel="stylesheet">
        <!-- css link -->
        <link rel="stylesheet" href="<?php echo $config['app_url'].'templates/style.css'?>" type="text/css">
        <!-- slider testamonial plugin -->
        <link rel="stylesheet" href="<?php echo $config['app_url'].'plugin/slider.css'?>">
        <!-- SVG WAVES -->
        <link rel="stylesheet" href="<?php echo $config['app_url'].'plugin/wave.svg'?>">
        <!-- JS ANIMATION -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- TITILE -->
        <title>A.Courses</title>


        
        <body>
            <div class="container" id='navBar'>
            <!-- canvas section -->
            <div id="offCanvas">
                <a href="#" class='navbar-brand  d-block d-sm-none '  ><img src="templates/logoNav.png" alt="logo imgae"></a>
                <ul class='nav flex-column'>
                    <li class='nav-item  active'>
                        <a href="<?php echo $config['app_url'].'index.php'?>" class='nav-link '>Home</a>
                    </li>
                    <li class='nav-item '>
                        <a href="#about" class='nav-link'>About</a>
                    </li>
                    <li class='nav-item '>
                                <a href="<?php echo $config['app_url'].'login.php'?>" class='nav-link'>courses</a>
                            </li>
                            <li class='nav-item '>
                                <a href="#about" class='nav-link'>contact</a>
                            </li>
                    <li class='nav-item '>
                        <a href="<?php echo $config['app_url'].'login.php'?>" class='nav-link'>login</a>
                    </li>
                    <li class='nav-item '>
                        <a href="<?php echo $config['app_url'].'signup.php'?>" class='nav-link'>signup</a>
                    </li>
                </ul>
                
            </div>

            <!--navbar-->
            <div class="container-fluid" id='navBar'>    

                <nav class="navbar navbar-expand-lg  custom-navbar">
                    <!-- Toggle Button -->
                    <button id='toggleButton' class='navbar-toggler' type='button' >
                        <span>
                        <i class="fas fa-plus"></i>
                        </span>
                    </button>

   
                    
                    <!-- logo -->
                    <a href="#" class='navbar-brand d-none d-sm-block'><img src=<?php echo $config['app_url'].'templates/black.png'?> alt="logo imgae"></a>

                    <!-- NAVS -->
                  

                    <div class='d-none d-lg-block navbar-collapse collapse w-100 order-3 dual-collapse2' id='navbarNav'>
                        <ul class='navbar-nav ml-auto'>
                        <li class='nav-item active'>
                                <a href="<?php echo $config['app_url'].'index.php'?>" class='nav-link '>Home</a>
                            </li>
                            <li class='nav-item '>
                                <a href="#about" class='nav-link'>About</a>
                            </li>
                        <li class='nav-item '>
                                <a href="<?php echo $config['app_url'].'login.php'?>" class='nav-link'>courses</a>
                            </li>
                            <li class='nav-item mr-5'>
                                <a href="#about" class='nav-link'>contact</a>
                            </li>
                        <li class='nav-item '>
                                <a href="<?php echo $config['app_url'].'login.php'?>" class=' btn   login-signup mr-2' style='background-color:#5742f5; color:white;'>login</a>
                            </li>
                            <li class='nav-item '>
                                <a href="<?php echo $config['app_url'].'signup.php'?>" class=' btn  login-signup ml-2' style='background-color:#5742f5; color:white'>sign Up</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>


            <div class="social-icon">
                <a href="#">
                    <i class='fab fa-twitter'></i>
                </a>
                <a href="#">
                    <i class='fab fa-facebook'></i>
                </a>
                <a href="#">
                    <i class='fab fa-youtube'></i>
                </a>
            </div>
           