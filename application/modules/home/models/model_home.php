<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_home extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function select_themes() {
        $this->db->select('*');
        $this->db->from('table_site');
        return $this->db->get();
    }

}