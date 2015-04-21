<?php

class Common_Functions {
    /*
     * Function Name : error_redirection
     * @param $error_type , $msg, $redirect
     * @description :  function is used for set error or success message
     */

    public $ci;

    public function __construct() {
        $this->ci = & get_instance();
        $this->no_cache();
    }

    /*
     * @Description : used for manage window back management
     * @Param :none
     * @Return : none;
     */

    private function no_cache() {
        $this->ci->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->ci->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->ci->output->set_header('Pragma: no-cache');
        $this->ci->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }

    /*
     * @Description :  check error type and set in system message
     * @Param : $error_type,$msg,$redirection
     * @Return:$error_type or none
     */

    public function error_redirection($title = '', $redirection = '') {
        $ci = & get_instance();
        $data = $this->ci->db->get_where('system_messages', array("title" => $title));
        $data = $data->result();
        $error_type = $data[0]->type;
        $msg = $data[0]->message;
        $ci->session->set_flashdata("system_message_type", $error_type);
        $ci->session->set_flashdata("system_message", $msg);

        if ($redirection != "")
            redirect($redirection);

        return $error_type;
    }

    public function get_month_names($month = '') {
        $month_names = array('1' => 'January', '2' => 'February', '3' => 'March', '4' => 'April', '5' => 'May', '6' => 'June',
            '7' => 'July', '8' => 'August', '9' => 'September', '10' => 'October', '11' => 'November', '12' => 'December');
        return ($month != "" && $month_names[$month]) ? $month_names[$month] : $month_names;
    }

    /*
     * @Description :  function is used for create an message box for success error
     * @Param : $type , $msg
     * @Return:$alert_html
     */

    public function get_alert_html($type, $msg) {
        if (empty($type) || empty($msg))
            return "";

        $alert_class = "";
        $alert_heading = "";
        switch ($type) {
            case "success":
                $alert_class = "alert-success";
                $alert_heading = "Success!&nbsp;";
                break;
            case "error":
                $alert_class = "alert-danger";
                $alert_heading = "Error!&nbsp;";
                break;
            case "info":
                $alert_class = "alert-info";
                $alert_heading = "Info!&nbsp;";
                break;
            case "warning":
                $alert_class = "alert-warning";
                $alert_heading = "Warning!&nbsp;";
                break;
        }
        $alert_html = "<div class=\"alert $alert_class\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><strong>" . $alert_heading . "</strong>" . $msg . "</div>";
        return $alert_html;
    }

    /*
     * @Description : Function is used for datatable management
     * @Param:$data_arr, $get_data
     * @Return :array
     */

    public function get_data_table_function($data_arr, $get_data, $global = '') {
        //set order according to get parameter or else set default
        $order_by = isset($get_data['iSortCol_0']) ? $data_arr[$get_data['iSortCol_0']] : $data_arr[0];
        $asc_desc = isset($get_data['sSortDir_0']) ? $get_data['sSortDir_0'] : "asc";
        //set search condition based on column filter
        $search = "";
        if ($global == "") {
            for ($i = 0; $i < count($data_arr); $i++) {
                if (isset($get_data['sSearch']) && trim($get_data['sSearch_' . $i]) != "") {
                    $search[$data_arr[$i]] = mysql_real_escape_string($get_data['sSearch_' . $i]);
                }
            }
        } else {
            for ($i = 0; $i < count($data_arr); $i++) {
                if (isset($get_data['sSearch']) && trim($get_data['sSearch_' . $i]) != "") {
                    $search[$data_arr[$i]] = mysql_real_escape_string($get_data['sSearch']);
                }
            }
        }

        //get limit for show record per page
        $limit = isset($get_data['iDisplayLength']) ? $get_data['iDisplayLength'] : "10";
        $limit = ($limit == -1) ? "" : $limit;

        //get start limit by pagination
        $start_limit = isset($get_data['iDisplayStart']) ? $get_data['iDisplayStart'] : "0";

        return array("order_by" => $order_by, "asc_desc" => $asc_desc, "search" => $search, "limit" => $limit, "start_limit" => $start_limit);
    }

