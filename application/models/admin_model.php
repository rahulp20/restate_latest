<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function check_userlogin($details) {
        extract($details);
        $password = md5($password);
        $this->db->where(array("email" => $email, "password" => $password, "status" => 1));
        $result = $this->db->get('users');

        if ($result->num_rows() == 1) {
            return $result->result();
        } else {
            return FALSE;
        }
    }

    function delete_section($id) {
        if ($this->db->delete('property_sections', array('id' => $id))) {
            return true;
        } else {
            return FALSE;
        }
    }

}
