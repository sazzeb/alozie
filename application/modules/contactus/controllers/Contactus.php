<?php
class Contactus extends MX_Controller 
{

function __construct() {
parent::__construct();
$this->load->library('form_validation');
$this->form_validation->CI =& $this;
$this->load->library('email');
}

function submit()
{

    $submit = $this->input->post('submit', TRUE);

    if ($submit=="Submit") {
        //process the form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('yourname', 'your name', 'trim|required|min_length[3]|max_length[60]|xss_clean');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[6]|max_length[60]|valid_email|xss_clean');
        $this->form_validation->set_rules('telnum', 'telephone number', 'required|max_length[20]');
        $this->form_validation->set_rules('message', 'message', 'required');
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha'); 
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

        if ($this->form_validation->run() == TRUE) {
            //get the variables
            $posted_data = $this->fetch_data_from_post();
            $this->load->module('enquiries');
            $this->load->module('secure_me');

            //insert the message
            $data['code'] = $this->secure_me->generate_random_string(17);
            $data['subject'] = 'Contact Form';
            $data['message'] = $this->build_msg($posted_data);
            $data['sent_to'] = 0;
            $data['date_created'] = time();
            $data['opened'] = 0;
            $data['sent_by'] = 0;
            $data['urgent'] = 0;
            $this->_customer_sentmail();
            $this->_admin_mail();
            $this->enquiries->_insert($data);
            redirect('contactus/thankyou');
            
        } else {
            //form submission error
            $this->index();
        }
    }
}

function build_msg($posted_data)
{
    $yourname = ucfirst($posted_data['yourname']);
    $msg = $yourname.' submitted the following information:<br><br>';
    $msg.= 'Name: '.$yourname."<br>";
    $msg.= 'Email: '.$posted_data['email']."<br>";
    $msg.= 'Telephone Number: '.$posted_data['telnum']."<br>";
    $msg.= 'Message: '.$posted_data['message']."<br>";
    return $msg;
}

function index()
{
    $this->load->module('setting_component');
    $data = $this->fetch_data_from_post();
    $data['email_set'] = $this->setting_component->_email_detail();
    $data['login_msg'] = $this->setting_component->_get_login_msg();
    $data['welcome'] = $this->setting_component->_give_welcome_msg();
    $data['our_address'] = $this->setting_component->_get_our_address();
    $data['our_telnum'] = $this->setting_component->_get_our_telnum();
    $data['our_name'] = $this->setting_component->_get_our_name();
    $data['map_code'] = $this->setting_component->_get_large_map_code();
    $data['keyme'] = $this->setting_component->_public_keyme();
    $data['flash'] = $this->session->flashdata('item');
    $data['form_location'] = base_url().'contactus/submit';
    $data['view_file'] = "contactus";
    $this->load->module('chief');
    $this->chief->odara($data);  
}

function _customer_sentmail()
{
    $this->load->library('email');
    $this->email->from('admin@domain.com', $this->input->post('pname'));
    $this->email->to($this->input->post('email'));
    $this->email->subject('Admin | Reply');
    $this->email->message('Thanks For Contacting Admin, 
        we have receive your mail we will be contacting you very soon.
        Take a moment and go through our website, we will like you to like our facebook twitter, instagram, youtube page, so that we can serve you better.');
     if($this->email->sent()){
        return TREU;
    }else{
       return FALSE;
    };
    
}

function _admin_mail()
{
    $this->load->library('email');
    $this->email->from($this->input->post('emailer'), $this->input->post('pname'));
    $this->email->to('admin@domain.com');
    $this->email->subject($this->input->post('subject'));
    $this->email->message($this->input->post('message'));

    if($this->email->sent()){
        return TREU;
    }else{
       return FALSE;
    }
}


function thankyou()
{
    $data['view_file'] = "thankyou";
    $this->load->module('chief');
    $this->chief->odara($data);  
}

function fetch_data_from_post()
{
    $data['yourname'] = $this->input->post('yourname', TRUE);
    $data['email'] = $this->input->post('email', TRUE);
    $data['subject'] = $this->input->post('subject', TRUE);
    $data['telnum'] = $this->input->post('telnum', TRUE);
    $data['message'] = $this->input->post('message', TRUE);
    return $data;
}




function validate_captcha() 
{ 
    $this->load->module('setting_component');
    $p_keyme = $this->setting_component->_private_keyme;
    $captcha = $this->input->post('g-recaptcha-response'); 
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" .$p_keyme. "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']); 
    if ($response . 'success' == false)
     { 
        return FALSE;
    } else {
     return TRUE;
      }
 } 

}