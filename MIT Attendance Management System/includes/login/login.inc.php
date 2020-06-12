<?php
session_start();
	
	if(isset($_POST["signinsubmit"])){
		include_once "../connect/dbh.inc.php";
		$user_uniqueid = mysqli_real_escape_string($conn, $_POST['siuid']);
		$user_pswd = mysqli_real_escape_string($conn, $_POST['sipswd']);
		if(empty($user_uniqueid) || empty($user_pswd)){
			header("Location: ../../index.php?=incomplete_logindata");
			exit();
		}else{
				if(!preg_match('/^[0-9]*$/', $user_uniqueid)){
					header("Location: ../../index.php?=invalid_id");
					exit();
				}else{
					$sql="SELECT * FROM loginsystem WHERE usr_uid = '$user_uniqueid'";
					$result = mysqli_query($conn, $sql);
					$resultcheck = mysqli_num_rows($result);
					if($resultcheck != 1){
						header("Location: ../../index.php?=error");
						exit();
					}else if($resultcheck == 1){
						if($row = mysqli_fetch_assoc($result)){
							//$hashedpwdcheck = password_verify($user_pswd, $row['usr_pwd']);
							
							if($user_pswd != $row['usr_pwd']){
								header("Location: ../../index.php?=error");
								exit();
							}else if($user_pswd == $row['usr_pwd']){
								$_SESSION['u_ind'] = $row['usr_ind'];
								$_SESSION['u_uid'] = $row['usr_uid'];
								$_SESSION['u_fname'] = $row['usr_fname'];
								$_SESSION['u_lname'] = $row['usr_lname'];
								$_SESSION['u_sex'] = $row['usr_sex'];
								$_SESSION['u_dob'] = $row['usr_dob'];
								$_SESSION['u_year'] = $row['usr_yr'];
								$_SESSION['u_rno'] = $row['usr_rno'];
								$updt_flag = $row['usr_updt'];
								if($updt_flag == 0){
									header("Location: ../../user/update.php?=update%20user%20data");
									exit();
								}else if($updt_flag == 1){
									header("Location: ../../user/profile.php");
									exit();
								}
							}
						}
					}
				}
			}
		
	}else{
		header("Location: ../../index.php?=error");
		exit();
	}


?>