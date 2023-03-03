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

<head> 
  <script type="text/javascript">
    function preventBack() {
      window.history.forward();
    }

    setTimeout("preventBack()", 0);

    window.onunload = function() {
      null
    };
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
                <p class="mb-1 text-black">Welcome <?=$row['First_name']?>&nbsp;<?php echo $row['Middle_nam']; ?> &nbsp;<?php echo $row['Last_name']; ?></p>
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
                <span class="font-weight-bold mb-2"><?=$row['First_name']?>&nbsp;<?php echo $row['Middle_nam']; ?> &nbsp;<?php echo $row['Last_name']; ?></span>

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
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edstudpro.php">
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
                <li class="nav-item"> <a class="nav-link" href="stud_leave.php"> Apply Leave</a></li>
                <li class="nav-item"> <a class="nav-link" href="stud_leavestatus.php"> View Leave Status </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view_timetable.php">
              <span class="menu-title">Timetable</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <!--<li class="nav-item">
              <a class="nav-link" href="viewstud1.php">
                <span class="menu-title">Student</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>-->
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
            <h4 class="card-title">My Profile</h4>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">


                  <center><img src="<?php echo $row['image']; ?>" width="250" height="250" /><br /></center>
                  <br />
                  <center>
                    <b><?php echo $row['First_name']; ?> &nbsp;<?php echo $row['Middle_nam']; ?> &nbsp;<?php echo $row['Last_name']; ?><br /><br /></b>
                  </center>
                  <table style="width:100%;height:50%">
                    <tr>
                      <th>
                        <br />
                        Admission No
                      </th>
                      <td>
                        <?php echo $row['admno']; ?>
                      </td>
                    </tr>

                    <tr>
                      <th>
                        <br />
                        Date of Birth
                      </th>
                      <td>
                        <?php echo $row['dob']; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <br />
                        Gender
                      </th>
                      <td>
                        <?php echo $row['gender']; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <br />
                        Address
                      </th>
                      <td>
                        <?php echo $row['Address']; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <br />
                        District
                      </th>
                      <td>
                        <?php echo $row['district']; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <br />
                        State
                      </th>
                      <td>
                        <?php echo $row['state']; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <br />
                        Religion
                      </th>
                      <td>
                        <?php echo $row['religion']; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <br />
                        Guardian Phone No
                      </th>
                      <td>
                        <?php echo $row['gphone']; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <br />
                        Blood Group
                      </th>
                      <td>
                        <?php echo $row['bloodgroup']; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <br />
                        Father Name
                      </th>
                      <td>
                        <?php echo $row['fathername']; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <br />
                        Mother Name
                      </th>
                      <td>
                        <?php echo $row['mothername']; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <br />
                        Father Occupation
                      </th>
                      <td>
                        <?php echo $row['fatherocc']; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <br />
                        Mother Occupation
                      </th>
                      <td>
                        <?php echo $row['motherocc']; ?>
                      </td>
                    </tr>
                  </table>



                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">


                      </div>
                    </div>
                  </div>







                </div>
              </div>
            </div>


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
  var letters = /^[a-z A-Z]+$/;
  var numbers = /^\d{10}+$/;

  function check() {
    if (!document.getElementById("phn").value.match(numbers)) {
      alert('Input digits only for phone number');
      return false;
    } else {
      return true;
    }
  }
</script>

</html>