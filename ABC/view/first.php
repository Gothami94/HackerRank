<?php
	include("../config/connect.php");
	include('../controller/siteController.php');
	$pdo=connect();
?>

<html lang="en">
<head>
  <title>ABC School</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
  	<link href="../css/reg.css" media="all" rel="stylesheet" type="text/css" />
</head>
	<body>

		<nav class="navbar navbar-default">
		  <div class="container-fluid">

				<center><img src="../image/logo.png" align="left" class="img-responsive" alt="logo"  width="100" height="60"><h1>ABC School</h1></center>


		  </div>
		</nav>

		<div class="container-fluid text-center">
		  <div class="row content">
			<div class="col-xs-4 sidenav">
			</div>

			<div class="col-xs-4 text-left">
			  <h3>Add Student</h3>

			  <form method="post" action="../controller/reg.php"  name="addStudent">
				   <div class="form-group">
					  <label>Student Name</label><br>
					  <input type="text" class="form-control" id="name" name="name" placeholder="name">
				   </div>
				   <div class="form-group">
					  <label>Address</label><br>
					  <input type="text" class="form-control" id="address" name="address" placeholder="address">
				   </div>
				   <div class="form-group">
					  <label>Email</label><br>
					  <input type="text" class="form-control" id="email" name="email" placeholder="email">
				   </div>
				   <div class="form-group">
					  <label>Telephone</label><br>
					  <input type="text" class="form-control" id="tele" name="tele" placeholder="telephone">
				   </div>
				   <button type="submit"  name="submit" class="button">Register</button>


				</form>

			</div>

			<div class="col-xs-4 sidenav">
			</div>
		  </div>
		</div>

		<div class="container-fluid text-center">
		  <div class="row content">

		   <center><h3>Show Student</h3></center>

				<center><table>
				  <tr style= "border-bottom:1px solid #000000;height:10px">
					<th style= "width:35px">ID</th>
					<th style= "width:200px">Name</th>
					<th style= "width:300px">Address</th>
					<th style= "width:250px">Email</th>
					<th style= "width:150px">Telephone</th>
					<th style= "width:60px">Edit</th>
					<th style= "width:60px">Delete</th>
				  </tr>


			<?php
				$sql = "SELECT * FROM student WHERE ID=:stdId";
				$query = $pdo->prepare($sql);
				$query->execute(array('stdId'=>$stdId));
				$rowCount = $query->rowCount();
				$results  = $query->fetchAll();

				if ($results->num_rows > 0) {
					// output data of each row
					foreach($result as $rs) {
						echo "<tr><td>".$rs["ID"]." "."</td><td>".$rs["name"]." "."</td><td>".$rs["address"]." "."</td><td>".$rs["email"]." "."</td><td>".$rs["tele"]." "."</td><td>";
						echo '<a href="next.php" class="button1" >Edit</a>'. "</td><td>";
						echo '<a href="next.php" class="button2">Delete</a>'."</td></tr>";
					}
					echo "</table></center>";
				} else {
					echo "0 results";
				}

			?>

		  </div>
		  </div>




	</body>
</html>
