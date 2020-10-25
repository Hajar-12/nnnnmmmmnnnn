<?php 
include 'templates/header.php';
include 'config/app.php';?>
<style>
<?php include 'templates/style.css';

?>
</style>
<script>
  AOS.init();
</script>



<!-- slide images -->
                <!-- <div id='carouselExampleCaptions' class='carousel slide ' data-ride='carousel'>
                    <ol class='carousel-indicators'>
                        <li data-target='#carouselExampleCaptions' data-slide-to='0' class='active'></li>
                        <li data-target='#carouselExampleCaptions' data-slide-to='1' ></li>
                        <li data-target='#carouselExampleCaptions' data-slide-to='2' ></li>
                    </ol>
                    <div class='carousel-inner'>
                    <h1>Study With Us</h1>
                        <div class='carousel-item active'>
                            <p>On AnyDevice</p>
                            <img src="templates/slide1.png" class='d-block img-fluid' alt="Slide Image">
                        </div>
                        <div class='carousel-item '>
                            <p>In Anywhere</p>
                            <img src="templates/slide2.png" class='d-block img-fluid' alt="Slide Image">
                        </div>
                        <div class='carousel-item '>
                            <p>At AnyTime</p>
                            <img src="templates/slide3.png" class='d-block img-fluid' alt="Slide Image">
                        </div>

                    </div>
                </div> -->

                <!-- cart-down image -->
               
            <!-- </div> -->
            <!-- social media icons -->

            <!-- about section -->
            <div class="container-fluid" >
                <div class="row" id='header'>
                   
                    <div class="col-lg-5">
                        <h1 class='m-4'>About Us</h1>
                        <p class='m-4 pb-2 text-dark'>
                            if that aint't giving up of my ladies listen up if that boy aint't giving up 
                            lick your lips and swing your hips and ohhh my name is no my sign is no my number is no 
                        </p>
                        
                        <a href="<?php echo $config['app_url'].'signup.php'?>">
                        <button type='button' class='btn login-signup text-white' style='background-color:#5742f5'>SignUP</button>
</a>

<a href="<?php echo $config['app_url'].'login.php'?>">                        
<button type='button' class='btn login-signup'>login</button>
</a>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <img src="templates/headerimage.png" alt="About image" class='img-fluid'>
                    </div>
                </div>
            </div>


            <div class="caret-down">
                    <a href="#footer">
                        <img src="templates/cart-down.png" alt="">
                    </a>
                </div>


<div class="container featuers">
    <div class="container-fluid">
    <h3 class='mb-5'>our features</h3>
        <div class='row'>
        <div class="col-lg-4 col-md-12  ">
        <img src="<?php echo $config['app_url'].'templates/ourfeature.png'?>" alt="" class='img-1'>
        <hr>
        <h5 class='mt-5'>study with us anywhere</h5>
        <p>this how our system is work you could study form anywher just plug you connection and start learning</p>
    </div>
    <div class="col-lg-4 col-md-12 ">
        <img src="<?php echo $config['app_url'].'templates/feature2.png'?>" alt="" class='img-1'>
        <hr>
        <h5 class='mt-5'>study with us anywhere</h5>
        <p>this how our system is work you could study form anywher just plug you connection and start learning</p>
    </div>



  
    <div class="col-lg-4 col-md-12  ">
        <img src="<?php echo $config['app_url'].'templates/feature3.png'?>" alt="" class='img-1'>
       <hr>
        <h5 class='mt-5'>study with us anywhere</h5>
        <p>this how our system is work you could study form anywher just plug you connection and start learning</p>
    </div>

        

        
    </div>
    </div>
</div>



