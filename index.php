<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="container login">
        <div class="login_block">
            <!-- <h1>PSIT</h1> -->
            <h2>Admin Login</h2>
            <form action="connectivity.php" method="post">
            
                <div>
                    <input type="text" id="name" placeholder="Enter username" name="name">
                    <?php if((isset($_SESSION['user_notexist']))){?>
                    <div class="error"><p><?php echo 'Please Enter Username'?></p></div>
                    <?php } session_destroy();?>
                </div>
                <div>
                    <input type="password" id="password" name="password" placeholder="Enter password">
                    <?php if((isset($_SESSION['password_notexist']))){?>
                    <div class="error"><p><?php echo 'Please Enter Password'?></p></div>
                    <?php } unset($_SESSION['password_notexist']);?>
                    <?php if((isset($_SESSION['password_mismatch']))){?>
                    <div class="error"><p><?php echo 'Password Mismatch'?></p></div>
                    <?php } unset($_SESSION['password_mismatch']);?>
                    <?php if((isset($_SESSION['illegal']))){?>
                    <div class="error"><p><?php echo "<script> alert('Ek kantaap dunga agar Jyada Hoshiyar banne ki Koshish ki😒')</script>"?></p></div>
                    <?php } unset($_SESSION['illegal']);?>
                </div>
                <div><input type="submit"></div>
                </form>


            
        </div>
    </section>
    
    <script src="js/script.js"></script>
    

</body>
</html>