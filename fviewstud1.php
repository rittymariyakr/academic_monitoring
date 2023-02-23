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
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/logo.jpg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
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
                <?= $row['firstname']; ?>
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
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Faculty</span>
                 
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
              <a class="nav-link" href="edfacpro.php">
                <span class="menu-title">Edit Profile</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewstud1.php">
                <span class="menu-title">Student</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
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
                 <h4 class="card-title">Student</h4>
            </div>
            <div class="row">
           
               <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
				  
<?php
include('DatabaseCon.php');
$db=new DatabaseCon;

$s="select * from tbl_studreg where stud_id='".$_GET['id']."'";
$rs=$db->selectData($s);
$row=mysqli_fetch_array($rs);
?>

<img src="<?php echo $row['image'];?>" width="150" height="250"/>
				 

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Admission No</label>
<div class="col-sm-9">
<input type="text" name="admno"  required class="form-control" value="<?php echo $row['admno'];?>" readonly /><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">First  Name</label>
<div class="col-sm-9">
<input type="text" name="fn" pattern="[a-z A-Z]+" required class="form-control" value="<?php echo $row['First_name'];?>" readonly/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">MIddle  Name</label>
<div class="col-sm-9">
<input type="text" name="ln" pattern="[a-z A-Z]+" required class="form-control" value="<?php echo $row['Middle_nam'];?>" readonly/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Last  Name</label>
<div class="col-sm-9">
<input type="text" name="ln" pattern="[a-z A-Z]+" required class="form-control" value="<?php echo $row['Last_name'];?>" readonly/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Father's Name</label>
<div class="col-sm-9">
<input type="text" name="qua" required class="form-control" readonly value="<?php echo $row['fathername'];?>"/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Mother's Name</label>
<div class="col-sm-9">
<input type="text" name="pos" required class="form-control" readonly value="<?php echo $row['mothername'];?>"/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Father's Occupation</label>
<div class="col-sm-9">
<input type="text" name="sub" required class="form-control" readonly value="<?php echo $row['fatherocc'];?>"/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">MOther's Occupation</label>
<div class="col-sm-9">
<input type="text" name="sub" required class="form-control" readonly value="<?php echo $row['motherocc'];?>"/><br/>
</div>
  </div>       

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Date of Birth</label>
<div class="col-sm-9">
<input type="text" name="dob"  readonly value="<?php echo $row['dob'];?>" required class="form-control"/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Gender</label>
<div class="col-sm-9">
<input type="text" name="g"  readonly value="<?php echo $row['gender'];?>" required class="form-control"/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Address</label>
<div class="col-sm-9">
<input type="text" name="adr" required class="form-control" readonly value="<?php echo $row['Address'];?>"/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">District</label>
<div class="col-sm-9">
<input type="text" name="dist" pattern="[a-z A-Z]+" required readonly class="form-control" value="<?php echo $row['district'];?>"/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">State</label>
<div class="col-sm-9">
<input type="text" name="st" pattern="[a-z A-Z]+" required readonly class="form-control" value="<?php echo $row['state'];?>"/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Blood Group</label>
<div class="col-sm-9">
<input type="text" name="bg" required class="form-control" readonly value="<?php echo $row['bloodgroup'];?>"/><br/>
</div>
  </div>

<div class="form-group row">
<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Religion</label>
<div class="col-sm-9">
<input type="text" name="rl" pattern="[a-z A-Z]+" required readonly class="form-control" value="<?php echo $row['religion'];?>"/><br/>
</div>
  </div>

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
</html>
   
      

