<?php

class Frontend_Controller extends MY_Controller{

    function __construct()
    {
        parent::__construct();
        $this->data['meta_title']=config_item('site_name');
        $this->load->helper('form');
        $this->load->library('form_validation');







    }


}
