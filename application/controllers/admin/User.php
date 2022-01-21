<?php

class User extends Admin_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// Fetch all users
		$this->data['users']=$this->User_m->get();

		// load view
		$this->data['subview']='admin/user/index';
		$this->load->view('admin/_layout_main',$this->data);
	}

	public function edit ($id=null)
	{

		// Fetch a user or  set a new one
		if($id)
		{
			$this->data['user']=$this->User_m->get($id);
			count($this->data['user']) || $this->data['errors'][]='User could not be found';
		}
		else{
			$this->data['user']=$this->User_m->get_new($id);
		}

		// Set up form
		$rules=$this->User_m->rules_admin;

		$id || $rules['password']['rules'].='|required';

		$this->form_validation->set_rules($rules);


		//Process the form
		if ($this->form_validation->run() == true){
			$data=$this->User_m->array_from_post(array('name','email','password'));
			$data['password'].=$this->User_m->hash($data['password']);
			$this->User_m->save($data,$id);
			redirect('admin/user');

		}
		//Load view
		$this->data['subview']='admin/user/edit';
		$this->load->view('admin/_layout_main',$this->data);

	}

	public function delete($id)
	{
		$this->User_m->delete($id);
		redirect('admin/user');

	}





}
