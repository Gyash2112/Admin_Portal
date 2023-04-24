<?php 
include 'connection.php';
if(!(isset($_SESSION["roll_no"]))){
    header("Location:index.php");
    exit();
}

if(isset($_SESSION["certificate_uploaded"]) && $_SESSION["certificate_uploaded"]===true){
    echo "<script>alert('New Certificate Uploaded Successfully')</script>";
    $_SESSION["certificate_uploaded"]=false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <!-- <link rel="stylesheet" href="add_user.css"> -->
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/certificates.css">
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
                <form action="upload_certificate.php" method="POST" enctype='multipart/form-data'>
                    <h1>Add Certificate:</h1>
                    <div class="form-group">
                        <label for="id">Faculty Id:</label>
                        <input type="text" name="id" size="20" value="<?php echo $_SESSION["roll_no"] ?>" disabled="disabled">
                    </div>
                    <div class="form-group">
                        <label for="c_type">Certificate Type:</label>
                        <input type="text" name="c_type" size="20" placeholder="Certificate Type:">
                    </div>
                    <div class="form-group">
                        <label for="c_title">Certificate Title:</label>
                        <input type="text" name="c_title" size="20" placeholder="Certificate Title:">
                    </div>
                    <div class="form-group" style="width:30%;">
                        <label for="start_date">Start Date:</label>
                        <input type="date" name="start_date">
                    </div>
                    <div class="form-group" style="width:30%;">
                        <label for="end_date">End Date:</label>
                        <input type="date" name="end_date">
                    </div>

                    <div class="form-group">
                        <label for="certificate_pic">Upload Certifcate:</label>
                        <input type="file" name="certificate_pic">
                        <p>Only .pdf / .jpg file is allowed</p>
                    </div>
                    
                    <div class="form-group" >
                        <input type="submit" value="Add Certificate">
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