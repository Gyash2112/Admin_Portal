<?php
include 'connection.php';

$chapter=$_POST['chapter'];
$roll=$_SESSION['roll_no'];
$conn->query("insert into status_ch_completion values('$roll','$chapter')");
header('location:index_page.php');
?>
