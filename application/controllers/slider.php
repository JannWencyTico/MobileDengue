<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slider extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('includes/header');
		$this->load->helper(array('form'));
		$this->load->view('slides_v');
		$this->load->view('includes/footer');

		
	}

}

?>