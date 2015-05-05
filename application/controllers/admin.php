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
            'latitude' => $latitude,
            'longitude' => $longitude,
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
            $result = $this->common_functions->get_selected_record('*', 'property_sections');
            $this->view_data['section_data'] = $result;
        } else {
            $this->view_data['action'] = "Add";
        }
        $this->view_data['property_id'] = $id;
        $this->view_data['title'] = "Property Listing Details";
        $this->load->view("templates/header.php", $this->view_data);
        $this->load->view("admin/add_listing_details.php");
        $this->load->view("templates/footer.php");
    }

    function insert_property_details() {
        $files = $_FILES;
        $_FILES = "";
        for ($i = 0; $i < count($_POST['section_id']); $i++) {
            $input_arr['title'] = $_POST['detail_text'][$i];
            $input_arr['link'] = $_POST['detail_link'][$i];
            $input_arr['status'] = $_POST['detail_status'][$i];
            if ($files['detail_image']['name'][$i] == "") {
                $input_arr['image'] = $_POST['detail_image'][$i];
            } else {
                $_FILES['detail_image'] = array(
                    'name' => $files['detail_image']['name'][$i],
                    'type' => $files['detail_image']['type'][$i],
                    'tmp_name' => $files['detail_image']['tmp_name'][$i],
                    'error' => $files['detail_image']['error'][$i],
                    'size' => $files['detail_image']['size'][$i],
                );
                $setting = $this->config->item('section_document');
                $file_name = $this->common_functions->upload_image_data('detail_image', $setting);
                $input_arr['image'] = $file_name;
            }

            if ($_POST['section_id'][$i] == 0) {
                $input_arr['property_id'] = $_POST['property_id'];
                $input_arr['created_date'] = $this->date_functions->current_db_datetime();
                $input_arr['updated_date'] = $this->date_functions->current_db_datetime();
                $this->insert_update->insert_data('property_sections', $input_arr, "", "");
            } else {
                $input_arr['updated_date'] = $this->date_functions->current_db_datetime();
                $this->insert_update->update_data('property_sections', $input_arr, array('id' => $_POST['section_id'][$i]), "");
            }
        }
        $this->common_functions->error_redirection("RECORD_ADD_SUCCESS", "admin/add_property_details/$_POST[property_id]");
    }

    function delete_section($id = '') {
        if ($id != '') {
            if ($this->admin_model->delete_section($id)) {
                die("done");
            } else {
                die("error");
            }
        } else {
            die("error");
        }
    }

    /*
     * @Description:function is used for upload images for property
     * @Param : $type,$Files
     * #Return : success/error
     */

    public function upload_prooperty_images($id = '') {

        //get current edit listing id        
        $folder_path = $this->config->item('listing_document');
        $folder_path['upload_path'] = $folder_path['upload_path'] . "listing_" . $id . "/";
        $dir = explode('uploads/', $folder_path['upload_path']);
        $dir = explode('/', $dir['1']);
        if (!file_exists($folder_path['upload_path'])) {
            $path = "././uploads/";
            $tmp_path = "";
            foreach ($dir as $dir) {
                $tmp_path .= $dir . '/';
                $this->common_functions->check_dir_exists($path . $tmp_path);
            }
        }
        if (!empty($_FILES)) {

            $tmp_filename = $_FILES['userfile']['tmp_name'];
            //set all variable with for file upload 
            $this->file_uploads->upload_dir = $folder_path['upload_path'];
            $this->file_uploads->extensions = array('.png', '.jpg', '.gif', '.jpeg', '.doc', '.docx', '.pdf');
            $this->file_uploads->rename_file = false;
            $this->file_uploads->the_temp_file = $tmp_filename;
            $this->file_uploads->the_file = $_FILES['userfile']['name'];
            $this->file_uploads->http_error = $_FILES['userfile']['error'];
            $this->file_uploads->do_filename_check = 'n';
            $this->file_uploads->add_watermark = FALSE;
            $this->file_name = $this->file_uploads->the_file;
            if ($this->file_uploads->upload()) {
                $data = array(
                    'property_id' => $id,
                    'image_name' => $this->file_uploads->file_copy,
                    "featured_image" => "",
                    "status" => 1,
                    "created_date" => $this->date_functions->current_db_datetime(),
                    "updated_date" => $this->date_functions->current_db_datetime()
                );
                if ($this->insert_update->insert_data("guest_document", $data)) {
                    $this->file_name = $this->file_uploads->file_copy;
                    $this->show_success_error_message();
                } else {
                    $this->show_success_error_message();
                }
            } else {
                $this->file_error = $this->file_uploads->show_error_string();
                $this->show_success_error_message();
            }
        }
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
