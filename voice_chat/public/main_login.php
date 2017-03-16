<?php include("../includes/login_header.php");?>
<div id="navigation_rside">
<table border="0" width="100%" align="right" height="100%" >
	<tr>
	<td align="center">
	<h3><font face="calibri" size="200" valign="bottom" color="#663399">Sign up</font></h3>
	</td></tr>
	
	<tr><td>
	<form action="add_mamber.php" method="post">
		<table width="80%">
	<tr height="20px">
	<td><h3><font face="calibri" color="#696969">First Name</font></h3></td>
	<td><input type="text" name="First_Name" placeholder="Type your first name here" style="font-size:10pt;width:300px;color:#BA55D3;background-color:#F8F8FF;padding:3px"/></td>	
	</tr>
	
	<tr height="20px">
	<td><h3><font face="calibri" color="#696969">Last Name</font></h3></td>
	<td><input type="text" name="Last_Name" placeholder="Type your last name here" style="font-size:10pt;width:300px;color:#BA55D3;background-color:#F8F8FF;padding:3px"/></td>	
	</tr>
	
	<tr height="20px">
	<td><h3><font face="calibri" color="#696969">E-mail</font></h3></td>
	<td><input type="text" name="Email" placeholder="Type your email here" style="font-size:10pt;width:300px;color:#BA55D3;background-color:#F8F8FF;padding:3px"/></td>	
	</tr>
	
	<tr height="20px">
	<td><h3><font face="calibri" color="#696969">Contact Number</font></h3></td>
	<td><input type="text" name="Cnumber" placeholder="Type your contact number here" style="font-size:10pt;width:300px;color:#BA55D3;background-color:#F8F8FF;padding:3px"/></td>	
	</tr>
	
	<tr height="20px">
	<td><h3><font face="calibri" color="#696969">Password</font></h3></td>
	<td><input type="password" name="Password" placeholder="Type your password here"  style="font-size:10pt;width:300px;color:#BA55D3;background-color:#F8F8FF;padding:3px"/></td>	
	</tr>
	
	<tr height="20px">
	<td><h3><font face="calibri" color="#696969">Re-enter the Password</font></h3></td>
	<td><input type="password" name="password" placeholder="re-enter your password here" style="font-size:10pt;width:300px;color:#BA55D3;background-color:#F8F8FF;padding:3px"/></td>	
	</tr>
	
	<tr height="20px">
	<td><h3><font face="calibri" color="#696969">Birthday</font></h3></td>
	<td><input name="Date_of_Birth" type="date" value="" placeholder="yyyy-mm-dd" style="font-size:10pt;width:300px;color:#BA55D3;background-color:#F8F8FF;padding:3px" /></td><br/>
	
	</tr>
	
	<tr height="20px">
	<td><h3><font face="calibri" color="#696969">Gender</font></h3></td>
	<td><input type="radio" name="Gender" value="0"/>
					<font face="calibri" color="#BA55D3">Female</font>
					<input type="radio" name="Gender" value="1"/>
					<font face="calibri" color="#BA55D3">Male</font>
	</td>	
	</tr>
		</table>
		
	<tr align="right">
	
	<td><input type="submit" name="Sign" value="Sign Up" style="font-size:20pt;width:300px;color:white;background-color:4B0082;padding:3px"/></td>
	
	
	</tr>
	</form>	
	</td></tr>
	
</table>
</div>


<div id="navigation_lside">
<?php //style="list-style-type:disc" #5F9EA0?>


<div id="ul">
  <li><h4><i><font face="consolas" color="white">Listen your friend's voice from friends in News Feed.</font></i></h4></li><br>
  <li><h4><i><font face="consolas" color="white">Share interresting things in your life on your Time Line.</font></i></h4></li><br>
  <li><h4><i><font face="consolas" color="white">Find your friends or what you are looking for with VoiChat Search.</font></i></h4></li><br>
  <li><h4><i><font face="consolas" color="white">Chat with your friends with your own voice.</font></i></h4></li><br>
</div>
	<img src="images/01.png" align="middle" valign="bottom" style="width:300px;height:200px;">
	
</div> 



</head>

</html>
