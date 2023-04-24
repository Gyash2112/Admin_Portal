<?php
include 'connection.php';

$c_type=$_POST["c_type"];
$c_title=$_POST["c_title"];
$start_date=$_POST["start_date"];
$end_date=$_POST["end_date"];
$file=$_FILES["certificate_pic"]["name"];
$temp_file=$_FILES["certificate_pic"]["tmp_name"];
$certificate_count=$row["certificate_count"];
$temp=explode(".",$file);

// creating sql variables:
$certificate_count=$certificate_count+1;
    $c_id=$_SESSION["roll_no"]."_"."$certificate_count";
    $name=$row["name"];
    $sql_file=$c_id.".".end($temp);
    
$sql_query="insert into certificate values('{$_SESSION['roll_no']}','$c_id','$name','$c_type','$c_title','$start_date','$end_date','$sql_file')";
$conn->query($sql_query);

$sql_query="update dashboard set certificate_count='$certificate_count' where roll_no='{$_SESSION['roll_no']}' ";
$conn->query($sql_query);
$location="certificates/" . $c_id.".".end($temp);


    if(move_uploaded_file($temp_file,$location)){
        $_SESSION["certificate_uploaded"]=true;
        header("Location:certificates.php");
        exit();
     }

?>




