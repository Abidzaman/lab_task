<?php 
session_start();
 ?>
 <html>
<head>
<title>ADMIN</title>
</head>
<body>
<br>
<font size="2" face="Arial Black" >
<table cellspacing="20">
<tr>
<td>  </td>


<td></td>
<td></td>
<td><h1>WELCOME  <?php echo $_SESSION['uname']; ?></h1></td>
</tr>
</table>
<br>

<table width=100% bgcolor="#000000" align="center" border="0">
        <tr>
			<td><a href= "add.php"/><input type=button value='ADD EMPLOYEE'></a></td>
			<td><a href= ""/><input type=button value='DELETE EMPLOYEE'></a></td>
			<td><a href= ""/><input type=button value='DELETE COUSTOMER'></a></td>
			<td><a href= ""/><input type=button value='TOTAL SELL'></a></td>
			<td><a href= "Login.php"/><input type=button value='LOG OUT'></a></td>
			<hr>
        </tr>
    </table>
	
</body>
</html>

