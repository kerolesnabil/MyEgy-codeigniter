<?php

class User_m extends MY_Model
{
	protected $_table_name='users';
	protected $_order_by='name';
	public $rules = array(
		'email'=>array(
			'field'=>'email',
			'label'=>'Email',
			'rules'=>'trim|required|valid_email'
		),
		'password'=>array(
			'field'=>'password',
			'label'=>'Password',
			'rules'=>'trim|required'
		),
	);

	public $rules_admin = array(
		'name'=>array(
			'field'=>'name',
			'label'=>'Name',
			'rules'=>'trim|required'
		),
		'email'=>array(
			'field'=>'email',
			'label'=>'Email',
			'rules'=>'trim|required|callback__unique_email|valid_email'
		),
		'password'=>array(
			'field'=>'password',
			'label'=>'Password',
			'rules'=>'trim|matches[password_confirm]'
		),
		'password_confirm'=>array(
			'field'=>'password_confirm',
			'label'=>'Confirm password',
			'rules'=>'trim|matches[password]'
		),
	);


	function __construct()
	{
		parent::__construct();
	}

	public function get_new()
	{
		$user=new stdClass();
		$user->name='';
		$user->email='';
		$user->password='';
		return $user;
	}








}
