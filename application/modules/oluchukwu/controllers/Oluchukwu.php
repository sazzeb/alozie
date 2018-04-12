<?php
class Oluchukwu extends MX_Controller 
{

function __construct() {
parent::__construct();
$this->load->library('form_validation');
$this->form_validation->CI =& $this;
}

function index()
{

    $this->load->module('setting_component');
    $data['icon'] = $this->setting_component->_logo_icon();

    if (!isset($data['view_module'])) {
      $data['view_module'] = $this->uri->segment(1);
    }

    $data['username'] = $this->input->post('username', TRUE);
    $this->load->view('login', $data); 
}

function submit_login()
{
    $submit = $this->input->post('submit', TRUE);

    if ($submit=="Submit") {
        //process the form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[60]|callback_username_check');
        $this->form_validation->set_rules('pword', 'Password', 'required|min_length[7]|max_length[35]');

        if ($this->form_validation->run() == TRUE) {
            
            $this->_in_you_go();

        } else {
            echo validation_errors();
        }
    }

}

function _in_you_go()
{

    //set a session variable
    $this->session->set_userdata('is_admin', '1');

    //send the user to the private admin page
    redirect('dashboard/home');
}

function logout()
{
    unset($_SESSION['is_admin']);
    redirect(base_url());
}


function username_check($str) 
{
    $this->load->module('secure_me');
    $error_msg = "You did not enter a correct username and/or password.";
    $pword = $this->input->post('pword', TRUE);

    $result = $this->secure_me->_check_admin_login_details($str, $pword);

    if ($result==FALSE) {
        $this->form_validation->set_message('username_check', $error_msg);
        return FALSE;        
    } else {
        return TRUE;
    }
}

}