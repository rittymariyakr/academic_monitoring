<?php
include 'DatabaseCon.php'; 

$con=mysqli_connect("localhost","root","","studmgsystem");
$sql = "SELECT * FROM `tbl_route` WHERE status = 'true'";
$result=mysqli_query($con,$sql);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
      

              <!-- <input type="text" id="amt" class="form-control form-control-lg" siez="17" value="<?php echo['price'];?>" minlength="19" maxlength="19" disabled /> -->
                                            
            <center><input type="button" name="pay" id ="rzp-button1" value="pay now" onclick="pay_now()" style="border-radius: 5px;background-color: #5D9CEC;"></center>
            
    

<script>



    function pay_now(){
    // var name= JQuery('#name').val();
    var amt=50000;
    var options = {
    "key": "rzp_test_memh6ACSKYdCkR",
    "amount": amt, 
    "currency": "INR",
    "name": "Purple School",
    "description": "Test Transaction",
    "image": "https://drive.google.com/file/d/1FJCNPPMhML96z3s4IrR8-yGU4A6HLm2X/view?usp=share_link",
    "handler":function(response){
        jQuery.ajax({
            type:'POST',
            url:'Razorpay/payment.php',
            data:"payment_id="+response.razorpay_payment_id+"&amt="+amt+"&name="+name,
            success:function(result){
                window.location.href="uploadfile/component-file-upload.php?payment_id="+response.razorpay_payment_id;
            }

        })
        // if(response){
        //     window.location.href="/adsol/index.php";
        // }
       

    }
};

var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}

}
</script>
        </div>      

        
        </div>
    </div>
  
    
</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
</html>
