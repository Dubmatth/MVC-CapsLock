<?php isset($_GET['url']) ? $path = path($_GET['url']) : $path = '' ?>
<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Casquettes</h1>
            <p class="lead text-muted">Headict est le shop de référence pour trouver votre casquette ! Que vous soyez snapback, 5 panel ou trucker, découvrez sur notre site une sélection de marques pointues et un choix incroyable de casquettes tendance !</p>
            <p>
                <!-- FIXME Trier par catégories MAYBE AJAX -->
                <a href="" class="btn btn-secondary s my-2" id="btnCatProd_1">All</a>
                <a href="" class="btn btn-secondary my-2" id="btnCatProd_2">Curved</a>
                <a href="" class="btn btn-secondary my-2" id="btnCatProd_3">Fitted</a>
                <a href="" class="btn btn-secondary my-2" id="btnCatProd_4">Snapback</a>
            </p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <?php foreach($caps as $key => $value) : ?>
                    <?php if ($caps[$key]['published'] == '1') : ?>
                        <div class="col-md-4" id="block_caps">
                            <div class="card mb-4 shadow-sm">
                                <a href="capsById">
                                    <img class="card-img-top" src="<?= $path ?>asset/img/caps/<?= $value['image'] ?>" alt="Card image cap">
                                </a>
                                <div class="card-body">
                                    <p class="card-text" id="cardTitle">
                                        <?= $value['title'] ?>
                                        <br>
                                        <div class="text-left">
                                        <small><em class="card-text"><?= $value['category'] ?></em></small>
                                        </div>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                                            <a href="capsById/<?= $value['idProduct'] ?>" class="btn btn-sm btn-outline-secondary">Détails</a>
                                            <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                        <!-- Pourquoi afficher la data ?  -->
                                        <!-- <small class="text-muted"><?= $caps[$key]['created'] ?></small> -->
                                        <!-- {% if is_granted(['ROLE_ADMIN']) %} -->
                                            <a href="<?= BASE_URL ?>caps/updateCaps/<?= $value['idProduct'] ?>" class="btn btn-sm btn-outline-secondary">Editer</a>
                                        <!-- {% endif %} -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ; ?>
                    <!-- FIXME PAGINATION -->
                <?php endforeach ;?>
                <!-- <div class="count">
                    {{ pagination.getTotalItemCount }}
                </div>
                <table>
                    <tr>
                         sorting of properties based on query components
                        <th>{{ knp_pagination_sortable(pagination, 'Id', 'a.id') }}</th>
                        <th{% if pagination.isSorted('a.Title') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'a.title') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Release', ['a.date', 'a.time']) }}</th>
                    </tr>

                    #}{# table body #}{#
                    {% for article in pagination %}
                        <tr {% if loop.index is odd %}class="color"{% endif %}>
                            <td>{{ article.id }}</td>
                            <td>{{ article.title }}</td>
                            <td>{{ article.created | date('Y-m-d') }}</td>
                        </tr>
                    {% endfor %}
                </table>#}
                {# display navigation #}
                <div class="navigation" id="paginationProducts">
                    {{ knp_pagination_render(pagination) }}
                </div> -->
            </div>
        </div>
    </div>
</main>


