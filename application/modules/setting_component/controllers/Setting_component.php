<?php
class Setting_component extends MX_Controller 
{

function __construct() {
parent::__construct();
}

function _get_map_code()
{
    $code = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.6025641871647!2d7.07265809728853!3d4.838102741107489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cd413536988f%3A0xa7fcccf136973945!2siga-shar!5e0!3m2!1sen!2s!4v1497255004021" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>';
    return $code;
}
function _get_large_map_code()
{
    $code = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.6025641871647!2d7.07265809728853!3d4.838102741107489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cd413536988f%3A0xa7fcccf136973945!2siga-shar!5e0!3m2!1sen!2s!4v1497255004021" width="1300" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>';

    return $code;
}

function _get_our_name()
{
    $name = 'IGA-SHAR Group';
    return $name;
}
function _logo_head()
{
    $head = base_url().'iga-shar-img/logo-header-default.png';
    return $head;
}
function _logo_foot()
{
    $foot = base_url().'iga-shar-img/logo-vertical-default.png';
    return $foot;
}
function _logo_icon()
{
    $icon = base_url().'iga-shar-img/favicon.ico';
    return $icon;
}


function _get_our_address()
{
    $address = '33 OKOROJI STREET D/LINE,<br>';
    $address.= 'PORT HARCOURT.';
    return $address;
}

function _get_our_telnum()
{
    $telnum = '(+234) 803 3099815<br>';
    $telnum.= '(+234) 803 5434477';
    return $telnum;
}

function _public_keyme()
{
    $keyme = '6LdFbCQUAAAAAMbuFtWjOsKIm9dUXJCF2cYe3tYF';
    return $keyme;
}
function _private_keyme()
{
    $p_keyme = '6LdFbCQUAAAAALwzZSbkKN2KGl65muTZbXk_-BiG
';
    return $p_keyme;
}

function _get_paypal_email()
{
    $email = 'igashar@gmail.com';
    return $email;
}

function _get_support_team_name()
{
    $name = "Customer Support";
    return $name;
}

function _get_welcome_msg($customer_id)
{
    $this->load->module('store_accounts');
    $customer_name = $this->store_accounts->_get_customer_name($customer_id);

    $msg = "Hello ".$customer_name.",<br><br>";
    $msg.= "Thank you for creating an account with CI Shop.  If you have any questions ";
    $msg.= "about any of our products and services then please do get in touch.  We are here ";
    $msg.= "seven days a week and would be happy to help you.<br><br>";
    $msg.= "Regards,<br><br>";
    $msg.= "David Connelly (founder)";
    return $msg;
}

function _get_cookie_name()
{
    $cookie_name = 'hwefbjkbswerthnkopascdsdfhz';
    return $cookie_name;
}


function _get_item_segments()
{
    //return the segments for the store_item pages (produce pages)
    $segments = "igaps/services/";
    return $segments;
}

function _get_items_segments()
{
    //return the segments for the category pages
    $segments = "igap/service/";
    return $segments;
}

function _get_page_segments()
{
    //return the segments for the store_item pages (produce pages)
    $segments = "igaps/u/";
    return $segments;
}


function _get_blod_segments()
{
    //return the segments for the category pages
    $segments = base_url();
    return $segments;
}
function _give_welcome_msg()
{
    $welcome = 'Welcome to IGA-SHAR Group';
    return $welcome;
}

function _get_login_msg()
{
    $login_msg = 'IGA-SHAR SERVICES LIMITED, is a Nigerian company, incorporated in October, 1998 with its registered office at 69 Akpakpava Road, Benin, Nigeria. IGA-SHAR SERVICES LIMITED is involved in the distribution of oil and gas, other commodities and in the construction and engineering. It practices good governance and transparency in the conduct of its business.';
    return $login_msg;
}

function _email_detail()
{
    $email = 'igashar@gmail.com';
    return $email;
}
function _fax_detail()
{
    $fax = '';
    return $fax;
}
function _social_account()
{
    $social = 'You can login into our website with any of your social account for easy access. It is easy and save way of login in, it save time and does not affect you account, signup with Facebook, Google, or your Twitter account';
    return $social;
}

}