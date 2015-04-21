<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Datatable_loading extends CI_Controller {

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
    }

    function load_listing() {
        // define all field in array for manage data table operation       
        $aColumns = array('property_info.id', 'property_info.id', 'property_info.title', 'property_info.description', 'property_info.is_featured', 'property_info.status', 'property_info.created_date');

        extract($this->common_functions->get_data_table_function($aColumns, $_GET));
        //alpha search
        $alpha_search = isset($_GET['aAlphaSearch']) ? $_GET['aAlphaSearch'] : "";
        //get contacts based on record
        $listing_info = $this->datatable_model->get_listing_info($order_by, $asc_desc, $start_limit, $limit, $search, $alpha_search);
        //get total no. of contacts by filtration
        $filter_total = $this->datatable_model->get_listing_info($order_by, $asc_desc, $start_limit, $limit, $search, $alpha_search, 1);
        //initialize output with custom parameter
        $output = array(
            "sEcho" => intval($_GET['sEcho']),
            "iTotalRecords" => $this->datatable_model->get_total_listing_info(),
            "iTotalDisplayRecords" => $filter_total[0]->total_record,
            "aaData" => array()
        );
        //if any contact get 
        if ($listing_info) {

            $referrer_url = $this->common_functions->get_referrer_uri_value(1);

            $srNo = $start_limit + 1;
            foreach ($listing_info as $listing) {
                switch ($referrer_url) {
                    case'listing': $listingID = '<a href="' . base_url("admin/add_property_listing/$listing->id") . '">Listing' . $listing->id . '</a>';
                        break;
                    case'listing_details': $listingID = '<a href="' . base_url("admin/add_property_details/$listing->id") . '">Listing' . $listing->id . '</a>';
                        break;
                    case'featured_listing': $listingID = '<a href="' . base_url("admin/add_property_listing/$listing->id") . '">Listing' . $listing->id . '</a>';
                        break;
                }
                $input = "<input type='checkbox' name='listing_ids[]' value='" . $listing->id . "' class='check'>";
                $listing_title = $listing->title;
                $listing_description = $listing->description;
                $listing_featured = $listing->is_featured;
                $listing_status = ($listing->status == 1) ? "Active" : "Inactive";
                $listing_created = date("d-m-Y", strtotime($listing->created_date));

                $row = array($input, $listingID, $listing_title, $listing_description, $listing_featured, $listing_status, $listing_created);
                $output['aaData'][] = $row;
                $srNo++;
            }
        }
        echo json_encode($output);
    }

}
