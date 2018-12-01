<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenue sur Caps-Online !</title>
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="asset/css/main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="icon" type="image/vnd.microsoft.icon" href="asset/img/favicon-1.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon-1.ico"/>
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a href=""><img src="asset/img/logo_headict.svg" alt="Logo casquette" id="caps_logo"></a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarColor02">
                        <ul class="navbar-nav mr-auto" id="navbar_left">
                            <li class="nav-item active">
                                <a class="nav-link" href="">Accueil<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Produits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Ajoutez</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">A propos</a>
                            </li>
                        </ul>
                            <button class="btn btn-dark" disabled>
                                userName
                            </button>
                            <ul class="navbar-nav" id="navbar_right">
                                    <li class="nav-item">
                                        <a class="nav-link" href=""><i class="fas fa-wrench"></i></a>
                                    </li>
                                {#<li class="nav-item">
                                    <a href=""><i class="fas fa-shopping-cart"></i></a>
                                </li>#}
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-shopping-cart"></i> Panier
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href=""><i class="fas fa-sign-out-alt"></i></a>
                                </li>
                            </ul>
                            <!-- Button trigger modal -->
                            <ul class="navbar-nav" id="navbar_right">
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-shopping-cart"></i> Panier
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal"><i class="fas fa-user"></i></a>
                                </li>
                            </ul>
                            <!-- Modal -->
                            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header bg-dark">
                                            <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body bg-dark">
                                            <form class="form-signin" action="" method="post">
                                                <img class="mb-4" src="asset/img/logo_headict.svg" alt="logo headict" width="72" height="72">
                                                <h1 class="h3 mb-3">Déjà inscrit ?</h1>
                                                <label for="inputEmail" class="sr-only">Adresse E-mail</label>
                                                <input type="email" name="_username" id="inputEmail" class="form-control col-md-8 offset-2" placeholder="Adresse e-mail" required autofocus>
                                                <label for="inputPassword" class="sr-only">Mot de passe</label>
                                                <input type="password" name="_password" id="inputPassword" class="form-control col-md-8 offset-2 mb-2" placeholder="Mot de passe" required>
                                                {#<div class="checkbox mb-3">
                                                    <label>
                                                        <input type="checkbox" value="remember-me">Souvenez-vous de moi
                                                    </label>
                                                </div>#}
                                                <button class="btn btn-lg btn-primary btn-block col-md-8 offset-2" type="submit">Connexion</button>
                                                <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
                                            </form>
                                        </div>
                                        <div class="modal-footer bg-dark" id="footer_modal_inscription">
                                            <h3 class="">Pas encore inscrit ?</h3>
                                            <a href="" class="btn btn-primary">Inscription</a>
                                        </div>
                                        <div class="modal-footer bg-dark">
                                            <button type="button" class="btn btn-secondary close" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </nav>
