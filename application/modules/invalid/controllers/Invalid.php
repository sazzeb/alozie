<?php
class Invalid extends MX_Controller 
{

    function __construct() {
    parent::__construct();
    }

    function error()
    {
        $this->load->module('setting_component');
        $data['icon'] = $this->setting_component->_logo_icon();
        $this->load->view('error',$data);
    }

    function _get_page_not_found_msg()
    {
    	$this->load->view('gdhvjh');
    }
}