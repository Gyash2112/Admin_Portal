<?php 
include 'connection.php';

if($row['role']!='superadmin'){
    header("Location:logout.php");
}
// $conn=new mysqli("localhost","root","","admin_portal");
$sql1="select * from dashboard";
$result1=$conn->query($sql1);

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
    <link rel="stylesheet" href="css/show_users.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="container">
        <!-- header Starts-->

        <?php include 'navbar.php'?>
        <!--header ends -->
        <!-- main Starts -->
        <main>
            <?php include 'sidenav.php';?>
            <div class="dashboard">
            <div class="hamburger">
                    <button onclick="opennav()"><img src="https://img.icons8.com/puffy/32/000000/experimental-menu-puffy.png"/></button>
                </div>

                <div class="data">
                    <table>
                        <tr>
                        <th>S.No</th>
                        <th>Profile Pic</th>
                        <th>Name</th>
                        <th>Roll NO</th>
                        <th>ROLE</th>
                        </tr>
                        <?php 
                        $s=1;
                        while($rows=$result1->fetch_assoc()){?>
                            <tr>
                            <td><?php echo "$s"."."?></td>
                                <td><img src="<?php echo $rows["pic"]?>" alt="profile pic"></td>
                                <td><?php echo $rows['fname'];?></td>
                                <td><?php echo $rows['roll_no'];?></td>
                                <td ><?php echo $rows['role'];?></td>
                            </tr>
                            <?php
                            $s=$s+1;
                        }
                        ?>

                        
                        
                    </table>
                </div>

            </div>

        </main>
        <!-- main ends -->
    </section>    

    <script src="js/dropdown.js"></script>
    <script src="js/sidenav.js"></script>
</body>
</html>