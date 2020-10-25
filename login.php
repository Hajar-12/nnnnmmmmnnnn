<?php 
include 'templates/header.php';
include 'config/app.php';?>
<style>
<?php include 'templates/style.css';

?>
</style>



<div class="container" >
    <div class="login-main" style='position:relative;'>
        <div class="login-post">
            <div class="login-post-img">
                <img src="<?php echo $config['app_url'].'templates/log-in.png'?>" alt="">
            </div>
            
            <div class='login-post-info'>
            <img src="<?php echo $config['app_url'].'templates/welcome.svg'?>" alt="" style='width:200px'>

                <form action="" class='user'>
                    <div class='form-group'>
                        <i class="fa fa-user user-icon"></i> 
                        <input type="email" name="email" class='form-control form-control-user' id="email"  placeholder='   Enter your email'>
                    </div>
                    <div class='form-group'>
                    <i class="fa fa-key email-icon"></i>
                        <input type="password" name="passwrod" class='form-control form-control-user' id="password"  placeholder='   Enter your password'>
                    </div>
                    <button class='btn btn-block login-signup mt-4'>
                        login
                    </button>
                </form>
           
            </div>
            <div class='half-circle'>
            
           
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
     
