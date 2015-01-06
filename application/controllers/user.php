<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('country_model');
    }

    public function index() {
        $this->load->view('register');
    }

    public function register() {
        $data['countries'] = $this->country_model->get_district();
        $this->load->view('post_view', $data);
    }

    public function get_cities($country) {
        $this->load->model('city_model');
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->city_model->get_district($district)));
    }

}