<?php
	require($_SERVER['DOCUMENT_ROOT']."/writepad/includes/database/dbh.inc.php");
	$linetext = $_GET["string"];	
	$stmt = $conn->prepare("SELECT MAX(serial_id) AS max_id FROM writepadlines");
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();
	if(mysqli_num_rows($result) != 1){
		die("OOPS! An Error Occured");
	}else{
		$row = mysqli_fetch_assoc($result);
		$currentline = $row["max_id"] + 1;
		$stmt = $conn->prepare("INSERT INTO writepadlines(wtext) VALUES(?)");
		$stmt->bind_param("s", $linetext);
		$stmt->execute();
		$stmt->close();
		$stmt = $conn->prepare("SELECT wtext FROM writepadlines WHERE serial_id = ?");
		$stmt->bind_param("i", $currentline);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();
		if(mysqli_num_rows($result) >= 1){
			while($row = mysqli_fetch_assoc($result)){
				echo "<div id=\"lineno-".$currentline."\" class=\"linesdiv\" onclick=\"getthisline(".$currentline.")\">".$row["wtext"]."</div><br>"; 
			}
		}
		
	}
?>