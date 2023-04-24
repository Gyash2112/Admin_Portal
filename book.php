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

        <div class="navbar">
            <h1 class="heading">welcome! <span><?php echo $row["fname"]?></span></h1>
            <div class="logout">
                <img src="<?php echo $row["pic"]?>" alt="pic">
                <a href="logout.php" type="button">logout</a>
            </div>
        </div>

        <!--header ends -->
        <!-- main Starts -->
        <main>
            <div id="option_area">
            <div class="close_nav">
                    <span onclick="closenav()">X</span>
                </div>
                <div class="user_detail">
                    <div class="profile_img"><img src="<?php echo $row["pic"]?>" alt="profile pic"></div>
                    <div><h6><?php echo $row["fname"]?></h6></div>
                    <div><p><?php echo $row["roll_no"]?></p></div>
                </div>

                <div class="options">
                <button class="dropdown-btn">HOME
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="dashboard.php">HOME</a>
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
                    <button class="dropdown-btn">POSTS
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="certificates.php">Certificates</a>
                        <a href="#">Books/Book Chapter</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>

            <div class="dashboard">
            <div class="hamburger">
                    <button onclick="opennav()"><img src="https://img.icons8.com/puffy/32/000000/experimental-menu-puffy.png"/></button>
                </div>
                <form action="#" method="POST" enctype='multipart/form-data'>
                    <h1>Add Certificate:</h1>
                    <div class="form-group">
                        <label for="id">Faculty Id:</label>
                        <input type="text" name="id" size="20" value="<?php echo $_SESSION["roll_no"] ?>" disabled="disabled">
                    </div>
                    <div class="form-group">
                        <label for="book_title">Book Title:</label>
                        <input type="text" name="book_title" size="20" placeholder="Book Title">
                    </div>
                    <div class="form-group">
                        <label for="book_chapter">Book Chapter:</label>
                        <input type="text" name="book_chapter" size="20" placeholder="Book Chapter:">
                    </div>
                    <div class="form-group">
                        <label for="book_author">Book Title editor/ Author:</label>
                        <input type="text" name="book_author" size="20" placeholder="Author of Book:">
                    </div>
                    <div class="form-group">
                        <label for="issn">ISSN/ISBN No. If any</label>
                        <input type="text" name="issn" size="20" placeholder="ISSN/ISBN No">
                    </div>
                    <div class="form-group">
                        <label for="url">URL If any</label>
                        <input type="link" name="url" size="20" placeholder="URL">
                    </div>
                    <div class="form-group" style="width:30%;">
                        <label for="date">Date:</label>
                        <input type="date" name="date">
                    </div>
                    

                    <div class="form-group">
                        <label for="certificate_pic">Upload Certifcate:</label>
                        <input type="file" name="certificate_pic">
                        <p>Only .pdf / .jpg file is allowed. Size-1MB</p>
                    </div>
                    
                    <div class="form-group" >
                        <input type="submit" value="Add Book">
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