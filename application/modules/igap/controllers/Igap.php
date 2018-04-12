<?php
class Igap extends MX_Controller 
{

function __construct() {
parent::__construct();
}

function service()
{
    //figure out what the category ID is
    $cat_url = $this->uri->segment(3);
    $this->load->module('igashar_categories');
    $cat_id = $this->igashar_categories->_get_cat_id_from_cat_url($cat_url);
    $this->igashar_categories->view($cat_id);
}



}