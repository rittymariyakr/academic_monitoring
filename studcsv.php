<?php


include 'DatabaseCon.php';
//$staffid=autoid("tbl_teachreg","staff_id");

if (isset($_POST['submit'])) {
	if ($_FILES['csv_info']['name']) {
		$arrFileName = explode('.', $_FILES['csv_info']['name']);
		if ($arrFileName[1] == 'csv') {
			$handle = fopen($_FILES['csv_info']['tmp_name'], "r");
			$str1 = "";
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				//$digid=$data[0];
				$admno = $data[0];
				$course = $data[1];
				$First_name = $data[2];
				$Middle_nam = $data[3];
				$Last_name = $data[4];

				$dob = $data[5];
				$gender = $data[6];
				$Address = $data[7];
				$district = $data[8];
				$state = $data[9];

				$religion = $data[10];
				$gphone = $data[11];
				$bloodgroup = $data[12];
				$fathername = $data[13];
				$mothername = $data[14];

				$fatherocc = $data[15];
				$motherocc = $data[16];
				$password = md5($data[17]);
				$class = $data[18];
				$stream = $data[18];
				$sql = "insert into tbl_studreg values(NULL,'$admno','$class','$course','$First_name','$Middle_nam','$Last_name','$dob','$gender','$Address','$district','$state','$religion','$gphone','$bloodgroup','$fathername','$mothername','$fatherocc','$motherocc','')";

				//studid,admno,course,First_name,Middle_nam
				//echo $sql;
				//$sql="update tbl_studreg set admno='$result', where digid='$digid'";

				$dbhost = 'localhost:3306';
				$dbuser = 'root';
				$dbpass = '';
				$db = 'studmgsystem';
				$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
				if (!$conn) {
					die("Database not connected !!");
				}

				$sql1 = "select * from tbl_studreg where admno='$admno'";
				$data1 = mysqli_query($conn, $sql1);
				$flag = 0;
				while ($row = mysqli_fetch_array($data1)) {
					$flag = 1;
				}
				if ($flag == 0) {
					if (mysqli_query($conn, $sql)) {

						// echo "<script>alert('The password is : $password');</script>";
						$sql1 = "INSERT INTO `tbl_login`(`usertype`, `username`, `password`, `status`, `reset_code`) values('student','$admno','$password','true','')";
						if (mysqli_query($conn, $sql1)) {
							//echo"<script>alert('List Uploaded');</script>";
						}
					}
				} //duplicate check
				else {
					$str1 = $str1 . " " . $admno;
					//echo "--".$str1;

				}
			}
			if ($str1 != "")
				echo "<script>alert('Student(s) $str1 already exist(s)');</script>";
			else
				echo "<script>alert('List Uploaded');</script>";
			echo "<script>location.href='addstudcsv.php';</script>";
			fclose($handle);
		}
	}
}
