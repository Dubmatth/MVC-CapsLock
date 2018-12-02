<?php
    if(isset($val) && $val == true){
        echo '<div class="alert alert-success" role="alert">Vous êtes désormais enregistré !</div>';
    } elseif (isset($val)) {
        echo '<div class="alert alert-warning" role="alert">Problème lors de l\'ajout d\'utilisateur</div>';
    }
?>
<div class="container-fluid">
    <div class="jumbotron rounded-0" id="home_jumb">
        <div id="text_jumb" class="offset-md-2 col-md-4">
            <h1 class="display-4">Bienvenue sur headict !</h1>
            <p class="lead">La référence des ventes en ligne pour tes casquettes .</p>
            <p class="lead">
                <a class="btn btn-dark btn-lg" href="about" role="button">En savoir plus</a>
            </p>
        </div>
    </div>
</div>    
<div class="container">
    <div class="row">
        <img src="../asset/img/banniere_index.png" class="img-fluid" alt="banniere index" id="banniere_index">
    </div>
    <div class="row" id="box_caps_index">
        <div class="col-md-6">
            <a href="http://localhost:8888/iP/POONamur/mvc/MVC-CapsLock/caps/capsList"><img src="../asset/img/40075.jpg" class="img-fluid" alt="Image homme casquette"></a>
        </div>
        <div class="col-md-6">
            <a href="http://localhost:8888/iP/POONamur/mvc/MVC-CapsLock/caps/capsList"><img src="../asset/img/40075.jpg" class="img-fluid" alt="Image homme casquette"></a>
        </div>
    </div>
    <div class="row">
        <div id="index_banniere_caps">
            <a href="http://localhost:8888/iP/POONamur/mvc/MVC-CapsLock/caps/capsList"><img src="../asset/img/index_banniere_caps.jpg" class="img-fluid" alt="Plusieurs casquettes"></a>
        </div>
    </div>
</div>
