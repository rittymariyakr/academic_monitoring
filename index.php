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

  <style>
    .img {
      background-image: url('images/ritty.png');
    }

  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.ico" />
  <script src="https://www.google.com/recaptcha/api.js" async defer>
  </script>
  <style>
    body{
      background-image: url("./images/modern-school-building.jpg") !important;
    }
    .content-wrapper{
      background: none !important;
    }
  </style>

</head>
<body class="img">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="images/logo.jpg">
              </div>
              <h6 class="font-weight-light">Sign in to continue.</h6>              
              <form name="f1" class="pt-3" action="logaction.php" method="post" onsubmit="return validation()">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="un" placeholder="Username" autocomplete="off">
                  <span id="username" class="text-danger "> </span>
                </div>
                <div class="form-group">
                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="up" placeholder="Password">
                <span id="password" class="text-danger "> </span>
                </div>
                <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI" data-callback="onRecaptchaSuccess" data-expired-callback="onRecaptchaResponseExpiry" data-error-callback="onRecaptchaError">
                </div>
                <div class="mt-3">
                <input type="submit" name="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN" />
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                <a href="recover_psw.php">Forgot Password</a>&nbsp;&nbsp;&nbsp;
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>    
    </div>  
  </div> 
  <script src="assets/vendors/js/vendor.bundle.base.js"></script> 
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  
  <script language="javascript">
    function validation() {
      var un = document.getElementById('exampleInputEmail1').value;
      var up = document.getElementById('exampleInputPassword1').value;
      if (un == "") {
        document.getElementById('username').innerHTML = "**Please fill the username field";
        return false;
      }
      if (up == "") {
        document.getElementById('password').innerHTML = "**please enter your password";
        return false;
      }
    }
  </script>
</body>
</html>