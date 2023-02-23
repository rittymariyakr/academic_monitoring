<!DOCTYPE html>
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>
<body>
  <div class="container-scroller">
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
                <img src="assets/images/faces/face1.jpg" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">Welcome Admin</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
            </div>
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
                <li class="nav-item"> <a class="nav-link" href="addfac.php"> Faculty Add</a></li>
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
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h4 class="card-title">Faculty</h4>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form action="facaction.php" method="post">
                    Faculty Email Id
                    <input type="email" id="email" class="form-control" name="fem" autocomplete="off" required onchange="validemail()" /><br />
                    <p id="msg1" style="color:red;"></p>

                    Faculty First Name
                    <input type="text" name="fn" id="fname"  class="form-control"  autocomplete="off" onblur="return fnameValidate()"><br />
                    <div id="fnameValidate" style="color:red;"></div>

                    Faculty Last Name
                    <input type="text" name="ln" id="lname" class="form-control" autocomplete="off"  onblur="return lnameValidate()"><br />
                    <div id="lnameValidate" style="color:red;"></div>

                    Faculty password
                    <input type="password" id="pass" class="form-control" name="fpw" required onchange="Validpassword()" /><br />
                    <p id="msg2" style="color:red;"></p>
                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                    
                    <input type="submit" value="ADD" class="btn btn-gradient-primary me-2" />
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <table border="1" class="table table-bordered">
                    <tr>
                      <th>Faculty Email</th>
                    </tr>
                    <?php
                    include('DatabaseCon.php');
                    $db = new DatabaseCon;
                    $s = "select * from tbl_teachreg";
                    $rs = $db->selectData($s);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                      <tr>
                        <td><a href="viewfac.php?id=<?php echo $row['teach_id']; ?>"><?php echo $row['email']; ?></a></td>
                      </tr>
                    <?php } ?>
                  </table>

                </div>
              </div>
            </div>
          </div>

<script>
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
                        </script>
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
  <script>
    function validemail() {
      var val = document.getElementById('email').value;
      if (!val.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        document.getElementById('msg1').innerHTML = "Enter valid email";
        document.getElementById('email').value = "";
        return false;
      }
      document.getElementById('msg1').innerHTML = " ";
      return true;
    }

    function Validpassword() {
      var val = document.getElementById('pass').value;
      if (!val.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/)) {
        document.getElementById('msg2').innerHTML = "Password should contain atleast between 8 to 15 characters, at least one lowercase letter, one uppercase letter, one numeric digit, and one special character";
        document.getElementById('pass').value = "";
        return false;
      }
      document.getElementById('msg2').innerHTML = " ";
      return true;
    }
  </script>
  <script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('fpw');
    toggle.addEventListener('click', function() {
      if (password.type === "password") {
        password.type = 'text';
      } else {
        password.type = 'password';
      }
      this.classList.toggle('bi-eye');
    });
  </script>
</body>
</html>