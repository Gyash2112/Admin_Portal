<?php
include 'connection.php';
$content=$_POST['content'];
$snos_dict=$conn->query("select sno from chapter");
$sno=0;
while($snos=$snos_dict->fetch_assoc()){
    $sno=$snos['sno'];
}

$sno++;
$chapters="CH".$sno;
$conn->query("insert into chapter values('$chapters','$content',$sno)");

header("location:index_page.php");


?>