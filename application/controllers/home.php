<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_login');
    }

    public function index()
    {
        if($this->session->userdata('isLogin') == FALSE)
        {
            redirect('form_login/login');
        }
        else
        {


        $account = $this->m_login->user_login();
        
        $this->session->set_userdata('username', $account['username']);
        $this->session->set_userdata('prof_id', $account['prof_id']);
        $this->session->set_userdata('firstname', $account['firstname']);
        $this->session->set_userdata('lastname', $account['lastname']);

        // echo "<pre>";
        // print_r($account);
        // echo "</pre>";

        $this->load->view('includes/header');
        $this->load->view('map');
        $this->load->view('includes/footer');

        }
    }

    
}