<?php 
require __DIR__. '/Database.php';

use projectOOP\Database;

// include 'Database.php';

$db 	= new Database();
$data 	= $db->show_data();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <a href="Add.php">Add User</a>
 <table border="1">
 	<tr>
 		<th>No</th>
 		<th>Name</th>
 		<th>Email</th>
 		<th>Address</th>
 		<th>Action</th>
 	</tr>

 	<?php 
 	$no 	= 1;
 	foreach($data as $data_user) {
 	?>
 	<tr>
 		<td><?= $no++; ?></td>
 		<td><?= $data_user['name']; ?></td>
 		<td><?= $data_user['email']; ?></td>
 		<td><?= $data_user['address']; ?></td>
 		<td>
 			<a href="Edit.php?id=<?= $data_user['id']; ?>action=edit">Edit</a>
 			<a href="Process.php?id=<?= $data_user['id']; ?>&action=delete">Delete</a>
 		</td>
 	</tr>
 	<?php 
 	}
 	?>
 </table>

</body>
</html>