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

    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <style>
    form {
        padding: 50px;
    }
    </style>

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
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
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
                    </li>
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
                        <h4 class="card-title"> Apply Bus Ticket</h4>
                    </div>
                    <div class="row">
                        <div class=" col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group col-md-4">
                                            <td>
                                            <label for="inputState">Route</label>
                                            <select class="form-control" id="inputState">
                                                <option value="SelectState">Select State</option>
                                                <option value="Kottayam">Kottayam</option>
                                                <option value="Changassery">Changassery</option>
                                                <option value="Cherthala">Cherthala</option>
                                                <option value="Kannur">Kannur</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputDistrict">Stage</label>
                                            <select class="form-control" id="inputDistrict">
                                                <option value="">-- select one -- </option>
                                            </select>
                                        </div>
                                    </form>
                                    <tr>
                                        <td></td>
                                        <td><button type="submit" name="save_date" class="btn btn-primary">Apply Leave</button></td>
                                    </tr>

                                    </table>
                                    </form>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/gh/dubrox/Multiple-Dates-Picker-for-jQuery-UI@master/jquery-ui.multidatespicker.js">
    </script>
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
<script src="stud_bus.php"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
</script>
<script>
var Kottayam = ["26 Mile","Kanjirapally","Ponkunnam","18 Mile","Kodungur","14 Mile","12 Milel","Alampally","Pampady","8 Mile","Annadivayal","Kanjikuzhi","Kottayam"];
var Changassery = ["Koratty","Vizhikathodu","Kallarakav","Chirakadav","Pazhayidam","Cheruvally","Manimalla","8 Mile","Karukachal","Mammoodu","Thengana","Changanasserry"];
var Cherthala = ["Barpeta","Biswanath","Bongaigaon","Cachar","Charaideo","Chirang","Darrang"];
var Kannur = [ "Kakkad","Chalad","Caltex","Chovva","","Thottada","Bhojpur","Buxar"];

$("#inputState").change(function() {
    var RouteSelected = $(this).val();
    var optionsList;
    var htmlString = "";

    switch (RouteSelected) {
        case "Kottayam":
            optionsList = Kottayam;
            break;
        case "Changassery":
            optionsList = Changassery;
            break;
        case "Cherthala":
            optionsList = Cherthala;
            break;
        case "Kannur":
            optionsList = Kannur;
            break;
    }


    for (var i = 0; i < optionsList.length; i++) {
        htmlString = htmlString + "<option value='" + optionsList[i] + "'>" + optionsList[i] + "</option>";
    }
    $("#inputDistrict").html(htmlString);

});
</script>

</html>