<?php

class Index extends MainController {
    public function __construct(){
        parent::__construct();
    }
    public function home(){
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }
    public function about(){
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
        
    }
}