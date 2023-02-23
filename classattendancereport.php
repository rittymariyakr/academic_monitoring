<?php
  session_start();
  //authorization
  if(!isset($_SESSION['uid'])||($_SESSION['utype']!='admin' && $_SESSION['utype']!='teacher'))
  {
    echo"<script>alert('You are not authorized to view this page!');</script>";
    echo"<script>location.href='index.php';</script>";
  }
  echo "UID $_SESSION[uid]";
//Select teacher id using uid

$con=mysql_connect("localhost","root","");
mysql_select_db("studmgsystem",$con);
$sql="select teach_id from tbl_teachreg where email='$_SESSION[uid]'";
//echo $sql;
$data=mysql_query($sql,$con);
 $teacher_id='';
while($row=mysql_fetch_array($data))
{
 $teacher_id=$row['teach_id'];
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
     var hour=document.frmtimetable.hour.value;
   var day=document.frmtimetable.day.value;
   var course=document.frmtimetable.course.value;
   //alert(hour+day+course);
   
   
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
             document.getElementById("a1").innerHTML = xhttp.responseText;
        }
  };
  xhttp.open("GET", "selectteacher.php?hour="+hour+"&day="+day+"&course="+course, true);
  xhttp.send();
}
</script>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">We Ensure Good Education</p>
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
                  <p class="mb-1 text-black">Welcome Faculty</p>
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
              </a>
            </li> -->
		<li class="nav-item">
              
            <a class="nav-link" href="chngp.php">
       <span class="menu-title">Change Password</span>
              
              </a>
            </li>
           <!-- <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                  <div class="border-bottom">
                    <p class="text-secondary">Categories</p>
                  </div>
                  <ul class="gradient-bullet-list mt-4">
                    <li>Free</li>
                    <li>Pro</li>
                  </ul>
                </div>
              </span>
            </li>-->
          </ul>
        </nav>
        <!-- partial -->
        <?php



function showcombobox($tableid,$fieldid,$fieldname,$teacher_id)
{
$con=mysql_connect("localhost","root","");
mysql_select_db("studmgsystem",$con);
$sql="select $fieldid,$fieldname from $tableid s,tbl_classteacher t where s.stream_id=t.stream_id and t.teacher_id='$teacher_id'";
echo $sql;
$data=mysql_query($sql,$con);
$retvalue='';
while($row=mysql_fetch_array($data))
{
 $retvalue=$retvalue."<option value='".$row[$fieldid]."'>".$row[$fieldname]."</option>";
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
                 <h4 class="card-title">Add Attendance</h4>
            </div>
            <div class="row">
             <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
             
                    
					<form action="attendancereport.php" method="post" name=frmtimetable>


Select Stream : 
<select name=stream class="form-control">
<?php
showcombobox('tbl_stream','stream_name','stream_name',$teacher_id);
?>
</select><br/><br/>




<input type="submit" value="Select Stream" class="btn btn-gradient-primary me-2" />


</form>
					
           </div></div></div>
           <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
             
                    
          
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
   
      