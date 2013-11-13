<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{	
	public function __construct() 
	{
        parent::__construct();
    }
	
	// This will load the login page
	public function index()
	{
		$this->load->view( 'login_view' );
	}
	
	 // handles the user log in
	function login_validate()
	{
		$this->load->library('form_validation');
			
		//setting custom validation messages
		$this->form_validation->set_message('required', '%s cannot be empty.');
		$this->form_validation->set_message('alpha_dash', '%s please use / of - only ');
		
		//setting validation rules
		$this->form_validation->set_rules('username', 'User Name', 'required|xss_clean|max_length[45]|alpha_dash');
		$this->form_validation->set_rules('password','Password', 'required|xss_clean|max_length[45]|alpha_dash');
		
	
		if ($this->form_validation->run() == true)
		{
			
			//asigning post data to variables
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->load->model('login_model');
			$valideuser = $this->login_model->veryfy_user($username,$password);
			//$valideuser = true;
			if($valideuser == true)
			{	
				$this->session->set_userdata('username', $username );
				echo '{"validation_result": "passed"}'; //if user is a valid user send json data to ajax_admin_login.js
				
			}
				
			else
			{
				echo '{"registration" : "falied"}'; //if something happern during the user validation process ,this json data will pass to create error messages.
				//echo "<script>$().toastmessage('showErrorToast', 'You are not a registered user!');<script>";
				$this->session->sess_destroy(); 
			}
			
		}
		else
		{
			
			//if username & passwords are empty or bad inputs these json data will be passed to ajax_admin_login.js.
			//then the error messages will displayed.
		
			$output = '{"username":"'.form_error('username').'",
			"password":"'.form_error('password').'"}';
	
			echo $output;
			$this->session->sess_destroy();
			// $this->session->set_flashdata('login',form_error('username') );
			// $this->session->set_flashdata('login2',form_error('password') );
			//index();
			//redirect(base_url()."/administrator"); 
			
			//echo "<script>$().toastmessage('showErrorToast', 'You are not a registered user!');<script>";
		}
	}

	function log_out(){
		
		//define varible for username which is going to change
		$username = $this->session->userdata('username');
		
		//destroy the session data
		$this->session->sess_destroy();
	
		redirect(base_url()."login"); 
		}

	function alpha_dash_space($str_in){
	    return ( ! preg_match("/^([-a-z0-9_-\s,().\/])+$/i", $str_in)) ? FALSE : TRUE;
    }

    function numeric_slash($str_in){
    	return ( ! preg_match("/^([0-9\/])+$/i", $str_in)) ? FALSE : TRUE;
    }    	
}