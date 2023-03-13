<?php
    if(isset($_POST['route_name'])){
        echo "Good....";
    }
?>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"
        integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

                    <div class="row" id="apply_bus_book_div">
                        <div class=" col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="stud_bus.php" name="myForm">
                                        <table>
                                        <div class="form-group col-md-4">
                                            Route : <select class="form-control" onchange="updatePlaceSelect();"
                                                id="bus_route_select" name="bus_route_select" class="form-control" required>
                                                <option value='' disabled selected>--- select place ---</option>
                                                <?php
                                                $con = mysqli_connect("localhost", "root", "", "studmgsystem");
                                                $qr = "SELECT distinct(route_name) FROM `tbl_route`";
                                                $data = mysqli_query($con, $qr);
                                                while ($row = mysqli_fetch_array($data)) {
                                                echo "<option value='$row[route_name]'>" . $row['route_name'] . "</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            Place : <select class="form-control" name="bus_place_select"
                                                onchange="setBusPrice();" id="bus_place_select" class="form-control" required>

                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <!-- <h1>Display Radio Buttons</h1> -->
                                            <p>Ticket Type:</p>
                                            <input type="radio" id="ticket" name="type" value="Monthly" checked required>
                                            <label style="margin-top: 2px;margin-left: 5px;"
                                                for="monthly">Monthly</label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputState">Month:</label>
                                            <select name="month" class="form-control" id="month"  required>
                                                <option value=""></option>
                                                <option value="March 2023">March 2023</option>
                                                <option value="April 2023">June 2023</option>
                                                <option value="May 2023">July 2023</option>
                                                <option value="June 2023">August 2023</option>
                                                <option value="June 2023">September 2023</option>
                                            </select>
                                            <br>

                                            <tr>
                                                <p>Price:</p>
                                                <textarea type="text" style="width: 132px" ; id="bus_ticket_price" name="fare" col="1" rows="1" readonly ></textarea>
                                                <!-- <td><input class="form-control" id="bus_ticket_price" readonly ></td> -->
                                            </tr>

                                            <tr><br><br>

                                            <button type="submit" id="save_date" name="save_date" class="btn btn-primary">Apply</button>
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
                                            <th>Route</th>
                                            <th> </th>
                                            <th>Stage</th>
                                            <th> </th>
                                            <th>Type</th>
                                            <th> </th>
                                            <th>Month</th>
                                        </tr>
                                        <?php
                                            $con=mysqli_connect("localhost","root","","studmgsystem");
                                            $sql = "SELECT * FROM `tbl_bus` WHERE stud_id = $uid";
                                            $counter=0;
                                            $result=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($result)){?>
                                        <tr>
                                            <td><?php echo ++$counter; ?></td>
                                            <td> </td>
                                            <td><?=$row['route']?></td>
                                            <td> </td>
                                            <td><?=$row['stage']?></td>
                                            <td> </td>
                                            <td><?=$row['type']?></td>
                                            <td> </td>
                                            <td><?=$row['month']?></td>
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

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> -->
    <!-- <script
        src="https://cdn.jsdelivr.net/gh/dubrox/Multiple-Dates-Picker-for-jQuery-UI@master/jquery-ui.multidatespicker.js">
    </script> -->
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
        
        $route =$_POST['bus_route_select'];
        $stage = $_POST['bus_place_select'];
        $type = $_POST['type'];
        $month = $_POST['month'];
        $fare = $_POST['fare'];


        $con=mysqli_connect("localhost","root","","studmgsystem");
        $sql = "SELECT * FROM `tbl_bus` WHERE status = 'true'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result)){
            if($row['month']==$month){
                $flag = 1;
            }
        }
        if($flag == 1){
            echo("<script>alert('Already Applied')</script>");
        }else{
            // $sql="SELECT `course` FROM `tbl_studreg` WHERE `stud_id` =$uid";
            // $result=mysqli_query($con,$sql);
            // $row=mysqli_fetch_array($result);
            // $course = $row['course'];

            // $sql="SELECT `assign_teacher` FROM `tbl_class` WHERE `cl_name` = '$course'";
            // $result=mysqli_query($con,$sql);
            // $row=mysqli_fetch_array($result);
            // $assign_teacher = $row['assign_teacher'];

            // $sql="INSERT INTO `tbl_bus`(`route`, `stage`,`type`,`month`,`status`) VALUES ('$route','$stage','$type','$month','true')";
            // echo "<script>alert('$stage');</script>";
            $sql="INSERT INTO `tbl_bus` (`stud_id`,`route`, `stage`,`type`,`month`,`fare`,`status`) VALUES ('$uid','$route','$stage','$type','$month','$fare','pending')";
            $result=mysqli_query($con,$sql);
            if($result){
                $bus_id= $con->insert_id;
                echo("<script>alert('Success')</script>");
                echo("<script>window.location.href='payment.php?bus_id=$bus_id';</script>");
                
            }
    }
    }
