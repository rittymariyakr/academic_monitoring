<?php
include('DatabaseCon.php');
$db=new DatabaseCon;
session_start();
$uid=$_SESSION['uid'];
$stid=$_POST['stid'];
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$fem=$_POST['fem'];
$dob=$_POST['dob'];
$g=$_POST['g'];
$adr=$_POST['adr'];
$dist=$_POST['dist'];
$st=$_POST['st'];
$rl=$_POST['rl'];
$phn=$_POST['phn'];
$bg=$_POST['bg'];
$file=$_POST['ln'];
$qua=$_POST['qua'];
$pos=$_POST['pos'];
$sub=$_POST['sub'];
$ms=$_POST['ms'];
$exp=$_POST['exp'];
$excp=$_POST['ln'];

$s="select * from tbl_teachreg where teach_id=$uid";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
if($row['Experience_certificate']=="" && $row['image']==""){
$target_dir = "picuploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

$target_dir1 = "cuploads/";
$target_file1 = $target_dir1 . basename($_FILES["file1"]["name"]);

move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file1);
$sql="update tbl_teachreg set staff_id='$stid',firstname='$fn',lastname='$ln',email='$fem',dob='$dob',gender='$g',address='$adr',
district='$dist',state='$st',religion='$rl',phno='$phn',bloodgroup='$bg',image='$target_file',qualification='$qua',position='$pos',subject='$sub',Maritial_status='$ms',Experience='$exp',Experience_certificate='$target_file1'
where teach_id=$uid";
 
}

else if($row['Experience_certificate']==""){
   
    $target_dir1 = "cuploads/";
    $target_file1 = $target_dir1 . basename($_FILES["file1"]["name"]);
    
   
    move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file1);
    $sql="update tbl_teachreg set staff_id='$stid',firstname='$fn',lastname='$ln',email='$fem',dob='$dob',gender='$g',address='$adr',
    district='$dist',state='$st',religion='$rl',phno='$phn',bloodgroup='$bg',qualification='$qua',position='$pos',subject='$sub',Maritial_status='$ms',Experience='$exp',Experience_certificate='$target_file1'
    where teach_id=$uid";
     
    }
    else if( $row['image']==""){
        $target_dir = "picuploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        
       
        
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        
        $sql="update tbl_teachreg set staff_id='$stid',firstname='$fn',lastname='$ln',email='$fem',dob='$dob',gender='$g',address='$adr',
        district='$dist',state='$st',religion='$rl',phno='$phn',bloodgroup='$bg',qualification='$qua',position='$pos',subject='$sub',Maritial_status='$ms',Experience='$exp'
        where teach_id=$uid";
         
        }
        else{
            $sql="update tbl_teachreg set staff_id='$stid',firstname='$fn',lastname='$ln',email='$fem',dob='$dob',gender='$g',address='$adr',
            district='$dist',state='$st',religion='$rl',phno='$phn',bloodgroup='$bg',qualification='$qua',position='$pos',subject='$sub',Maritial_status='$ms',Experience='$exp'
            where teach_id=$uid";  
        }
$db->insertQuery($sql);

echo"<script>alert('success');window.location='edfacpro.php';</script>";

?>