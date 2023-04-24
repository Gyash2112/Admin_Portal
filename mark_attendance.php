<?php 
include 'connection.php';

$roll=$_POST['rolls'];
 
$status=$_POST['status'];
$date=date("Y-m-d");
for($i=0;$i<sizeof($roll);$i++){
    $conn->query("insert into attendance values('$date','$roll[$i]','$status[$i]')");
    echo $roll[$i];
}

header('Location:dashboard.php')

?>