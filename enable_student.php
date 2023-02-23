<?php
$id=$_GET['id'];
    $con = mysqli_connect("localhost", "root", "", "studmgsystem");
    $mysql = "UPDATE `tbl_studreg` SET `stud_status`=0 WHERE `stud_id` = $id";
    mysqli_query($con, $mysql);
    echo"<script>location.href='student_details.php'</script>";
?>