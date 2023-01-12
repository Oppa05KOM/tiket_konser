<?php

    class Home extends CI_Controller {
        public function index () 
            {
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('home');
                $this->load->view('templates/footer');
            }

            function __construct()
            {
                parent ::__construct() ;
                $this->load->model('m_hak_akses') ;
            }
    }
?>
