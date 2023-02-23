<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$em=$_POST['em'];
$sql="select * from tbl_login where username='$em'";
$rs=$db->selectData($sql);
$row=mysqli_fetch_array($rs);
$ps=$row['password'];
$uname=$row['username'];
if($em==$uname)
{
	 
 echo"<script>alert('Your password is  $ps');
       window.location='index.php';
	   </script>";
 }
  else
 {
	 echo "<script>alert('Invalid Username');
       window.location='frgt.php';
	   </script>";
 }
?>