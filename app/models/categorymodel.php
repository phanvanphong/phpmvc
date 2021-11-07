<?php

    class categorymodel extends DModel{

        public function __construct(){
           parent::__construct();
        }

        public function list_category($table_category_product){
            $sql = "SELECT * FROM $table_category_product ORDER BY id_category_product DESC";
            return $this->db->select($sql);
        }

        public function categorybyid($table_category_product,$cond){
             $sql = "SELECT * FROM $table_category_product WHERE $cond";
             return $this->db->select($sql);
        }

        public function insert_category($table_category_product,$data){
            return $this->db->insert($table_category_product,$data);

        }

        public function update_category($table_category_product,$data,$cond){
            return $this->db->update($table_category_product,$data,$cond);
        }

        public function delete_category($table_category_product,$cond){
            return $this->db->delete($table_category_product,$cond);
        }
    }

?>