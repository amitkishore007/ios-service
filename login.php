<?php require_once('config.php'); ?>
<?php require_once('functions.php'); ?>
<?php 
class ServiceApiLogin{

	private $db;

public function __construct(){

		$this->db = new createConnection;
		$this->db->connectToDatabase();
	}
	public function login()
	{
		
		//check if $_POST is set 
		if (isset($_POST[])) 
		{
		

			// do all the logic 


		}
		sendResponse(400, 'Invalid request');
    	return false;
	
		// sendResponse(status_code,message);
		// send the status code with and message as json data

		// return false if the login fails

		// if login passes return true with the the json user info


	}



}

