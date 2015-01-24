<?php
class Request extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_display');
        $this->load->model('m_view');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    function index()
    {

        $content = array('page_content' => $this->m_display->request());

        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";

        $this->load->view('includes/header');
        $this->load->view('request', $content);
        $this->load->view('includes/footer');
    }

    public function view_request()
    {
        $request_id = $this->uri->segment(3, 0);    
        $content = array('page_view_content' => $this->m_view->request($request_id));

        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";

        $this->load->view('includes/header');
        $this->load->view('requestdetails', $content);
        $this->load->view('includes/footer');
        
    }


	public function reject_request()
	{
		$request_id = $this->uri->segment(3, 0);	

		echo "<pre>";
		print_r($request_id);
		echo "</pre>";
		
        $this->load->model('m_display');
        $this->m_display->reject_request($request_id);

        redirect(base_url().'index.php/request');
	    
	}

	public function confirm_request()
	{
		$request_id = $this->uri->segment(3, 0);	
 		$content = array('page_view_content' => $this->m_view->request($request_id));

		echo "<pre>";
		print_r($content);
		echo "</pre>";

		$account['username']        = $content['page_view_content']['0']['username'];
        $account['password']        = $content['page_view_content']['0']['password'];
        $account['name']            = $content['page_view_content']['0']['name'];
        $account['mobilenum']       = $content['page_view_content']['0']['mobilenum'];
        $account['organization']    = $content['page_view_content']['0']['organization'];

        // echo "<pre>";
        // print_r($account);
        // echo "</pre>";
        
        $this->load->model('Register');
        $this->Register->add_account($account);

        redirect(base_url().'index.php/request');

	    
	}

 
}
?>