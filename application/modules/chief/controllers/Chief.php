<?php
class Chief extends MX_Controller 
{

function __construct() {
parent::__construct();
}

function _draw_breadcrumbs($data)
{
  //NOTE: for this to work, data must contain;
  //template, current_page_title, breadcrumbs_array
  $this->load->view('breadcrumbs_odara', $data);
}


function nwere($data) 
{
  $this->load->module('setting_component');
  $data['icon'] = $this->setting_component->_logo_icon();
    if (!isset($data['view_module'])) {
      $data['view_module'] = $this->uri->segment(1);
    }

    $this->load->view('nwere', $data);
}

function odara($data) 
{
  $this->load->module('setting_component');
  $data['name'] = $this->setting_component->_get_our_name();
  $data['address'] = $this->setting_component->_get_our_address();
  $data['fax'] = $this->setting_component->_fax_detail();
  $data['email'] = $this->setting_component->_email_detail();
  $data['head'] = $this->setting_component->_logo_head();
  $data['code'] = $this->setting_component->_get_map_code();
  $data['foot'] = $this->setting_component->_logo_foot();
  $data['icon'] = $this->setting_component->_logo_icon();
  if (!isset($data['view_module'])) {
    $data['view_module'] = $this->uri->segment(1);
  }

    $this->load->module('secure_me');
    $data['customer_id'] = $this->secure_me->_get_user_id();
    
    $this->load->view('odara', $data);
}

}