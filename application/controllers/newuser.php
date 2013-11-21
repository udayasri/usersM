<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newuser extends CI_Controller 
{	
	public function __construct() 
	{
        parent::__construct();
    }
	
	// This will load the login page
	public function index()
	{
		$this->load->view( 'newuser_view' );
	}
	
	function addnewuser()
	{
		$this->load->library('form_validation');
		
		//setting cutom validation errors
		$this->form_validation->set_message('required', '%s cannot be empty');
		$this->form_validation->set_message('min_length', '%s should be at least %s characters');
		$this->form_validation->set_message('max_length', '%s should be less than %s characters');
		$this->form_validation->set_message('alpha_numeric', '%s should be in alpha-numeric characters');
		$this->form_validation->set_message('exact_length', '%s should be exactly %s characters long');
		$this->form_validation->set_message('valid_email', '%s should be a valid email address');
		$this->form_validation->set_message('alpha_dash_space','%s should be contained a valid text');
		
		//setting validation rules
		$this->form_validation->set_rules('username', 'User name', 'required|xss_clean|alpha_dash_space|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean|alpha_dash_space|min_length[5]|max_length[25]');
		$this->form_validation->set_rules('repassword', 'Re Entered password', 'required|xss_clean|alpha_dash_space|min_length[5]|max_length[25]');
		$this->form_validation->set_rules('firstname', 'First name', 'required|xss_clean|alpha_dash_space|max_length[25]');
		$this->form_validation->set_rules('phone', 'Phone number', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'email', 'required|xss_clean|valid_email|max_length[45]');
		$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
		$this->form_validation->set_rules('loan_type', 'Loan Type', 'required|xss_clean');
		$this->form_validation->set_rules('purpose_ofloan', 'Purpose of the loan', 'required|xss_clean');
		$this->form_validation->set_rules('wysiwyg', 'note', 'xss_clean');
		
		if($this->form_validation->run() != false)
		{
					
			$this->load->model('newuser_model');
			$query = 'INSERT INTO users ( user_name, user_password, firstname, email, phone, address, loan_type, purpose_ofloan,
						note, usergroup )
						VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )';
			$params = array($this->input->post('username'),
							$this->input->post('password'),
							$this->input->post('firstname'),
							$this->input->post('email'),
							$this->input->post('phone'),
							$this->input->post('address'),
							$this->input->post('loan_type'),
							$this->input->post('purpose_ofloan'),
							$this->input->post('wysiwyg'),
							$this->input->post('usergroup')
							);
			
			$newuserid = $this->newuser_model->insertuser( $query,$params );
			$this->session->set_userdata('newuser_id', $newuserid );
			
			if( $newuserid != null)
			{
				$visible_users = $this->input->post('s2_2');
			
				$visible_user = null;
				
				for($i=0; $i<= count($visible_users); $i++ )
				{
					
					$visible_user.$i = $visible_users[$i];
					
					$params = array( $this->session->userdata('newuser_id') , $visible_user.$i );
					
					$query = 'INSERT INTO `visible_users` ( user_id, visible_user_id )
							VALUES ( ?, ? )';
					
					$newuserid = $this->newuser_model->insertvisibleusers( $query,$params );
				}
			
				$this->session->unset_userdata('newuser_id');
				echo '{"validation_result": "passed"}';
			}
			
			
		}
		
		else{
			
			//if validation error happens, we need to echo it as a json object
			$output = '{ "username": "'.form_error('username').'",
						"password": "'.form_error('password').'",
						"firstname": "'.form_error('firstname').'",
						"email": "'.form_error('email').'",
						"phone": "'.form_error('phone').'",
						"address": "'.form_error('address').'",
						"loan_type": "'.form_error('loan_type').'",
						"purpose_ofloan": "'.form_error('purpose_ofloan').'",
						"wysiwyg": "'.form_error('wysiwyg').'"
						}';
			echo $output;
		}
		
	}
		
}