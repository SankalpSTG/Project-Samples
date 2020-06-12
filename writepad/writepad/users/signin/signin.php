<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
	<head>
		<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link rel="stylesheet" href="plugins/w3/w3.css">
		<link rel="stylesheet" href="plugins/custom/custom_style.css">
		<link rel="stylesheet" href="plugins/custom/custom_kits.css">
		<script src="plugins/custom/custom_javascript.js"></script>
		<link rel="shortcut icon" href="resources/images/icon/favicon4.ico" />
		<title>WomenCentral</title>
	</head>
	<body onload="resonate();" onresize="resize();">
		<header>
			<div id="c-navbar" class="row">
				<div class="col-lg-3">
					<img src="resources/images/icon/icon.png" width="250px">
				</div>
				<div id="c-tab-container" class="col-lg-9">
					<div id="c-news-tab" class="c_tabs">
						<a href="news/news.php">News</a>
					</div>
					<div id="c-about-tab" class="c_tabs">
						<a href="about/about.php">About Us</a>
					</div>
					<div id="c-helpline-tab" class="c_tabs">
						<a href="helpline/helpline.php">Helpline</a>
					</div>
					<div id="c-statistics-tab" class="c_tabs">
						<a href="statistics/statistics.php">Statistics</a>
					</div>
					<div id="c-log-tab" class="c_tabs">
						<a href="users/signin/signin.php">Sign In</a> | <a href="users/signup/signup.php">Sign Up</a>
					</div>
				</div>
			</div>
		</header>
		<div id="c-margin"></div>
		<div id="c-container">
			<div id="container-overlay">
				<div id="signin-container">
					<div id="signin-header">
						<img src="resources/images/icon/icon.png" width="250px">
					</div>
					<hr>
					<div id="signin-container">
						<h1 style="color:#ccc; font-family:serif">Sign In</h1>
						<input id="inp-username" class="wc_input" type="text" name="inp_username" placeholder="Username"><br>
						<input id="inp-password" class="wc_input" type="password" name="inp_password" placeholder="Password"><br>
						<button id="inp-sub" class="wc_subs" onclick="useless();">Submit</button>
						
					</div>
					<div id="signin-footer">
					</div>
				</div>
			</div>
		</div>
		<footer>
		</footer>
	</body>
</html>