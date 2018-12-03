<?php
class Database extends PDO {

    private $dsn = 'mysql:host=localhost;dbname=caps_shop_mvc;charset=utf8';
    private $user = 'root';
    private $password = 'root';

    public function __construct() {
        parent::__construct($this->dsn, $this->user, $this->password);
    }

    public function select($sql, $condition = null)
    {
        $dbh = $this->prepare($sql);
        if($condition != null){
            foreach($condition as $key => $value){
                $dbh->bindValue($key, $value);
            }
        }
        $dbh->execute();
        return $dbh->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $data)
    {
        //$keys = array_keys($data);
        //dump($keys);
        $keys = implode(', ', array_keys($data));
        //dump($keys);
        $values = ':'.implode(', :', array_keys($data));
        //dump($values);
        //:name, :image

        $sql = "INSERT INTO $table ($keys) VALUES ($values)";
        //dump($data);
        $dbh = $this->prepare($sql);
        foreach($data as $key => $value){
            $dbh->bindValue($key, $value);
        }
        return $dbh->execute();
    }

    public function update($table, $data, $condition)
    {
        //dump($data);
        $upkeys ='';
        foreach($data as $key => $value){
            $upkeys .= "$key =:$key,";
        }
        $upkeys = rtrim($upkeys, ',');
        //dump($upkeys);
        $sql = "UPDATE $table SET $upkeys WHERE $condition";
        $dbh = $this->prepare($sql);
        foreach($data as $key => $value){
            $dbh->bindValue($key, $value);
        }
        return $dbh->execute();
    }

    public function connexion($user_name) {
        $sql = 'SELECT user_name, password, roles FROM user WHERE user_name = :user_name';
        $dbh = $this->prepare($sql);
        $dbh->bindValue(':user_name', $user_name, PDO::PARAM_STR);
        $dbh->execute();
        return $dbh->fetchAll(PDO::FETCH_ASSOC);
    }
}