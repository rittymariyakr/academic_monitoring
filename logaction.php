<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
 $uname=$_POST['un'];
 $upass=$_POST['up'];
 $encrpass= md5($upass);
 $sql="select * from tbl_login where username='$uname' and password='$encrpass'";
$rt=$db->selectQuery($sql);
  if($rt==1)
  {
  $rs=$db->selectData($sql);
  $row=mysqli_fetch_array($rs);
  $_SESSION['uid']=$row['login_id'];
  $_SESSION['usr_name']=$row['username'];
  $_SESSION['utype']=$row['usertype'];
      if($row['usertype']=="teacher")
     {       
        echo "<script>window.location='fachome.php';</script>";
     }
     else if($row['usertype']=="student")
     {       
        echo "<script>window.location='studhome.php';</script>";
     }
     else if($row['usertype']=="admin")
     {      
        echo "<script>window.location='adminhome.php';</script>";
     }
     else
     {     
        echo "<script>window.location='index.php';</script>";
     }
     } 
 else
 {  
     echo "<script>alert('Either Username or password is wrong');window.location='index.php';</script>";
 }
 ?>