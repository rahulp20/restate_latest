<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
         $result = $this->common_functions->get_selected_record('*', 'property_info', array('is_featured' => 1 , 'status' => 1 ,'is_archive' => 0 ,'is_delete' => 0 ));
        
//         echo $this->db->last_query();
//         print_r($result);
//        exit;
         $this->view_data['featured_data'] = $result;
         $this->view_data['title'] = "Featurd Slider";
        $this->load->view("front_templates/header.php" , $this->view_data);
        $this->load->view("front/main.php");
        $this->load->view("front_templates/footer.php");
    }
    
    function details() {
        $this->load->view("front_templates/header.php");
        $this->load->view("front/details.php");
        $this->load->view("front_templates/footer.php");
    }

}
