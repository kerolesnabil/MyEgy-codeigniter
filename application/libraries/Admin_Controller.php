<?php

class Admin_Controller extends MY_Controller{

    function __construct()
    {
        parent::__construct();
        $this->data['meta_title']='MyEgy';

		$this->load->model('User_m');

    }


}
