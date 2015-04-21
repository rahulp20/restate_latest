<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view("front_templates/header.php");
        $this->load->view("front/main.php");
        $this->load->view("front_templates/footer.php");
    }
    
    function details() {
        $this->load->view("front_templates/header.php");
        $this->load->view("front/details.php");
        $this->load->view("front_templates/footer.php");
    }

}
