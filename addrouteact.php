<?php
include('DatabaseCon.php');
$db=new DatabaseCon;
$route=$_POST['route'];
$place=$_POST['place'];
$price=$_POST['price'];

//$str_class=$_POST['stream_class'];

 $s="select * from tbl_route where place='$place'";
   $rt=$db->selectQuery($s);
   if($rt==1){
	   
	   echo"<script>alert('Already Exists');window.location='add_route.php';</script>";
   }
   else{
 $sql="insert into tbl_route(route_name,place,price,status)values('$route','$place','$price','true')";
 $db->insertQuery($sql);
echo"<script>alert('success');window.location='add_route.php';</script>";
   }
?>