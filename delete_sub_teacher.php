<?php

$sub_id = $_GET["sub_id"];
include('DatabaseCon.php');
$db = new DatabaseCon;
$con = mysqli_connect("localhost", "root", "", "studmgsystem");
$sql = "DELETE FROM `tbl_teacher_subject` WHERE teachsub_id='$sub_id'";
mysqli_query($con, $sql);
echo "<script>alert('Deleted');location.href='assign.php';</script>";

?>


