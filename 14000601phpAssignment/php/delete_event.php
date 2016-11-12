<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "eventreg";

	$conn = mysqli_connect($hostname, $username, $password, $database);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$id = $_GET['id'];
	$result = false;
	$result = mysqli_query($conn,"DELETE FROM event WHERE event_id=$id");

	header("Location: index.php");


	$conn->close();
?>


