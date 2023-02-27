<?php
  include 'DatabaseCon.php';  
if(isset($_GET["leave_id"]))
 {

    $str=$_GET['leave_id'];
    $conn = mysqli_connect("localhost", "root", "", "studmgsystem");
    $select="DELETE FROM `tbl_leave` WHERE leave_id='$str'";
    $result=mysqli_query($conn,$select);
    
    if(mysqli_query($conn, $select)){
        echo("<script>alert('Are you sure want to delete this Leave?');</script>");
    }
    else
    echo("<script>alert('Deleted Successfully! ');</script>");
    echo("<script>location.href='stud_leavestatus.php'</script>");
    
 }
 

?>