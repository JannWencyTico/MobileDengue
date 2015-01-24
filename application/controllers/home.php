<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data       = $this->session->userdata('logged_in');
            $data['account_id']  = $session_data['account_id'];
            $data['username']   = $session_data['username'];
            $data['name']   = $session_data['name'];
            $data['mobilenum']  = $session_data['mobilenum'];

            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";

            $this->load->view('includes/header');
            $this->load->view('maps', $data);
            $this->load->view('includes/footer');
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


    function map()
    {
        $this->load->helper(array('form'));
        $this->load->view('includes/header');
        $this->load->view('maps');
        $this->load->view('includes/footer');
    }

}

?>
