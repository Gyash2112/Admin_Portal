<?php
session_start();
$conn=new mysqli("localhost","root","","admin_portal");
$name=$_POST["name"];
$roll=$_POST["roll_no"];
$password=$_POST["password"];
$pic = $_FILES["profile_pic"]["name"];
$temp_pic=$_FILES["profile_pic"]["tmp_name"];
$temp = explode(".", $pic);
$renamed_pic=$roll.'.'.end($temp);
$folder = "profile_pic/" . $renamed_pic;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// $extensions_arr = array("jpg","jpeg","png");
$sql="insert into dashboard(roll_no,fname,password,pic) values ('$roll','$name','$password','profile_pic/$renamed_pic')";
$conn->query($sql);
$sql="insert into login_info values('$roll','$password')";
$conn->query($sql);
$_SESSION["uploaded"]=true;
if(move_uploaded_file($temp_pic,$folder)){
       header("Location:add_user.php");
       exit();
    }







?>