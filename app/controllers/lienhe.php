<?php

    class lienhe extends DController{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->lienhe();
        }

        public function lienhe(){
            $this->load->view('header');
            $this->load->view('lienhe');
            $this->load->view('footer');

        }

        
    }


?>