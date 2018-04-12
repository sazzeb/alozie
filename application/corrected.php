<?php
class Youraccount extends MX_Controller 
{

function __construct() {
parent::__construct();
$this->load->library('form_validation');
$this->form_validation->CI =& $this;
}


function update_reset_p()
{
    $submit = $this->input->post('submit', TRUE);

    if($submit =="Submit")
    {
        if(!isset($_POST['email'], $_POST['email_hashed']) || $_POST['email_hashed'] != sha1($_POST['email'].$_POST['email_code']))
        {
            die('We Encounter error updating your password');
        }
        $this->form_validation->set_rules('email_hashed', 'Email Hashed', 'trim|required');
        $this->form_validation->set_rules('email', 'Email ', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('pword', 'password', 'trim|required|min_length[6]|max_length[50]|matches[repeat_pword]|xss_clean');
        $this->form_validation->set_rules('repeat_pword', 'Repeat Password', 'trim|required|min_length[6]|max_length[50]|xss_clean');
        if($this->form_validation->run() == FALSE)
        {
            $flash_msg = "We encounter problem filling your updating your password, retry";
            $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
            $this->session->set_flashdata('item', $value);
            redirect('youraccount/reset');
        }else{
            $result = $this->_update_password();
            if($result)
            {
                $flash_msg = "Congratulation: your password was updated successfully, you can now use your new password to sign in. Thanks for your corperation.";
                    $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
                    $this->session->set_flashdata('item', $value);
                    redirect('youraccount/reset');
                }else{
                    $flash_msg = "We are very sorry your password was not properly updated, you can contact the admin at '".$this->config->item('iag_solution')."'";
                    $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
                    $this->session->set_flashdata('item', $value);
                    redirect('youraccount/reset');
                }
            }
    }
}

function _update_password()
{
    $email = $this->input->post('email', TRUE);
    $password = '';
    $mysql_query = "UPDATE youraccount SET password = '$password' WHERE email = '{$email}' LIMIT 1";
    $query = $this->_custom_query($mysql_query);
    if($this->db->affected_rows === 1)
    {
        return TRUE;
    }else{
        return FALSE;
    }
}

function send_reset()
{
    $submit = $this->input->post('submit', TRUE);
    $data = $this->fetch_data_from_post();
    if ($submit=="Submit") {
        //process the form
        if(isset($_POST['email']) && !empty($_POST['email']))
        {
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|min_length[6]|max_length[50]|valid_email|xss_clean');
            if($this->form_validation->run() == FALSE)
            {
                $flash_msg = "The email is not a valid email address or not in our database";
                $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
                $this->session->set_flashdata('item', $value);
                redirect('youraccount/forgotten');
            }else{
                $email = trim($this->input->post('email'), TRUE);
                $result = $this->_email_exist($email);
                if($result)
                {
                    $this->_send_reset_password_email($email, $result);
                    $flash_msg = "An email has been sent to the email address that you provided, proceed to email address to validate";
                    $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
                    $this->session->set_flashdata('item', $value);
                    redirect('youraccount/reset_msg');
                }else{
                    $flash_msg = "Email Does not exist in our database, check the email address and retype correctly";
                    $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
                    $this->session->set_flashdata('item', $value);
                    redirect('youraccount/forgotten');
                }
            }

            }else{
                $flash_msg = "An email has been sent to your email address head over to your email and verify it.";
                $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
                $this->session->set_flashdata('item', $value);
                redirect('youraccount/forgotten');
        }
    }

}


function _email_exist($email)
{
    $mysql_query = "SELECT firstname, email FROM youraccount WHERE email = '{$email}'";
    $query = $this->_custom_query($mysql_query);
    $row = $query->row();

    return ($query->num_rows() == 1 && $row->email) ? $row->firstname : FALSE;
}


function _send_reset_password_email($email, $firstname)
{
    $this->load->library('email');
    $email_code = md5($this->config->item('salt').$firstname);
    $this->email->from($this->config->item('iga_info'), 'IGA-SHAR GROUP');
    $this->email->to($email);
    $this->email->subject('Please Reset Your IGA-SHAR GROUP Password');
    $message = '"<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        </head>
        <body>"';
    $message.= '<p>'.$firstname.'</p>';
    $message.= '<p>We want to help you reset your password! Please <strong><a href="'.base_url().'youraccount/helpMeReset/'.$email. '/'.$email_code.'"> Click Here </a></strong>When you click on that link you will be able to activate your link</p>';
    $message.= 'Thank You!<br>';
    $message.= 'Managers and Directors of IGA-SHAR GROUP';
    $message.='</body>
            </html>';
    $this->email->message($message);
    $this->email->send();
}

function helpMeReset($email, $email_code)
{
    if(isset($email, $email_code))
    {
        $email = trim($email);
        $email_hashed = sha1($email.$email_code);
        $verified = $this->_verify_reset_password_code($email, $email_code);
        if($verified)
        {
            $data['email'] = $email;
        $data['email'] = $email_code;
        $data['email_hashed'] = $email_hashed;
            $flash_msg = "Email successfully verified, you can now change your password.";
            $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
            $this->session->set_flashdata('item', $value);
            redirect('youraccount/reset', $data);
        }else{
            $flash_msg = "Email was not verified correctly, something went wrong.";
            $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
            $this->session->set_flashdata('item', $value);
            redirect('youraccount/forgotten');
        }
    }
}

function _verify_reset_password_code($email, $code)
{
    $mysql_query = "SELECT firstname, email FROM youraccount WHERE email = '{$email}' LIMIT 1";
    $query = $this->_custom_query($mysql_query);
    $row = $query->row();
    if($query->num_rows() == 1)
    {
        return ($code == md5($this->config->item('salt').$row->firstname)) ? TRUE : FALSE;
    }else{
        return FALSE;
    }

}

function forgotten()
{

    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "forgot_password";
    $this->load->module('chief');
    $this->chief->odara($data);
}

function reset()
{
    $this->load->module('setting_component');
    $data['log_msg'] = $this->setting_component->_get_login_msg();
    $data['welcome_msg'] = $this->setting_component->_give_welcome_msg();
    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "reset_password";
    $this->load->module('chief');
    $this->chief->odara($data);
}

function reset_msg()
{
    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "reset_msg";
    $this->load->module('chief');
    $this->chief->odara($data);
}

function _generate_token($update_id)
{
    $data = $this->fetch_data_from_db($update_id);
    $date_made = $data['date_made'];
    $last_login = $data['last_login'];
    $pword = $data['pword'];

    $pword_length = strlen($pword);
    $start_point = $pword_length-6;
    $last_six_chars = substr($pword, $start_point, 6);
    
    if (($pword_length>5) AND ($last_login>0)) {
        $token = $last_six_chars.$date_made.$last_login;
    } else {
        $token = '';
    }

    return $token;
}

function _get_customer_id_from_token($token)
{
    $last_six_chars = substr($token, 0, 6); //last six from stored (hashed) pword
    $date_made = substr($token, 6, 10);
    $last_login = substr($token, 16, 10);
    
    $sql = "SELECT * FROM youraccount WHERE date_made = ? AND pword LIKE ? AND last_login = ?";
    $query = $this->db->query($sql, array($date_made, '%'.$last_six_chars, $last_login));
    foreach($query->result() as $row) {
        $customer_id = $row->id;
    }

    if (!isset($customer_id)) {
        $customer_id = 0;
    }

    return $customer_id;
}

function _get_customer_name($update_id, $optional_customer_data=NULL)
{

    if (!isset($optional_customer_data)) {
        $data = $this->fetch_data_from_db($update_id);
    } else {
        $data['firstname'] = $optional_customer_data['firstname'];
        $data['lastname'] = $optional_customer_data['lastname'];
        $data['company'] = $optional_customer_data['company'];
    }
    
    if ($data=="") {
        $customer_name = "Unknown";
    } else {
        $firstname = trim(ucfirst($data['firstname']));
        $lastname = trim(ucfirst($data['lastname']));
        $company = trim(ucfirst($data['company']));

        $company_length = strlen($company);
        if ($company_length>2) {
            $customer_name = $company;
        } else {
            $customer_name = $firstname." ".$lastname;
        }
    }

    return $customer_name;
}

function update_pword() 
{

    $this->load->library('session');
    $this->load->module('secure_me');
    $this->secure_me->_allow_only_authorise_persons();

    $update_id = $this->uri->segment(3);
    $submit = $this->input->post('submit', TRUE);

    if (!is_numeric($update_id)) {
        redirect('youraccount/manage');
    } elseif ($submit=="Cancel") {
        redirect('youraccount/create/'.$update_id);
    }

    if ($submit=="Submit") {
        //process the form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('pword', 'Password', 'required|min_length[7]|max_length[35]');
        $this->form_validation->set_rules('repeat_pword', 'Repeat Password', 'required|matches[pword]');

        if ($this->form_validation->run() == TRUE) {
            //get the variables
            $pword = $this->input->post('pword', TRUE);
            $this->load->module('secure_me');
            $data['pword'] = $this->secure_me->_hash_string($pword);
     
            //update the item details
            $this->_update($update_id, $data);
            $flash_msg = "The account password was successfully updated.";
            $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
            $this->session->set_flashdata('item', $value);
            redirect('youraccount/create/'.$update_id);
            
        }
    }

    $data['headline'] = "Update Account Password";
    $data['update_id'] = $update_id;
    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "update_pword";
    $this->load->module('chief');
    $this->chief->nwere($data);
}
 function logout() {
    unset($_SESSION['user_id']);
    $this->load->module('site_cookies');
    $this->site_cookies->_destroy_cookie();
    redirect(base_url());
}

function welcome()
{
    $this->load->module('secure_me');
    $this->secure_me->_make_sure_logged_in();
    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "welcome";
    $this->load->module('chief');
    $this->chief->odara($data);
}

function login()
{
    $this->load->module('setting_component');
    $data['social'] = $this->setting_component->_social_account();
    $data['flash'] = $this->session->flashdata('item');
    $data['username'] = $this->input->post('username', TRUE);
    $data['view_file'] = "login";
    $this->load->module('chief');
    $this->chief->odara($data); 
}

function login_user()
{
    $submit = $this->input->post('submit', TRUE);

    if ($submit=="Submit") {
        //process the form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[60]|callback_username_check');
        $this->form_validation->set_rules('pword', 'Password', 'required|min_length[7]|max_length[35]');

        if ($this->form_validation->run() == TRUE) {
            
            //figure out the user_id
            $col1 = 'username';
            $value1 = $this->input->post('username', TRUE);
            $col2 = 'email';
            $value2 = $this->input->post('username', TRUE);
            $query = $this->get_with_double_condition($col1, $value1, $col2, $value2);
            foreach($query->result() as $row) {
                $user_id = $row->id;
            }

            $remember = $this->input->post('remember', TRUE);
            if ($remember=="remember-me") {
                $login_type = "longterm";
            } else {
                $login_type = "shortterm";
            }

            $data['last_login'] = time();
            $this->_update($user_id, $data);

            //send them to the private page
            $this->_in_you_go($user_id, $login_type);

        } else {
            redirect('youraccount/login');
        }
    }

}

function _in_you_go($user_id, $login_type)
{
    //NOTE: the login_type can be longterm or shortterm
    if ($login_type=="longterm") {
        //set a cookie
        $this->load->module('site_cookies');
        $this->site_cookies->_set_cookie($user_id);
    } else {
        //set a session variable
        $this->session->set_userdata('user_id', $user_id);
    }

    //send the user to the private page
    redirect('youraccount/welcome');
}

function submit()
{
    $submit = $this->input->post('submit', TRUE);

    if ($submit=="Submit") {
        //process the form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[60]|is_unique[youraccount.username]|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[120]|is_unique[youraccount.email]|xss_clean');
        $this->form_validation->set_rules('pword', 'Password', 'required|min_length[7]|max_length[35]');
        $this->form_validation->set_rules('repeat_pword', 'Repeat Password', 'required|matches[pword]');
        $this->form_validation->set_rules('telnum', 'Telephone', 'required|numeric|min_length[11]|max_length[11]');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[3]');
        $this->form_validation->set_rules('lastname', 'Repeat PasswordLast Name', 'required|min_length[3]');
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha'); 
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');
        if ($this->form_validation->run() == TRUE) {
            //get the variables

        $this->_process_create_account();
        }
     }

}

function _process_create_account()
{

    $data = $this->fetch_data_from_post();
    $data = $this->_set_session($firstname, $lastname, $email, $company);
    unset($data['repeat_pword']);
    $pword = $data['pword'];
    $this->load->module('secure_me');
    $data['pword'] = $this->secure_me->_hash_string($pword);
    $email = $this->_set_session($firstname, $lastname, $email, $company);
    $data = $this->_send_validation_email($reg_time);
    if($this->_insert($data);)
    {
        $flash_msg = "Your account was register successfully, you can head to '".$email."' to confirm you account, an email has be sent to that account";
        $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
        $this->session->set_flashdata('item', $value);
        redirect('youraccount/login');
        }else{
        $flash_msg = "Your registration failed, you can contact admiistrator at '".$this->config->item('iga_solution')."' to assist you further";
        $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
        $this->session->set_flashdata('item', $value);
        $this->start(); 
    }
        $flash_msg = "This did not work, information where entered wrongly.";
        $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
        $this->session->set_flashdata('item', $value);
        $this->start();
}

function _set_session($firstname, $lastname, $email, $company)
{
    $mysql_query =  "SELECT id, reg_time FROM youraccount WHERE email = '{$email}' LIMIT 1";
    $result = $this->_custom_query($mysql_query);
    $row = $result->row();
    $sess_data = array(
                'id' => $row->id,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'company' => $company,
                'logged_in' => 0
                );
    $sess_data = $this->email_code = md5((string)$row->reg_time);
    $data = $this->session->set_userdata($sess_data);
    return $data;
}


function _send_validation_email($reg_time)
{
    $this->load->library('email');
    $mysql_query = $this->get_where_custom('reg_time', $reg_time);
    $email = $this->session->userdata('email');
    $this->email->from($this->config->item('iga_mail'), 'IGA-SHAR GROUP');
    $this->email->to($email);
    $this->email->subject('Activate Your Account');


    $message = '"<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        </head>
        <body>"';
    $message.= '<p>Dear '.$this->session->userdata('firstname'). '</p> ';
    $message.= '<p>Thanks for registering at IGA-SHAR GROUP! Please <strong><a href="'.base_url().'youraccount/fSDEgsjkEDRFcki/'.$email. '/'.$email_code.'"> Click Here </a></strong>When you click on that link you will be able to activate your link</p>';
    $message.= 'Thank You!';
    $message.='Managers and Directors of IGA-SHAR GROUP';
    $message.='</body>
            </html>';
    $this->email->message($message);
    $this->email->send();

}



function _activate_account($email_address)
{
    $mysql_query = "UPDATE youraccount SET verified = 1 WHERE email = '".$email_address."' LIMIT 1";
    $this->_custom_query($mysql_query);
    if($this->db->affected_rows() === 1) 
    {
        return TRUE;
    }else{
        //this should ever happen, except database is not online
        echo 'Error occour when activating your mail, contact admin '.$this->config->item('iga_mail');
        return FALSE; 
    }
}




function fSDEgsjkEDRFcki($email_address, $email_code)
{
    $email_code = trim($email_code);

    $validate = $this->_get_user_validate_address($email_address, $email_code);

    if($validate === TRUE)
    {
        $data['email_address'] = $email_address;
        $flash_msg = "Your email was successfully verified, you can now login";
        $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
        $this->session->set_flashdata('item', $value);
        redirect('youraccount/login', $data);
    }

}



function _get_user_validate_address($email_address, $email_code)
{
    $mysql_query = "SELECT email, reg_time, firstname FROM youraccount WHERE email = '{$email_address}' LIMIT 1";
    $result = $this->_custom_query($mysql_query);
    $row = $result->row();
    if($result->num_rows() == 1 && $row->firstname)
    {
        if(md5((string)$row->reg_time) == $email_code)
        {
            $result = $this->_activate_account($email_address);
        }else{
            $result = FALSE;
        }


        
    if($result == TRUE)
    {
        return TRUE;
    }else{
        //this should ever happen, except database is not online
        echo 'Error occour when activating your mail, contact admin '.$this->config->item('iga_mail');
        return FALSE; 
    }

    }else{
        //this should ever happen, except database is not online
        echo 'Error occour when activating your mail, contact admin '.$this->config->item('iga_mail');
        return FALSE; 
    }
}

function start()
{
    $this->load->module('setting_component');
    $data = $this->fetch_data_from_post();
    $data['keyme'] = $this->setting_component->_public_keyme();
    $data['welcome'] = $this->setting_component->_give_welcome_msg();
    $data['login_msg'] = $this->setting_component->_get_login_msg();
    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "start";
    $this->load->module('chief');
    $this->chief->odara($data);
}

function fetch_data_from_post()
{
    $data['username'] = $this->input->post('username', TRUE);
    $data['email'] = $this->input->post('email', TRUE);
    $data['pword'] = $this->input->post('pword', TRUE);
    $data['repeat_pword'] = $this->input->post('repeat_pword', TRUE);
    $data['telnum'] = $this->input->post('telnum', TRUE);
    $data['company'] = $this->input->post('company', TRUE);
    $data['lastname'] = $this->input->post('lastname', TRUE);
    $data['firstname'] = $this->input->post('firstname', TRUE);
    return $data;
}

function fetch_data_from_db($update_id) 
{

    if (!is_numeric($update_id)) {
        redirect('invalid/error');
    }

    $query = $this->get_where($update_id);
    foreach($query->result() as $row) {
        $data['username'] = $row->username;
        $data['firstname'] = $row->firstname;
        $data['lastname'] = $row->lastname;
        $data['company'] = $row->company;
        $data['telnum'] = $row->telnum;
        $data['email'] = $row->email;
        $data['date_made'] = $row->date_made;
        $data['pword'] = $row->pword;
        $data['last_login'] = $row->last_login;
    }

    if (!isset($data)) {
        $data = "";
    }

    return $data;
}

function get($order_by)
{
    $this->load->model('Mdl_youraccount');
    $query = $this->Mdl_youraccount->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) 
{
    if ((!is_numeric($limit)) || (!is_numeric($offset))) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_youraccount');
    $query = $this->Mdl_youraccount->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_youraccount');
    $query = $this->Mdl_youraccount->get_where($id);
    return $query;
}

function get_where_custom($col, $value) 
{
    $this->load->model('Mdl_youraccount');
    $query = $this->Mdl_youraccount->get_where_custom($col, $value);
    return $query;
}

function get_with_double_condition($col1, $value1, $col2, $value2) 
{
    $this->load->model('Mdl_youraccount');
    $query = $this->Mdl_youraccount->get_with_double_condition($col1, $value1, $col2, $value2);
    return $query;
}

function _insert($data)
{
    $this->load->model('Mdl_youraccount');
    $this->Mdl_youraccount->_insert($data);
}

function _update($id, $data)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_youraccount');
    $this->Mdl_youraccount->_update($id, $data);
}

function _delete($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('Mdl_youraccount');
    $this->Mdl_youraccount->_delete($id);
}

function count_where($column, $value) 
{
    $this->load->model('Mdl_youraccount');
    $count = $this->Mdl_youraccount->count_where($column, $value);
    return $count;
}

function get_max() 
{
    $this->load->model('Mdl_youraccount');
    $max_id = $this->Mdl_youraccount->get_max();
    return $max_id;
}

function _custom_query($mysql_query) 
{
    $this->load->model('Mdl_youraccount');
    $query = $this->Mdl_youraccount->_custom_query($mysql_query);
    return $query;
}


function username_check($str) 
{

    $this->load->module('youraccount');
    $this->load->module('secure_me');

    $error_msg = "You did not enter a correct username and/or password.";

    $col1 = 'username';
    $value1 = $str;
    $col2 = 'email';
    $value2 = $str;
    $query = $this->get_with_double_condition($col1, $value1, $col2, $value2);
    $num_rows = $query->num_rows();

    if ($num_rows<1) {
        $this->form_validation->set_message('username_check', $error_msg);
        return FALSE;        
    }

    foreach($query->result() as $row) {
        $pword_on_table = $row->pword;
    }

    $pword = $this->input->post('pword', TRUE);
    $result = $this->secure_me->_verify_hash($pword, $pword_on_table);

    if ($result==TRUE) {
        return TRUE;
    } else {
        $this->form_validation->set_message('username_check', $error_msg);
        return FALSE;         
    }
}

function validate_captcha() 
{ 
    $this->load->module('setting_component');
    $p_keyme = $this->setting_component->_private_keyme();
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