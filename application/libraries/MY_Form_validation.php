<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

	function __construct(){
        parent::__construct();
    }

    function error_array(){
        return $this->_error_array;
    }

    function field_data(){
		$field_data = array();
		foreach ($this->_field_data as $f_key => $f_value) {
			$field_data[$f_value['field']] = html_entity_decode($f_value['postdata']);
		}
		return $field_data;
    }
	
}

/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/Form_validation.php */