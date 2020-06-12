<?php
	$conn = mysqli_connect("localhost", "root", "root", "activity");
?>
<html>
<body bgcolor="#ffffff" style="text-align:left; color:#000;">
<p align=center><h1></h1>
<?php
	$sql = "INSERT INTO people (firstname, lastname, email) VALUES ('pravinkumar', 'gaikwad', 'pravinkumargaikwad@gmail.com')";
	if(mysqli_query($conn, $sql)){
		echo "Insert Successful<br>";
	}
	$sql = "SELECT id, firstname, lastname, email FROM people WHERE lastname = 'gaikwad'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "ID: " . $row["id"]. " | Name: " . $row["firstname"]. " " . $row["lastname"]. " | Email: " . $row["email"]. "<br>";
		}
	} else {
		echo "Search failed";
	}
?><h1></h1>
<?php
	$sql = "UPDATE people SET email='pravin.g@gmail.com' WHERE firstname = 'pravinkumar'";
	if(mysqli_query($conn, $sql)){
		echo "Update Successful";
	}
?><h1></h1>
<?php
	$sql = "SELECT id, firstname, lastname, email FROM people WHERE lastname = 'gaikwad'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		echo "Search Successful<br>";
		while($row = $result->fetch_assoc()) {
			echo "ID: " . $row["id"]. " | Name: " . $row["firstname"]. " " . $row["lastname"]. " | Email: " . $row["email"]. "<br>";
		}
	} else {
		echo "Search failed";
	}
?><h1></h1>
<?php
	$sql = "DELETE FROM people WHERE firstname= 'pravinkumar'";
	if(mysqli_query($conn, $sql)){
		echo "Deleted";
	}else{
		echo "failed";
	}
?>
</body>
</html>