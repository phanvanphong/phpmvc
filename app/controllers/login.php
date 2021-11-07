<?php

    class login extends DController{

        public function __construct(){
            $message = array();
            parent::__construct();
        }

        public function index(){
            $this->login();
        }

        public function login(){
           // $this->load->view('header');
            Session::init();
            if(Session::get("login") == true){
                header("Location: ".BASE_URL."/login/dashboard");
            }
            $this->load->view('cpanel/login');
           // $this->load->view('footer');
        }

        public function dashboard(){
            Session::checkSession();

             // load model categorymodel
             $categorymodel = $this->load->model('categorymodel');

             // Tao biến table_category_product để hứng tên bảng dữ liệu sau đó truyển vào hàm category
             $table_category_product = 'tbl_category_product';
             $data['category'] = $categorymodel->list_category($table_category_product);
             
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/category/list_category',$data);
            $this->load->view('cpanel/footer');
        }

        public function authentication_login(){
           $username = $_POST['username'];
           $password = $_POST['password'];
           $table_admin = 'tbl_customer';
           $loginmodel = $this->load->model('loginmodel');

           $count = $loginmodel->login($table_admin,$username,$password);
        
           if($count == 0){
               $message['msg'] = "<h6> Bạn đã nhập sai tài khoản or mật khẩu. Vui lòng nhập lại ! </h6>";
               header("Location: ".BASE_URL."/login");
           }else{
               $result = $loginmodel->getLogin($table_admin,$username,$password);
               Session::init();
               Session::set('login',true);
               Session::set('username',$result[0]['username']);
               Session::set('userid',$result[0]['id_customer']);
               Session::set('userrole',$result[0]['role']);
               if($_SESSION['userrole'] == 1){
                header("Location: ".BASE_URL."/login/dashboard");
               }else{
                header("Location: ".BASE_URL."/index");
               }
           }
           
        }

        public function logout(){
            Session::init();
            Session::destroy();
            header("Location: ".BASE_URL."/login");

        }

        public function register(){
            $this->load->view('cpanel/register');
        }

        public function authentication_register(){
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
                header("Location: ".BASE_URL."/login");
            }else{
                header("Location: ".BASE_URL."/login/register");
                $message['msg'] = "Thêm dữ liệu thất bại";
            }
        }

    }

?>