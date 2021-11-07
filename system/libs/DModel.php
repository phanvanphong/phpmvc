<?php

    class DModel{

        protected $db = [];

        public function __construct(){
            
            $connect = 'mysql:dbname=pdo_blogs_ecommerce;host=localhost';
            $user = 'root';
            $password = '';

            $this->db = new Database($connect,$user,$password);
        }
    }


?>