    /*
     * @Description : Used for return referrer uri value
     * @Param : $val
     * @Return : val/none
     */

    public function get_referrer_uri_value($val = '') {
        $base_url = base_url();
        $referer_url = (isset($_SERVER['HTTP_REFERER']) ) ? explode($base_url, $_SERVER['HTTP_REFERER']) : "";
        if ($referer_url != "") {
            $referer_url = explode('/', $referer_url[1]);
            return (isset($referer_url[$val])) ? $referer_url[$val] : "none";
        }
        return "none";
    }

    /*
     * @Description : set user session data after login
     * @Param : $data ,$session_type
     * @Return : none
     */

    public function set_user_session($data, $session_type) {
        $user_session = array(
            'isLoggedIn' => "sanchit",
            'user_role' => $data[0]->user_role,
            'id' => $data[0]->id,
            'displayname' => $data[0]->displayname,
            'email' => $data[0]->email,
            'first_name' => ucfirst($data[0]->firstname),
            'last_name' => ucfirst($data[0]->lastname)
        );
        $this->ci->session->set_userdata($user_session);
        return;
    }

    /*
     * @Description : function is used for store any kind of session
     * @Param : $session_type,$session_val
     * @Return : none;
     */

    public function set_session_data($session_type, $session_val) {
        $this->ci->session->set_userdata($session_type, $session_val);
        return;
    }

    /*
     * @Description : function is used for return any kind of session value
     * @Param : $session_type
     * @Return : none;
     */

    public function get_session_data($session_type) {
        return $this->ci->session->userdata($session_type);
    }

    /*
     * @Description : get current user sessoin id 
     * @Param : $param
     * @Return : current logged in user id
     */

    public function get_user_session_id() {
        $session = $this->ci->session->userdata('user_session');
        if ($session['id']) {
            return $session['id'];
        } else {
            return "";
        }
    }

    /* This fucntion to generate random number 
     * @params : N/A
     * @return : reuturn string of random number */

    public function generateRandomNum() {
        $randomCode = '';
        $randomKey = array_merge(range('a', 'z'), range(0, 9), range('A', 'Z'));
        for ($i = 0; $i < 10; $i++) {
            $randomCode .= $randomKey[array_rand($randomKey)];
        }
        return $randomCode;
    }

    /*
     * @Description : check user session is working or not
     * @Param : $redirect
     * @Return: true or redirect
     */

    public function check_admin_logged_in($redirect = "") {
        if ($this->ci->session->userdata('isLoggedIn')) {
            if (isset($redirect) && $redirect != "")
                redirect($redirect);
            return true;
        }
        redirect('admin/');
    }

    /*
     * @Description : check front user session is working or not
     * @Param : $redirect
     * @Return: true or redirect
     */

    public function check_frontuser_logged_in($redirect = "") {
        if ($this->ci->session->userdata('isLoggedIn')) {
            if (isset($redirect) && $redirect != "")
                redirect($redirect);
            return true;
        } else {
            if (isset($redirect) && $redirect != "")
                redirect($redirect);
            redirect('user/login');
        }
    }

    /*
     * @Description : destroy current logged in user session 
     * @Param : none
     * @Return: none
     */

    public function destroy_user_session() {
        if ($this->ci->session->userdata('user_session')) {
            $this->ci->session->unset_userdata('user_session');
        }
        return;
    }

    /*
     * @Description: check record exists or not
     * @Param : $table_name,$condition, $msg,$redirect
     * @Return : error or none 
     */

