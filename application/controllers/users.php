<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller 
{	
	public function __construct() 
	{
        parent::__construct();
    }
	
	// This will load the login page
	public function index()
	{
		$this->load->model('users_model');
	
		$this->view_data['userDetails'] = $this->users_model->getUsersDetails();
			
		$this->load->view( 'users_view' , $this->view_data );
	}
	
}