<?php
include('DatabaseCon.php');
$db=new DatabaseCon;

$str=$_POST['stream'];
$str_class=$_POST['stream_class'];

 $s="select * from tbl_stream where stream_name='$str' and class_name='$str_class'";
   $rt=$db->selectQuery($s);
   if($rt==1){
	   
	   echo"<script>alert('Already Exists');window.location='addclass.php';</script>";
   }
   else{
 $sql="insert into tbl_stream(class_name,stream_name,status)values('$str_class','$str','true')";
 $db->insertQuery($sql);
echo"<script>alert('success');window.location='addclass.php';</script>";
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
?>  -->
