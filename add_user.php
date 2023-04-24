<?php 
include 'connection.php';
if(!(isset($_SESSION["roll_no"]))){
    header("Location:index.php");
    exit();
}

if(isset($_SESSION["uploaded"]) && $_SESSION["uploaded"]===true){
    echo "<script>alert('New User Added Successfully')</script>";
    $_SESSION["uploaded"]=false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="css/add_user.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="container">
        <!-- header Starts-->

       <?php include 'navbar.php';?>

        <!--header ends -->
        <!-- main Starts -->
        <main>
            <?php include 'sidenav.php';?>    

            <div class="dashboard">
            <div class="hamburger">
                    <button onclick="opennav()"><img src="https://img.icons8.com/puffy/32/000000/experimental-menu-puffy.png"/></button>
                </div>
                <form action="newuser_sql.php" method="POST" enctype='multipart/form-data'>
                    <h1>Add Faculty:</h1>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" size="20" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="roll_no">Roll No.:</label>
                        <input type="text" name="roll_no" size="20" placeholder="Enter Roll No.">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" size="20" placeholder="Enter password">
                    </div>

                    <div class="form-group">
                        <label for="profile_pic">Upload Profile Pic:</label>
                        <input type="file" name="profile_pic">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Add User">
                    </div>
                </form>
            </div>

        </main>
        <!-- main ends -->
    </section>    
    <script src="js/dropdown.js"></script>
    <script src="js/sidenav.js"></script>
</body>
</html>