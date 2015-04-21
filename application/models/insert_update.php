<?php

/* Insert_update model class it contain insert/update action related methods
 * @author: Verve System Pvt Ltd
 * @since : 20 October 2014
 * @package: insert_update.php
 */

class Insert_Update extends CI_Model {
    /* This function is used to insert data based on the parameters passed in the function  
     * * @Param  : $table_name, $data, $new_record_id   
     * @return : array of success/error with relavant message */

    public function insert_data($table_name, $data, $new_rec_id = '', $redirect = "") {
        try {
            $result = $this->db->insert($table_name, $data);
            if ($result) {
                if ($new_rec_id != "")
                    return $this->db->insert_id();
                else if ($redirect != "")
                    $this->common_functions->error_redirection("RECORD_ADD_SUCCESS", $redirect);
                else
                    return true;
            }
            else {
                //Block of code used for throwing an exception
                $err_no = $this->db->_error_number();
                $err_message = $this->db->_error_message();
                $error = "Error No: " . $err_no . " Table Name: " . $table_name . " Message : " . $err_message;
                throw new Exception($error);
                return false;
            }
        } catch (Exception $ex) {
            $this->common_functions->error_redirection("RECORD_ADD_FAILED", current_url());
        }
    }

    /* @Description:This function to update data based on the parameters passed in the function
     * @Param  : $table_name, $data, $id, $redirect
     * @return : array of success/error with relavant message 
     */

    public function update_data($table_name, $data, $id, $redirect = "") {

        try {
            //$data['updated_date']  = $this->date_functions->current_db_datetime();                        ;      
            $this->db->where($id);
            if ($this->db->update($table_name, $data)) {

                if ($redirect != "")
                    $this->common_functions->error_redirection("RECORD_UPDATE_SUCCESS", $redirect);
                else
                    return TRUE;
            }
            else {
                //Block of code used for throwing an exception
                $err_no = $this->db->_error_number();
                $err_message = $this->db->_error_message();
                $error = "Error No: " . $err_no . " Table Name: " . $table_name . " Message : " . $err_message;
                throw new Exception($error);
                return false;
            }
        } catch (Exception $ex) {
            $this->common_functions->error_redirection("RECORD_UPDATE_FAILED", current_url());
        }
    }

    /* @Description:This function used for update multiple data based on the parameters passed in the function
     * @Param  : $table_name, $data, $ids, $redirect
     * @return : array of success/error with relavant message 
     */

    public function update_multiple_data($table_name, $data, $ids, $redirect = "") {
        try {

            $data['updated_date'] = $this->date_functions->current_db_datetime();
            $id_arr = explode(",", $ids);
            $this->db->where_in("id", $id_arr);
            if ($this->db->update($table_name, $data)) {

                if ($redirect != "")
                    $this->common_functions->error_redirection("success", MSG_RECORD_UPDATE_SUCCESS, $redirect);
                else
                    return TRUE;
            }
            else {

                //Block of code used for throwing an exception
                $err_no = $this->db->_error_number();
                $err_message = $this->db->_error_message();
                $error = "Error No: " . $err_no . " Table Name: " . $table_name . " Message : " . $err_message;
                throw new Exception($error);
                return false;
            }
        } catch (Exception $ex) {
            $this->common_functions->error_redirection("error", MSG_RECORD_UPDATE_ERROR, current_url());
        }
    }

    /* @Description:This function used for updatepayment status
     * @Param  : $table_name, $data, $ids, $redirect
     * @return : array of success/error with relavant message 
     */

    public function update_payment_status($table_name, $data, $key, $ids, $con_id, $redirect = "") {
        try {

            $data['updated_date'] = $this->date_functions->current_db_datetime();
            $id_arr = explode(",", $ids);
            $this->db->where_in($key, $id_arr);
            $this->db->where($con_id);
            if ($this->db->update($table_name, $data)) {

                if ($redirect != "")
                    $this->common_functions->error_redirection("success", MSG_RECORD_UPDATE_SUCCESS, $redirect);
                else
                    return TRUE;
            }
            else {

                //Block of code used for throwing an exception
                $err_no = $this->db->_error_number();
                $err_message = $this->db->_error_message();
                $error = "Error No: " . $err_no . " Table Name: " . $table_name . " Message : " . $err_message;
                throw new Exception($error);
                return false;
            }
        } catch (Exception $ex) {
            $this->common_functions->error_redirection("error", MSG_RECORD_UPDATE_ERROR, current_url());
        }
    }

}

?>