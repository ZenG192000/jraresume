<?php
class Portfolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sections');
        $this->load->view('templates/footer');
        $this->load->helper('url');
    }

    public function about()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/about');
        $this->load->view('templates/footer');
        $this->load->helper('url');
    }

    public function contact()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/contact');
        $this->load->view('templates/footer');
        $this->load->helper('url');
    }
}
