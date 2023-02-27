<?php
include('DatabaseCon.php');
$db=new DatabaseCon;

$admno=$_POST['s_admno'];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$m_name=$_POST['m_name'];
$s_class=$_POST['s_class'];
if($s_class==28){
  $course="VIII (A)";
}else if($s_class==29){
  $course="VIII (B)";
}else if($s_class==30){
  $course="IX (A)";
}else if($s_class==31){
  $course="IX (B)";
}else if($s_class==32){
  $course="X (A)";
}else if($s_class==33){
  $course="X (B)";
}
$ut='student';
$pw=$_POST['fpw'];

$pwd=md5($pw);
 $s="select * from tbl_studreg where admno='$admno'";
   $rt=$db->selectQuery($s);
   if($rt>=1){
	   
	  //  echo"<script>alert('Already Exists');window.location='addstud.php';</script>";
   }
   else{
 $sql="INSERT INTO `tbl_studreg`(`admno`, `class`,`course`, `First_name`, `Middle_nam`, `Last_name`) VALUES ('$admno','$s_class','$course','$f_name','$l_name','$m_name')";
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