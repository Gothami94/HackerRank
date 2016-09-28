<?php include("../includes/functions.php");?>

<?php echo db_connect(); 
global $connection;
?>

<?php
if (isset($_POST['Sign Up'])){
	$First_Name=$_POST['fname'];
	$Last_Name=$_POST['lname'];
	$Email=mysqli_real_escape_string($connection,$_POST['mail']);
	$Contact=$_POST['Cnumber'];
	$Gender=$_POST['gender'];
	$Day=$_POST['day'];
	$Month=$_POST['month'];
	$Year=$_POST['year'];
	$Image="No";
	$Reg_Date=date("y-m-d");
	$Last_login=date("y-m-d");
	$Status="not yet";
	$Password=mysqli_real_escape_string($connection,$_POST['password']);
	$get_mail_query="SELECT * FROM User WHERE mail='$Email' ";
	$result_check_mail=mysqli_query($connection,$get_mail_query);
	if(mysqli_num_rows($result_check_mail)==1){
		$_SESSION["Message"]= "This Email already exists";
		redirect_to("Error_Ditect_Page.php");
	}
	else{
		$add_member_query="INSERT INTO user ( ";
		$add_member_query.="fname, ";
		$add_member_query.="lname, ";
		$add_member_query.="mail, ";
		$add_member_query.="Cnumber, ";
		$add_member_query.="gender, ";
		$add_member_query.="day, ";
		$add_member_query.="month, ";
		$add_member_query.="year, ";
		$add_member_query.="Image, ";
		$add_member_query.="Reg_Date, ";
		$add_member_query.="Last_login, ";
		$add_member_query.="Status, ";
		$add_member_query.="password ) ";
		$add_member_query.="VALUES ( ";
		$add_member_query.="'$First_Name', ";
		$add_member_query.="'$Last_Name', ";
		$add_member_query.="'$Email', ";
		$add_member_query.="'$Contact', ";
		$add_member_query.="$Gender, ";
		$add_member_query.="'$Day', ";
		$add_member_query.="'$Month', ";
		$add_member_query.="'$Year', ";
		$add_member_query.="'$Image', ";
		$add_member_query.="'$Reg_Date', ";
		$add_member_query.="'$Last_login', ";
		$add_member_query.="'$Status', ";
		$add_member_query.="'$Password' ";
		$add_member_query.=") ";
		
		$result_add_member=mysqli_query($connection,$add_member_query);
		
		if(!$result_add_member){
			$_SESSION["Message"]= "Add member fail";
			redirect_to("Error_Ditect_Page.php");
		}
		else{
			$_SESSION["Message"]=  "Welcome to the VoiChat ". $First_Name;
			redirect_to("My_Account.php");
		}
	}
	


}

?>


<?php echo db_close(); ?>

