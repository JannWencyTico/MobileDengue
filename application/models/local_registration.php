<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Local_registration extends CI_Model {

	public function __construct()
	{
		$config['hostname'] = "localhost";
		$config['username'] = "root";
		$config['password'] = "";
		$config['database'] = "capstone";
		$config['dbdriver'] = "mysql";
		$config['dbprefix'] = "";
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;
		$config['cache_on'] = FALSE;
		$config['cachedir'] = "";
		$config['char_set'] = "utf8";
		$config['dbcollat'] = "utf8_general_ci";
		
		$this->load->database($config);

		//$this->load->database();
	}

	public function add_account($account)
	{
		// $sql = "CALL registration(
		// 						 '".$account['username']."',
		// 						 '".$account['password']."',
		// 						 '".$account['name']."',
		// 						 '".$account['mobilenum']."',
		// 						 '".$account['organization']."')";

		$sql = "INSERT INTO account
				(
					`username`,
					`password`,
					`name`,
					`mobilenum`,
					`organization`,
					`email`)
				VALUES
				(
					'".$account['username']."',
					'".$account['password']."',
					'".$account['name']."',
					'".$account['mobilenum']."',
					'".$account['organization']."',
					'".$account['email']."')";

		$this->db->query($sql);
		$this->db->close();
	}
}