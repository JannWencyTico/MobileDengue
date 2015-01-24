<?php
class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_display');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    function index()
    {

        $content = array('page_content1' => $this->m_display->listBrgy(),
                         'page_content2' => $this->m_display->listSeverity(),);

        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";
        
        $session_data = $this->session->userdata('logged_in');
        $data['name'] = $session_data['name'];
        $data['mobilenum'] = $session_data['mobilenum'];
        $data['account_id'] = $session_data['account_id'];

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->load->view('includes/header');
        $this->load->view('send_report', $content);
        $this->load->view('includes/footer');
    }

    public function send_new_report()
    {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['name'] = $session_data['name'];
        $data['account_id'] = $session_data['account_id'];
        $data['mobilenum'] = $session_data['mobilenum'];

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        
        $this->form_validation->set_rules('name', 'Name', 'required|xss_clean');
        $this->form_validation->set_rules('age', 'Age', 'required|xss_clean');
        $this->form_validation->set_rules('gender', 'Gender', 'required|xss_clean');
        $this->form_validation->set_rules('brgy_id', 'Barangay', 'required|xss_clean');
        $this->form_validation->set_rules('severity_id', 'Outcome', 'required|xss_clean');

        if($this->form_validation->run() != NULL)
        {
            $report['name']            = $this->input->post('name');
            $report['age']             = $this->input->post('age');
            $report['gender']          = $this->input->post('gender');
            $report['severity_id']     = $this->input->post('severity_id');
            $report['date_start']      = $this->input->post('ds_year')."-".$this->input->post('ds_month')."-".$this->input->post('ds_day');
            $report['date_end']        = $this->input->post('de_year')."-".$this->input->post('de_month')."-".$this->input->post('de_day');
            $report['date_admitted']   = $this->input->post('da_year')."-".$this->input->post('da_month')."-".$this->input->post('da_day');
            $report['address']         = $this->input->post('type');
            $report['brgy_id']         = $this->input->post('brgy_id');
            $report['sender']          = $data['numbers'];
            

            // echo "<pre>";
            // print_r($report);
            // echo "</pre>";
            
            $this->load->model('m_report');
            $this->m_report->send_report($report);

            redirect(base_url().'index.php/report');
        }
        else
        {
            echo "<script> alert('Please Insert Data'); history.go(-1); </script>";
        }

        }
}


?>