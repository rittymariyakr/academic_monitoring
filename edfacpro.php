<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
  <head>
  <script type="text/javascript">
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
        <?php
      $uid = $_SESSION['uid'];
      $con = mysqli_connect("localhost", "root", "", "studmgsystem");
      $s = "SELECT * FROM tbl_teachreg where teach_id='$uid'";
      $result = mysqli_query($con, $s);
      $row = mysqli_fetch_array($result);
      ?>
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
                <!-- <p class="mb-1 text-black">Welcome Admin</p> -->
                <?= $row['firstname']; ?> &nbsp;<?= $row['lastname']; ?>
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
                  <span class="font-weight-bold mb-2"><?=$row['firstname']?>&nbsp;<?php echo $row['lastname']; ?></span>
                 
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fachome.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="facmyprofile.php">
                <span class="menu-title">My Profile</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
         <li class="nav-item">
              <a class="nav-link" href="edfacpro.php">
                <span class="menu-title">Edit Profile</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#student_details" aria-expanded="false" aria-controls="student_details">
              <span class="menu-title">Leave</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
            <div class="collapse" id="student_details">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="leave_status.php">View Student Leave</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="stud_leavestatus.php">View Approved Leave  </a></li>
                <li class="nav-item"> <a class="nav-link" href="stud_leavestatus.php">View Rejected Leave  </a></li>
                <li class="nav-item"> <a class="nav-link" href="faculty_leave.php">Apply Leave</a></li> -->


              </ul>
            </div>
          </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="viewstud1.php">
                <span class="menu-title">Student</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a> 
            </li> -->
            <li class="nav-item">
            <a class="nav-link" href="classattendance.php">
              <span class="menu-title">Mark Attendance</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="classattendancereport.php">
              <span class="menu-title">Attendance Report</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a> -->
		<li class="nav-item">
              
            <a class="nav-link" href="chngp.php">
       <span class="menu-title">Change Password</span>
              
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

               <!--  <h4 class="card-title">Edit Profile</h4>
            </div>
            <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">-->
             
                    

<?php
include('DatabaseCon.php');
$db=new DatabaseCon;
$uid=$_SESSION['uid'];
$s="select * from tbl_teachreg where teach_id=$uid";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
?>
                   

<?php

$s="select * from tbl_teachreg where teach_id=$uid";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
?>

<form action="edfacaction.php" method="post" enctype="multipart/form-data" >
<?php
if($row['staff_id']==""){
  ?>
Staff ID
<input type="text" name="stid"  required class="form-control"  value="<?php echo $row['staff_id'];?>"/><br/>

<?php } else { ?>
  Staff ID
<input type="text" name="stid"  required class="form-control"  value="<?php echo $row['staff_id'];?>" readonly /><br/>
<?php } ?>

<?php
if($row['firstname']==""){
  ?>
First  Name
<input type="text" name="fn" id="fname" pattern="[a-z A-Z]+" required  class="form-control"  value="<?php echo $row['firstname'];?>" onblur="return fnameValidate()"/><br/>
<div id="fnameValidate" style="color:red;"></div>
<?php } else { ?>
First  Name
<input type="text" name="fn" id="fname"  pattern="[a-z A-Z]+" required onclick="return fnameValidate()" class="form-control"  value="<?php echo $row['firstname'];?>"/><br/>
<?php } ?>

