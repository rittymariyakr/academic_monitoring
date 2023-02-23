<?php
  include 'DatabaseCon.php';
if(isset($_GET["id"]))
 {

    $str=$_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "studmgsystem");
    $select="UPDATE tbl_leave SET status='approved' where leave_id='$str'";
    $result=mysqli_query($conn,$select);
    
    if(mysqli_query($conn, $select)){
        echo("<script>alert('Are you sure?');</script>");
    }
    else
    echo("<script>alert('Success ');</script>");
    echo("<script>location.href='stud.php'</script>");
    
 }

?>

if(isset($_POST['reject']))
{
    $request_id=$_POST['request_id'];
    $update="UPDATE work_request_tb SET status='rejected' WHERE request_id='$request_id'";
    $res_update=mysqli_query($con,$update);
    if($res_update)
    {
        echo "<script> alert('Request Rejected !!'); </script>";
        $res_str=mysqli_query($con,$query_str);
    }
    else
    {
        echo "<script> alert('SQL error: Update query error'); </script>";
    }
}