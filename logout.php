<?php
session_start();
if($_SESSION['illegal']==true){
    $temp=$_SESSION['illegal'];
}
session_destroy();
session_start();
$_SESSION['illegal']=$temp;

header("Location: index.php");
exit();
?>