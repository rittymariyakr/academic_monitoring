<?php
include('DatabaseCon.php');
$db=new DatabaseCon;

$sub=$_POST['sub'];

 $s="select * from tbl_subject where sub_name='$sub'";
   $rt=$db->selectQuery($s);
   if($rt==1){
	   
	   echo"<script>alert('Already Exists');window.location='addsub.php';</script>";
   }
   else{
 $sql="insert into tbl_subject(sub_name,status)values('$sub','true')";
 $db->insertQuery($sql);
echo"<script>alert('success');window.location='addsub.php';</script>";
   }
?>

<!-- <?php
session_start();
include('conn.php');

$name=$_POST['name'];
$team=$_POST['team'];
$username=$_POST['username'];
$password=$_POST['password'];

$qry="SELECT * FROM team WHERE idTeam='$team";

if(mysqli_query($con,$qry)){
  mysqli_query("INSERT INTO user(name, team, username, password)VALUES('$name', '$team', '$username', '$password')");

  header("location: add_user.php?remarks=success"); 
  mysqli_close($con);
}
else 
mysqli_error($con); 
?> -->
