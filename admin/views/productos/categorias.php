<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestión de Conferencistas - Listado</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTADO DE CONFERENCISTAS
                            </h2>
                            <button type="button" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float pull-right" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">add</i></button>

                            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-center" id="defaultModalLabel">Agregar nueva categoría</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form id="categorias_form">
                                                
                                                <div class="alert hide" id="ajax_categorias"></div>

                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="name">Categoría</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre de la categoría">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
                                            <button type="button" id="categorias_submit" class="btn btn-link waves-effect">Agregar Categoría</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Categoría</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Categoría</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ((false != $cats) ? $cats : array() as $cat => $v): ?>
                                    <tr>
                                        <td><?= $cats[$cat]['name'] ?></td>
                                        <td class="text-center">
                                            <a href="productos/editar_categoria/<?= $cats[$cat]['id'] ?>" class="btn btn-warning"> <i class="material-icons">edit</i></a>
                                        </td>
                                        <td class="js-sweetalert text-center">
                                            <a href="productos/delete_categoria/<?= $cats[$cat]['id'] ?>" class="btn btn-danger sweet-btn-alert" data-type="cancel"> <i class="material-icons">delete</i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= $this->insert('templates/scripts') ?>
    <script src="static/system/js/productos/categoria_create.js"></script>
</body>

</html>