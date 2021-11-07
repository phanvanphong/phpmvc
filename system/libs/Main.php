<?php

    class Main{

        public $url;
        public $controllerName = "index";
        public $methodName = "index";
        public $controllerPath = "app/controllers/";
        public $controller;


        public function __construct(){
            $this->getUrl();
            $this->loadController();
            $this->callMethod();
        }

        public function getUrl(){
        $this->url = isset($_GET['url']) ? $_GET['url'] : NULL ;
        
        // Nếu đường dẫn url khác null thỳ tiếp tục chạy hàm rtrim và explode
        // Nếu k có url thỳ unset url
        if($this->url != NULL){
            $this->url = rtrim($this->url,'/');
            $this->url = explode('/',filter_var($this->url,FILTER_SANITIZE_URL));
        }else{
            unset($this->url);
        }
        }


        public function loadController(){
            // Nếu không tồn tại controller(class) thỳ include trang index
             if(!isset($this->url[0])){
                include $this->controllerPath.$this->controllerName.'.php';
                $this->loadController = new $this->controllerName();
                
             }else{ // Nếu có tồn tại controller (class) thỳ gắn controllerName = vs class
                $this->controllerName = $this->url[0];
                $fileName = $this->controllerPath.$this->controllerName.'.php';
                // Nếu có file name thỳ include file
                if(file_exists($fileName)){
                    include $fileName;
                    // Kiểm tra có class đó trong file k nếu có thỳ tạo đối tượng
                    if(class_exists($this->controllerName)){
                        $this->controller = new $this->controllerName();
                    }else{// Neu khong ton tai class

                    }


                }else{ // Neeus khong ton tai file

                }
            }
        }

        public function callMethod(){
            // Neeus ton taij tham so Param
            if(isset($this->url[2])){
                // Gan method Name bang voi ten method vd: ?url=category[0]/update_category[1]/24[2]
                $this->methodName = $this->url[1];
                //Kiem tra xem ton tai method do k
                if(method_exists($this->controller,$this->methodName)){
                    // goi den ham va truyen tham so vd:updatecategory(2)
                    $this->controller->{$this->methodName}($this->url[2]);
                }else{// Neu k ton tai ham
                    header("Location:" .BASE_URL."/index/notfound");
                }
            }else{// Neu k ton tai tham so
                // Kiem tra url 1 tuc la nhung ham k co tham so
                if(isset($this->url[1])){
                    $this->methodName = $this->url[1];
                    if(method_exists($this->controller,$this->methodName)){
                        // goi den ham va k truyen tham so
                        $this->controller->{$this->methodName}();
                    }else{// Neu k ton tai ham
                        header("Location:" .BASE_URL."/index/notfound");
                    }
                }else{
                    if(method_exists($this->controller,$this->methodName)){
                        // goi den ham va k truyen tham so
                        $this->controller->{$this->methodName}();
                    }else{// Neu k ton tai ham
                        header("Location:" .BASE_URL."/index/notfound");
                }
            }
        }
    }
}

?>