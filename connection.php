<?php
session_start();
$conn=new mysqli("localhost","root","","admin_portal");
if(substr($_SESSION['roll_no'],0,2)!='FC'){
$sql="select * from dashboard where roll_no='{$_SESSION['roll_no']}'";
}
else{
$sql="select * from faculty where roll_no='{$_SESSION['roll_no']}'";
}
$result=$conn->query($sql);

$row=$result->fetch_assoc();
?>