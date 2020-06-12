<?php
	session_start();
	if(isset($_POST["signupsubmit"])){
		include_once "../connect/dbh.inc.php";
		$user_fname = mysqli_real_escape_string($conn, $_POST['first']);
		$user_lname = mysqli_real_escape_string($conn, $_POST['lname']);
		$user_uniqueid = mysqli_real_escape_string($conn, $_POST['uin']);
		$user_pswd = mysqli_real_escape_string($conn, $_POST['pswd']);
		if(empty($user_fname) || empty($user_lname) || empty($user_uniqueid) || empty($user_pswd)){
			header("Location: ../../index.php?=incomplete_form");
			exit();
		}else{
			if(!preg_match("/^[a-zA-Z]*$/", $user_fname) || !preg_match("/^[a-zA-Z]*$/", $user_lname)){
				header("Location: ../../index.php?=$user_fname");
				exit();
			}
			else{
				if(!preg_match('/^[0-9]*$/', $user_uniqueid)){
					header("Location: ../../index.php?=invalid_id");
					exit();
				}else{
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
						$_SESSION['u_uid'] = $user_uniqueid;
						header("Location: ../../user/update.php?=signup%20successful");
						exit();
						
					}
				}
			}
		}
	}else{
		header("Location: ../../index.php?=error");
		exit();
	}


?>