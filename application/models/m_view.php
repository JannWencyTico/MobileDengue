<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_view extends CI_Model
{
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


	public function message($tempmsg_id)
	{
		// $sql = "CALL view_message(".$tempmsg_id.")";
		$sql = "SELECT 
				tempmsg.tempmsg_id,
		        tempmsg.name,
		        tempmsg.age,
		        tempmsg.gender,
		        tempmsg.diagnosis,

		        tempmsg.date_start,
		        tempmsg.date_end,
		        tempmsg.date_admitted,
		        DATE_FORMAT(tempmsg.date_start, '%b') AS DSMonth,
				DATE_FORMAT(tempmsg.date_start, '%e') AS DSDay,
				DATE_FORMAT(tempmsg.date_start, '%Y') AS DSYear,
		        DATE_FORMAT(tempmsg.date_end, '%b') AS DEMonth,
				DATE_FORMAT(tempmsg.date_end, '%e') AS DEDay,
				DATE_FORMAT(tempmsg.date_end, '%Y') AS DEYear,
		        DATE_FORMAT(tempmsg.date_admitted, '%b') AS DAMonth,
				DATE_FORMAT(tempmsg.date_admitted, '%e') AS DADay,
				DATE_FORMAT(tempmsg.date_admitted, '%Y') AS DAYear,
		        tempmsg.address,
		        tempmsg.brgy_id,
		        barangay.brgy_desc,
		        barangay.brgy_desc,
				barangay.latitude,
				barangay.longtitude,
				severity.severity_desc,
		        tempmsg.severity_id,
		        severity.severity_desc,
		        tempmsg.sender,
		        tempmsg.date_sent,
		        DATE_FORMAT(tempmsg.date_sent, '%b') AS DSendM,
				DATE_FORMAT(tempmsg.date_sent, '%e') AS DSendD,
				DATE_FORMAT(tempmsg.date_sent, '%Y') AS DSendY
        
				FROM tempmsg
			        
			    INNER JOIN barangay ON barangay.brgy_id = tempmsg.brgy_id
				INNER JOIN severity ON severity.severity_id = tempmsg.severity_id
			    
				WHERE tempmsg.tempmsg_id = ".$tempmsg_id."";

		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function request($request_id)
	{
		// $sql = "CALL view_request(".$request_id.")";
		$sql = "SELECT * FROM requests WHERE requests.request_id = ".$request_id."";
		
		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function code($username)
	{
		$sql = "SELECT * FROM account WHERE username = '".$username."'";

		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
}
