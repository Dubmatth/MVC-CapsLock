<?php

class Admin extends MainController {

    private $table = 'user';

    public function __construct(){
        parent::__construct();
    }

    public function registration(){
        $this->load->view('header');
        $this->load->view('registration');
        $this->load->view('footer');
    }

    public function insertRegistration(){
        $roles_default = 0;
        $user = [
            'name' => htmlspecialchars($_POST['inputName']),
            'firstName' => htmlspecialchars($_POST['inputFirstname']),
            'email' => htmlspecialchars($_POST['inputEmail']),
            'user_name' => htmlspecialchars($_POST['inputUsername']),
            'password' => password_hash(htmlspecialchars($_POST['inputPassword']), PASSWORD_DEFAULT),
            'roles' => $roles_default
        ];       
        foreach($user as $key => $value){

        }
        $data = [
            'first_name' => $user['name'],   
            'last_name' => $user['firstName'],
            'email' => $user['email'],
            'user_name' => $user['user_name'],
            'password' => $user['password']
        ];
        // FIXME Check if username is already in the DB before insert
        $adminModel = $this->load->model('AdminModel');
        $result = $adminModel->registration($this->table, $data);

        $message['val'] = $result == 1;
        $this->load->view('header');
        $this->load->view('home', $message);
        $this->load->view('footer');
    }

    public function userUpdate(){
    }

}
// Condition if avatar for update user profil
/* $avatar = htmlspecialchars($_POST['user_avatar']) !== null ? htmlspecialchars($_POST['user_avatar']) : 'default.jpeg'; */
/* $story = isset($story) ? $story : 'Aucune story'; */
