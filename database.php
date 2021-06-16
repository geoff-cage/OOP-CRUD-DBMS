<?php 

	class Database {
		private $host = "localhost"; //we will add :3306 to display
		private $dbname ="crud";
		private $user ="root";
		private $password= "";
		public $conn;

		//get the database connection
		public function getConnection() {

			$this->conn = null;

			try{
				$this->conn = new PDO("mysql:host=" . $this->host . "dbname=" . $this->dbname, $this->user, $this->password);
			}catch(PDOException $e) {
				echo "Connection error:" . $e->getMessage();
			}
			return $this->conn;
		}
	}

 ?>