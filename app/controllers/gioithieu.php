<?php

    class gioithieu extends DController{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->gioithieu();
        }

        public function gioithieu(){
            $this->load->view('header');
            $this->load->view('gioithieu');
            $this->load->view('footer');

        }

        
    }


?>