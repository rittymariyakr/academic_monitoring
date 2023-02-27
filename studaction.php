<?php
include('DatabaseCon.php');
$db=new DatabaseCon;

$admno=$_POST['s_admno'];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$m_name=$_POST['m_name'];
$s_class=$_POST['s_class'];
$ut='student';
$pw=$_POST['fpw'];

$pwd=md5($pw);
 $s="select * from tbl_studreg where admno='$admno'";
   $rt=$db->selectQuery($s);
   if($rt>=1){
	   
	  //  echo"<script>alert('Already Exists');window.location='addstud.php';</script>";
   }
   else{
 $sql="INSERT INTO `tbl_studreg`(`admno`,  `First_name`, `Middle_nam`, `Last_name`,`class`) VALUES ('$admno','$f_name','$l_name','$m_name','$s_class')";
 $db->insertQuery($sql);
 $ss="SELECT max(stud_id) as tid from tbl_studreg";
 $rs=$db->selectData($ss);
 $row=mysqli_fetch_array($rs);
 $tid=$row['tid'];
 $sql="INSERT INTO `tbl_login`(`login_id`, `usertype`, `username`, `password`, `status`) VALUES ('$tid','$ut','$admno','$pwd','true')";

  if($db->insertQuery($sql))
    echo"<script>alert('success');window.location='addstud.php';</script>";
   }
?>