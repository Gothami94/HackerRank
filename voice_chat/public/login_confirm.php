<?php include("../includes/functions.php");?>

<?php echo db_connect(); ?>

<?php 
if (isset($_POST['login'])){
	global $connection;
	$Email=mysqli_real_escape_string($connection,$_POST['Email']);
	$Password=mysqli_real_escape_string($connection,$_POST['Password']);
	
	$login_query= "SELECT * FROM User WHERE Email='$Email' AND Password='$Password' LIMIT 1";
	$result_login=mysqli_query($connection,$login_query);
	$check=mysqli_num_rows($result_login);
	if($check==1){
		
		redirect_to("My_Account.php");
		
	}
	else{
		$_SESSION["Message"]="Login fail invalid email or 'password";
		redirect_to("main_login.php");
		
	}
}
?>

<?php echo db_close(); ?>

