<?php 
require __DIR__. '/Database.php';

use projectOOP\Database;

// include 'Database.php';

$db = new Database();
$id_user = $_GET['id'];
// if (!empty($id_user)) {
	$data_user = $db->get_by_id($id_user);
// } else {
// 	header('location:Index.php');
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="Process.php?action=edit">
		<input type="hidden" name="id" value="<?= $data_user['id'] ?>">
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name" value="<?= $data_user['name'] ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" value="<?= $data_user['password']?>" ></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" value="<?= $data_user['email'] ?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td>
					<textarea name="address"><?= $data_user['address'] ?></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Edit your data"></td>
			</tr>
		</table>
	</form>
</body>
</html>