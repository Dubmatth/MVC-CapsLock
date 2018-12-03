<?php

class Page extends MainController {

    private $tableCategory = 'category';

    public function __construct()
    {
        parent::__construct();
    }

    private function template($view){
        $this->load->view('header');
        $this->load->view($view);
        $categoriesModel = $this->load->model('CategoriesModel');
        $data['categories'] = $categoriesModel->categories($this->tableCategory);
        $this->load->view('aside', $data);
        $this->load->view('footer');
    }





}