    public function check_record_exists($table_name, $condition, $msg = '', $redirect = '') {

        $this->ci->db->select('count(*) as count');
        $this->ci->db->from($table_name);
        $this->ci->db->where($condition);

        $result = $this->ci->db->get();

        $result = $result->result();

        $result = $result[0];
        if ($result->count > 0) {
            if ($redirect != "") {
                $this->error_redirection("error", $msg, $redirect);
            }
            return "1";
        } else {//echo "new";exit;
            return "0";
        }
    }

    /*
     * @Description :  used for delete record based on the parameters passed in the function
     * @Param : $table_name, $condition, $redirection
     * @Return:true/false
     */

    public function delete_redirection($table_name, $condition, $redirection = '') {

        $this->ci->db->where($condition);
        if ($this->ci->db->delete($table_name)) {
            if (isset($redirection) && $redirection != "")
                $this->error_redirection('success', MSG_RECORD_DELETE_SUCCESS, $redirection);
            return true;
        }
        else {
            if (isset($redirection) && $redirection != "")
                $this->error_redirection('error', MSG_RECORD_DELETE_ERROR, $redirection);
            return false;
            echo $this->ci->db->last_query();
            exit;
        }
    }

    /**
     * To create directory of log if not exists
     * 
     */
    public function create_dir($path, $folder_name) {
        try {
            if (!mkdir($path . $folder_name, 0777))
                throw new Exception('Folder could not be created');
        } catch (Exception $ex) {
            $this->write_log('ERROR', $ex->getMessage());
        }
    }

    /**
     * To create directory of log if not exists
     * 
     */
    public function check_dir_exists($path) {
        echo $path;
        if (!file_exists($path)) {
            mkdir($path, 0777);
        } else {
            return TRUE;
        }
    }

    /*
     * 
     * @Description: Function is used for uploading image type data
     * @param : $file_name, $redirect
     * @Return : file name/error
     */

    public function upload_image_data($file_name = '', $setting, $redirect = '') {
        $dir = explode('uploads/', $setting['upload_path']);
        $dir = explode('/', $dir['1']);
        if (!file_exists($setting['upload_path'])) {
            $path = "././uploads/";
            $tmp_path = "";
            foreach ($dir as $dir) {
                $tmp_path .= $dir . '/';
                $this->check_dir_exists($path . $tmp_path);
            }
        }

        $this->ci->load->library('upload', $setting);
        if ($this->ci->upload->do_upload($file_name)) {
            $data = array('upload_data' => $this->ci->upload->data());
            $file_info = $this->ci->upload->data();
            return $file_info['file_name'];
        } else {
            $error = array('error' => $this->ci->upload->display_errors());
            if (!empty($redirect)) {
                $this->error_redirection("error", $this->ci->upload->display_errors(), $redirect);
            } else {
                return $error;
            }
        }
    }

    /*
     * @Description:used for get any action message in the application like success / error/ insert / update etc
     * @Param : none
     * @Return : $message;
     */

    public function get_system_message() {
        $message = "";
        if ($this->ci->session->flashdata("system_message")) {
            $message = $this->get_alert_html(
                    $this->ci->session->flashdata("system_message_type"), $this->ci->session->flashdata("system_message")
            );
        }
        return $message;
    }

    /*
     * @Description:used for get user data by parameter
     * @Param : $key
     * @Return : $message;
     */

    public function get_user_data($id) {

        $this->ci->db->select("users.*,user_group.group_name");
        $this->ci->db->from("users");
        $this->ci->db->join("user_group", "users.fk_user_group_id=user_group.id");

        if ($id != "") {
            $this->ci->db->where("users.id", $id);
        }
        $query = $this->ci->db->get('');

        $result = $query->row();
        return $result;
    }

    /*
     * @Description: Used for get any record by passed this parameter
     * @Param : $table_name,$key,$select_base,$id
     * @Return : $ids
     */

