<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$cp=$_POST['cp'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
if($np==$cnp)
{
    $encrpass= md5($np);
$sql="update tbl_login set password='$encrpass' where password='$cp'";
$db->insertQuery($sql);
echo"<script>alert('Your Password Changed Successfully');window.location='index.php';</script>";
}
else
{
echo"<script>alert('Password Doesnot matched');window.location='chngp.php';</script>";
}
?>