<?php
if($row['lastname']==""){
  ?>
Last  Name
<input type="text" name="ln" id="lname" pattern="[a-z A-Z]+" required class="form-control"  value="<?php echo $row['lastname'];?>" onblur="return lnameValidate()"/><br/>
<div id="lnameValidate" style="color:red;"></div>
<?php } else { ?>
Last  Name
<input type="text" name="ln" id="lname" pattern="[a-z A-Z]+" required class="form-control"  value="<?php echo $row['lastname'];?>" onblur="return lnameValidate()"/><br/>
<?php } ?>
Email
<input type="email" name="fem" required class="form-control" value="<?php echo $row['email'];?>" readonly /><br/>
<?php
if($row['dob']=="0000-00-00"){
  ?>
Date of Birth
<input type="date" name="dob" max="<?php echo date('Y-m-d',strtotime('18 years ago')); ?>"   required class="form-control"/><br/>
<?php } else { ?>
Date of Birth
<input type="text" name="dob"  readonly value="<?php echo $row['dob'];?>" required class="form-control"/><br/>
<?php } ?>
<?php
if($row['gender']==""){
  ?>
Gender
<input type="radio" name="g" value="M" required />Male
<input type="radio" name="g" value="F" required />Female<br/><br/>
<?php } else { ?>
Gender
<input type="text" name="g"  readonly value="<?php echo $row['gender'];?>" required class="form-control"/><br/>
<?php } ?>
Address
<input type="text" name="adr" id="housename" required class="form-control"  value="<?php echo $row['address'];?>" onblur="return housenameValidate()"/><br/>
<div id="addressValidate" style="color:red;"></div>
District
<input type="text" name="dist" id="district" pattern="[a-z A-Z]+" required class="form-control"  value="<?php echo $row['district'];?>" onblur="return districtValidate()"/><br/>
<div id="dsvalidate" style="color:red;"></div>
State
<input type="text" name="st" id="state" pattern="[a-z A-Z]+" required class="form-control"  value="<?php echo $row['state'];?>" onblur="return stateValidate()"/><br/>
<div id="stvalidate" style="color:red;"></div>
Religion
<input type="text" name="rl" id="religion" pattern="[a-z A-Z]+" required class="form-control"  value="<?php echo $row['religion'];?>" onblur="return religionValidate()"/><br/>
<div id="rlvalidate" style="color:red;"></div>
Phone Number
<input type="text" name="phn" id="phn" required class="form-control"  value="<?php echo $row['phno'];?>" onblur="return validatecontactno()"/><br/>
<div id="phnvalidate" style="color:red;"></div>
Blood Group
<input type="text" name="bg" required class="form-control"  value="<?php echo $row['bloodgroup'];?>"/><br/>
<?php
if($row['image']==""){
  ?>
Image
<input type="file" name="file" id="file" required class="form-control" onchange="return fileValidation()"/><br/>
<?php } ?>

<div id="imagePreview"></div>
    <script>
        function fileValidation() {
            var fileInput =
                document.getElementById('file');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type, only .jpg, .jpeg and .png are accepted');
                fileInput.value = '';
                return false;
            }
else
            {
             
                // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview').innerHTML =
                            '<img src="' + e.target.result
                            + '"/>';
                    };
                     
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }
    </script>

Qualification
<input type="text" name="qua" id="qualification" required class="form-control"  value="<?php echo $row['qualification'];?>" onblur="return QualificationValidate()"/><br/>
<div id="qlvalidate" style="color:red;"></div>
<!-- Designation
<input type="text" name="pos" id="designation" pattern="[a-z A-Z]+" required class="form-control"  value="<?php echo $row['position'];?>" onblur="return designationValidate()"/><br/>
<div id="desvalidate" style="color:red;"></div> -->
<!-- Subject
<select name="sub" required class="form-control" >
  <option value="Maths">Maths</option>
  <option value="Maths">Social Science</option>
  <option value="Maths">Biology</option>
  <option value="Maths">History</option>
  <option value="Maths">Geography</option>
  <option value="Maths">English</option>
  <option value="Maths">Physics</option>
  <option value="Maths">Chemistry</option>
  <option value="Maths">Computer SCience</option>
  <option value="Maths">Malayalam</option>
  <option value="Maths">hindi</option>

</select><br/> -->

Marital Status
<select name="ms" required class="form-control" >
<option value="Single">Single</option>
<option value="Married">Married</option>
</select><br/>
<!-- 
Year of Experience
<input type="text" name="exp" id="exp" required class="form-control"  value="<?php echo $row['Experience'];?>" onblur="return numberValidation()"/><br/>
<div id="numberText" style="color:red;"></div> -->
<?php
// if($row['Experience_certificate']==""){
  ?>
 <!-- Experience certificate
<input type="file" name="file1" id="file1" required class="form-control"/><br/> -->
<?php?> 
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
    <script> src="edfacpro.js"</script>

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


                        function validatecontactno(){
                        var contactno = document.getElementById("phn").value;
                        var pattern = /^[7-9][0-9]{1,9}$/;
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

            
            
                     function numberValidation() {

                  // var n = document.form.numbers.value;
                  var n = document.getElementById("exp").value
 
/* isNan() function check whether passed variable
   is number or not*/
                if (isNaN(n)) {
/*numberText is the ID of span that print "Please enter
Numeric value" if the value of inputfield is not a number*/
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
        


  </body>
  <script type="text/javascript">
  var letters=/^[a-z A-Z]+$/;
  var numbers=/^\d{10}+$/;
  function check()
  {
	  if(!document.getElementById("phn").value.match(numbers))
	  {
		  alert('Input digits only for phone number');
		  return false;
	  }
	  else
	  {
		  return true;
	  }
  }
  </script>
</html>
   
  
