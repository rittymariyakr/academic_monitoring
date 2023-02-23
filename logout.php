<?php
session_start();
session_destroy();
$_SESSION['uid']="";
echo "<script>
window.location='index.php';</script>";
?>