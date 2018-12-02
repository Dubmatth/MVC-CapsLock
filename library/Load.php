<?php

class Load {

    public function view($viewName, $data = null)
    {
        if(!is_null($data)){
            extract($data);// Récupère le nom du tableau sous la forme d'une variable
        }
        require 'app/view/'.$viewName.'.php';
    }

    public function model($modelName, $data = null){
        require 'app/model/' . $modelName . '.php';
        return new $modelName();
    }
}