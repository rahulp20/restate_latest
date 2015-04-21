<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Datatable_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_listing_info($order_by = 'id', $asc_desc = 'DESC', $start_limit = '', $limit = '', $search = '', $alpha_search = '', $count = '') {
        if (isset($count) && $count != "") {
            $this->db->select("count(property_info.id) as total_record", FALSE);
            $this->get_current_listing_type_condition(true);
        } else {
            $this->db->select("*");
            if ($limit)
                $this->db->limit($limit, $start_limit);
            $this->get_current_listing_type_condition();
        }
        $this->db->from('property_info');
        if ($search != "")
            $this->db->like($search);
        if ($alpha_search != "") {
            if ($alpha_search == 1)
                $this->db->where("property_info.title REGEXP  '.*[0-9].*'");
            else
                $this->db->like("property_info.title", $alpha_search, "after");
        }
        $this->db->order_by($order_by, $asc_desc);
        $result = $this->db->get();
        $result = $result->result();
        if (count($result) > 0) {
            return $result;
        }
        return "";
    }

    function get_total_listing_info() {
        $this->db->select("count(*) as 'total'");
        $this->db->from('property_info');
        $this->get_current_listing_type_condition();
        $result = $this->db->get();
        $result = $result->result();
        if (count($result) > 0) {
            return $result[0]->total;
        }
        return 0;
    }

    /*
     * @Description : This function is used for set where condition according to set session
     * @Param :none
     * @return : none
     */

    public function get_current_listing_type_condition($count = '') {
        $referrer_url = $this->common_functions->get_referrer_uri_value(1);
        //switch to condition accordingt to contact load type
        switch ($referrer_url) {
            case 'archived_listing':
                $where = array("property_info.is_archive" => 1, "property_info.is_delete" => 0);
                break;
            case 'removed_listing':
                $where = array("property_info.is_delete" => 1);
                break;
            case 'featured_listing':
                $where = array("property_info.is_featured" => 1);
                break;
            case 'listing_details':
                $where = array("property_info.is_featured" => 1, "property_info.is_archive" => 0, "property_info.is_delete" => 0);
                break;
            default :
                if (isset($count) && !empty($count)) {
                    $where = array("property_info.is_archive" => 0, "property_info.is_delete" => 0);
                } else {
                    $where = array("property_info.is_archive" => 0, "property_info.is_delete" => 0);
                }
                break;
        }
        $this->db->where($where);
        isset($join) ? $join : "";
    }

}
