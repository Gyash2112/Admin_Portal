<?php 

include 'connection.php';
// $snos_dict=$conn->query("select sno from chapter");
// $sno=0;
// while($snos=$snos_dict->fetch_assoc()){
//     $sno=$snos['sno'];
// }
$delete=$_POST['chap_no'];


$conn->query("delete from chapter where sno=$delete");
$conn->query("update chapter set sno=sno-1 where sno>$delete");
// $update_dict=$conn->query("select * from chapter");
$conn->query("update chapter set chapters=concat('CH',sno)");


// while($update=$update_dict->fetch_assoc()){
//     $sno=$update['sno'];
//     $chapters='CH'.$sno;
//     $conn->query("update chapter set chapters='$chapters' where sno=$sno");
// }
header("location:index_page.php");

?>