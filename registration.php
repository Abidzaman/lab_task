<?php 
session_start();
if (isset($_POST['submit'])) {
	if ($_POST['password']== $_POST['cpassword'] && $_POST['name']!="" && $_POST['password']!="" && $_POST['id']!="") {
		
		
	
$name=$_POST['name'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$id=$_POST['id'];
$radio=$_POST['admin'];


header('location: login.php');
}

}


else
{


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body bgcolor="#cceeff">
	<script type="text/javascript">
		function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["fid"].value;
  var u = document.forms["myForm"]["cpassword"].value;

  if (x == "" || y=="" || u=="") {
    alert("Name must be filled out");
    return false;
  }
}
	</script>
	<form action="a.php" method="POST" name="myForm" onsubmit="return validateForm()">
		<div style="background-color: lightblue"><fieldset >
			<legend>REGISTRATION</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="fid"></td>
				</tr>
				<tr>
					<td>Passwword</td>
					<td><input type="password" name="fpassword"></td>
				</tr>
				<tr>
					<td>Confirm password</td>
					<td><input type="password" name="cpassword"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="fname"></td>
					<tr>
						<td>user type</td>
						
					</tr>
					<tr>
						<td><input type="radio" name="admin" value="User">USER <input type="radio" name="admin" value="Admin">ADMIN</td>
					</tr>
					<tr>
						<td>
							phone number
						</td>
						<td>
							<input type="text" name="">
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="submit"></td>
						<td><a href="login.php">Sign In</a></td>
					</tr>
				</tr>
			</table>
		</fieldset>
	</form>
</div>

</body>
</html>
<?php 
}
 ?>