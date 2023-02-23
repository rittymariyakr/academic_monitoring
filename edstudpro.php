<!DOCTYPE html>
<?php
session_start();
?>
<?php
include('DatabaseCon.php');
$db=new DatabaseCon;
$uid=$_SESSION['uid'];
$s="select * from tbl_studreg where stud_id=$uid";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
?>
<html lang="en">
  <head> <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="#"> <img src="images/logo.jpg" alt=""></a>
        <a class="navbar-brand brand-logo-mini" href="#"> <img src="images/logo.svg" alt=""></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
     
          <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="<?= $row['image']; ?>" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">Welcome <?=$row['First_name']?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <!-- <a class="dropdown-item" href="facmyprofile.php">
                <i class="mdi mdi-cached me-2 text-success"></i> My Profile </a> -->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
            </div>
          </li>



          <!-- <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="logout.php">  
              <i class="mdi mdi-power"></i>
            </a>
          </li> -->

        </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?= $row['image']; ?>" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?=$row['First_name']?></span>
                 
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="studhome.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="studmyprofile.php">
                <span class="menu-title">My Profile</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
        <li class="nav-item">
              <a class="nav-link" href="edstudpro.php">
                <span class="menu-title">Edit Profile</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="view_timetable.php">
              <span class="menu-title">Timetable</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
            <li class="nav-item">
              
            <a class="nav-link" href="chngp.php">
       <span class="menu-title">Change Password</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
             <!--<h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>-->
                 <h4 class="card-title">Edit Profile</h4>
            </div>
            <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
             
                    




<!--<img src="<?php echo $row['image'];?>" width="250" height="250"/><br/>
<br/><center>
<b><?php echo $row['First_name'];?> &nbsp;&nbsp;&nbsp;<?php echo $row['Middle_nam'];?> &nbsp;&nbsp;&nbsp;<?php echo $row['Last_name'];?><br/><br/></b>
</center>
<table style="width:100%;height:50%">
  <tr>
    <th>
Admission No </th>
<td>
<?php echo $row['admno'];?>
</td>
</tr>

<tr>
    <th>
Date of Birth</th>
<td>
<?php echo $row['dob'];?>
</td>
</tr>
<tr>
    <th>
Gender</th>
<td>
<?php echo $row['gender'];?>
</td>
</tr>
<tr>
    <th>
Address</th>
<td>
<?php echo $row['Address'];?>
</td>
</tr>
<tr>
    <th>
District</th>
<td>
<?php echo $row['district'];?>
</td>
</tr>
<tr>
    <th>
State</th>
<td>
<?php echo $row['state'];?>
</td>
</tr>
<tr>
    <th>
Religion</th>
<td>
<?php echo $row['religion'];?>
</td>
</tr>
<tr>
    <th>
Guardian Phone No</th>
<td>
<?php echo $row['gphone'];?>
</td>
</tr>
<tr>
    <th>
Blood Group</th>
<td>
<?php echo $row['bloodgroup'];?>
</td>
</tr>
<tr>
    <th>

Father Name</th>
<td>
<?php echo $row['fathername'];?>
</td>
</tr>
<tr>
    <th>
Mother Name</th>
<td>
<?php echo $row['mothername'];?>
</td>
</tr>
<tr>
    <th>
Father Occupation</th>
<td>
<?php echo $row['fatherocc'];?>
</td>
</tr>
<tr>
    <th>
Mother Occupation</th>
<td>
<?php echo $row['motherocc'];?>
</td></tr>
</table>



           </div></div></div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">-->
             
                    

<?php

$s="select * from tbl_studreg where stud_id=$uid";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
?>

<form action="edstudaction.php" method="post" enctype="multipart/form-data" onSubmit="return check();">
Admission No
<input type="text" name="stid"  required class="form-control" value="<?php echo $row['admno'];?>" readonly /><br/>
  <?php
