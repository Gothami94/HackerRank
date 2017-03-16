<!-- database connection--->
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

    if(isset($_POST['submit'])) {
    //leave post request
        $name = $_POST['event_name'];
        $provider = $_POST['event_provider'];
        $category = $_POST['category'];
        $date = $_POST['e_date'];
        $stime = $_POST['start_time'];
        $etime = $_POST['end_time'];


        $sql = mysqli_query($conn, "INSERT INTO event (event_name,event_provider,category,e_date,start_time,end_time) VALUES ('$name','$provider','$category','$date','$stime','$etime')");

        header("Location: index.php");

    }
    $conn->close();

?>