<div data-aos="fade-up" class="container-fluid">
                <div class="row" id='about'>
                <div class="col-lg-6">
                        <img src="templates/aboutapp.png" alt="About image" class='img-fluid'>
                    </div>
                    <div class="col-lg-5">
                        <h1 class='m-4'>About Us</h1>
                        <p class=' text-dark'>
                            if that aint't giving up of my ladies listen up if that boy aint't giving up 
                            lick your lips and swing your hips and ohhh my name is no my sign is no my number is no 
                        </p>
                        <a href="<?php echo $config['app_url'].'signup.php'?>">
                        <button type='button' class='btn btn-lg login-signup text-white pl-5 pr-5' style='background-color:#5742f5'>Join Us</button>
                        </a>
                    </div>
                    
                </div>
            </div>

           
           
           
           
           
           
           
           
           
           
           
            <!-- course section -->
            
 <div class="container" id='courses'>
    <div class='row ' >
        <button class='all course-button'>All</button>
        <button class='design course-button'>Design</button>
        <button class='upcoming course-button'>Upcoming</button>
        <button class='recent course-button'>Recent</button>
    </div>

    <div class='row' id='all'>
        <div class='courses'>
            <div class='col-lg-4 col-md-6 col-sm-12'>
                <div class="card">
                    <div class="img-box">
                        <img src="<?php echo $config['app_url']."templates/pic7.jpeg"?>" alt="">  
                    </div>
                    <div class="content">
                        <h4 class='course-name'>Intr to computer science</h4>  
                        <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
                    </div>
                </div>
             </div>

            <div class='col-lg-4 col-md-6 col-sm-12'>
                <div class="card">
                    <div class="img-box">
                        <img class='course-img' src="<?php echo $config['app_url']."templates/pic8.jpeg"?>" alt="">
                    </div>
                    <div class="content">
                        <h4 class='course-name'>Intr to computer science</h4>
                        <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
                    </div>
                </div>
            </div>

          <div class='col-lg-4 col-md-6 col-sm-12'>
            <div class="card">
                <div class="img-box">
                    <img src="<?php echo $config['app_url']."templates/pic5.jpeg"?>" alt="">
                </div>
                <div class="content">
                    <h4 class='course-name'>Intr to computer science</h4>
                    <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
                </div>
                </div>
            </div>
          

          <div class='col-lg-4 col-md-6 col-sm-12'>
            <div class="card">
                <div class="img-box">
                    <img src="<?php echo $config['app_url']."templates/pic5.jpeg"?>" alt="">
                </div>
                <div class="content">
                    <h4 class='course-name'>Intr to computer science</h4>
                    <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
                </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 col-sm-12'>
            <div class="card">
                <div class="img-box">
                    <img class='course-img' src="<?php echo $config['app_url']."templates/pic3.jpeg"?>" alt="">
                </div>
                <div class="content">
                    <h4 class='course-name'>Intr to computer science</h4>
                    <a href="#" class="btn btn-primary enroll m-2">Enroll</a> 
                </div>
            </div>
          </div>


          <div class='col-lg-4 col-md-6 col-sm-12 '>
            <div class="card">
                <div class="img-box">
                    <img src="<?php echo $config['app_url']."templates/DataScience.jpg"?>" alt="">
                </div>
                <div class="content">
                    <h4 class='course-name'>Intr to computer science</h4>
                    <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
                </div>
            </div>
          </div>
        </div>
    </div>

          

          
    







     <div class='row see'  >

    
   <div class='courses'>
            <div class='col-lg-4 col-md-6 more-courses'>
                <div class="card">
                    <div class="img-box">
                        <img src="<?php echo $config['app_url']."templates/pic7.jpeg"?>" alt="">  
                    </div>
                    <div class="content">
                        <h4 class='course-name'>Intr to computer science</h4>  
                        <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
                    </div>
                </div>
             </div>

            <div class='col-lg-4 col-md-6 more-courses'>
                <div class="card">
                    <div class="img-box">
                        <img class='course-img' src="<?php echo $config['app_url']."templates/pic8.jpeg"?>" alt="">
                    </div>
                    <div class="content">
                        <h4 class='course-name'>Intr to computer science</h4>
                        <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
                    </div>
                </div>
            </div>

          <div class='col-lg-4 col-md-6 more-courses'>
            <div class="card">
                <div class="img-box">
                    <img src="<?php echo $config['app_url']."templates/pic5.jpeg"?>" alt="">
                </div>
                <div class="content">
                    <h4 class='course-name'>Intr to computer science</h4>
                    <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
                </div>
                </div>
            </div>
           

         
    </div>
</div>  
         
  

  


       

           
           
          
 
<div class='row see' id='upcoming'>

    
<div class='courses' >

    <div class='col-lg-4 col-md-6 more-courses'>
     <div class="card">
         <div class="img-box">
             <img src="<?php echo $config['app_url']."templates/test1.jpg"?>" alt="">
         </div>
         <div class="content">
             <h4 class='course-name'>Intr to computer science</h4>
             <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
         </div>
     </div>
     </div>

     <div class='col-lg-4 col-md-6 more-courses'>
     <div class="card">
         <div class="img-box">
             <img class='course-img' src="<?php echo $config['app_url']."templates/test3.jpg"?>" alt="">
         </div>
         <div class="content">
             <h4 class='course-name'>Intr to computer science</h4>
             <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
         </div>
         </div>
     </div>

     <div class='col-lg-4 col-md-6 more-courses'>
     <div class="card">
         <div class="img-box">
             <img src="<?php echo $config['app_url']."templates/test2.jpg"?>" alt="">
         </div>
         <div class="content">
             <h4 class='course-name'>Intr to computer science</h4>
             <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
         </div>
         </div>
     </div>

</div>
</div>


