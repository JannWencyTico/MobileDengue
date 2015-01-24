<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Smodel extends CI_Model {
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

    public function get_results($search_term='default')
    {
		// Use the Active Record class for safer queries.
		$this->db->select('*');
		$this->db->from('patient');
		$this->db->like('name',$search_term);
		$this->db->or_like('age',$search_term);
		$this->db->or_like('gender',$search_term);
		// $this->db->or_like('brgy',$search_term);
		//  $this->db->or_like('civil_status',$search_term);

		// Execute the query.
		$query = $this->db->get();

		// Return the results.
		return $query->result_array();
    }

}
