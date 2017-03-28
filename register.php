<?php require_once('config.php'); ?>
<?php require_once('functions.php'); ?>
<?php 
class ServiceApiregister{

	private $db;

	public function __construct(){
		
		$this->db = new createConnection;
		$this->db->connectToDatabase();
	}

	public function __destruct(){

		 $this->db->close();
	}

	public function register()
	{

	}



}

$api = new ServiceApiLogin();
$api->register();

?>