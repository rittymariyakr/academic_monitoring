<?php
session_start();
if (!isset($_SESSION['uid']) || $_SESSION['utype'] != 'admin') {
  echo "<script>alert('You are not authorized to view this page!');</script>";
  echo "<script>location.href='index.php';</script>";
}
$stream = $_POST['stream'];

?>

<?php
if (isset($_POST['hour'])) {
  $day = $_POST['day'];
  $hour = $_POST['hour'];
  $course = $_POST['stream'];
  $teacher = $_POST['teacher_id'];

  $con = mysqli_connect("localhost", "root", "", "studmgsystem");
  mysqli_query($con, "delete from tbl_allocation where day_id='$day' and course_id='$course' and hour_id='$hour' ");
  $sql = "insert into tbl_allocation values('$day','$course','$hour','$teacher')";
  mysqli_query($con, $sql);
  echo "entered " . $sql;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.ico" />
  <script>
    function loadDoc() {
      var hour = document.frmtimetable.hour.value;
      var day = document.frmtimetable.day.value;
      var course = <?php echo $stream; ?>;
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
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/logo.jpg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
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
    <div class="container-fluid page-body-wrapper">
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
      <?php
      function showcombobox($tableid, $fieldid, $fieldname)
      {
        $con = mysqli_connect("localhost", "root", "", "studmgsystem");

        $sql = "select $fieldid,$fieldname from $tableid";
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
            <h4 class="card-title">Add Timetable</h4>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form action="timetable.php" method="post" name=frmtimetable>
                    <input type=hidden name=stream value='<?php echo $stream; ?>'>
                    Select Day : <select name=day class="form-control">

                      <option value=1 selected>Monday
                      <option value=2>Tuesday
                      <option value=3>Wednesday
                      <option value=4>Thursday
                      <option value=5>Friday
                      <option value=6>Saturday
                    </select><br /><br />
                    Hour :
                    <select name=hour onChange="loadDoc()" class="form-control">
                      <option value='Select'>Select
                      <option value=1>1
                      <option value=2>2
                      <option value=3>3
                      <option value=4>4
                      <option value=5>5
                      <option value=6>6
                    </select><br /><br />
                    Select Teacher : <select name="teacher_id" class="form-control">
                      <?php
                  $con = mysqli_connect("localhost", "root", "", "studmgsystem");

                      $qr = "SELECT * FROM  tbl_teachreg";
                      $data = mysqli_query($con, $qr);
                      while ($row = mysqli_fetch_array($data)) {
                        echo "<option value='$row[teach_id]'>" . $row['firstname'] . "-" . $row['lastname'] . "</option>";
                      }
                      ?>
                    </select><br /><br />
                    <input type="submit" value="ADD" class="btn btn-gradient-primary me-2" />
                  </form>
                </div>
              </div>
            </div>
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
                  $stream_name = '';
                  $sql = "select stream_name from tbl_stream where stream_id='$stream'";
                  $data1 = mysqli_query($con, $sql);
                  while ($row1 = mysqli_fetch_array($data1)) 
                  {
                    $stream_name = $row1['stream_name'];
                  }

                  echo "<b>Time table of $stream_name</b><br>";
                  echo "<table border=2 class=table table-bordered ><tr><td>Day</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td></tr>";
                  while ($i <= 6) 
                  {
                    $pos = $i - 1;
                    $j = 0;
                    echo "<tr><td>$day[$pos]</td>";
                    while ($j <= 6) 
                    {
                      $sql = "select * from tbl_allocation where course_id='$stream' and day_id='$i' and hour_id='$j'";
                      
                      $data = mysqli_query($con, $sql);
                      
                      while ($row = mysqli_fetch_array($data)) 
                      {
                        $teacher_id = $row['teacher_id'];
                        
                        $teacher_name = '';
                        $subject_name = '';
                        $sql = "select s.sub_name as subject from tbl_subject s,tbl_teacher_subject t where t.teacher_id='$teacher_id' and t.subject_id=s.sub_id";
                        
                        $data1 = mysqli_query($con, $sql);
                        $flag = 0;

                        while ($row1 = mysqli_fetch_array($data1)) 
                        {
                          if ($flag == 0) 
                          {
                            $subject_name = $row1['subject'];
                            $flag = 1;
                          }
                        }
                        $sql = "select firstname  from tbl_teachreg where teach_id='$teacher_id'";
                        $data1 = mysqli_query($con, $sql);
                        $flag = 0;

                        while ($row1 = mysqli_fetch_array($data1)) 
                        {
                          if ($flag == 0) 
                          {
                            $teacher_name = $row1['firstname'];

                            echo "<td>$teacher_name<br>$subject_name</td>";
                            $flag = 1;
                          }
                        }
                      } 
                      $j = $j + 1;
                    } 
                    $i = $i + 1;
                    echo "</tr>";
                  }
                  echo "</table>";
                  ?>

                </div>
              </div>
                </div>
          </div>
        </div>
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/todolist.js"></script>
</body>
</html>