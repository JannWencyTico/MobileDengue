<<<<<<< HEAD
<?php if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
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

    public function map()
    {
        $this->load->view('includes/header');
        $this->load->view('map');
        $this->load->view('includes/footer');
    }

    
}
=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }
 
}
 
?>
>>>>>>> 8ae5c1a9fcc26afce23e0617432a918cb6d80d53
