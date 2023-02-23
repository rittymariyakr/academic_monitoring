<?php
include 'DatabaseCon.php';
if (isset($_POST['submit'])) {
	if ($_FILES['csv_info']['name']) {
		$arrFileName = explode('.', $_FILES['csv_info']['name']);
		if ($arrFileName[1] == 'csv') {
			$handle = fopen($_FILES['csv_info']['tmp_name'], "r");
			$str1 = "";
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$staff_id = $data[0];
				$firstname = $data[1];
				$lastname = $data[2];
				$email = $data[3];
				$dob = $data[4];
				$gender = $data[5];
				$address = $data[6];
				$district = $data[7];
				$state = $data[8];
				$religion = $data[9];
				$phno = $data[10];
				$bloodgroup = $data[11];
				$image = $data[12];
				$qualification = $data[13];
				$position = $data[14];
				$Subject = $data[15];
				$Maritial_status = $data[16];
				$experience = $data[17];
				$password = md5($data[18]);

				$sql = "INSERT INTO `tbl_teachreg`(`staff_id`, `firstname`, `lastname`, `email`, `dob`, `gender`, `address`, `district`, `state`, `religion`, `phno`, `bloodgroup`, `image`, `qualification`, `position`, `Subject`, `Maritial_status`, `Experience`, `Experience_certificate`, `assign_class`)
				 values('$staff_id','$firstname','$lastname','$email','$dob','$gender','$address','$district','$state','$religion','$phno','$bloodgroup','$image','$qualification','$position','$Subject','$Maritial_status','$experience','','')";
				echo $sql;

				$dbhost = 'localhost:3306';
				$dbuser = 'root';
				$dbpass = '';
				$db = 'studmgsystem';
				$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
				if (!$conn) {
					die("Database not connected !!");
				}
				$sql1 = "select * from tbl_teachreg where staff_id='$staff_id'";
				echo $sql1;
				$data1 = mysqli_query($conn, $sql1);
				$flag = 0;
				while ($row = mysqli_fetch_array($data1)) {
					$flag = 1;
				}
				if ($flag == 0) {
					if (mysqli_query($conn, $sql)) {

						$sql1 = "INSERT INTO `tbl_login`(`usertype`, `username`, `password`, `status`, `reset_code`) values('teacher','$email','$password','true','')";
						if (mysqli_query($conn, $sql1)) {
						}
					}
				} 
				else {
					$str1 = $str1 . " " . $staff_id;

				}
				$flag = 0;
			}
			if ($str1 != "")
				echo "<script>alert('Faculty(s) $str1 already exist(s)');</script>";
			else
				echo "<script>alert('List Uploaded');</script>";
			echo "<script>location.href='faccsv.php';</script>";
			fclose($handle);
		}
	}
}
