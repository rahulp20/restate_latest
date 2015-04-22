<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $view_data = array();

    function __construct() {
        parent::__construct();
        $this->view_data[] = "";
        if ($this->session->flashdata("system_message")) {
            $this->view_data['system_message'] = $this->common_functions->get_alert_html(
                    $this->session->flashdata("system_message_type"), $this->session->flashdata("system_message")
            );
        }
        $this->load->model('admin_model');
        $this->load->model('datatable_model');
        $this->load->model('insert_update');
    }

    function index() {
        if ($this->session->userdata('isLoggedIn')) {
            redirect('admin/home');
        }
        $this->view_data['title'] = "Login";
        $this->load->view("templates/header.php", $this->view_data);
        $this->load->view("admin/login.php");
        $this->load->view("templates/footer.php");
    }

    function featured_listing() {
        $this->view_data['menu_active'] = "featured_listing";
        $this->view_data['root_active'] = "listing";
        $this->common_functions->check_admin_logged_in();
        $this->view_data['title'] = "Featured Listing";
        $this->view_data['page'] = "Featured";
        $this->load->view("templates/header.php", $this->view_data);
        $this->load->view("admin/listing.php");
        $this->load->view("templates/footer.php");
    }

    function listing() {
        $this->view_data['menu_active'] = "listing_info";
        $this->view_data['root_active'] = "listing";
        $this->common_functions->check_admin_logged_in();
        $this->view_data['title'] = "Property Listing";
        $this->view_data['page'] = "All";
        $this->load->view("templates/header.php", $this->view_data);
        $this->load->view("admin/listing.php");
        $this->load->view("templates/footer.php");
    }

    function login() {
        if ($_POST && is_array($_POST)) {
            $result = $this->admin_model->check_userlogin($_POST);
            if ($result) {
                $this->common_functions->set_user_session($result, "user_data");
                $this->common_functions->error_redirection("WELCOME_ADMIN", "admin/home");
            } else {
                $this->common_functions->error_redirection("LOGIN_FAILED", "admin");
            }
        } else {
            $this->common_functions->error_redirection("GENERAL_ERROR", "admin");
        }
    }

    function home() {
        $this->view_data['menu_active'] = "home";
        $this->common_functions->check_admin_logged_in();
        $this->view_data['title'] = "Dashboard";
        $this->load->view("templates/header.php", $this->view_data);
        $this->load->view("admin/home.php");
        $this->load->view("templates/footer.php");
    }

    function add_listing_details() {
        extract($_POST);
        $input_arr = array(
            'title' => $title,
            'description' => $description,
            'price' => $price,
            'country_id' => $country,
            'state_id' => $state,
            'city_id' => $corre_city,
            'address' => $additional_address,
            'property_type' => $type,
            'property_status' => $property_status,
            'rooms' => $rooms,
            'garages' => $garages,
            'bedroom' => $bedroom,
            'bathroom' => $bathroom,
            'area' => $area,
            'build_year' => $build_year,
            'features' => json_encode($features),
            'is_featured' => $is_featured,
            'status' => 1,
            'is_archive' => 0,
            'is_delete' => 0
        );
        if ($listing_id && !empty($listing_id)) {
            $input_arr['updated_date'] = $this->date_functions->current_db_datetime();
            $this->insert_update->update_data('property_info', $input_arr, array('id' => $listing_id), "admin/listing");
        } else {
            $input_arr['created_date'] = $this->date_functions->current_db_datetime();
            $input_arr['updated_date'] = $this->date_functions->current_db_datetime();
            $this->insert_update->insert_data('property_info', $input_arr, "", "admin/listing");
        }
    }

    function logout() {
        $this->session->sess_destroy();
        $this->login();
    }

    function add_property_listing($id = '') {
        $this->view_data['root_active'] = "listing";
        $this->view_data['menu_active'] = "add_listing";
        $this->common_functions->check_admin_logged_in();
        if ($id && $id != '') {
            $this->view_data['action'] = "Edit";
            $result = $this->common_functions->get_selected_record('*', 'property_info', array('id' => $id));
            $this->view_data['listing_data'] = $result[0];
            $this->view_data['listing_data']->features = json_decode($this->view_data['listing_data']->features, TRUE);
            $corre_get_state = $this->common_functions->corre_get_state($result[0]->state_id);
            if ($corre_get_state != "") {
                $this->view_data['corre_state_name'] = $corre_get_state;
            }
        } else {
            $this->view_data['action'] = "Add";
        }
        $this->view_data['title'] = "Property Listing";
        $this->load->view("templates/header.php", $this->view_data);
        $this->load->view("admin/add_listing.php");
        $this->load->view("templates/footer.php");
    }

    function listing_details() {
        $this->view_data['root_active'] = "listing_details";
        $this->view_data['menu_active'] = "add_listing_details";
        $this->common_functions->check_admin_logged_in();
        $this->view_data['title'] = "Property Listing";
        $this->view_data['page'] = "All";
        $this->load->view("templates/header.php", $this->view_data);
        $this->load->view("admin/listing.php");
        $this->load->view("templates/footer.php");
    }

    function add_property_details($id = '') {
        if ($id == '') {
            redirect('admin/listing_details');
        }
        $this->view_data['root_active'] = "listing_details";
        $this->view_data['menu_active'] = "add_listing_details";
        $this->common_functions->check_admin_logged_in();
        if ($id && $id != '') {
            $this->view_data['action'] = "Edit";
            $result = $this->common_functions->get_selected_record('*', 'property_info', array('id' => $id));
            $this->view_data['listing_data'] = $result[0];
            $corre_get_state = $this->common_functions->corre_get_state($result[0]->state_id);
            if ($corre_get_state != "") {
                $this->view_data['corre_state_name'] = $corre_get_state;
            }
        } else {
            $this->view_data['action'] = "Add";
        }
        $this->view_data['title'] = "Property Listing Details";
        $this->load->view("templates/header.php", $this->view_data);
        $this->load->view("admin/add_listing_details.php");
        $this->load->view("templates/footer.php");
    }

    /* This action to set logout current session variable
     * @param : N/A
     * @return : redirect admin index page */

    public function load_location() {

        echo $this->drop_down->get_active_condition_drop_down_state(FALSE, $this->input->post('table_name'), $this->input->post('field2'), $this->input->post('field1'), $this->input->post('select_bar_name'), array($this->input->post('base_key') => $this->input->post('value')));
    }

    /* This action to set logout current session variable
     * @param : N/A
     * @return : redirect admin index page */

    public function load_location_city() {

        echo $this->drop_down->get_active_condition_drop_down_city(FALSE, $this->input->post('table_name'), $this->input->post('field2'), $this->input->post('field1'), $this->input->post('select_bar_name'), array($this->input->post('base_key') => $this->input->post('value')));
    }

}