if($row['First_name']==""){
  ?>

First  Name
<input type="text" name="fn" id="fname" required class="form-control" value="<?php echo $row['First_name'];?>" onblur="return fnameValidate()"/><br/>
<div id="fnameValidate" style="color:red;"></div>
<?php } else{ ?>
First  Name
<input type="text" name="fn" id="fname" required class="form-control" value="<?php echo $row['First_name'];?>" readonly /><br/>
<?php 
}
if($row['Middle_nam']==""){
?>
Middle  Name
<input type="text" name="mn" id="mname" required class="form-control" value="<?php echo $row['Middle_nam'];?>" onblur="return mnameValidate()"/><br/>
<div id="mnameValidate" style="color:red;"></div>
<?php } else{ ?>
Middle  Name
<input type="text" name="mn" id="mname" required class="form-control" value="<?php echo $row['Middle_nam'];?>" readonly/><br/>
<?php } 
 if($row['Last_name']==""){
?>
Last Name
<input type="text" name="ln" id="lname" required class="form-control" value="<?php echo $row['Last_name'];?>" onblur="return lnameValidate()"/><br/>
<div id="lnameValidate" style="color:red;"></div>
<?php } else{ ?>
Last Name
<input type="text" name="ln" id="ln" required class="form-control" value="<?php echo $row['Last_name'];?>" readonly/><br/>
<?php } 
 if($row['dob']==""){
?>
Date of Birth
<input type="date" name="dob" required class="form-control" value="<?php echo $row['dob'];?>"/><br/>
<?php } else{ ?>
  Date of Birth
<input type="date" name="dob" required class="form-control" value="<?php echo $row['dob'];?>" /><br/>
<?php } 
 if($row['gender']==""){
?>
Gender
<input type="radio" name="g" value="M" required />Male
<input type="radio" name="g" value="F" required />Female<br/><br/>
<?php } else{ ?>
  Gender<br/> <?php echo $row['gender'];?><br/><br/>
<?php } ?>

Address
<input type="text" name="adr" id="housename" required class="form-control" value="<?php echo $row['Address'];?>" onblur="return housenameValidate()"/><br/>
<div id="addressValidate" style="color:red;"></div>

District
<input type="text" name="dist" id="district" required class="form-control" value="<?php echo $row['district'];?>" onblur="return districtValidate()"/><br/>
<div id="dsvalidate" style="color:red;"></div>

State
<input type="text" name="st" id="state" required class="form-control" value="<?php echo $row['state'];?>" onblur="return stateValidate()"/><br/>
<div id="stvalidate" style="color:red;"></div>

Religion
<input type="text" name="rl" id="religion" required class="form-control" value="<?php echo $row['religion'];?>" onblur="return religionValidate()"/><br/>
<div id="rlvalidate" style="color:red;"></div>

Guardian Phone No
<input type="text" name="phn" id="phno" maxlength="12" minlength="10" required class="form-control" value="<?php echo $row['gphone'];?>" onchange="return Validphone()"/><br/>
<span class="icon fa fa-paper-plane-o"></span>
<p id="msg10" style="color:red;"></p>
                        <script>
                        function Validphone() 
                        {
                        var val = document.getElementById('phno').value;
                          if (!val.match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/))
                           {
                            document.getElementById('msg10').innerHTML="Only Numbers are allowed and must contain 10 number";
                                  document.getElementById('phno').value = "";
                                    return false;
                           }
                            document.getElementById('msg10').innerHTML=" ";
                          return true;
                        }
                       </script>
Blood Group
<input type="text" name="bg" required class="form-control" value="<?php echo $row['bloodgroup'];?>"/><br/>
<?php
if($row['image']==""){
  ?>
Image
<input type="file" name="file" id="file" required class="form-control"/><br/>
<?php } 
 if($row['fathername']==""){
?>
Father Name
<input type="text" name="fnm" id="faname" required class="form-control" value="<?php echo $row['fathername'];?>" onblur="return fatherValidate()"/><br/>
<div id="fatherValidate" style="color:red;"></div>
<?php } else{ ?>
  Father Name
<input type="text" name="fnm" id="fnm" required class="form-control" value="<?php echo $row['fathername'];?>" readonly /><br/>
<?php } 
 if($row['mothername']==""){
?>
Mother Name
<input type="text" name="mnm" id="moname" required class="form-control" value="<?php echo $row['mothername'];?>" onblur="return motherValidate()"/><br/>
<div id="motherValidate" style="color:red;"></div>
<?php } else{ ?>
  Mother Name
<input type="text" name="mnm" id="mnm" required class="form-control" value="<?php echo $row['mothername'];?>" readonly /><br/>
<?php } 

