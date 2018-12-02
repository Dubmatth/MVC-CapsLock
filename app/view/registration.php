<div class="container" >
    <div class="row">
        <form class="col-md-12" id="form_add_product" method="post" action="<?= BASE_URL ?>admin/insertRegistration">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputName">Nom</label>
                    <input type="text" name="inputName" class="form-control" id="inputName" placeholder="Nom">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputFirstname">Prénom</label>
                    <input type="text" name="inputFirstname" class="form-control" id="inputFirstname" placeholder="Prénom">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail">Email</label>
                    <input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputUsername">Nom d'utilisateur <span id="invalidUsername"></span></label>
                    <input type="email" name="inputUsername" class="form-control" id="inputUsername" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword">Mot de passe</label>
                    <input type="password" name="inputPassword" class="form-control" id="inputPassword" placeholder="Mot de passe">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">S'enregistrer</button>
        </form>
    </div>
</div>