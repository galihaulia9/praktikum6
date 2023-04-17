<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<div class="container">
		<h3>FORM LOGIN</h3>
		<form method="POST" action="loginhasil.php">
			<table width="400" align="center" cellpadding="2" cellspacing="2">
				<tr>
					<td width="130">Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td width="130">Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="btnLogin" value="Login">
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
		</div>
	</center>
</body>
</html>