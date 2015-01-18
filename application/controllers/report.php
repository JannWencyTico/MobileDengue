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
                         'page_content2' => $this->m_display->listGender(),
                         'page_content3' => $this->m_display->listType(),
                         'page_content4' => $this->m_display->listClassification(),
                         'page_content5' => $this->m_display->listOutcome(),);

        // echo "<pre>";
        // print_r($content);
        // echo "</pre>";

        $this->load->view('includes/header');
        $this->load->view('send_report', $content);
        $this->load->view('includes/footer');
    }

    public function send_new_report()
    {
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|xss_clean');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|xss_clean');
        $this->form_validation->set_rules('middlename', 'Middle Name', 'required|xss_clean');
        $this->form_validation->set_rules('age', 'Age', 'required|xss_clean');
        $this->form_validation->set_rules('gender', 'Gender', 'required|xss_clean');
        $this->form_validation->set_rules('brgy', 'Barangay', 'required|xss_clean');
        $this->form_validation->set_rules('type', 'Type', 'required|xss_clean');
        $this->form_validation->set_rules('classification', 'Classification', 'required|xss_clean');
        $this->form_validation->set_rules('outcome', 'Outcome', 'required|xss_clean');

        if($this->form_validation->run() != NULL)
        {
            $report['lastname']        = $this->input->post('lastname');
            $report['firstname']       = $this->input->post('firstname');
            $report['middlename']      = $this->input->post('middlename');
            $report['age']             = $this->input->post('age');
            $report['date_start']      = $this->input->post('ds_year')."-".$this->input->post('ds_month')."-".$this->input->post('ds_day');
            $report['date_end']        = $this->input->post('de_year')."-".$this->input->post('de_month')."-".$this->input->post('de_day');
            $report['date_admitted']   = $this->input->post('da_year')."-".$this->input->post('da_month')."-".$this->input->post('da_day');
            $report['gender']          = $this->input->post('gender');
            $report['brgy']            = $this->input->post('brgy');
            $report['type']            = $this->input->post('type');
            $report['classification']  = $this->input->post('classification');
            $report['outcome']         = $this->input->post('outcome');

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