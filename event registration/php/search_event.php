<!---database connection-->
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

?>

<html lang="en">
<head>
	<title>Namel Malini Theatre</title>

	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="styleCSS.css">
	<style>
		h4 {
			color: red;
		}
	</style>

</head>
<body>


<div class="container-fluid text-center">
	<div class="row content">
		<div class="col-xs-4 sidenav">
		</div>

		<div class="col-xs-4 text-left">
			<h3>Searched Event</h3>
			<?php
				$term = mysqli_real_escape_string($conn,$_REQUEST['term']);
				if ($term) {

					$sql = "SELECT * FROM event WHERE event_name LIKE '%" . $term . "%'";
					$result = mysqli_query($conn, $sql);

					while ($row = $result->fetch_object()) {
						$id = $row->event_id;
						$name = $row->event_name;
						$provider = $row->event_provider;
						$category = $row->category;
						$date = $row->e_date;
						$stime = $row->start_time;
						$etime = $row->end_time;

					}
				}else{
					$id = "";
					$name = "";
					$provider = "";
					$category = "";
					$date = "";
					$stime = "";
					$etime = "";

					echo "<h4>Enter a event name to search!</h4>";
				}
			?>
			<form method = "post" action = "update_event.php" name = "updateEvent" >
				<div class="form-group" >
					<label > Event Id </label ><br >
					<input type = "text" class="form-control" id = "id" name = "event_id" value = "<?php echo $id; ?>" readonly >
				</div >
				<div class="form-group" >
					<label > Event Name </label ><br >
					<input type = "text" class="form-control" id = "name" name = "event_name" value = "<?php echo $name; ?>" readonly >
				</div >
				<div class="form-group" >
					<label > Event Provider </label ><br >
					<input type = "text" class="form-control" id = "provider" name = "event_provider" value = "<?php echo $provider; ?>" readonly >
				</div >
				<div class="form-group" >
					<label > Category</label ><br >
					<input type = "text" class="form-control" id = "category" name = "category" value = "<?php echo $category; ?>" readonly >
				</div >
				<div class="form-group" >
					<label > Date</label > <br >
					<input type = "text" class="form-control" id = "date" name = "e_date" value = "<?php echo $date; ?>" readonly >
				</div >
				<div class="form-group" >
					<label > Start time </label ><br >
					<input type = "text" class="form-control" id = "stime" name = "start_time" value = "<?php echo $stime; ?>" readonly >

				</div >
				<div class="form-group" >
					<label > End time </label ><br >
					<input type = "text" class="form-control" id = "etime" name = "end_time" value = "<?php echo $etime; ?>" readonly >

				</div >
				<a href = "index.php" class="button2" > Go back</a >

			</form >

		</div>

		<div class="col-xs-4 sidenav">
		</div>

	</div>
</div>


</body>
</html>
