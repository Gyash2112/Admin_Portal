<?php 

include 'connection.php';
if(substr($_SESSION['roll_no'],0,2)!="FC"){
    $_SESSION['illegal']=true;
    header('Location:logout.php');
}
?>
<?php 
$sql1="select dashboard.roll_no,dashboard.pic,dashboard.fname from dashboard inner join faculty on  faculty.roll_no='{$_SESSION["roll_no"]}' AND dashboard.class=faculty.designation";
$result1=$conn->query($sql1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/attendance.css">
</head>
<body>
    <div class="container">
        <?php include 'navbar.php';?>

       <main>
            <?php include 'sidenav.php';?> 

            <div class="dashboard">
                <div class="hamburger">
                    <button onclick="opennav()"><img src="https://img.icons8.com/puffy/32/000000/experimental-menu-puffy.png"/></button>
                </div>

                <div class="students">
                    <h1>Attendance for date: <span><?php echo date("d/m/Y")?></span></h1>

                    <div class="data">
                        <form action="mark_attendance.php" method="post">
                    <table>
                        <tr>
                        <th>S.No</th>
                        <th>Profile Pic</th>
                        <th>Name</th>
                        <th>Roll NO</th>
                        <th>STATUS</th>
                        </tr>
                        <?php 
                        $s=0;
                        $t=1;
                        while($rows=$result1->fetch_assoc()){?>
                            <tr>
                            <td><?php echo "$t"."."; $t++; ?></td>
                                <td><img src="<?php echo $rows["pic"]?>" alt="profile pic"></td>
                                <td><?php echo $rows['fname'];?></td>
                                <td><input type="hidden" name="rolls[<?php echo $s; ?>]" value="<?php echo $rows['roll_no'];?>"><?php echo $rows['roll_no'];?></td>
                                <td><input type="radio" name="status[<?php echo $s ?>]"  value="P" checked>Present <br>
                                <input type="radio" name="status[<?php echo $s ?>]" value="A">Absent
                                </td>
                            </tr>
                            <?php
                            $s=$s+1;
                        
                        }
                        ?>


                        
                    </table>
                    <div class="submit"><input type="submit" value="SUBMIT"></div>
                    </form>
                </div>
                </div>

            </div>
       </main>
            


    </div>
    <script src="js/dropdown.js"></script>
    <script src="js/sidenav.js"></script>
</body>
</html>