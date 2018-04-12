<?php
class Igaps extends MX_Controller 
{

function __construct() {
parent::__construct();
}

function services()
{
    //figure out what the item ID is
    $item_url = $this->uri->segment(3);
    $this->load->module('construction_items');
    $item_id = $this->construction_items->_get_item_id_from_item_url($item_url);
    $this->construction_items->view($item_id);
}


function u()
{
    //figure out what the item ID is
    $item_url = $this->uri->segment(3);
    $this->load->module('drilling');
    $item_id = $this->drilling->_get_cat_id_from_cat_url($item_url);
    $this->drilling->view($item_id);
}

}