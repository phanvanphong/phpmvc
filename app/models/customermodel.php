<?php

    class customermodel extends DModel{

        public function __construct(){
           parent::__construct();
        }

        public function list_customer($table_customer){
            $sql = "SELECT * FROM $table_customer ORDER BY id_customer DESC";
            return $this->db->select($sql);
        }

        public function customerbyid($table_customer,$cond){
             $sql = "SELECT * FROM $table_customer WHERE $cond";
             return $this->db->select($sql);
        }

        public function insert_customer($table_customer,$data){
            return $this->db->insert($table_customer,$data);

        }

        public function update_customer($table_customer,$data,$cond){
            return $this->db->update($table_customer,$data,$cond);
        }

        public function delete_customer($table_customer,$cond){
            return $this->db->delete($table_customer,$cond);
        }
    }

?>