<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_report extends CI_Model
{
	public function __construct()
	{
		$config['hostname'] = "localhost";
		$config['username'] = "root";
		$config['password'] = "";
		$config['database'] = "dengue";
		$config['dbdriver'] = "mysql";
		$config['dbprefix'] = "";
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;
		$config['cache_on'] = FALSE;
		$config['cachedir'] = "";
		$config['char_set'] = "utf8";
		$config['dbcollat'] = "utf8_general_ci";
		
		$this->load->database($config);
	}

	public function send_report($report)
	{
		$sql = "CALL report(
								 '".$report['lastname']."',
								 '".$report['firstname']."',
								 '".$report['middlename']."',
								 '".$report['age']."',
								 '".$report['gender']."',
								 '".$report['date_start']."',
								 '".$report['date_end']."',
								 '".$report['date_admitted']."',
								 '".$report['brgy']."',
								 '".$report['type']."',
								 '".$report['classification']."',
								 '".$report['outcome']."',
								 '".$report['sender_id']."')";
		$this->db->query($sql);
		$this->db->close();
	}
}