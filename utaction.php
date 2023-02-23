<?php
include('DatabaseCon.php');
$db=new DatabaseCon;

$ut=$_POST['ut'];

 $s="select * from tbl_usertype where usertype_name='$ut'";
   $rt=$db->selectQuery($s);
   if($rt==1){
	   
	   echo"<script>alert('Already Exists');window.location='usertype.php';</script>";
   }
   else{
 $sql="insert into tbl_usertype(usertype_name,status)values('$ut','true')";
 $db->insertQuery($sql);
echo"<script>alert('success');window.location='usertype.php';</script>";
   }
?>