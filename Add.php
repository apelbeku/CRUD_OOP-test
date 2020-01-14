<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="Process.php?action=add">
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td>
					<textarea name="address"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Add your data"></td>
			</tr>
		</table>
	</form>
</body>
</html>