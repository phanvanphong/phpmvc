<?php

    class category extends DController{

        public function __construct(){
            $data = array();
            $message = array();
            parent::__construct();
        }

        public function index(){
            $this->list_category();
        }

        public function list_category(){

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
    
            // load model categorymodel
            $categorymodel = $this->load->model('categorymodel');

            // Tao biến table_category_product để hứng tên bảng dữ liệu sau đó truyển vào hàm category
            $table_category_product = 'tbl_category_product';
            $data['category'] = $categorymodel->list_category($table_category_product);
            
            $this->load->view('cpanel/category/list_category',$data);
            $this->load->view('cpanel/footer');
        }

        public function add_category(){
                $this->load->view('cpanel/header');
                $this->load->view('cpanel/menu');
                $this->load->view('cpanel/category/add_category');
                $this->load->view('cpanel/footer');
        }

        public function insert_category(){
            
             // load model categorymodel
             $categorymodel = $this->load->model('categorymodel');
 
             // Tao biến table_category_product để hứng tên bảng dữ liệu sau đó truyển vào hàm category
             $table_category_product = 'tbl_category_product';
             $title = $_POST['title_category_product'];
             $desc = $_POST['desc_category_product'];
             
             $data = array(
                'title_category_product' => $title,
                'desc_category_product' => $desc
             );

            $result = $categorymodel->insert_category($table_category_product,$data);
             
            if($result == 1){
                header("Location: ".BASE_URL."/category");
            }else{
                header("Location: ".BASE_URL."/category");
                $message['msg'] = "Thêm dữ liệu thất bại";
            }
        }

        public function edit_category($id){
            $table_category_product = 'tbl_category_product';
            $cond = "id_category_product='$id'";
            $categorymodel = $this->load->model('categorymodel');
            $data['categorybyid'] = $categorymodel->categorybyid($table_category_product,$cond);

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/category/edit_category',$data);
            $this->load->view('cpanel/footer');
        }

        public function update_category($id){
            
            // load model categorymodel
            $categorymodel = $this->load->model('categorymodel');

            // Tao biến table_category_product để hứng tên bảng dữ liệu sau đó truyển vào hàm category
            $table_category_product = 'tbl_category_product';
            $title = $_POST['title_category_product'];
            $desc = $_POST['desc_category_product'];
            $cond = "id_category_product='$id'";
            $data = array(
               'title_category_product' => $title,
               'desc_category_product' => $desc
            );

           $result = $categorymodel->update_category($table_category_product,$data,$cond);
            
           if($result == 1){
            header("Location: ".BASE_URL."/category");
        }else{
            header("Location: ".BASE_URL."/category");
            $message['msg'] = "Thêm dữ liệu thất bại";
        }
       }

       public function delete_category($id){
           // load model categorymodel
           $categorymodel = $this->load->model('categorymodel');

           // Tao biến table_category_product để hứng tên bảng dữ liệu sau đó truyển vào hàm category
           $table_category_product = 'tbl_category_product';
           // $title = $_POST['title'];
           // $desc = $_POST['desc'];
           $cond = "tbl_category_product.id_category_product='$id'";

          $result = $categorymodel->delete_category($table_category_product,$cond);
           
          if($result == 1){
            header("Location: ".BASE_URL."/category");
        }else{
            header("Location: ".BASE_URL."/category");
            $message['msg'] = "Thêm dữ liệu thất bại";
        }
       }
    }

?>