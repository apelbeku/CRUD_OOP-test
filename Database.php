<?php 
	namespace projectOOP;

	class Database 
	{
		public $server	= "localhost";
		public $user	= "root";
		public $pass	= 1234;
		public $db 		= "crud_oop";
		public $connect = "";

// menghubungkan ke database
		public function __construct(){
			$this->connect = mysqli_connect($this->server, $this->user, $this->pass, $this->db);

			// if($connect){
			// 	echo "You're connected";
			// } else {
			// 	echo "Failed to connecting";
			// }

			if(mysqli_connect_error()){
				echo "You're failed to connecting";
			}

			// $this->connect = $connect;
		}

// menampilkan data
		public function show_data() {
			// $sql	= "SELECT * FROM user";
			$result	= mysqli_query($this->connect, 'SELECT * FROM user');
			while($row = mysqli_fetch_array($result)) {
				$data[] = $row;
			}
			return $data;
		}

// memasukkan data
		public function insert_data($name, $password, $email, $address)
		{
			mysqli_query($this->connect, "INSERT INTO user (name, password, email, address) VALUES ('$name', '$password', '$email', '$address')");
		}

// mengambil id 
		public function get_by_id($id_user)
		{
			$query = mysqli_query($this->connect,"SELECT * FROM user where id='$id_user'");
			return $query->fetch_array();
		}

// edit data
		public function update_data($name, $password, $email, $address, $id_user)
		{
			mysqli_query($this->connect, "UPDATE user SET name='$name', password='$password', email='$email', address='$address' WHERE id='$id_user'");
		}

// menghapus data
		public function delete($id)
		{
			mysqli_query($this->connect, "DELETE FROM user WHERE id='$id'");
		}

	}
 ?>