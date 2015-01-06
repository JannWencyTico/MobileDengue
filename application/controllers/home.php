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
            $session_data = $this->session->userdata('logged_in');
            $data['lastname'] = $session_data['lastname'];
            $data['firstname'] = $session_data['firstname'];

            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            $this->load->view('includes/header');
            $this->load->view('home_view', $data);
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



    public function map()
    {
    $this->load->view('includes/header');
    $this->load->view('map');
    $this->load->view('includes/footer');
    }

    }

?>
