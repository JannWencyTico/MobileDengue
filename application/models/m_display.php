<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_display extends CI_Model
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
	}

	public function listBrgy()
	{
		// $sql = "CALL display_brgy()";
		$sql = "SELECT * FROM barangay";

		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}


	public function listSeverity()
	{
		// $sql = "CALL display_severity()";
		$sql = "SELECT * FROM severity";

		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function inbox()
	{
		// $sql = "CALL display_message()";
		$sql = "SELECT
				tempmsg.tempmsg_id,
			    name,
			    age,
			    gender,
			    diagnosis,
				barangay.brgy_desc,
				barangay.latitude,
				barangay.longtitude,
				severity.severity_desc,
			    sender,
			    date_sent

				FROM tempmsg

			    INNER JOIN barangay ON barangay.brgy_id 	= tempmsg.brgy_id
				INNER JOIN severity ON severity.severity_id = tempmsg.severity_id WHERE status = 0";

		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}

	public function reject_message($tempmsgID)
	{
		// $sql = "CALL reject_message(".$tempmsgID.")";
		$sql = "DELETE FROM tempmsg WHERE tempmsg_id = ".$tempmsgID."";

		$sQuery = $this->db->query($sql);
		$this->db->close();
	}

	public function reject_request($request_id)
	{
		// $sql = "CALL reject_request(".$request_id.")";
		$sql = "DELETE FROM requests WHERE request_id = ".$request_id."";

		$sQuery = $this->db->query($sql);
		$this->db->close();
	}

	public function request()
	{
		// $sql = "CALL display_request()";
		$sql = "SELECT * FROM requests WHERE status = 0";

		$sQuery = $this->db->query($sql);
		$this->db->close();

		return $sQuery->result_array();
	}
}