?>
Father Occupation
<input type="text" name="focc" id="foccup" required class="form-control" value="<?php echo $row['fatherocc'];?>" onblur="return foccupationValidate()"/><br/>
<div id="foccupationValidate" style="color:red;"></div>

Mother Occupation
<input type="text" name="mocc" id="moccup" required class="form-control" value="<?php echo $row['motherocc'];?>" onblur="return moccupationValidate()"/><br/>
<div id="moccupationValidate" style="color:red;"></div>



<input type="submit" value="Update"  class="btn btn-gradient-primary me-2" />
</form>
					
           </div></div></div>
           

		   </div>
          
       
           
       
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
             </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
  <script type="text/javascript">
  var letters=/^[a-z A-Z]+$/;
  var numbers=/^[0-9]+$/;
  function check()
  {
	  if(!document.getElementById("phn").value.match(numbers))
	  {
		  alert('Input digits for phone number');
		  return false;
	  }
	  else if(!document.getElementById("fn").value.match(letters))
	  {
		  alert('Input Alphabets for name');
		  return false;
	  }
	  else if(!document.getElementById("mn").value.match(letters))
	  {
		  alert('Input Alphabets for middle name');
		  return false;
	  }
	  else if(!document.getElementById("ln").value.match(letters))
	  {
		  alert('Input Alphabets for last name');
		  return false;
	  }
	  
		 else if(!document.getElementById("dist").value.match(letters))
	  {
		  alert('Input Alphabets for District');
		  return false;
	  } 
	  else if(!document.getElementById("st").value.match(letters))
	  {
		  alert('Input Alphabets for State');
		  return false;
	  }
	  else if(!document.getElementById("fnm").value.match(letters))
	  {
		  alert('Input Alphabets for Father name');
		  return false;
	  }
	  else if(!document.getElementById("mnm").value.match(letters))
	  {
		  alert('Input Alphabets for Mother name');
		  return false;
	  }
	  else if(!document.getElementById("focc").value.match(letters))
	  {
		  alert('Input Alphabets for Father Occupation');
		  return false;
	  }
	  else if(!document.getElementById("mocc").value.match(letters))
	  {
		  alert('Input Alphabets for Mother Occupation');
		  return false;
	  }
	  else
	  {
		  return true;
	  }
  }
  </script>

