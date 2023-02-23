<?php
include('DatabaseCon.php');
$db=new DatabaseCon;
$name=$_GET['NAME'];
$address=$_GET['ADDRESS'];
$S=$_GET['PHNO'];
$FC=$_GET['EMAIL'];
$C=$_GET['V1'];
$H=$_GET['COURSE'];
$Z=$_GET['DESIGNATION'];
$M=$_GET['USERNAME'];
$N=$_GET['PASSWORD'];


$s="insert into faculty(fname,fgen,address,phn,email,branch,desgi)values('$name','$C','$address','$S','$FC','$H','$Z')";
$db->insertQuery($s);
$q="select max(fid)as fid from faculty";
$rs=$db->selectData($q);
$row=mysql_fetch_array($rs);
$id=$row['fid'];
$s1="insert into login(uid,uname,upass,utype)values('$id','$M','$N','faculty')";
$db->insertQuery($s1);
echo "<script> alert('succefully registred');window.location='faculty.php';</script>";

?>