<?php
  include 'DatabaseCon.php';
if(isset($_GET["id"]))
 {

    $str=$_GET['route_id'];
    $conn = mysqli_connect("localhost", "root", "", "studmgsystem");
    $select="DELETE FROM TABLE `tbl_route` where route_id='$str'";
    $result=mysqli_query($conn,$select);
    
    if(mysqli_query($conn, $select)){
        echo("<script>alert('Are you sure want to delete this data?');</script>");
        
    }
    else
    echo("<script>alert('Success');</script>");
    echo("<script>location.href='add_route.php '</script>");
    
 }

?>