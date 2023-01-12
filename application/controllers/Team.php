<?php
    class Team extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct() ;
            if ($this->session->userdata('is_login') != true) {
                redirect('login') ;
            }
        }
        
        public function index () 
            {
                $this->load->view('templates/header');
                $this->load->view('team');
                $this->load->view('templates/sidebar');
                $this->load->view('templates/footer');
            }
        }