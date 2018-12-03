<?php
class AdminModel extends MainModel {

    public function __construct(){
        parent::__construct();
    }

    public function registration($table, $data){
        return $this->db->insert($table, $data);
    }
    public function connexion($user_name){
        return $this->db->connexion($user_name);
    }
}