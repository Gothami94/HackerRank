<?php
//start the session
session_start();
//mysql_connect(localhost,"root","");
//mysql_select
//database connection 
$user_name="Voice_cms";
$local="localhost";
$pass="secretpassword";
$db_name="Voice";
$connection=mysqli_connect($local,$user_name,$pass,$db_name);
function db_connect(){
	global $connection;
	if(mysqli_connect_errno()){
	die("database connection failed");
	}
}

//database close function
function db_cloce(){
	global $connection;
	mysqli_close($connection);
}

//redirection function
function redirect_to($new_location){
header("Location: ".$new_location);
exit;
}

//display session messages
function display_session_message(){
	if (isset($_SESSION["Message"])){
		$Message1=$_SESSION["Message"];
		echo $_SESSION["Message"];
		
	}
	
	$_SESSION["Message"]=null;
}

?>
