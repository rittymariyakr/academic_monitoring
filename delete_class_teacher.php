<?php

$stream_id = $_GET["stream_id"];
include('DatabaseCon.php');
$db = new DatabaseCon;
$con = mysqli_connect("localhost", "root", "", "studmgsystem");

$s = "select * from tbl_classteacher where stream_id='$stream_id'";
$rs = $db->selectData($s);
$row = mysqli_fetch_array($rs);
$cl_id = $row['stream_id'];
$tea_id = $row['teacher_id'];
$sql1 = "UPDATE `tbl_class` SET `assign_teacher`='0' WHERE class_id = '$cl_id'";
$sql2 = "UPDATE `tbl_teachreg` SET `assign_class`='0' WHERE teach_id = '$tea_id'";
$sql3 = "DELETE FROM `tbl_classteacher` WHERE stream_id= '$cl_id'";
mysqli_query($con, $sql1);
mysqli_query($con, $sql2);
mysqli_query($con, $sql3);
echo "<script>alert('Deleted');location.href='assign_classteacher.php';</script>";

?>


