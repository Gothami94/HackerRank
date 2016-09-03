<html lang="en">
<head>
  <title>ABC School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="css/reg.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
  
		<center><img src="image/logo.png" align="left" class="img-responsive" alt="logo"  width="50" height="50"><h1>ABC School</h1></center>

    
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-xs-4 sidenav">  
    </div>
	
    <div class="col-xs-4 text-left"> 
      <h3>Add Student</h3>
     
      <form method="post" action="reg.php" name="addStudent">
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
		   <button type="submit" onclick="return(submitlogin());" name="submit" class="button">Register</button>
		   
		   
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
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ABC";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT ID, name, address, email, tele FROM Student";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["ID"]." "."</td><td>".$row["name"]." "."</td><td>".$row["address"]." "."</td><td>".$row["email"]." "."</td><td>".$row["tele"]." "."</td><td>";echo '<a href="next.php" class="button1" >Edit</a>'. "</td><td>"; echo '<a href="next.php" class="button2">Delete</a>'."</td></tr>";
			}
			echo "</table></center>";
		} else {
			echo "0 results";
		}
		$conn->close();
	?> 
   
  </div>
  </div>




</body>
</html>
