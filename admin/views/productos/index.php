<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestión de Productos - Listado</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTADO DE PRODUCTOS
                            </h2>
                            
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Categoría</th>
                                        <th>Precio</th>
                                        <th>Usuario</th>
                                        <th>Más detalles</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Categoría</th>
                                        <th>Precio</th>
                                        <th>Usuario</th>
                                        <th>Detalles</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ((false != $prods) ? $prods : array() as $prod): ?>
                                    <tr>
                                        <td><?= $prod['nombre_producto'] ?></td>
                                        <td><?= $cats[$prod['id_categoria']] ?></td>
                                        <td><?= $prod['precio_producto'] ?></td>
                                        <td><?= $users[$prod['id_admin']]['usuario'] ?></td>
                                        <td class="text-center">
                                            <a href="productos/ver/<?= $prod['id'] ?>" class="btn bg-blue"> <i class="material-icons">open_in_new</i></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="productos/edit/<?= $prod['id'] ?>" class="btn btn-warning"> <i class="material-icons">edit</i></a>
                                        </td>
                                        <td class="js-sweetalert text-center">
                                            <a href="productos/delete/<?= $prod['id'] ?>" class="btn btn-danger sweet-btn-alert" data-type="cancel"> <i class="material-icons">delete</i></a>
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
</body>

</html>