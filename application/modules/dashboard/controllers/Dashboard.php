<?php
class Dashboard extends MX_Controller 
{

function __construct() {
parent::__construct();
}

function home()
{
    $this->load->module('secure_me');
    $this->secure_me->_allow_only_authorise_persons();
    $data['flash'] = $this->session->flashdata('item');
    $data['view_file'] = "home";
    $this->load->module('chief');
    $this->chief->nwere($data);

}

}