<?php

class Country_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function get_district() {
        $this->db->select('dist_id, dist_name');
        $query = $this->db->get('district');
        echo "district";
        $district = array();

        if ($query->result()) {
            foreach ($query->result() as $dist) {
                $district[$dist->dist_id] = $dist->dist_name;
            }
            return $district;
        } else {
            return FALSE;
        }
    }

}
?>