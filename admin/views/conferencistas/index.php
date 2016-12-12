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
                            
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Rol</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Más detalles</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Rol</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Detalles</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ((false != $conferencistas) ? $conferencistas : array() as $confe): ?>
                                    <tr>
                                        <td><?= $confe['nombre'] ?></td>
                                        <td><?= $confe['rol'] ?></td>
                                        <td><?= $confe['facebook'] ?></td>
                                        <td><?= $confe['twitter'] ?></td>
                                        <td>
                                            <a href="conferencistas/ver/<?= $confe['id'] ?>" class="btn bg-blue"> <i class="material-icons">open_in_new</i></a>
                                        </td>
                                        <td>
                                            <a href="conferencistas/edit/<?= $confe['id'] ?>" class="btn btn-warning"> <i class="material-icons">edit</i></a>
                                        </td>
                                        <td class="js-sweetalert">
                                            <a href="conferencistas/delete/<?= $confe['id'] ?>" class="btn btn-danger sweet-btn-alert" data-type="cancel"> <i class="material-icons">delete</i></a>
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