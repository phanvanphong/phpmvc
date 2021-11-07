<?php

    class order extends DController{

        public function __construct(){
            parent::__construct();
            Session::checkSession();
        }

        public function index(){
            $this->list_order();
        }

        public function list_order(){
            $table_order = 'tbl_order';
            $ordermodel = $this->load->model('ordermodel');
            $data['order'] = $ordermodel->list_order($table_order);
            
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/order/list_order',$data);
            $this->load->view('cpanel/footer');


        }

        public function list_order_detail($id){
            $table_order_detail = 'tbl_order_detail JOIN tbl_product 
                                    ON tbl_order_detail.id_product =  tbl_product.id_product';
            $orderdetailmodel = $this->load->model('orderdetailmodel');
            $cond = "tbl_order_detail.id_order='$id'";
            $data['orderdetail'] = $orderdetailmodel->orderdetailbyid($table_order_detail,$cond);

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/order_detail/list_order_detail',$data);
            $this->load->view('cpanel/footer');
        }

        public function thanhtoan($id){
            $table_order = 'tbl_order';
            $ordermodel = $this->load->model('ordermodel');
            $cond = "id_order='$id'";

            $data = array(
                'status_order' => 1
            );
            $data['order'] = $ordermodel->update_order($table_order,$data,$cond);
            header('Location:'.BASE_URL.'/order');

        }
    }


?>