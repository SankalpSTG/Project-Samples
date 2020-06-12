<?php
	session_start();
	if(isset($_POST["updtsbmt"])){
		include_once "../connect/dbh.inc.php";
		$user_sex = mysqli_real_escape_string($conn, $_POST['sex']);
		$user_type = mysqli_real_escape_string($conn, $_POST['utp']);
		$user_dob = mysqli_real_escape_string($conn, $_POST['bdate']);
		$user_year = mysqli_real_escape_string($conn, $_POST['year']);
		$user_branch = mysqli_real_escape_string($conn, $_POST['brch']);
		$user_rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
		if(empty($user_sex) || empty($user_type) || empty($user_dob)|| empty($user_branch) || ($user_type == 1 && (empty($user_year) || empty($user_rollno)))){
			header("Location: ../../index.php?=incomplete_form");
			exit();
		}else{
			
			if($user_type == 1 && (!preg_match("/^[0-9]*$/", $user_rollno))){
				header("Location: ../../index.php?=error");
				exit();
			}
			else{
				$sql="SELECT * FROM loginsystem WHERE usr_uid = '$user_uniqueid'";
				$result = mysqli_query($conn, $sql);
				$resultcheck = mysqli_num_rows($result);
				if($resultcheck > 0){
					header("Location: ../../index.php?=user%20exists");
					exit();
				}else{
					//$hashed_password = password_hash($user_pswd, PASSWORD_DEFAULT);
					$sql = "INSERT INTO loginsystem (usr_fname, usr_lname, usr_uid, usr_pwd) VALUES ('$user_fname', '$user_lname', '$user_uniqueid', '$user_pswd');";
					mysqli_query($conn, $sql);
					header("Location: ../../user/update.php?=signup%20successful");
					exit();
				}
			}
		}
	}else{
		header("Location: ../../index.php?=error");
		exit();
	}


?>