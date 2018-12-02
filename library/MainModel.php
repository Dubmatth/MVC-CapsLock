<?php
class MainModel {
    protected $db;
    public function __construct(){
        try {
            $this->db = new Database();
            $this->db->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
        } catch(PDOException $e) {
            die ('Erreur : ' . $e->getMessage());
        }
    }
}