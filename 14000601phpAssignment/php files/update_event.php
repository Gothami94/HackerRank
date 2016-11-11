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

	if(isset($_POST['save'])) {
		//leave post request
        $id = $_POST['event_id'];
		$name = $_POST['event_name'];
		$provider = $_POST['event_provider'];
		$category = $_POST['category'];
		$date = $_POST['e_date'];
		$stime = $_POST['start_time'];
		$etime = $_POST['end_time'];

		$sql = mysqli_query($conn, "UPDATE event SET event_name='$name', event_provider='$provider',category='$category', e_date='$date', start_time='$stime', end_time='$etime' WHERE event_id=$id");

		// if successfully updated. 

        header("Location: index.php");

	}
	$conn->close();
    ?>


