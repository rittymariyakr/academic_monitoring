<?php
include('DatabaseCon.php');
$db=new DatabaseCon;
session_start();
$uid=$_SESSION['uid'];
$stid=$_POST['stid'];
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$mn=$_POST['mn'];
$dob=$_POST['dob'];
$g=$_POST['g'];
$adr=$_POST['adr'];
$dist=$_POST['dist'];
$st=$_POST['st'];
$rl=$_POST['rl'];
$phn=$_POST['phn'];
$bg=$_POST['bg'];
$file=$_POST['ln'];
$fnm=$_POST['fnm'];
$mnm=$_POST['mnm'];
$focc=$_POST['focc'];
$mocc=$_POST['mocc'];

$s="select * from tbl_studreg where stud_id=$uid";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);

if($row['image']==""){
$target_dir = "spicuploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

$sql="update tbl_studreg set admno='$stid',First_name='$fn',Middle_nam='$mn',Last_name='$ln',dob='$dob',gender='$g',address='$adr',
district='$dist',state='$st',religion='$rl',gphone='$phn',bloodgroup='$bg',image='$target_file',fathername='$fnm',mothername='$mnm',fatherocc='$focc',motherocc='$mocc'
where stud_id=$uid";
 
}
else{

    $sql="update tbl_studreg set admno='$stid',First_name='$fn',Middle_nam='$mn',Last_name='$ln',dob='$dob',address='$adr',
district='$dist',state='$st',religion='$rl',gphone='$phn',bloodgroup='$bg',fathername='$fnm',mothername='$mnm',fatherocc='$focc',motherocc='$mocc'
where stud_id=$uid";
}
$db->insertQuery($sql);

echo"<script>alert('success');window.location='edstudpro.php';</script>";
 
?>