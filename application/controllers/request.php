<?php
class Request extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_display');
        $this->load->model('m_view');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('email');
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

		// echo "<pre>";
		// print_r($request_id);
		// echo "</pre>";
		
        $this->load->model('m_display');
        $this->m_display->reject_request($request_id);

        redirect(base_url().'index.php/request');
	    
	}

	public function confirm_request()
	{
		$request_id = $this->uri->segment(3, 0);	
 		$content = array('page_view_content' => $this->m_view->request($request_id));

		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";

		$account['username']        = $content['page_view_content']['0']['username'];
        $account['password']        = $content['page_view_content']['0']['password'];
        $account['name']            = $content['page_view_content']['0']['name'];
        $account['mobilenum']       = $content['page_view_content']['0']['mobilenum'];
        $account['organization']    = $content['page_view_content']['0']['organization'];
        $account['email']           = $content['page_view_content']['0']['email'];

        // echo "<pre>";
        // print_r($account);
        // echo "</pre>";

        // add to  table account
        $this->load->model('Register');
        $this->Register->add_account($account);

        //  remove from table requests
        $this->load->model('m_display');
        $this->m_display->reject_request($request_id);

        $username = $content['page_view_content']['0']['username'];
        // echo $username;

        // get the details from the table account using the username
        $this->load->model('m_view');
        $content = array('page_view_content' => $this->m_view->code($username));

        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";

        $number = $content['page_view_content']['0']['mobilenum'];
        $email = $content['page_view_content']['0']['email'];
        $code = $content['page_view_content']['0']['account_id'];
        

        $config['protocol']     = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = 465;
        $config['smtp_user']    = 'wenztico@gmail.com';
        $config['smtp_pass']    = 'jannwencytico';
        $config['charset']      = 'utf-8';
        $config['mailtype']     = 'txt';
        $config['newline']      = "\r\n";   
                
        $this->email->initialize($config);

        $this->email->from('wenztico@gmail.com', 'Jann Wency Tico');
        $this->email->to($account['email']); 

        $this->email->subject('Registration Code');
        $this->email->message('This is your registration code: '.$code.' ');  

        $this->email->send();

        $this->email->print_debugger();

        // echo "<br/>Mobile Number: ";        
        // echo $number;
        // echo "<br/>Registration Code: ";    
        // echo $code;

        echo "<script> alert('Mobile Number: $number Code: $code'); history.go(-1); </script>";
        // redirect(base_url().'index.php/request');

	    
	}
 
}
?>