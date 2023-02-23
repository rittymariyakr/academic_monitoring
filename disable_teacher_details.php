<?php
$id=$_GET['id'];
    $con = mysqli_connect("localhost", "root", "", "studmgsystem");
    $mysql = "UPDATE `tbl_teachreg` SET `teach_status`=1 WHERE `teach_id` = $id";
    mysqli_query($con, $mysql);
    echo"<script>location.href='facultyview.php'</script>";
?>