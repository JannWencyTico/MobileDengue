<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_view extends CI_Model
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

		//$this->load->database();
	}


	public function message($tempmsg_id)
	{
		$sql = "CALL view_message(".$tempmsg_id.")";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
}
