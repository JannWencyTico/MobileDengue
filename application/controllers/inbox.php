<?php
class Inbox extends CI_Controller {

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

        $content = array('page_content' => $this->m_display->inbox());

        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";

        $this->load->view('includes/header');
        $this->load->view('inbox', $content);
        $this->load->view('includes/footer');
    }

    public function view_message()
	{
		$tempmsg_id = $this->uri->segment(3, 0);	
 		$content = array('page_view_content' => $this->m_view->message($tempmsg_id));

		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";

		$this->load->view('includes/header');
		$this->load->view('reportdetails', $content);
		$this->load->view('includes/footer');
	    
	}

	public function reject_message()
	{
		$tempmsg_id = $this->uri->segment(3, 0);	

		// echo "<pre>";
		// print_r($tempmsg_id);
		// echo "</pre>";
		
		$this->load->model('m_display');
        $this->m_display->reject_message($tempmsg_id);

        redirect(base_url().'index.php/inbox');
	    
	}

	public function confirm_message()
	{
		$tempmsg_id = $this->uri->segment(3, 0);	
 		$content = array('page_view_content' => $this->m_view->message($tempmsg_id));

		// echo "<pre>";
		// print_r($content);
		// echo "</pre>";

		$report['lastname']        	= $content['page_view_content']['0']['lastname'];
        $report['firstname']       	= $content['page_view_content']['0']['firstname'];
        $report['middlename']      	= $content['page_view_content']['0']['middlename'];
        $report['age']             	= $content['page_view_content']['0']['age'];
        $report['gender']          	= $content['page_view_content']['0']['gender'];
        $report['date_start']       = $content['page_view_content']['0']['date_start'];
        $report['date_end']         = $content['page_view_content']['0']['date_end'];
        $report['date_admitted']    = $content['page_view_content']['0']['date_admitted'];
        $report['brgy']            	= $content['page_view_content']['0']['brgy_id'];
        $report['type']            	= $content['page_view_content']['0']['type_id'];
        $report['classification']  	= $content['page_view_content']['0']['class_id'];
        $report['outcome']         	= $content['page_view_content']['0']['outcome_id'];
        $report['sender_id']        = $content['page_view_content']['0']['sender_id'];
        $report['Date_Sended_Time'] = $content['page_view_content']['0']['Date_Sended_Time'];

        echo "<pre>";
        print_r($report);
        echo "</pre>";
        
        $this->load->model('m_report');
        $this->m_report->send_report($report);

        $this->load->model('m_display');
        $this->m_display->reject_message($tempmsg_id);

        redirect(base_url().'index.php/inbox');

	    
	}

 
}
?>