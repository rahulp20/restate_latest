<?php 

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class date_functions {

    /**
     * Return current datetime to set into database
     * @param type $datetime
     * @return type 
     */
    function current_db_datetime() {
        $datestring = "Y-m-d H:i:s";
        $time = time();
	return date($datestring, $time); 
    }
    
    /**
     * Return changed date format to set into database
     * @param type $datetime
     * @return type 
     */
    function change_date_format($date = "") {        
        $datestring = "Y-m-d H:i:s";
        $newDate = date($datestring, strtotime($date));
        return $newDate;
    }

    /**
     * Return display date format 
     * Date format like MM-DD-YYY 
     * @param type $datetime
     * @return type 
     */
    function get_dateFormat($datetime) {
        $datestring = "m/d/Y";        
        return date($datestring, strtotime($datetime));
    }

}

?>
