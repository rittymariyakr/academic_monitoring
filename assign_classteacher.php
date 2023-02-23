<?php
session_start();
//authorization
if (!isset($_SESSION['uid']) || $_SESSION['utype'] != 'admin') {
  echo "<script>alert('You are not authorized to view this page!');</script>";
  echo "<script>location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
  <script>
    function loadDoc() {
      //alert('HUP');
      var hour = document.frmtimetable.hour.value;
      var day = document.frmtimetable.day.value;
      var course = document.frmtimetable.course.value;
      //alert(hour+day+course);


      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          document.getElementById("a1").innerHTML = xhttp.responseText;
        }
      };
      xhttp.open("GET", "newfiles/selectteacher.php?hour=" + hour + "&day=" + day + "&course=" + course, true);
      xhttp.send();
    }
  </script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="#"><img src="assets/images/logo.jpg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="assets/images/faces/face1.jpg" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">Welcome Admin</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
          </li>
        </ul>
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
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">Admin</span>

              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminhome.php">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#faculty_details" aria-expanded="false" aria-controls="faculty_details">
              <span class="menu-title">Faculty</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
            <div class="collapse" id="faculty_details">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="faccsv.php"> Faculty Upload</a></li>
                <li class="nav-item"> <a class="nav-link" href="facultyview.php"> Faculty view </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#student_details" aria-expanded="false" aria-controls="student_details">
              <span class="menu-title">Student</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
            <div class="collapse" id="student_details">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="addstud.php"> Student Add</a></li>
                <li class="nav-item"> <a class="nav-link" href="student_details.php"> Student View </a></li>
                <li class="nav-item"> <a class="nav-link" href="addstudcsv.php"> Student Upload </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#class_details" aria-expanded="false" aria-controls="class_details">
              <span class="menu-title">Class</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="class_details">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="addclass.php"> Add Class </a></li>
                <li class="nav-item"> <a class="nav-link" href="addsub.php"> Add Subject </a></li>
                <li class="nav-item"> <a class="nav-link" href="assign.php"> Assign subject Teacher </a></li>
                <li class="nav-item"> <a class="nav-link" href="assign_classteacher.php"> Assign Class Teacher </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="classtimetable.php">
              <span class="menu-title">Add Timetable</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <span class="menu-title">Logout</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
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
            <h4 class="card-title">Assign Class Teachers</h4>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">


                  <form action="#" method="post" name=frmtimetable>

                    Select Class : <select name=stream class="form-control">

                      <?php


                      $con = mysqli_connect("localhost", "root", "", "studmgsystem");

                      $qr = "SELECT * FROM tbl_class where status = 'true' and assign_teacher = '0'";
                      $data = mysqli_query($con, $qr);
                      while ($row = mysqli_fetch_array($data)) {
                        echo "<option value='$row[class_id]'>" . $row['cl_name'] . "</option>";
                      }
                      ?>
                    </select><br /><br />



                    Select Teacher : <select name="tr" class="form-control">

                      <?php

                      $qr = "SELECT * FROM  tbl_teachreg where assign_class = '0'";
                      $data = mysqli_query($con, $qr);
                      while ($row = mysqli_fetch_array($data)) {
                        echo "<option value='$row[teach_id]'>" . $row['firstname'] . " " . $row['lastname'] . "</option>";
                      }
                      ?>
                    </select><br /><br />

                    <input type="submit" name="sub" value="ADD" class="btn btn-gradient-primary me-2" />


                  </form>

                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <table border="1" class="table table-bordered">
                    <tr>
                      <th>Class</th>
                      <th>Teacher</th>
                    </tr>
                    <?php
                    include('DatabaseCon.php');
                    $db = new DatabaseCon;
                    $s = "select * from tbl_classteacher";
                    $rs = $db->selectData($s);
                    while ($row = mysqli_fetch_array($rs)) {
                      $cl_id=$row['stream_id'];
                      $tea_id=$row['teacher_id'];
                      $sql1="SELECT * FROM `tbl_class` where class_id = '$cl_id'";
                      $sql2="SELECT * FROM `tbl_teachreg` where teach_id = '$tea_id'";
                      $data1 = mysqli_query($con, $sql1);
                      $data2 = mysqli_query($con, $sql2);
                      $row1 = mysqli_fetch_array($data1);
                      $row2 = mysqli_fetch_array($data2);
                    ?>
                      <tr>
                        <td><?=$row1['cl_name']; ?></td>
                        <td><?=$row2['firstname']; ?>  <?=$row2['lastname']; ?></td>
                        <td><a href="delete_class_teacher.php?stream_id=<?=$cl_id?>"><i class="mdi mdi-delete"></i></a></td>
                      </tr>
                    <?php } ?>
                  </table>
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

<?php
if (isset($_POST['sub'])) {
  $con = mysqli_connect("localhost", "root", "", "studmgsystem");
  $course = $_POST['stream'];
  $tr = $_POST['tr'];
  $sql = "select * from tbl_classteacher where stream_id = '$course' and teacher_id = '$tr'";
  $rt = $db->selectQuery($sql);
  if ($rt == 1) {
    echo "<script>alert('Already Exists');window.location='assign_classteacher.php';</script>";
  } else {
    $sql1 = "INSERT INTO `tbl_classteacher` (`stream_id`, `teacher_id`)VALUES ('$course','$tr')";
    $sql2= "UPDATE `tbl_teachreg` SET `assign_class`='$course' where teach_id = '$tr'";
    $sql3= "UPDATE `tbl_class` SET `assign_teacher`='$tr' where class_id = '$course'";
    if (mysqli_query($con, $sql1)) {
      mysqli_query($con, $sql2);
      mysqli_query($con, $sql3);
      echo "<script>alert('Subject assigned ');location.href='assign_classteacher.php';</script>";
    } else {
      echo "<script>alert('Failed');</script>";
    }
  }
}
?>

</html>