?>
<script>
$(document).ready(function() {
    $('#datePick').multiDatesPicker();
});
</script>
<!-- <script src="stud_bus.php"></script>
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
</script> -->
<script>
var Kottayam = ["26 Mile", "Kanjirapally", "Ponkunnam", "18 Mile", "Kodungur", "14 Mile", "12 Milel", "Alampally",
    "Pampady", "8 Mile", "Annadivayal", "Kanjikuzhi", "Kottayam"
];
var Changassery = ["Koratty", "Vizhikathodu", "Kallarakav", "Chirakadav", "Pazhayidam", "Cheruvally", "Manimalla",
    "8 Mile", "Karukachal", "Mammoodu", "Thengana", "Changanasserry"
];
var Ranni = ["Koratty", "Erumely", "Karimbinathod", "Mukkada", "Plachery", "Manthamaruthi", "Ranni"];
var Ettumanoor = ["26 Mile", "Kanjirappally", "Kunnumbhagam", "Ponkunnam", "1 Mile", "Kooraly", "Vanchimala",
    "Ettumanoor"];

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
        case "Ranni":
            optionsList = Ranni;
            break;
        case "Ettumanoor":
            optionsList = Ettumanoor;
            break;
    }


    for (var i = 0; i < optionsList.length; i++) {
        htmlString = htmlString + "<option value='" + optionsList[i] + "'>" + optionsList[i] + "</option>";
    }
    $("#inputDistrict").html(htmlString);

});
</script>

<script>
function updatePlaceSelect() {
    var route_name = $('#bus_route_select').find(":selected").text();
    $.ajax({
        url: "stud_bus_ajax.php",
        method: "POST",
        data: {
            route_name: route_name
        },
        success: function(data) {
            $('#bus_place_select').html(data);
        },
        error: function(error) {
            alert("The Error is " + error);
        }
    });
}

function setBusPrice() {
    var route_name = $('#bus_route_select').find(":selected").text();
    var place_name = $('#bus_place_select').find(":selected").text();
    $.ajax({
        url: "stud_bus_ajax.php",
        method: "POST",
        data: {
            pricecheck: "true",
            rname: route_name,
            pname: place_name
        },
        success: function(data) {
            $('#bus_ticket_price').val(data); // set the value of the textbox with id 'bus_ticket_price'
        },
        error: function(error) {
            alert("The Error is " + error);
        }
    });
}


// function setBusPrice(){
//     var route_name = $('#bus_route_select').find(":selected").text();
//     var place_name = $('#bus_place_select').find(":selected").text();
//     $.ajax({
//         url:"stud_bus_ajax.php",
//         method:"POST",
//         data:{pricecheck:"true",rname:route_name, pname: place_name},
//         success:function(data){
//             $('#bus_ticket_price').html(data);
//         },
//         error:function(error){
//             alert("The Error is "+error);
//         }
//     });
// }
</script>

</html>