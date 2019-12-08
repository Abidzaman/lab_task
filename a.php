<?php 
session_start();
$unerr=$pwerr=$fail="";
if (isset($_POST['submit'])) {
	$un=$_POST['uname'];
	$pw=$_POST['password'];
	//$_SESSION['u'] = $un;
if ($un=="")
{
	$unerr="Please provide username";
}
elseif ($pw=="") {
	$pwerr="Please provide a password";
}
else
{
      if($_POST['uname']==$_POST['password'])
      {
      	$uname=$_POST['uname'];	
      	$_SESSION['uname'] = $uname;
         header('location: Admin.php');
      }
      else
      {
      	         echo "Username and password doesnt match";
      }
}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Moviebee | Login</title>
</head>
<body bgcolor="#cceeff">
	<form method="POST" action="">
		<div align="center" style="background-color: lightblue">
			<table>
				<tr>
					<td><h1>Welcome</h1> </td>
					
					
				</tr>

			</table>
			<br><br>
		</div>
<div align="center">
	<table>
		<tr align="center">
			<td><label><font color="red" ><?= $unerr; ?></font></label></td>
		</tr>
		<tr>
			<td><h2>Login</h2> </td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr align="center">
			<td><label><font color="red" ><?= $pwerr; ?></font></label></td>
		</tr>
		<tr>
			<td><h2>Password</h2></td>
			<td><input type="Password" name="password"></td>
		</tr>
		<tr>
			<td><a href="registration.php">Not yet a member</a></td>
			<td align="center"><input type="submit" name="submit"></td>
		</tr>
	</table>
	
</div>		
		
	</form>
</body>
</html>