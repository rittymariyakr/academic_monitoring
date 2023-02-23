<?php
  include 'DatabaseCon.php';
if(isset($_GET["id"]))
 {

    $str=$_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "studmgsystem");
    $select="UPDATE tbl_stream SET status=false where stream_id='$str'";
    $result=mysqli_query($conn,$select);
    
    if(mysqli_query($conn, $select)){
        echo("<script>alert('Are you sure want to delete this data?');</script>");
    }
    else
    echo("<script>alert('Success ');</script>");
    echo("<script>location.href='addclass.php'</script>");
    
 }

?>



<!-- <?php
include('DatabaseCon.php');
$db=new DatabaseCon;
$val = $_GET['id'];
   $con = mysqli_connect("localhost", "root", "", "studmgsystem");   
    $mysql = "DELETE FROM `tbl_stream` WHERE stream_id=$val";
    // mysqli_query($con, $mysql);
    // echo("<script>alert('Success')</script>");
    
    if(mysqli_query($con, $mysql)){
        echo("<script>alert('Are you sure want to delete this data?');</script>");
    }
    else
        echo("<script>alert('Success ');</script>");
    echo("<script>location.href='classdlt.php'</script>");
?> -->