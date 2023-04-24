<?php 
include 'connection.php';

$prinn_dict=$conn->query("select count(chapters) as count from chapter");
$prinn=$prinn_dict->fetch_assoc();
echo $prinn['count'];
?>