<?php
session_start();
//authorization
if (!isset($_SESSION['uid']) || ($_SESSION['utype'] != 'admin' && $_SESSION['utype'] != 'teacher')) {
  echo "<script>alert('You are not authorized to view this page!');</script>";
  echo "<script>location.href='index.php';</script>";
}
echo "UID $_SESSION[uid]";
//Select teacher id using uid

$con = mysqli_connect("localhost", "root", "", "studmgsystem");

$sql = "select teach_id from tbl_teachreg where email='$_SESSION[uid]'";
//echo $sql;
$data = mysqli_query($con, $sql);
$teacher_id = '';
while ($row = mysqli_fetch_array($data)) {
  $teacher_id = $row['teach_id'];  
}
if(isset($_POST['approve']))
{
  $status='Approved';
  $leave_id=$_POST['leave_id'];
  $query="UPDATE tbl_leave SET status='$status' WHERE leave_id='$leave_id'";
  $res_query=mysqli_query($con,$query);
  if($res_query)
  {
    echo "<script> alert('Leave Approved'); </script>";
  }
  else
   echo "<script> alert('Query Failed'); </script>";
}
if(isset($_POST['reject']))
{
  $status='Rejected';
  $leave_id=$_POST['leave_id'];
  $query="UPDATE tbl_leave SET status='$status' WHERE leave_id='$leave_id'";
  $res_query=mysqli_query($con,$query);
  if($res_query)
  {
    echo "<script> alert('Leave Rejected'); </script>";
  }
  else
   echo "<script> alert('Query Failed'); </script>";
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
                <?= $row['firstname']; ?>&nbsp;<?= $row['lastname']; ?>
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
                <span class="font-weight-bold mb-2"><?=$row['firstname']?></span>

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
            <a class="nav-link" href="classattendance.php">
              <span class="menu-title">Mark Attendance</span>
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
            <h4 class="card-title">Leave</h4>
          </div>
          <div class="row">
            <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">


                <h4 class="card-title"> Apply Leave</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form action="#" method="POST">
                                        <table>
                                            <tr>
                                                <td>Select Leave Date : </td>
                                                <td><input type="text" name="datePick" id="datePick" cols="30" row="2"></td>
                                            </tr>
                                            <tr>
                                                <td><br></td>
                                            </tr>
                                            <tr>
                                                <td>Reason : </td>
                                                <td><textarea name="leave_reason" cols="30" rows="2"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td><br></td>
                                            </tr>
                                            <td>Session : </td>
                                            <td>
                                            <select name="Session" id="Session">
                                            <option value="select">Select</option>
                                                <option value="FN">FN</option>
                                                <option value="AN">AN</option>
                                                <option value="Full Day">Full Day</option>
                                            </select></td>
                                        
                                            </tr>
                                            <tr>
                                                <td><br></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><button type="submit" name="save_date" class="btn btn-primary">Apply Leave</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>SL.No</th>
                                            <th> </th>
                                            <th>Date</th>
                                            <th> </th>
                                            <th>Reason</th>
                                            <th> </th>
                                            <th>Session</th>
                                        </tr>
                                        <?php
                                            $con=mysqli_connect("localhost","root","","studmgsystem");
                                            $sql = "SELECT * FROM `tbl_leave` WHERE stud_id = $uid";
                                            $counter=0;
                                            $result=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result)){?>
                                        <tr>
                                            <td><?php echo ++$counter; ?></td>
                                            <td> </td>
                                            <td><?=$row['date']?></td>
                                            <td> </td>
                                            <td><?=$row['reason']?></td>
                                            <td> </td>
                                            <td><?=$row['session']?></td>
                                        </tr>
                                        <?php } ?>
                                    </table>

                                </div>
                            </div>
                        </div>


                    </div>




                </div>
                <!-- content-wrapper ends -->

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
    if(isset($_POST['save_date']))
    {
        
        $reason =$_POST['leave_reason'];
        $date = $_POST['datePick'];
        $st = $_POST['Session'];

        $con=mysqli_connect("localhost","root","","studmgsystem");
        $sql = "SELECT * FROM `tbl_leave` WHERE stud_id = $uid";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result)){
            if($row['date']==$date){
                $flag = 1;
            }
        }
        if($flag == 1){
            echo("<script>alert('Already Leave Applied')</script>");
        }else{
            $sql="SELECT `course` FROM `tbl_studreg` WHERE `stud_id` =$uid";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);
            $course = $row['course'];

            $sql="SELECT `assign_teacher` FROM `tbl_class` WHERE `cl_name` = '$course'";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);
            $assign_teacher = $row['assign_teacher'];

            $sql="INSERT INTO `tbl_leave`(`stud_id`, `date`, `reason`,`session`,`status`,`teach_id`) VALUES ('$uid','$date','$reason','$st','pending',$assign_teacher)";
            $result=mysqli_query($con,$sql);
            if($result){
                echo("<script>alert('Success')</script>");
                echo("<script>window.location.reload()</script>");
                
            }
    }
    }
?>
<script>
$(document).ready(function() {
    $('#datePick').multiDatesPicker();
});
</script>

</html>