<?php
  include 'DatabaseCon.php';
if(isset($_GET["id"]))
 {

    $sub=$_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "studmgsystem");
    $select="UPDATE tbl_subject SET status=false where sub_id='$sub'";
    $result=mysqli_query($conn,$select);
      
    if(mysqli_query($conn, $select)){
        echo("<script>alert('Are you sure want to delete this data?');</script>");
    }
    else
        echo("<script>alert('Success ');</script>");
    echo("<script>location.href='addsub.php'</script>");
    
 }

?>
