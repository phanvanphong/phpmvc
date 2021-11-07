<?php

    class productmodel extends DModel{

        public function __construct(){
           parent::__construct();
        }

        public function list_product($table_product){
            $sql = "SELECT * FROM $table_product ORDER BY id_product DESC";
            return $this->db->select($sql);
        }

        public function list_product_top9($table_product){
            $sql = "SELECT * FROM $table_product ORDER BY id_product DESC LIMIT 0,9";
            return $this->db->select($sql);
        }

        public function productbyid($table_product,$cond){
             $sql = "SELECT * FROM $table_product WHERE $cond";
             return $this->db->select($sql);
        }

        public function insert_product($table_product,$data){
            return $this->db->insert($table_product,$data);

        }

        public function update_product($table_product,$data,$cond){
            return $this->db->update($table_product,$data,$cond);
        }

        public function delete_product($table_product,$cond){
            return $this->db->delete($table_product,$cond);
        }

        public function sale_product($table_product){
            $sql = "SELECT * FROM $table_product ORDER BY discount_product DESC LIMIT 0,5";
            return $this->db->select($sql);
        }

        public function hot_product($table_product){
            $sql = "SELECT * FROM $table_product ORDER BY price_product DESC LIMIT 0,7";
            return $this->db->select($sql);
        }
    }

?>