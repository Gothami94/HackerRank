<?php include("../includes/functions.php");?>

<html>
<head>
<link href="../public/css/styl.css" media="all" rel="stylesheet" type="text/css" />
<title>VoiChat Login or Sing Up</title>


<div id="navigation_up1">
<table border="0" width="100%" height="10%" >
	<tr>
		<td rowspan="3" width="60%">
		
		<?php //<font face="calibri" color="white" align="center"></font><br> ?>
		<img src="../public/images/01.png" align="center" valign="top" style="width:220px;height:220px;margin-top:-40px;">
		</td>	
		<form action="../public/login_confirm.php" method="post">
		<td><font face="calibri" color="white" width="60%"><b>Email or Phone</b></font>
		<input type="text" name="Email" placeholder="Email or Phone         "/><br>
		<input type="checkbox" name="log" value=" "/>
		<font face="calibri" color="white">Keep me logged in</font></td></tr>
		
		<tr><td><font face="calibri" color="white" width="60%"><b>Password</b></font>
		<input type="password" name="Password" placeholder="Password              "/><br>
		<font face="calibri" color="white">Forgot your password?</font></td></tr>
		
		<tr><td><input type="submit" name="login" value="Log in" style="font-size:15pt;color:white;width:150px;background-color:#4B0082;padding:3px"/></td>
		</form>	
	</tr>
	
	<tr>
		<td align="right" >
		<?php display_session_message();?>
		</td>	
	</tr>		
</table>
</div>
