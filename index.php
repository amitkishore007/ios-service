<?php require_once('config.php'); ?>
<?php require_once('functions.php'); ?>
<?php 
class ServiceApi{

	private $db;

	public function __construct(){
		$this->db = new createConnection;
		$this->db->connectToDatabase();
	}




}

$api = new ServiceApi();

$api->login();

?>