<?php
class Map extends CI_Controller {

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
		$this->load->view('map');
		$this->load->view('includes/footer');
	}

}
?>