    public function get_record_ids($table_name, $key, $select_base, $id) {

        $this->ci->db->select($table_name . "." . $key);
        $this->ci->db->from($table_name);
        $this->ci->db->where($table_name . "." . $select_base, $id);
        $results = $this->ci->db->get();
        $results = $results->result();
        if (count($results) > 0) {
            $records = array();
            foreach ($results as $result) {
                array_push($records, $result->$key);
            }
            return $records;
        } else {
            return "0";
        }
    }

    /*
     * @Description :  used for delete multiple record by pass parametere
     * @Param : $table_name, $key, $delete_ids
     * @Return:true/false
     */

    public function delete_multiple_record($table_name, $key, $delete_ids) {
        $this->ci->db->where_in($key, $delete_ids);
        if ($this->ci->db->delete($table_name)) {
            return true;
        } else {
            return false;
        }
    }

    public function get_email_config() {

        $this->ci->db->select('*');
        $this->ci->db->from('email_config');
        $query = $this->ci->db->get();
        $result = $query->row();
        $configEmail = array();
        $configEmail['mailConfig']['protocol'] = $result->protocol;
        $configEmail['mailConfig']['smtp_host'] = $result->smtp_host;
        $configEmail['mailConfig']['smtp_user'] = $result->smtp_user;
        $configEmail['mailConfig']['smtp_pass'] = $result->smtp_pass;
        $configEmail['mailConfig']['smtp_port'] = $result->smtp_port;
        $configEmail['mailConfig']['mailtype'] = 'html';
        $configEmail['from_name'] = $result->from_name;
        $configEmail['from_email'] = $result->from_email;
        return $configEmail;
    }

    /*
     * @Description : Function is used for fetch country name from location table 
     * @Param: no param
     * @Return :array
     */

    public function get_location_data() {
        $this->ci->db->select('*');
        $this->ci->db->from('location');
        $this->ci->db->group_by('country');
        $query = $this->ci->db->get('');


        if ($query != "") {
            $result = $query->result_array();
            return $result;
        } else {
            return FALSE;
        }
    }

    /*
     * @Description : Function is used for fetch country details of loggedin user
     * @Param: $location (Get from session of loggedin user)
     * @Return :array
     */

    public function get_user_location($location) {


        $this->ci->db->select('*');
        $this->ci->db->from('location');
        $this->ci->db->group_by('country');
        $this->ci->db->where("country_id", $location);
        $query = $this->ci->db->get('');


        if ($query != "") {
            $result = $query->row_array();
            return $result;
        } else {
            return FALSE;
        }
    }

    /* this function is used to get any table data
     * @Param:$table_name
     * @return : $data
     */

    public function get_table_data($table_name = '', $condition = '') {

        if ($table_name != "" && $condition != "") {
            $this->ci->db->select("*");
            $this->ci->db->from($table_name);
            $this->ci->db->where($condition);
            $result = $this->ci->db->get('');
            $result = $result->result();
            if (count($result) > 0) {
                return $result;
            }
            return "";
        }
    }

    /*
     * @Description :  used for Truncate any table
     * @Param : $table_name
     * @Return:true/false
     */

    public function truncate_table($table_name) {
        $this->ci->db->truncate($table_name);
    }

    /*
     * @Description:used for get selected record
     * @Param : $select_data,$table_name,$conditon
     * @Return : $ref_id;
     */

    public function get_selected_record($select_data, $table_name, $condition = '') {
        $this->ci->db->select($select_data, FALSE);
        $this->ci->db->from($table_name);
        if ($condition != "") {
            $this->ci->db->where($condition);
        }
        $result = $this->ci->db->get();
        $result = $result->result();
        if (count($result) > 0) {
            return $result;
        }
        return "";
    }

    public function corre_get_state($get_state_name) {
        $this->ci->db->select("state_name");
        $this->ci->db->from('states');
        $this->ci->db->where('id', $get_state_name);
        $result = $this->ci->db->get();
        $result = $result->result();
        if (count($result) > 0) {
            return $result;
        }
        return "";
    }

}

?>
