<?php
    $con = mysqli_connect("localhost", "root", "", "studmgsystem");
    if(isset($_POST['route_name'])){
        $route_name= $_POST['route_name'];
        $qr = "SELECT * FROM `tbl_route` WHERE route_name='$route_name'";
        $data = mysqli_query($con, $qr);
        echo "<option value='' disabled selected>--- select place ---</option>";
        if($data && mysqli_num_rows($data) > 0){
            while ($row = mysqli_fetch_array($data)) {
                echo "<option value='".$row['place']."'>" . $row['place'] . "</option>";
            }
        }
        else{
            echo "<option value=''>NO VALUE</option>";
        }
    }

    if(isset($_POST['pricecheck'])){
        $route_name= $_POST['rname'];
        $place_name= $_POST['pname'];
        $qr = "SELECT * FROM `tbl_route` WHERE route_name='$route_name' AND place='$place_name' AND status='true'";
        $data = mysqli_query($con, $qr);
        if($data && mysqli_num_rows($data) > 0){
            $row = mysqli_fetch_array($data);
            echo " ".$row['price'];
        }
        else{
            echo "Price : <br>0";
        }
    }
?>