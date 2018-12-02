<div class="container">
    <div class="row">
    <div class="offset-3 col-md-6">
        <h2 class="mt-4">Ajoutez un produit</h2>
        <?php
            if(isset($val) && $val == true){
                echo '<div class="alert alert-success" role="alert">Casquette
            ajoutée</div>';
            } elseif (isset($val)) {
                echo '<div class="alert alert-warning" role="alert">Problème
            lors de l\'ajout de la casquette</div>';
            }
        ?>
        <form class="mb-4" action="http://localhost:8888/iP/POONamur/mvc/MVC-CapsLock/caps/insertCaps" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" required class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="form-control" >
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" id="price" name="price" class="form-control" >
            </div>
            <div class="form-group">
                <label for="published">Publication</label>
                <input type="checkbox" id="published" name="published" class="form-control" >
            </div>
            <div class="form-group">
                <label for="category_id">Categories</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="25">Curved</option>
                    <option value="26">Fitted</option>
                    <option value="27">Snapback</option>
                </select>
            </div>
            <div class="form-group">
                <label for="content">Description</label>
                <textarea name="content" id="content" style="width: 100%; height: 200px;"></textarea>
            </div>
            <button type="submit" class="btn btn-raised btn-secondary">Ajouter</button>
        </form>
    </div>
    </div>
</div>
