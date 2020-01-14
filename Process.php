<?php 
require __DIR__. '/Database.php';

use projectOOP\Database;

// include 'Database.php';

$db 	= new Database();

$action = $_GET['action'];
if($action == "add")
{
	$db->insert_data($_POST['name'], $_POST['password'], $_POST['email'], $_POST['address']);
	header('location:Index.php');
} 
elseif($action == "edit")
{
	$db->update_data($_POST['name'], $_POST['password'], $_POST['email'], $_POST['address'], $_POST['id']);
	header('location:Index.php');
}
elseif ($action == "delete") 
{
	$db->delete($_GET['id']);
	header('location:Index.php');
}




 ?>