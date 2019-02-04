<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {


    public function __construct() {
        parent::__construct();
    }

    public function get_all() {
        $query = $this->db->get('geolocation');
        return $query->result_array();
    }

    public function get_fields($fields = '*') {
        $this->db->select($fields);
        $query = $this->db->get('geolocation');
        return $query->result_array();
    }
}

/* End of file Home_model.php */
