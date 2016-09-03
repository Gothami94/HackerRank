<?php

    $link=mysqli_connect("localhost", "root", "", "ABC");
	//mysql_select_db("ABC") or die("cannot select DB");
    // Check connection

	if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
	$ID=$_GET['ID'];
	
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
		}

    ?>