<div class='row see' id='design'>   
<div class='courses' >

    <div class='col-lg-4 col-md-6 more-courses'>
     <div class="card">
         <div class="img-box">
             <img src="<?php echo $config['app_url']."templates/test4.jpg"?>" alt="">
         </div>
         <div class="content">
             <h4 class='course-name'>Intr to computer science</h4>
             <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
         </div>
     </div>
     </div>

     <div class='col-lg-4 col-md-6 more-courses'>
     <div class="card">
         <div class="img-box">
             <img class='course-img' src="<?php echo $config['app_url']."templates/test5.jpg"?>" alt="">
         </div>
         <div class="content">
             <h4 class='course-name'>Intr to computer science</h4>
             <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
         </div>
         </div>
     </div>

     <div class='col-lg-4 col-md-6 more-courses'>
     <div class="card">
         <div class="img-box">
             <img src="<?php echo $config['app_url']."templates/test6.jpg"?>" alt="">
         </div>
         <div class="content">
             <h4 class='course-name'>Intr to computer science</h4>
             <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
         </div>
         </div>
     </div>

</div>
</div>

<div class='row see' id='recent'>

    
<div class='courses' >

    <div class='col-lg-4 col-md-6 more-courses'>
     <div class="card">
         <div class="img-box">
             <img src="<?php echo $config['app_url']."templates/test7.jpg"?>" alt="">
         </div>
         <div class="content">
             <h4 class='course-name'>Intr to computer science</h4>
             <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
         </div>
     </div>
     </div>

     <div class='col-lg-4 col-md-6 more-courses'>
     <div class="card">
         <div class="img-box">
             <img class='course-img' src="<?php echo $config['app_url']."templates/test8.jpg"?>" alt="">
         </div>
         <div class="content">
             <h4 class='course-name'>Intr to computer science</h4>
             <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
         </div>
         </div>
     </div>

     <div class='col-lg-4 col-md-6 more-courses'>
     <div class="card">
         <div class="img-box">
             <img src="<?php echo $config['app_url']."templates/test9.jpg"?>" alt="">
         </div>
         <div class="content">
             <h4 class='course-name'>Intr to computer science</h4>
             <a href="#" class="btn btn-primary enroll m-2">Enroll</a>
         </div>
         </div>
     </div>

</div>
</div>
</div>








<a href="#see" >
    <div type='button' id='more'>
    <span class='seeToggle more'>See more</span>
    <span class='seeToggle less'style="display: none;">See less</span>
    </div>
   </a>







<div class='container' id='testimonial'>
<div class="carousel" data-flickity='{ "wrapAround": true }'>
 
  <div class="carousel-cell testimonal">
      <div class='witness-image mr-3'>
      <img src="<?php echo $config['app_url'].'templates/testimonial-avatar.svg'?>" alt="">
      </div>
      <div class='witness-testimonal'>
      <p class=' p-2 mt-4'>this website has helped me
      this website has helped me a lot I'm gratitude to this web so much
      </p>
      </div>
  </div>
  <div class="carousel-cell testimonal">
  <div class='witness-image mr-3'>
      <img src="<?php echo $config['app_url'].'templates/testimonial-avatar.svg'?>" alt="">
      </div>
      <div class='witness-testimonal'>
      <p class=' p-2 mt-4'>this website has helped me
      this website has helped me a lot I'm gratitude to this web so much
      </p>
      </div>
  </div>
  <div class="carousel-cell testimonal">
  <div class='witness-image mr-3'>
      <img src="<?php echo $config['app_url'].'templates/testimonial-avatar.svg'?>" alt="">
      </div>
      <div class='witness-testimonal'>
      <p class=' p-2 mt-4'>this website has helped me
      this website has helped me a lot I'm gratitude to this web so much
      </p>
      </div>
      
  </div>
  <div class="carousel-cell testimonal">
  <div class='witness-image mr-3'>
      <img src="<?php echo $config['app_url'].'templates/testimonial-avatar.svg'?>" alt="">
      </div>
      <div class='witness-testimonal'>
      <p class=' p-2 mt-4'>this website has helped me
      this website has helped me a lot I'm gratitude to this web so much
      </p>
      </div>
  </div>
  <div class="carousel-cell testimonal">
  <div class='witness-image mr-3'>
      <img src="<?php echo $config['app_url'].'templates/testimonial-avatar.svg'?>" alt="">
      </div>
      <div class='witness-testimonal'>
      <p class=' p-2 mt-4'>this website has helped me
      this website has helped me a lot I'm gratitude to this web so much
      </p>
      </div>
  </div>
</div>
</div>








<script>
    <?php
    include 'templates/behav.js'
    ?>
</script>

<?php 

include 'templates/footer.php';
?>