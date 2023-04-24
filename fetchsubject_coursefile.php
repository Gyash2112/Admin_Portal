<?php
$subject_alloted=$conn->query("select c_id from course_allocation where roll_no='{$_SESSION['roll_no']}'");
$roww=$subject_alloted->fetch_assoc();
?>