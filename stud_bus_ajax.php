<?php
    $con = mysqli_connect("localhost", "root", "", "studmgsystem");
    if(isset($_POST['route_name'])){
        $route_name= $_POST['route_name'];
        $qr = "SELECT * FROM `tbl_route` WHERE route_name='$route_name'";
        $data = mysqli_query($con, $qr);
        echo "<option value='' disabled selected>--- select place ---</option>";
        if($data && mysqli_num_rows($data) > 0){
            while ($row = mysqli_fetch_array($data)) {
                echo "<option value='".$row['route_id']."'>" . $row['place'] . "</option>";
            }
        }
        else{
            echo "<option value=''>NO VALUE</option>";
        }
    }
?>