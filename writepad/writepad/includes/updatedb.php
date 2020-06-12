<?php
	require($_SERVER['DOCUMENT_ROOT']."/writepad/includes/database/dbh.inc.php");
	$linetext = $_GET["string"];
	$index = $_GET["id"];
	$stmt = $conn->prepare("SELECT wtext FROM writepadlines WHERE serial_id = ?");
	$stmt->bind_param("i", $index);
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();
	if(mysqli_num_rows($result) != 1){
		die("OOPS! An Error Occured");
	}else{
		$stmt = $conn->prepare("UPDATE writepadlines SET wtext = ? WHERE serial_id = ?");
		$stmt->bind_param("si", $linetext, $index);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();
		echo $linetext;
	}
?>