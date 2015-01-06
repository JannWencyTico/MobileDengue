<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_display extends CI_Model
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

	public function list_district()
	{
		$sql = "CALL list_district()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function list_sub_district()
	{
		$sql = "CALL list_sub_district()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function list_barangay()
	{
		$sql = "CALL list_barangay()";
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
	
}