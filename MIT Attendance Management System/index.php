<?php
	session_start();
?>	
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
	<head>
		<title> MIT : Attendance Management System</title>
		<link href="style.css" rel="stylesheet">
		<link rel="Shortcut icon" href="favicon_250x250.ico" type="image/x-icon" />
		<link href="w3.css" rel="stylesheet">
		<!--<script type="text/javascript" src="jquery.js"></script>-->
		<script type="text/javascript" src="style.js"></script>
	</head>
	<body>
		<div id="loadscreen" class="w3-white">
			<div id="screenhead"><img id="head" src="favicon_250x250.ico"></div>
			<div id="spinner"></div>
		</div>
		<Header class="w3-blue">
			G.S.Mandal's Maharashtra Institute of Technology, Aurangabad | College Website | Developer's Info
		</Header>
		<div id="container">
			
			<div id="heading">
				<div id="title">
					<div id="imgtitle">
						<img id="titleimg" src="images/mitsymb.png">
					</div>
					<div id="txtitle">
						<div id="title1" class="w3-hover-blue">Maharashtra Institute of Technology </div>
						<div id="title2" >Attendance Management System</div>
					</div>
					<hr>
				</div>
			</div>
			<div id="content">
				<div id="navmenu">
					<button id="signinbutton" onclick="signin()" class="loginf w3-round-large w3-hover-grey w3-blue">Sign In</button>
					<button id="signupbutton" onclick="signup()" class="loginf w3-round-large w3-hover-grey w3-blue">Sign Up</button><br><br>
					<div id="signinform" class="w3-round-xlarge">
						<br><form action="includes/login/login.inc.php" method="POST">
							<input id="profileform4" class="w3-round-large" type="text" name="siuid" placeholder="Unique ID / Staff ID"><br><br>
							<input id="profileform4" class="w3-round-large" type="password" name="sipswd" placeholder="Password"><br><br>
							<button id="submit1" class="w3-round-large w3-hover-green w3-blue" name="signinsubmit">Submit</button>
						</form><hr><br>
					</div><br>
					<div id="signupform" class="w3-round-xlarge">
						<br><form action="includes/signup/signup.inc.php" method="POST">
							<div class="inputdesc1 w3-hover-grey w3-round-large">Enter Your First Name<br>
							<input id="profileform4" class="w3-round-large w3-hover-blue" type="text" name="first" placeholder="First Name"><br></div><br>
							<div class="inputdesc1 w3-hover-grey w3-round-large">Enter Your Last Name
							<input id="profileform4" class="w3-round-large w3-hover-blue" type="text" name="lname" placeholder="Last Name"><br></div><br>
							<!--<div class="inputdesc1 w3-hover-grey w3-round-large">Select Gender
							<select id="profileform4" class="w3-round-large w3-hover-blue" name="sex">
								<option value=""></option>
								<option value="1">Male</option>
								<option value="2">Female</option>
								<option value="3">Other</option>
							</select><br></div><br>
							<div class="inputdesc1 w3-hover-grey w3-round-large">Select User Type
							<select id="profileform4" class="w3-round-large w3-hover-blue" name="utp">
								<option value=""></option>
								<option value="1">Student</option>
								<option value="2">Teacher</option>
								<option value="3">Administrator</option>
							</select><br></div><br>
							--><div class="inputdesc1 w3-hover-grey w3-round-large">Enter Unique ID / Staff ID
							<input id="profileform4" class="w3-round-large w3-hover-blue" type="text" name="uin" placeholder="Unique ID / Staff ID"><br></div><br>
							<!--<div class="inputdesc1 w3-hover-grey w3-round-large">Enter Your Date of Birth
							<input id="profileform4" class="w3-round-large w3-hover-blue" type="date" name="bdate" placeholder="Birth Date"><br></div><br>
							<div class="inputdesc1 w3-hover-grey w3-round-large">Select Academic year
							<select id="profileform4" class="w3-round-large w3-hover-blue" name="year">
								<option value=""></option>
								<option value="1">First Year</option>
								<option value="2">Second Year</option>
								<option value="3">Third Year</option>
								<option value="4">Final Year</option>
							</select><br></div><br>
							<div class="inputdesc1 w3-hover-grey w3-round-large">Select Branch
							<select id="profileform4" class="w3-round-large w3-hover-blue" name="brch">
								<option value=""></option>
								<option value="AGR">Agricultural Engineering</option>
								<option value="ETC">Electronics & Telecommunication Engineering</option>
								<option value="MCH">Mechanical Engineering</option>
								<option value="CSE">Computer Science and Engineering</option>
								<option value="CVE">Civil Engineering</option>
								<option value="PPE">Plastics and Polymer Engineering</option>
							</select><br></div><br>
							<div class="inputdesc1 w3-hover-grey w3-round-large">Enter Your Class Roll Number
							<input id="profileform4" class="w3-round-large w3-hover-blue" type="text" name="rollno" placeholder="Roll No"><br></div><br>
							--><div class="inputdesc1 w3-hover-grey w3-round-large">Enter your New Password
							<input id="profileform4" class="w3-round-large w3-hover-blue" type="password" name="pswd" placeholder="Password"><br></div><br>
							<button id="submit1" class="w3-round-large w3-hover-red w3-blue" name="signupsubmit">Submit</button><br><br>
						</form><hr><br>
					</div><br>
				</div>
			</div>
		</div>
		<footer class="w3-hover-white w3-blue">
			Developed By : Sankalp Pol
		</footer>
</body>
</html>
