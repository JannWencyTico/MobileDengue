<?php
class Registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Register');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	function index()
	{
		$this->load->view('includes/header');
		$this->load->view('registration');
		$this->load->view('includes/footer');
	}

	public function register()
	{
		$this->form_validation->set_rules('username',		'Username', 	'required|xss_clean');
		$this->form_validation->set_rules('password',		'Password', 	'required|xss_clean');
		$this->form_validation->set_rules('name',			'Name ', 		'required|xss_clean');
		$this->form_validation->set_rules('mobilenum', 		'Mobile Number','required|xss_clean');
		$this->form_validation->set_rules('organization', 	'Organization', 'required|xss_clean');

		if($this->form_validation->run() != NULL)
		{
			$account['username'] 		= $this->input->post('username');
			$account['password'] 		= $this->input->post('password');
			$account['name'] 			= $this->input->post('name');
			$account['mobilenum'] 		= $this->input->post('mobilenum');
			$account['organization'] 	= $this->input->post('organization');

			// echo "<pre>";
			// print_r($account);
			// echo "</pre>";
			$this->load->model('Register');
			$this->Register->add_account($account);
			redirect(base_url().'index.php/registration');
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}

	}
}
?>