<script>
                        function lnameValidate(){
                        var lastname = document.getElementById("lname").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(lastname.match(pattern)){
                        document.getElementById("lnameValidate").innerHTML="";
                        }
                        else if(!lastname){
                        document.getElementById("lnameValidate").innerHTML="*Last Name Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("lnameValidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }
                        function mnameValidate(){
                        var middlename = document.getElementById("mname").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(middlename.match(pattern)){
                        document.getElementById("mnameValidate").innerHTML="";
                        }
                        else if(!middlename){
                        document.getElementById("mnameValidate").innerHTML="*Middle Name Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("mnameValidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }
                        
                        function fnameValidate(){
                        var lastname = document.getElementById("fname").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(lastname.match(pattern)){
                        document.getElementById("fnameValidate").innerHTML="";
                        }
                        else if(!lastname){
                        document.getElementById("fnameValidate").innerHTML="*first Name Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("fnameValidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }

                        function housenameValidate(){
                        var housename = document.getElementById("housename").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(housename.match(pattern)){
                        document.getElementById("addressValidate").innerHTML="";
                        }
                        else if(!housename){
                        document.getElementById("addressValidate").innerHTML="*Address Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("addressValidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }

                        // function streetValidate(){
                        // var street = document.getElementById("street").value;
                        // var pattern =  /^[a-zA-Z]+$/;
                        // isValid=true;
                        // if(street.match(pattern)){
                        // document.getElementById("cnoValidate").innerHTML="";
                        // }
                        // else if(!street){
                        // document.getElementById("cnoValidate").innerHTML="street Required";
                        // isValid=false;
                        // }
                        // else{
                        // document.getElementById("cnoValidate").innerHTML="Only characters are acceptable";
                        // isValid=false;
                        // }
                        // return isValid;
                        // }

                        // function cityValidate(){
                        // var city = document.getElementById("city").value;
                        // var pattern =  /^[a-zA-Z]+$/;
                        // isValid=true;
                        // if(city.match(pattern)){
                        // document.getElementById("ciValidate").innerHTML="";
                        // }
                        // else if(!city){
                        // document.getElementById("ciValidate").innerHTML="city Required";
                        // isValid=false;
                        // }
                        // else{
                        // document.getElementById("ciValidate").innerHTML="Only characters are acceptable";
                        // isValid=false;
                        // }
                        // return isValid;
                        // }

                        function stateValidate(){
                        var state = document.getElementById("state").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(state.match(pattern)){
                        document.getElementById("stvalidate").innerHTML="";
                        }
                        else if(!state){
                        document.getElementById("stvalidate").innerHTML="*state Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("stvalidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }

                        function districtValidate(){
                        var state = document.getElementById("district").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(state.match(pattern)){
                        document.getElementById("dsvalidate").innerHTML="";
                        }
                        else if(!state){
                        document.getElementById("dsvalidate").innerHTML="*district Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("dsvalidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }

                        function designationValidate(){
                        var state = document.getElementById("designation").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(state.match(pattern)){
                        document.getElementById("desvalidate").innerHTML="";
                        }
                        else if(!state){
                        document.getElementById("desvalidate").innerHTML="*designation Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("desvalidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }

                        function QualificationValidate(){
                        var state = document.getElementById("qualification").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(state.match(pattern)){
                        document.getElementById("qlvalidate").innerHTML="";
                        }
                        else if(!state){
                        document.getElementById("qlvalidate").innerHTML="*qualification Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("qlvalidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }


                        
                        function religionValidate(){
                        var state = document.getElementById("religion").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(state.match(pattern)){
                        document.getElementById("rlvalidate").innerHTML="";
                        }
                        else if(!state){
                        document.getElementById("rlvalidate").innerHTML="*religion Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("rlvalidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }

                        function validatepwd(){
                        var log_password  = document.getElementById("log_password").value;
                        var pattern=/^(?=.*\d)(?=.*[A-Z]).{6,}/;
                        isValid=true;
                        if(log_password.match(pattern)){
                        document.getElementById("validatepwd").innerHTML="";  
                        }
                        else if(!log_password){
                        document.getElementById("validatepwd").innerHTML="*Password Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("validatepwd").innerHTML="*Your password must be at least 8 characters long, contain at least one number and have a mixture of uppercase and lowercase letters.";
                        isValid=false;
                        }
                        return isValid;

                        }

                        function fatherValidate(){
                        var lastname = document.getElementById("faname").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(lastname.match(pattern)){
                        document.getElementById("fatherValidate").innerHTML="";
                        }
                        else if(!lastname){
                        document.getElementById("fatherValidate").innerHTML="*Father Name Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("fatherValidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }

                        function motherValidate(){
                        var lastname = document.getElementById("moname").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(lastname.match(pattern)){
                        document.getElementById("motherValidate").innerHTML="";
                        }
                        else if(!lastname){
                        document.getElementById("motherValidate").innerHTML="*Mother Name Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("motherValidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }

                        function foccupationValidate(){
                        var lastname = document.getElementById("foccup").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(lastname.match(pattern)){
                        document.getElementById("foccupationValidate").innerHTML="";
                        }
                        else if(!lastname){
                        document.getElementById("foccupationValidate").innerHTML="*Father Occupation Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("foccupationValidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }

                        function moccupationValidate(){
                        var lastname = document.getElementById("moccup").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(lastname.match(pattern)){
                        document.getElementById("moccupationValidate").innerHTML="";
                        }
                        else if(!lastname){
                        document.getElementById("moccupationValidate").innerHTML="*Father Occupation Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("moccupationValidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }


                        function validatecontactno(){
                        var contactno = document.getElementById("phn").value;
                        var pattern = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
                        isValid=true;
                        if(contactno.match(pattern)){
                        document.getElementById("phnvalidate").innerHTML="";
                        }
                        else if(!contactno){
                        document.getElementById("phnvalidate").innerHTML="*Phone Number required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("phnvalidate").innerHTML="Invalid Contact Number";
                        isValid=false;
                        }
                        return isValid;

                        }


                        // function validatecontactno(){
                        // var contactno = document.getElementById("phn").value;
                        // var pattern = /^[7-9][0-9]{1,9}$/;
                        // isValid=true;
                        // if(contactno.match(pattern)){
                        // document.getElementById("phnvalidate").innerHTML="";
                        // }
                        // else if(!contactno){
                        // document.getElementById("phnvalidate").innerHTML="*Phone Number required";
                        // isValid=false;
                        // }
                        // else{
                        // document.getElementById("phnvalidate").innerHTML="*Invalid Contact Number";
                        // isValid=false;
                        // }
                        // return isValid;

                        // }

            
            
                     function numberValidation() {

                  // var n = document.form.numbers.value;
                  var n = document.getElementById("exp").value
 
                /* isNan() function check whether passed variable is number or not*/
                if (isNaN(n)) {
                /*numberText is the ID of span that print "Please enter Numeric value" if the value of inputfield is not a number*/
                    document.getElementById("numberText").innerHTML ="*Please enter Numeric value";
                    return false;
                } else {
                    /*numberText is the ID of span that print
                    "Numeric value" if the value of inputfield is a number*/
                    //document.getElementById("numberText").innerHTML ="Numeric value is: " + n;
                    //return true;
                }
            }
        


                        // function validateadharno(){
                        // var adharno = document.getElementById("adharno").value;
                        // var pattern =  /^[2-9]{1}[0-9]{3}\s[0-9]{4}\s[0-9]{4}$/; 
                        // isValid=true;
                        // if(adharno.match(pattern)){
                        // document.getElementById("validateadharno").innerHTML="";
                        // }
                        // else if(!adharno){
                        // document.getElementById("validateadharno").innerHTML="adharNumber required";
                        // isValid=false;
                        // }
                        // else{
                        // document.getElementById("validateadharno").innerHTML="Invalid adhar Number";
                        // isValid=false;
                        // }
                        // return isValid;

                        // }

                        // function validatepincode(){
                        //    var pincode = document.getElementById("pincode").value;
                        //    var pattern =  /^[1-9]{1}[0-9]{2}\\s{0, 1}[0-9]{3}$/; 
                        //    isValid=true;
                        //    if(pincode.match(pattern)){
                        //       document.getElementById("validatepincode").innerHTML="";
                        //    }
                        //    else if(!pincode){
                        //       document.getElementById("validatepincode").innerHTML="pincode required";
                        //       isValid=false;
                        //    }
                        //    else{
                        //       document.getElementById("validatepincode").innerHTML="Invalid pincode Number";
                        //       isValid=false;
                        //    }
                        //    return isValid;

                        // }


                        // function validateemail(){
                        // var email = document.getElementById("email").value;
                        // var pattern = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/; 
                        // isValid=true;
                        // if(email.match(pattern)){
                        // document.getElementById("validateemail").innerHTML="";
                        // }
                        // else if(!adharno){
                        // document.getElementById("validateemail").innerHTML="adharNumber required";
                        // isValid=false;
                        // }
                        // else{
                        // document.getElementById("validateadharno").innerHTML="Invalid adhar Number";
                        // isValid=false;
                        // }
                        // return isValid;

                        // }



        </script>
        


</html>
   
      

