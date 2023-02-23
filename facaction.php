<?php
include('DatabaseCon.php');
$db=new DatabaseCon;

$em=$_POST['fem'];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$ut='teacher';
$pw=$_POST['fpw'];
$encrpass= md5($pw);

 $s="select * from tbl_teachreg where email='$em'";
   $rt=$db->selectQuery($s);
   if($rt==1){
	   
	   echo"<script>alert('Already Exists');window.location='addfac.php';</script>";
   }
   else{
 $sql="insert into tbl_teachreg(email,firstname,lastname)values('$em','$f_name','$l_name')";
 $db->insertQuery($sql);
 $ss="select max(teach_id) as tid from tbl_teachreg"; 
 $rs=$db->selectData($ss);
 $row=mysqli_fetch_array($rs);
 $tid=$row['tid'];
 $stfid="S".$tid;
 $ss="update tbl_teachreg set staff_id='$stfid' where teach_id=$tid";
 $db->insertQuery($ss);
  $sql="insert into tbl_login(login_id,usertype,username,password,status)values('$tid','$ut','$em','$encrpass','true')";
 $db->insertQuery($sql);
echo"<script>window.location='addfac.php';</script>";
   }
?>  