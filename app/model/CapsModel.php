<?php

class CapsModel extends MainModel {
    public function __construct(){
        parent::__construct();
    }
    public function capsList(){
        $sql = 'SELECT product.id as idProduct, title, content, created, image, published, category_id, price, user_id, category.id as idCategory, description, category 
                FROM product 
                JOIN category 
                ON product.category_id = category.id
                ';
        return $this->db->select($sql);
    }

    public function capsById($table, $id){
        $sql = "SELECT * FROM $table WHERE id = :id";
        $condition = [':id' => $id];
        return $this->db->select($sql, $condition);
    }

    public function insertCaps($table, $data){
        return $this->db->insert($table, $data);
    }
    public function updateCaps($table, $data, $condition){
        return $this->db->update($table, $data, $condition);
    }
    
}