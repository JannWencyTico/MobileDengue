<?php

class City_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function get_district($district = null) {
        $this->db->select('suddist_id, suddist_name');

        if ($district != NULL) {
            $this->db->where('dist_id', $district);
        }

        $query = $this->db->get('sub_district');
        $sub_district = array();

        if ($query->result()) {
            foreach ($query->result() as $city) {
                $sub_district[$subdist->id] = $subdist->subdist_name;
            }
            return $sub_district;
        } else {
            return FALSE;
        }
    }

}
?>