<?php

    class ordermodel extends DModel{

        public function __construct(){
           parent::__construct();
        }

        public function list_order($table_order){
            $sql = "SELECT * FROM $table_order ORDER BY id_order DESC";
            return $this->db->select($sql);
        }

        public function orderbyid($table_order,$cond){
             $sql = "SELECT * FROM $table_order WHERE $cond";
             return $this->db->select($sql);
        }

        public function insert_order($table_order,$data){
            return $this->db->insert($table_order,$data);
        }

        public function update_order($table_order,$data,$cond){
            return $this->db->update($table_order,$data,$cond);
        }

        public function delete_order($table_order,$cond){
            return $this->db->delete($table_order,$cond);
        }

        public function lastidinsert(){
            return $this->db->lastInsertId();
        }
        
    }

?>