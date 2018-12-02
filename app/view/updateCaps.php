<?php if(!empty($capsById[0])) : ?>
<?php $path = path($_GET['url']) ?>
<div class="container">
    <div class="row">
    <div class="offset-3 col-md-6">
        <h2 class="mt-4">Modifier le produit</h2>
        <form class="mb-4" action="<?= BASE_URL ?>caps/doUpdateCaps" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" placeholder="<?= $capsById[0]['title'] ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Image actuelle</label>
                <p>
                    <img src="<?= $path ?>asset/img/caps/<?= $capsById[0]['image'] ?>" alt="image produit" style="height: 100px; width: auto;">
                </p>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" id="price" name="price" placeholder="<?= $capsById[0]['price'] ?>" class="form-control" >
            </div>
            <div class="form-group">
                <label for="published">Publication</label>
                <p><em>
                    Actuellement l'article est 
                    <?php if ($capsById[0]['published'] == '1') : ?>
                        publié
                    <?php else : ?>
                        modifié
                    <?php endif ; ?>
                </em></p>
                <input type="checkbox" id="published" name="published" <?php if ($capsById[0]['published'] == 1) echo 'checked'; ?> class="form-control" >
            </div>
            <div class="form-group">
                <label for="category_id">Categories</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="0">Selectionnez</option>
                    <option value="25">Curved</option>
                    <option value="26">Fitted</option>
                    <option value="27">Snapback</option>
                </select>
            </div>
            <div class="form-group">
                <label for="content">Description</label>
                <textarea name="content" id="content" style="width: 100%; height: 200px;"><?= $capsById[0]['content']?></textarea>
            </div>
            <input type="hidden" value="<?= $capsById[0]['image']; ?>" name="oldImage">
            <input type="hidden" value="<?= $capsById[0]['id']; ?>" name="id">
            <input type="hidden" value="<?= $capsById[0]['category_id']; ?>" name="oldCat">
            <input type="hidden" value="<?= $capsById[0]['price']; ?>" name="oldPrice">
            <button type="submit" class="btn btn-raised btn-secondary">Modifier</button>
        </form>
    </div>
    </div>
</div>
<?php else : ?>
<div class="container" id="product_detail">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h2>Le produit n'existe pas</h2>
                    <a href="capsList" class="btn btn-info">Retournez à la liste des produits</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif ?>
