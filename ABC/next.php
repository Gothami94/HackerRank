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


<?php

    $link=mysqli_connect("localhost", "root", "", "ABC");
	//mysql_select_db("ABC") or die("cannot select DB");
    // Check connection

	if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
	/*$ID=$_GET['ID'];
	
	$sql="SELECT * FROM Student WHERE ID = '$ID'";
	$result=mysql_query($sql);
	$rows=mysql_fetch_array($result);
    // update

    $sql="UPDATE Student SET name='name', address='address', email='email', tele='tele' WHERE ID='ID'" or die ("this stuffed up");
		$result=mysql_query($sql) or die ("this stuffedup");


		// if successfully updated. 
		if($result){
		echo "Record added successfuly";
		echo "<BR>";
		echo "<a href='index.php'>View result</a>";
		}

		else {
		echo "ERROR";
		}*/

    ?>



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
      <h3>Edit Student</h3>
     
      <form method="post" action="edit.php" name="addStudent">
		   <div class="form-group">
			  <label>Student Name</label><br>
			  <input type="text" class="form-control" id="name" name="name" value="<?php echo $rows['name']; ?>">
		   </div>
		   <div class="form-group">
			  <label>Address</label><br>
			  <input type="text" class="form-control" id="address" name="address" value="<?php echo $rows['address']; ?>">
		   </div>
		   <div class="form-group">
			  <label>Email</label><br>
			  <input type="text" class="form-control" id="email" name="email" value="<?php echo $rows['email']; ?>">
		   </div>
		   <div class="form-group">
			  <label>Telephone</label><br>
			  <input type="text" class="form-control" id="tele" name="tele" value="<?php echo $rows['tele']; ?>">
		   </div>
		   <a href="index.php" class="button11">Edit</a>
		   <a href="index.php" class="button22">Cancel</a>
		   
		   
		</form>
      
    </div>
	
    <div class="col-xs-4 sidenav">
    </div>
	
  </div>
</div>


</body>
</html>
