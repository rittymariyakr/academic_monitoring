<?php
session_start();
$admno=$_SESSION['usr_name'];
$con = mysqli_connect("localhost", "root", "", "studmgsystem");
$result=mysqli_query($con, "SELECT * FROM `tbl_studreg` where admno = '$admno'");
$row=mysqli_fetch_array($result);
$stream=$row['class'];

?>

<?php
//Save time table
if (isset($_POST['hour'])) {
  $day = $_POST['day'];
  $hour = $_POST['hour'];
  $course = $_POST['stream'];
  $teacher = $_POST['teacher_id'];

  mysqli_query($con, "delete from tbl_allocation where day_id='$day' and course_id='$course' and hour_id='$hour' ");
  $sql = "insert into tbl_allocation values('$day','$course','$hour','$teacher')";
  mysqli_query($con, $sql);
  echo "entered " . $sql;
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
      var course = <?php echo $stream; ?>;
      // alert(hour+day+course);


      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          document.getElementById("a1").innerHTML = xhttp.responseText;
        }
      };
      xhttp.open("GET", "selectteacher.php?hour=" + hour + "&day=" + day + "&course=" + course, true);
      xhttp.send();
    }
  </script>
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
            <!--   <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>-->
          </li>



          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-power"></i>
            </a>
          </li>

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
          <li class="nav-item">

            <a class="nav-link" href="chngp.php">
              <span class="menu-title">Change Password</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <?php



      function showcombobox($tableid, $fieldid, $fieldname)
      {
        $con = mysqli_connect("localhost", "root", "", "studmgsystem");

        $sql = "select $fieldid,$fieldname from $tableid";
        //echo $sql;
        $data = mysqli_query($con, $sql);
        $retvalue = '';
        while ($row = mysqli_fetch_array($data)) {
          $retvalue = $retvalue . "<option value='" . $row[$fieldid] . "'>" . $row[$fieldname] . "</option>";
        }
        echo $retvalue;
      }
      ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <!--<h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>-->
            <h4 class="card-title">Timetable</h4>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">


                  <table border="1" class="table table-bordered">

                  </table>
                  <?php
                  $con = mysqli_connect("localhost", "root", "", "studmgsystem");
                  $sql = "select * from tbl_allocation where course_id='1'";
                  $data = mysqli_query($con, $sql);
                  $day = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                  $dayno = array("1", "2", "3", "4", "5", "6");
                  $ttarray = array("1", "2", "3", "4", "5", "6");
                  $i = 1;
                  $j = 1;
                 
                  echo "<table border=2 class=table table-bordered ><tr><td>Day</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td></tr>";
                  while ($i <= 6) //Day
                  {
                    $pos = $i - 1;
                    $j = 0;
                    echo "<tr><td>$day[$pos]</td>";
                    while ($j <= 6) //Hour
                    {
                      $sql = "select * from tbl_allocation where course_id='$stream' and day_id='$i' and hour_id='$j'";
                      //echo $sql;
                      $data = mysqli_query($con, $sql);
                      //$flag=0;
                      while ($row = mysqli_fetch_array($data)) //Find subject of teacher
                      {
                        $teacher_id = $row['teacher_id'];
                        //echo $teacher_id;
                        $teacher_name = '';
                        $subject_name = '';
                        $sql = "select s.sub_name as subject from tbl_subject s,tbl_teacher_subject t where t.teacher_id='$teacher_id' and t.subject_id=s.sub_id";
                        //echo "<br>$sql";
                        $data1 = mysqli_query($con, $sql);
                        $flag = 0;

                        while ($row1 = mysqli_fetch_array($data1)) //Find subject of Teacher
                        {
                          if ($flag == 0) //Enter only once
                          {
                            $subject_name = $row1['subject'];
                            //echo $subject_name;
                            //echo "<td>$teacher_id<br>$subject_name</td>";
                            $flag = 1;
                          }
                        }


                        $sql = "select firstname  from tbl_teachreg where teach_id='$teacher_id'";
                        //echo "<br>$sql";
                        $data1 = mysqli_query($con, $sql);
                        $flag = 0;

                        while ($row1 = mysqli_fetch_array($data1)) //Find Name of Teacher
                        {
                          if ($flag == 0) //Enter only once
                          {
                            $teacher_name = $row1['firstname'];

                            echo "<td>$teacher_name<br>$subject_name</td>";
                            $flag = 1;
                          }
                        }
                      } //j-Hour
                      //if($flag==0)
                      //echo "<td></td>";
                      $j = $j + 1;
                    } //i-Day
                    $i = $i + 1;
                    echo "</tr>";
                  }
                  echo "</table>";
                  //----------------------------------------
                  ?>

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

</html>