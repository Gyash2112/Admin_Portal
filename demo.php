<?php 
include 'connection.php';
if(!(isset($_SESSION["roll_no"]))){
    header("Location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="dropdown.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="navbar">
            <h1 class="heading">welcome! <span><?php echo $row["name"]?></span></h1>
            <div class="logout">
                <img src="<?php echo $row["pic"]?>" alt="pic">
                <a href="logout.php" type="button">logout</a>
            </div>
        </div>
    
        <!-- header Starts-->

        

        <!--header ends -->
        
        <div id="option_area">
                <div class="user_detail">
                    <div class="profile_img"><img src="<?php echo $row["pic"]?>" alt="profile pic"></div>
                    <div><h6><?php echo $row["name"]?></h6></div>
                    <div><p><?php echo $row["roll_no"]?></p></div>
                </div>

                <div class="options">
                    <button class="dropdown-btn">HOME
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">HOME</a>
                        <a href="#">Attendance</a>
                        <a href="logout.php">Logout</a>
                    </div>
                    <button class="dropdown-btn">ADD USER
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="add_user.php">Add User</a>
                        <a href="#">Delete User</a>
                        <a href="#">Modify User</a>
                    </div>
                    <button class="dropdown-btn">SHOW USER
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="show_users.php">Show all users</a>
                        <a href="#">show by faculty id</a>
                        <a href="#">Show HOD's</a>
                    </div>
                </div>
            </div>

        
     

    <script src="dropdown.js"></script>
    <script src="sidenav.js"></script>
</body>
</html>