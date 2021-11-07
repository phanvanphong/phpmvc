<?php

    class tintuc extends DController{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->tintuc();
        }

        public function tintuc(){
            $this->load->view('tintuc');
            $this->load->view('footer');

        }

        
    }


?>