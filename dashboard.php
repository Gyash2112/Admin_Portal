<?php 
include 'connection.php';
if(!(isset($_SESSION["roll_no"]))){
    header("Location:index.php");
    exit();
}
if(substr($_SESSION['roll_no'],0,2)==="FC"){
    $details=($conn->query("select * from faculty where roll_no='{$_SESSION["roll_no"]}'"))->fetch_assoc();
}
else{
$details=($conn->query("select * from dashboard where roll_no={$_SESSION["roll_no"]}"))->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/navbar.css">
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
            <?php include 'sidenav.php'?>

            <div class="dashboard">
            <div class="hamburger">
                    <button onclick="opennav()"><img src="https://img.icons8.com/puffy/32/000000/experimental-menu-puffy.png"/></button>
                </div>

                <div class="cards">
                <div class="card">
                    <div class="first">
                        <?php 
                        $course_file_dict=$conn->query("select count(chapters) as ch_count from chapter");
                        $course_file=$course_file_dict->fetch_assoc();
                        $my_chapters_dict=$conn->query("select count(distinct chapters) as count_ch_completed from status_ch_completion where roll_no='{$_SESSION["roll_no"]}'");
                        $my_chapters=$my_chapters_dict->fetch_assoc();
                        $percentage=(int)(($my_chapters['count_ch_completed']/$course_file['ch_count'])*100);
                        ?>
                        <h2>COURSE FILE</h2>
                        <p><?php echo $percentage; ?>% Completed</p>
                    </div>
                    <div class="second">
                        <h3><?php echo $my_chapters['count_ch_completed']; ?>/<?php echo $course_file['ch_count']; ?></h3>
                        <a href="index_page.php">click here</a>
                    </div>
                </div>
                <div class="card">
                    <div class="first">
                        <h2>Attendance</h2>
                        <p>Mark Attendance</p>
                    </div>
                    <div class="second">
                        <h3>4/10</h3>
                        <a href="">click here</a>
                    </div>
                </div>
                <div class="card">
                    <div class="first">
                        <h2>COURSE FILE</h2>
                        <p>40% Completed</p>
                    </div>
                    <div class="second">
                        <h3>4/10</h3>
                        <a href="">click here</a>
                    </div>
                </div>
                <div class="card">
                    <div class="first">
                        <h2>COURSE FILE</h2>
                        <p>40% Completed</p>
                    </div>
                    <div class="second">
                        <h3>4/10</h3>
                        <a href="">click here</a>
                    </div>
                </div>
            
            </div>
         
            <div class="profile">
                <div class="heading">
                    <div class="title"><h6>Profile</h6></div>
                    <div class="buttons">

                    </div>
                </div>
                <div class="u_details">
                    <div class="optionsofprofile">
                        <img src="<?php echo $details['pic'];?>" alt="profile pic">
                        <a href="" type="button">Course File</a>
                        <a href="" type="button">Attendance</a>
                        <a href="" type="button">Salary</a>
                        <a href="" type="button">Subject Topics</a>
                    </div>

                    <div class="user_details">
                    <div class="row">
                            <div class="label"><p>Name:</p></div>
                            <div class="ans"><p><?php echo $details['fname'];?></p></div>
                        </div>
                        <div class="row">
                            <div class="label"><p>Year:</p></div>
                            <div class="ans"><p><?php echo substr($details['class'],2,1);?></p></div>
                        </div>
                        <div class="row">
                            <div class="label"><p>Section:</p></div>
                            <div class="ans"><p><?php echo substr($details['class'],-1,1);?></p></div>
                        </div>
                        <div class="row">
                            <div class="label"><p>Class:</p></div>
                            <div class="ans"><p><?php echo $details['class'];?></p></div>
                        </div>
                        <div class="row">
                            <div class="label"><p>University roll:</p></div>
                            <div class="ans"><p><?php echo $details['roll_no'];?></p></div>
                        </div>
                        <div class="row">
                            <div class="label"><p>Library Code:</p></div>
                            <div class="ans"><p>28673</p></div>
                        </div>
                        <div class="row">
                            <div class="label"><p>Local Address:</p></div>
                            <div class="ans"><p>42, Gandhi Gram</p></div>
                        </div>
                        <div class="row">
                            <div class="label"><p>Permanent Address:</p></div>
                            <div class="ans"><p>42, Gandhi Gram</p></div>
                        </div>
                        <div class="row">
                            <div class="label"><p>Mobile Number:</p></div>
                            <div class="ans"><p><?php echo $details['mob']?></p></div>
                        </div>
                        <div class="row">
                            <div class="label"><p>Birth Date:</p></div>
                            <div class="ans"><p>21/12/2003</p></div>
                        </div>
                    </div>
                </div>
                
            </div>

            

        </main>
        <!-- main ends -->
    </section>    

    <script src="js/dropdown.js"></script>
    <script src="js/sidenav.js"></script>
</body>
</html>