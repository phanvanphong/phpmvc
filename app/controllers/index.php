<?php

    class index extends DController{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->homepage();
        }

        public function homepage(){

            // load danh muc
            $categorymodel = $this->load->model('categorymodel');
            $table_category = 'tbl_category_product';
            $data['category'] = $categorymodel->list_category($table_category);

            // load san pham
            $productmodel = $this->load->model('productmodel');
            $table_product = 'tbl_product';
            $data['product'] = $productmodel ->list_product_top9($table_product);

            // load san pham sale
            $data['sale_product'] = $productmodel ->sale_product($table_product);

            // load san pham noi bat
            $data['hot_product'] = $productmodel ->hot_product($table_product);


            $this->load->view('header');
            $this->load->view('slider');
            $this->load->view('home',$data);
            $this->load->view('footer');
        }

        public function notfound(){
            $this->load->view('404');
        }

    }

?>