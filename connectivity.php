<?php
        session_start();
        $conn=new mysqli("localhost","root","","admin_portal");
        if(empty($_POST["name"]) && !(isset($_SESSION["roll_no"]))){
            // echo '<script>alert("Enter email");</script>';
            $_SESSION['user_notexist']=1;
            header("Location:index.php");
            exit();
        }
        elseif (empty($_POST["password"])) {
            $_SESSION['password_notexist']=true;
            header("Location:index.php");
            exit();
        }
        else{
            $id=$_POST["name"];
        $pass=$_POST["password"];
        
       
        if(substr($id,0,2)!='FC'){
        $sql="select password from dashboard where roll_no='$id'";
        }
        else{
            $sql="select password from faculty where roll_no='$id'";
        }
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        if($row["password"]===$pass){
            $_SESSION["roll_no"]=$id;
            $conn->close();
            header("Location: dashboard.php");
            exit();
        }
    
        else{
            $_SESSION['password_mismatch']=true;
            header("Location:index.php");
            exit();
        }
    
        
        }
        
        ?>