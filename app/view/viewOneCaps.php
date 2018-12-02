<?php if (!empty($caps[0])) : ?>
<?php $path = path($_GET['url']) ?>
    <div class="container" id="product_detail">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="<?= $path ?>asset/img/caps/resized/<?= $caps[0]['image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><?= $caps[0]['title'] ?></p>
                        <p class="card-text"><?= $caps[0]['content'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <!-- {% if is_granted('ROLE_ADMIN') %} -->
                                <a href="<?= BASE_URL ?>caps/updateCaps/<?= $caps[0]['id'] ?>" class="btn btn-sm btn-outline-secondary">Editer</a>
                                <!-- {% endif %} -->
                                <a href="caps/updateCaps" class="btn btn-sm btn-outline-secondary">Acheter</a>
                            </div>
                            <!-- {#FIXME Fonctionnalité promotion#} -->
                            <p class="text-success"><?= $caps[0]['price'] ?>€</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="container" id="product_detail">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h2>Le produit n'existe plus ou n'a pas encore été publié</h2>
                        <a href="capsList" class="btn btn-info">Retournez à la liste des produits</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ; ?>

