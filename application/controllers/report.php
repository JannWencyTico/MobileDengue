<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->model('m_display');
		$content = array(	'district' 		=> $this->m_display->list_district(),
							'sub_district'	=> $this->m_display->list_sub_district(),
							'barangay' 		=> $this->m_display->list_barangay());

		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";
		$this->load->view('includes/header');
		$this->load->view('form_report', $content);
		$this->load->view('includes/footer');

	}

	public function send_report()
	{
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'required|xss_clean');


		if($this->form_validation->run() != NULL)
		{
			$report['lastname'] 		= $this->input->post('lastname');
			$report['firstname'] 		= $this->input->post('firstname');
			$report['gender'] 			= $this->input->post('gender');
			$report['district'] 		= $this->input->post('district');
			$report['sub_district'] 	= $this->input->post('sub_district');
			$report['barangay'] 		= $this->input->post('barangay');

			// echo "<pre>";
			// print_r($report);
			// echo "</pre>";
			$this->load->model('report');
			$this->report->send_report($report);

			redirect(base_url().'index.php');
		}
		else
		{
			echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
		}

	}

}