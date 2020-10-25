<?php 
include 'templates/header.php';
include 'config/app.php';?>
<style>
<?php include 'templates/style.css';

?>
</style>


<div class="container">
    <div class="signup-main">
        <div class="signup-post">
        <!-- <div class='half-circle1'>
            </div> -->
            <div class='signup-form'>
            

                <form action="" class='user'>
                    <h3>SignUp</h3>
                    <h5 class='mb-5'>Create New Account</h5>
                    <div class='form-group'>
                         
                        <input type="text" name="name" class='form-control form-control-user' id="name"  placeholder='   Enter your name'>
                    </div>
                    <div class='form-group'>
                    
                    <input type="email" name="email" class='form-control form-control-user' id="email"  placeholder='   Enter your email'>
                    </div>
                    <div class='form-group'>
                    <input type="password" name="passwrod" class='form-control form-control-user' id="password"  placeholder='   Enter your password'>
                    </div>
                    <div class='form-group'>
                        <input type="password" name="passwrod" class='form-control form-control-user' id="password"  placeholder='   Confirm your password'>
                    </div>
                    <button class='btn btn-block login-signup mt-4'>
                        SignUp
                    </button>
                </form>
           
            </div>
            <div class="signup-img">
                <img src="<?php echo $config['app_url'].'templates/sign-in.png'?>" alt="">
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





















