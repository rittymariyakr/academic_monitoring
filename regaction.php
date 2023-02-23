<?php
include('DatabaseCon.php');
$db=new DatabaseCon;
$name=$_GET['NAME'];
$regno=$_GET['UNIVERSITY'];
$address=$_GET['ADDRESS'];
$S=$_GET['PHNO'];
$FC=$_GET['EMAIL'];
$C=$_GET['V1'];
$H=$_GET['COURSE'];
$Z=$_GET['SEM'];
$uname=$_GET['USERNAME'];
$pwd=$_GET['PASSWORD'];
$s="insert into student(sname,admno,adr,phn,email,gen,course,sem)values('$name','$regno','$address','$S','$FC','$C','$H','$Z')";
$db->insertQuery($s);
$q="select max(sid)as sid from student";
$rs=$db->selectData($q);
$row=mysql_fetch_array($rs);
$id=$row['sid'];
$s1="insert into login(uid,uname,upass,utype)values('$id','$uname','$pwd','student')";
$db->insertQuery($s1);
echo "<script> alert('succefully registred');window.location='viewstudent.php';</script>";

?>
 