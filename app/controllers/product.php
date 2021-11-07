<?php

    class product extends DController{

        public function __construct(){
            $data = array();
            $data1 = array();
            $message = array();
            parent::__construct();
        }

        public function index(){
            $this->list_product();
        }

        public function list_product(){

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
    
            // load model categorymodel
            $productmodel = $this->load->model('productmodel');

            // Tao biến table_category_product để hứng tên bảng dữ liệu sau đó truyển vào hàm category
            $table_product = 'tbl_product';
            $data['product'] = $productmodel->list_product($table_product);
            
            $this->load->view('cpanel/product/list_product',$data);
            $this->load->view('cpanel/footer');
        }

        public function add_product(){
                $this->load->view('cpanel/header');
                $this->load->view('cpanel/menu');
                $table_category_product = 'tbl_category_product';
                $categorymodel = $this->load->model('categorymodel');
                $data['category'] = $categorymodel->list_category($table_category_product);

                $this->load->view('cpanel/product/add_product',$data);
                $this->load->view('cpanel/footer');
        }

        public function insert_product(){
            
             // load model categorymodel
             $productmodel = $this->load->model('productmodel');
 
             // Tao biến table_category_product để hứng tên bảng dữ liệu sau đó truyển vào hàm category
             $table_product = 'tbl_product';

             $title_product = $_POST['title_product'];
             $price_product = $_POST['price_product'];
             $discount_product = $_POST['discount_product'];
             $desc_product = $_POST['desc_product'];
             $id_category_product = $_POST['id_category_product'];
             
             $image = $_FILES['image_product']['name'];
             $tmp_image = $_FILES['image_product']['tmp_name'];
             $div = explode('.',$image);
             $file_ext = strtolower(end($div));
             $unique_image = $div[0].time().'.'.$file_ext;

             $path_uploads = "public/uploads/product/".$unique_image;

             
             $data = array(
                'title_product' => $title_product,
                'price_product' => $price_product,
                'discount_product' => $discount_product,
                'desc_product' => $desc_product,
                'id_category_product' => $id_category_product,
                'image_product' => $unique_image
             );

            $result = $productmodel->insert_product($table_product,$data);
             
            if($result == 1){
                move_uploaded_file($tmp_image,$path_uploads);
                header("Location: ".BASE_URL."/product");
            }else{
                header("Location: ".BASE_URL."/product");
                $message['msg'] = "Thêm dữ liệu thất bại";
            }
        }

        public function edit_product($id){
            $table_product = 'tbl_product';
            $cond = "id_product='$id'";
            $productmodel = $this->load->model('productmodel');
            $data['productbyid'] = $productmodel->productbyid($table_product,$cond);
            $table_category_product = 'tbl_category_product';
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->list_category($table_category_product);

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/product/edit_product',$data);
            $this->load->view('cpanel/footer');
        }

        public function update_product($id){
            
            // load model categorymodel
            $productmodel = $this->load->model('productmodel');
 
            // Tao biến table_category_product để hứng tên bảng dữ liệu sau đó truyển vào hàm category
            $table_product = 'tbl_product';

            $title_product = $_POST['title_product'];
            $price_product = $_POST['price_product'];
            $discount_product = $_POST['discount_product'];
            $desc_product = $_POST['desc_product'];
            $id_category_product = $_POST['id_category_product'];
            
            $image = $_FILES['image_product']['name'];
            $tmp_image = $_FILES['image_product']['tmp_name'];
            $div = explode('.',$image);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;

            $path_uploads = "public/uploads/product/".$unique_image;

            if($image){
                $data = array(
                    'title_product' => $title_product,
                    'price_product' => $price_product,
                    'discount_product' => $discount_product,
                    'desc_product' => $desc_product,
                    'id_category_product' => $id_category_product,
                    'image_product' => $unique_image
                 );
            }else{
                $data = array(
                    'title_product' => $title_product,
                    'price_product' => $price_product,
                    'discount_product' => $discount_product,
                    'desc_product' => $desc_product,
                    'id_category_product' => $id_category_product
                 );
            }
            
            

            $cond = "id_product='$id'";

           $result = $productmodel->update_product($table_product,$data,$cond);
            
           if($result == 1){
               move_uploaded_file($tmp_image,$path_uploads);
               header("Location: ".BASE_URL."/product");
           }else{
               header("Location: ".BASE_URL."/product");
               $message['msg'] = "Thêm dữ liệu thất bại";
           }
       }

       public function delete_product($id){
           // load model categorymodel
           $productmodel = $this->load->model('productmodel');

           // Tao biến table_category_product để hứng tên bảng dữ liệu sau đó truyển vào hàm category
           $table_product = 'tbl_product';
           // $title = $_POST['title'];
           // $desc = $_POST['desc'];
           $cond = "id_product='$id'";

          $result = $productmodel->delete_product($table_product,$cond);
           
          if($result == 1){
            header("Location: ".BASE_URL."/product");
        }else{
            header("Location: ".BASE_URL."/product");
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
        $data['related_product'] = $productmodel->productbyid($table_product,$cond_related);


        $this->load->view('header');
        $this->load->view('detail_product',$data);
        $this->load->view('footer');
        

       }

       public function related_product($id){

         // load danh muc
         $categorymodel = $this->load->model('categorymodel');
         $table_category = 'tbl_category_product';
         $data['category'] = $categorymodel->list_category($table_category);

         // load san pham liên quan
        $productmodel = $this->load->model('productmodel');
        $table_product = 'tbl_product';
        $cond = "id_category_product='$id'";

        $data['detail_product'] = $productmodel->productbyid($table_product,$cond);
       
        $data['related_product'] = $productmodel->productbyid($table_product,$cond);


         // load san pham sale
         $data['sale_product'] = $productmodel ->sale_product($table_product);

         // load san pham noi bat
         $data['hot_product'] = $productmodel ->hot_product($table_product);
        
            $this->load->view('header');
            $this->load->view('related_product',$data);
            $this->load->view('footer');
       }
    }

?>