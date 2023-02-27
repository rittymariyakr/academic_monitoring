<?php
  include 'DatabaseCon.php';
if(isset($_GET["id"]))
 {

    $stud=$_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "studmgsystem");
    $select="UPDATE tbl_studreg  SET status=false where stud_id='$stud'";
    $result=mysqli_query($conn,$select);
      
    if(mysqli_query($conn, $select)){
        echo("<script>alert('Are you sure want to delete this data?');</script>");
    }
    else
        echo("<script>alert('Success ');</script>");
    echo("<script>location.href='student_details.php'</script>");
    
 }

?>
