<?php
include 'connection.php';
// $subject_alloted=$conn->query("select c_id from course_allocation where roll_no='{$_SESSION['roll_no']}'");
// $roww=$subject_alloted->fetch_assoc();
// $subject_details=$conn->query("select * from course_file where c_id='{$roww['c_id']}'");
// $roww=$subject_details->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/form.css">

</head>
<body>
    <div class="container">
        <?php include 'navbar.php';?>
        <main>
            <?php include 'sidenav.php'?>

            <div class="dashboard">
            <div class="hamburger">
                    <button onclick="opennav()"><img src="https://img.icons8.com/puffy/32/000000/experimental-menu-puffy.png"/></button>
            </div>
            <form action="upload_certificate.php" method="POST" enctype='multipart/form-data' name='form'>
                    <!-- <h1 align="center"><?php echo $roww["c_name"]; ?></h1> -->
                    <h1>Front Page</h1>
                    <!-- <div class="form-group">
                        <label for="id">Faculty Id:</label>
                        <input type="text" name="id" size="20" value="<?php echo $_SESSION["roll_no"] ?>" disabled="disabled">
                    </div> -->
                   
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" size="20" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation:</label>
                        <input type="text" name="designation" size="20" placeholder="Designation">
                    </div>
                    <div class="form-group">
                        <label for="class_name">Class Name</label>
                        <input type="text" name="class_name" size="20" placeholder="class_name">
                    </div>
                    
                    <div class="form-group">
                        <label for="ayear">Academic Year</label>
                        <select name="ayear" id="ayear">
                        <option value="2020-21">2019-20</option>
                            <option value="2020-21">2020-21</option>
                            <option value="2020-21">2021-22</option>
                            <option value="2020-21">2022-23</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="aktu_code">Aktu Code:</label>
                        <input type="text" name="aktu_code" size="20" placeholder="AKTU CODE">
                    </div>

                    <div class="form-group">
                        <label for="nba_code">NBA Code:</label>
                        <input type="text" name="nba_code" size="20" placeholder="NBA CODE">
                    </div>
                    <div class="form-group">
                        <label for="year">Academic Year</label>
                        <select name="year" id="year">
                        <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year">Academic Year</label>
                        <select name="year" id="year">
                        <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>

                    
                    <div class="form-group" >
                        <input type="submit" value="Submit">
                    </div>

                    <a href="#" onclick="viewpdf()">View PDF</a>
            </form>
            
            </div>
        </main>
    </div>
    <script src="js/sidenav.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="js/pdf.js"></script>
</body>
</html>