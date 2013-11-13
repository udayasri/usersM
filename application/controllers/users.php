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
		$this->load->view( 'users_view' );
	}
		
}