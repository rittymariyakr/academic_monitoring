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
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="assets/images/logo.jpg">
                </div>
            
                <h6 class="font-weight-light">Change Passwqord.</h6>
                <form class="pt-3" action="changeaction.php" method="post">
                  <div class="form-group" style>
                    <input type="password" class="form-control form-control-lg" id="exampleInputEmail1" name="cp" required placeholder="Current Password" >
                  </div>
                 <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="a" name="np" required placeholder="New Password" onkeyup="passs()">
                  </div>
                  <div id="hello" style="color: red;"></div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="b" name="cnp" placeholder="Confirm Password" onkeyup="conpasss()">
                  </div>
                  <div id="hy" style="color: red;"></div>
                  <div class="mt-3">
                    <input type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="CHANGE" />
                    <a href="fachome.php" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn mx-4">BACK</a>
                  </div>
                  
                
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->

    <script>
      function passs() {
        var pass = document.getElementById("a").value;
        var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;

        if (!pwd_expression.test(pass)) {
            document.getElementById("hello").innerHTML = "Upper case,Lower case,Special character and Numeric letter need";
        } else {
            document.getElementById("hello").innerHTML = ""
        }
    }

    function conpasss() {
        var pass = document.getElementById("a").value;
        var cpass = document.getElementById("b").value;

        if (pass != cpass) {
            document.getElementById("hy").innerHTML = "Password not match";
        } else {
            document.getElementById("hy").innerHTML = "";
        }
    }


    </script>
  </body>
</html>