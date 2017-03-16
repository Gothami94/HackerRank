  <?php

    $link = mysqli_connect("localhost", "root", "", "ABC");

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    $name = mysqli_real_escape_string($link, $_POST['name']);

    $address  = mysqli_real_escape_string($link, $_POST['address']);

    $email= mysqli_real_escape_string($link, $_POST['email']);
	
	$tele= mysqli_real_escape_string($link, $_POST['tele']);

    // attempt insert

    $sql = "INSERT INTO Student (name, address, email, tele) VALUES ('$name', '$address', '$email', '$tele')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";
		echo "<a href='index.php'>View result</a>";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }
    // close connection

    mysqli_close($link);

    ?>

