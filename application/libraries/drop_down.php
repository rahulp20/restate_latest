<?php

class Drop_Down {

    public $ci;

    public function __construct() {
        $this->ci = & get_instance();
    }

    /*
     * @Description :  create a active , iactive dropdown
     * @Param :$value
     * @Return : drop down
     */

    public function get_active_inactive_drop_down($value = '') {
        $selected = "<select class='form-control' id='status' name='status'>
                        <option value='1'";
        if ($value == 1) {
            $selected .="selected=selected";
        }
        $selected.= ">Active</option>";
        $selected.= "<option value='0'";

        $selected.= ">InActive</option>
                    </select>";

        return $selected;
    }

    /*
     * @Description :  create a drop down for any location like area/city/sub area by pass the necessary parameter
     * @Param :$check_id, $select_bar_name, $table_name, $key, $value
     * @Return : $select
     */

    public function get_active_condition_drop_down_state($check_id, $table_name, $value, $key, $select_bar_name, $condition = '', $custom_msg = '') {

        if ($table_name != "") {

            $this->ci->db->select("$table_name.$key as 'key' ,$table_name.$value as 'val'");
            $this->ci->db->from("$table_name");
            if ($condition != "")
                $this->ci->db->where($condition);

            $this->ci->db->order_by("$table_name.$key");
            $result = $this->ci->db->get();

            $results = $result->result();
            $select = "<select class='form-control disabled' id='$select_bar_name' name='$select_bar_name' data-validate='required' data-message-required='$custom_msg'>";

            $select .="<option value=''>Select </option>";
            foreach ($results as $result) {
                $selected = (isset($check_id) && $check_id == $result->val) ? 'selected=selected' : "";
                $select .="<option value='$result->val' $selected>$result->key</option>";
            }
            $select .= "</select>";
        } else {
            $select = "<select class='form-control' name='$select_bar_name' data-validate='required' data-message-required='$custom_msg'>";
            $select .="<option value=''>Select </option>";
            $select .= "</select>";
        }
        return $select;
    }

    /*
     * @Description :  create a drop down for any location like area/city/sub area by pass the necessary parameter
     * @Param :$check_id, $select_bar_name, $table_name, $key, $value
     * @Return : $select
     */

    public function get_active_condition_drop_down_city($check_id, $table_name, $value, $key, $select_bar_name, $condition = '', $custom_msg = '') {

        if ($table_name != "") {

            $this->ci->db->select("$table_name.$key as 'key' ,$table_name.$value as 'val'");
            $this->ci->db->from("$table_name");
            if ($condition != "")
                $this->ci->db->where($condition);

            $this->ci->db->order_by("$table_name.$key");
            $result = $this->ci->db->get();
            // echo $this->ci->db->last_query();exit;
            $results = $result->result();
            $select = "<select class='form-control disabled' name='$select_bar_name' id='$select_bar_name' data-validate='required' data-message-required='$custom_msg'>";

            $select .="<option value=''>Select </option>";
            foreach ($results as $result) {
                $selected = (isset($check_id) && $check_id == $result->val) ? 'selected=selected' : "";
                $select .="<option value='$result->val' $selected>$result->key</option>";
            }
            $select .= "</select>";
        } else {
            $select = "<select class='form-control' name='$select_bar_name' data-validate='required' data-message-required='$custom_msg'>";
            $select .="<option value=''>Select </option>";
            $select .= "</select>";
        }
        return $select;
    }

    /*
     * @Description :  get static type select bar based on passing parameter
     * @Param :$data_arr, $select_bar_name,$checked_id
     * @Return : $select
     */

    public function get_static_drop_down($data_arr, $select_bar_name, $checked_id) {
        $select = "";
        $select .='<select class="form-control" name="' . $select_bar_name . '">';
        $select .='<option value="">Select</option>';
        foreach ($data_arr as $data) {
            $selected = "";
            if ($checked_id == $data) {
                $selected = "selected=selected";
            }
            $select .='<option value="' . $data . '" ' . $selected . '>' . $data . '</option>';
        }
        $select .='</select>';
        return $select;
    }

    /*
     * @Description :  create a drop down for any location like area/city/sub area by pass the necessary parameter
     * @Param :$check_id, $select_bar_name, $table_name, $key, $value
     * @Return : $select
     */

    public function get_active_condition_drop_down_common($check_id, $table_name, $value, $key, $select_bar_name, $condition = '', $custom_msg = '') {

        if ($table_name != "") {

            $this->ci->db->select("$table_name.$key as 'key' ,$table_name.$value as 'val'");
            $this->ci->db->from("$table_name");
            if ($condition != "") {
                $this->ci->db->where($condition);
            }
            $this->ci->db->order_by("$table_name.$key");
            $result = $this->ci->db->get();
            //echo $this->ci->db->last_query();
            $results = $result->result();
            if ($check_id != "") {
                $select = "<select class='form-control disabled' id='$select_bar_name' name='$select_bar_name' data-validate='required' data-message-required='$custom_msg'>";
            } else {
                $select = "<select class='form-control' id='$select_bar_name' name='$select_bar_name' data-validate='required' data-message-required='$custom_msg'>";
            }
            $select .="<option value=''>Select </option>";
            foreach ($results as $result) {
                $selected = (isset($check_id) && $check_id == $result->val) ? 'selected=selected' : "";
                $select .="<option value='$result->val' $selected>" . ucfirst($result->key) . "</option>";
            }
            $select .= "</select>";
        } else {
            $select = "<select class='form-control' id='$select_bar_name' name='$select_bar_name' data-validate='required' data-message-required='$custom_msg'>";
            $select .="<option value=''>Select </option>";
            $select .= "</select>";
        }
        return $select;
    }

    /*
     * @Description :  create a drop down for any location like area/city/sub area by pass the necessary parameter
     * @Param :$check_id, $select_bar_name, $table_name, $key, $value
     * @Return : $select
     */

    public function get_active_condition_drop_down($check_id, $select_bar_name, $table_name, $key, $value, $condition = '', $custom_msg = '') {

        $this->ci->db->select("$table_name.$key as 'key' ,$table_name.$value as 'val'");
        $this->ci->db->from("$table_name");
        $this->ci->db->group_by('country_name');
        if ($condition != "")
            $this->ci->db->where($condition);

        $this->ci->db->order_by("$table_name.$key");
        $result = $this->ci->db->get();

        $results = $result->result();
        $select = "<select class='form-control disabled' name='$select_bar_name' >";

        $select .="<option value=''>Select </option>";
        foreach ($results as $result) {
            $selected = (isset($check_id) && $check_id == $result->val) ? 'selected=selected' : "";
            $select .="<option value='$result->val' $selected>$result->key</option>";
        }
        $select .= "</select>";

        return $select;
    }

}

?>