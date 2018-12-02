<?php
class Caps extends MainController {

    private $table = 'product';

    public function __construct(){
        parent::__construct();
    }

    public function capsList(){
        $capsModel = $this->load->model('CapsModel');
        $data['caps'] = $capsModel->capsList();
        $this->load->view('header');
        $this->load->view('capsList', $data);
        $this->load->view('footer');
    }
    
    public function capsById($id){
        $capsModel = $this->load->model('CapsModel');
        $data['caps'] = $capsModel->capsById($this->table, $id);
        $this->load->view('header');
        $this->load->view('viewOneCaps', $data);
        $this->load->view('footer');
    }

    public function addCaps(){
        $this->load->view('header');
        $this->load->view('addCaps');
        $this->load->view('footer');
    }

    public function insertCaps(){
        // Ajouter par la suite les vérifications: size, type, error
        $date = new DateTime();
        $dateF = $date->format('Y-m-d H:i:s');
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], 'asset/img/caps/' . $image);
        } else {
            $image = 'logo_headict.svg';
        }
        // Condition dosent work when isn't 'on'
        $published = $_POST['published'] == 'on' ? 1 : 0;
        $cat = intval($_POST['category_id']);
        $data = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],   
            'created' => $dateF,
            'image' => $image,
            'category_id' => $cat,
            'price' => $_POST['price'],
            'published' => $published
        ];
        $capsModel = $this->load->model('capsModel');
        $result = $capsModel->insertCaps($this->table, $data);

        $message['val'] = $result == 1;
        $this->load->view('header');
        $this->load->view('addCaps', $message);
        $this->load->view('footer');
    }

    public function updateCaps($id){
        $capsModel = $this->load->model('CapsModel');
        $data['capsById'] = $capsModel->capsById($this->table, $id);
        $this->load->view('header');
        $this->load->view('updateCaps', $data);
        $this->load->view('footer');
    }

    public function doUpdateCaps(){
        $date = new DateTime();
        $dateF = $date->format('Y-m-d H:i:s');
        // Test de l'image
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], 'asset/img/caps/' . $image);
        } else {
            $image = $_POST['oldImage'];
        }
        // Test publication
        $published = $_POST['published'] == 'on' ? 1 : 0;
        // Test category
        $oldCat = $_POST['oldCat'];
        $cat = intval($_POST['category_id']);
        if ($cat == 0 ? $cat = $oldCat : $cat) 
        // Test du prix
        $oldPrice = $_POST['oldPrice'];
        $price = $_POST['price'];
        if ($price != $oldPrice ? $price = $oldPrice : $price)
        $data = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],   
            'created' => $dateF,
            'image' => $image,
            'category_id' => $cat,
            'price' => $price,
            'published' => $published
        ];
        $condition = "id = {$_POST['id']}";
        $capsModel = $this->load->model('capsModel');
        $result = $capsModel->updateCaps($this->table, $data, $condition);

        $message['val'] = $result == 1;
        $this->load->view('header');
        $this->load->view('updateCaps', $message);
        $this->load->view('footer');
    }

}