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
		<script src="plugins/custom/asyncmgr.js"></script>
		<link rel="shortcut icon" href="resources/images/icon/favicon4.ico" />
		<title>WomenCentral</title>
	</head>
	<body onload="" onresize="">
		<header>
			<div>
				<h1>Writepad</h1>
			</div>
		</header>
		<div id="c-container">
			<div id="writepad">
				<?php
					require($_SERVER['DOCUMENT_ROOT']."/writepad/includes/database/dbh.inc.php");
					$stmt = $conn->prepare("SELECT serial_id, wtext FROM writepadlines");
					$stmt->execute();
					$result = $stmt->get_result();
					if(mysqli_num_rows($result) >= 1){
						while($row = mysqli_fetch_assoc($result)){
							echo "<div id=\"lineno-".$row["serial_id"]."\" class=\"linesdiv\" onclick=\"getthisline(".$row["serial_id"].")\">".$row["wtext"]."</div><br>";
						}
					}
					$stmt->close();
				?>
			</div>
			<div id="writepadeditor">
				<input type="text" id="linefield" class="linefields" name="linefield" onkeyup="maininputchanged();">
			</div>
		</div>
		<footer>
		</footer>
	</body>
</html>