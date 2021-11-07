<?php

    class customer extends DController{

        public function __construct(){
            $data = array();
            $data1 = array();
            $message = array();
            parent::__construct();
        }

        public function index(){
            $this->list_customer();
        }

        public function list_customer(){

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
    
            // load model categorymodel
            $customermodel = $this->load->model('customermodel');

            // Tao biến table_category_customer để hứng tên bảng dữ liệu sau đó truyển vào hàm category
            $table_customer = 'tbl_customer';
            $data['customer'] = $customermodel->list_customer($table_customer);
            
            $this->load->view('cpanel/customer/list_customer',$data);
            $this->load->view('cpanel/footer');
        }

        public function add_customer(){
                $this->load->view('cpanel/header');
                $this->load->view('cpanel/menu');
                $table_category_customer = 'tbl_category_customer';
                $categorymodel = $this->load->model('categorymodel');
                $data['category'] = $categorymodel->list_category($table_category_customer);

                $this->load->view('cpanel/customer/add_customer',$data);
                $this->load->view('cpanel/footer');
        }

        public function insert_customer(){
            
             // load model categorymodel
             $customermodel = $this->load->model('customermodel');
 
             // Tao biến table_category_customer để hứng tên bảng dữ liệu sau đó truyển vào hàm category
             $table_customer = 'tbl_customer';

             $username = $_POST['username'];
             $password = $_POST['password'];
             $name = $_POST['name'];
             $address = $_POST['address'];
             $email = $_POST['email'];
             
             $data = array(
                'username' => $username,
                'password' => $password,
                'name' => $name,
                'address' => $address,
                'email' => $email
             );

            $result = $customermodel->insert_customer($table_customer,$data);
             
            if($result == 1){
                header("Location: ".BASE_URL."/customer");
            }else{
                header("Location: ".BASE_URL."/customer");
                $message['msg'] = "Thêm dữ liệu thất bại";
            }
        }

        public function edit_customer($id){
            $table_customer = 'tbl_customer';
            $cond = "id_customer='$id'";
            $customermodel = $this->load->model('customermodel');
            $data['customerbyid'] = $customermodel->customerbyid($table_customer,$cond);

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/customer/edit_customer',$data);
            $this->load->view('cpanel/footer');
        }

        public function update_customer($id){
            
            // load model categorymodel
            $customermodel = $this->load->model('customermodel');
 
            // Tao biến table_category_customer để hứng tên bảng dữ liệu sau đó truyển vào hàm category
            $table_customer = 'tbl_customer';

            $username = $_POST['username'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            
            $data = array(
               'username' => $username,
               'password' => $password,
               'name' => $name,
               'address' => $address,
               'email' => $email
            );

           $cond = "id_customer='$id'";
           $result = $customermodel->update_customer($table_customer,$data,$cond);
            
           if($result == 1){
               header("Location: ".BASE_URL."/customer");
           }else{
               header("Location: ".BASE_URL."/customer");
               $message['msg'] = "Thêm dữ liệu thất bại";
           }
       }

       public function delete_customer($id){
           // load model categorymodel
           $customermodel = $this->load->model('customermodel');

           // Tao biến table_category_customer để hứng tên bảng dữ liệu sau đó truyển vào hàm category
           $table_customer = 'tbl_customer';
           // $title = $_POST['title'];
           // $desc = $_POST['desc'];
           $cond = "id_customer='$id'";

          $result = $customermodel->delete_customer($table_customer,$cond);
           
          if($result == 1){
            header("Location: ".BASE_URL."/customer");
        }else{
            header("Location: ".BASE_URL."/customer");
            $message['msg'] = "Thêm dữ liệu thất bại";
        }
       }

       public function detail_product($id){
       
        $productmodel = $this->load->model('productmodel');
        $table_product = 'tbl_product';
        $cond = "id_product='$id'";

        $data['detail_product'] = $productmodel->productbyid($table_product,$cond);
        // lấy ra id_category_product để hiển thị các sản phẩm liên quan
        foreach($data['detail_product'] as $key => $cate){
            $id_cate = $cate['id_category_product'];
        }
        
        $cond_related = "id_category_product='$id_cate'";
        $data['detail_related'] = $productmodel->productbyid($table_product,$cond);


        $this->load->view('header');
        $this->load->view('detail_product',$data);
        $this->load->view('footer');
        

       }
    }

?>