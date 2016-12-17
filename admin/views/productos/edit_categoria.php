<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestion de categorías - Editar</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDITAR CATEGORIA
                            </h2>
                            
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title font-underline">Categoría: <?= $cat[$id]['name'] ?></h2>
                            <form class="form-horizontal" id="categorias_form">
                                
                                <div class="alert hide" id="ajax_categorias"></div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Nombre de la categoría</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Título de la sección de conferencistas" maxlength="50" value="<?= $cat[$id]['name'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="hidden" name="id" value="<?= $id ?>">

                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" id="categorias_submit" class="btn btn-primary m-t-15 waves-effect">Guardar Cambios</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= $this->insert('templates/scripts') ?>
    <script src="static/system/js/productos/categoria_edit.js"></script>
</body>

</html>