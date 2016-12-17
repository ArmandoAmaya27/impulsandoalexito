<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestión de usuarios - Listado</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTADO DE USUARIOS
                            </h2>
                            
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo Electrónico</th>
                                        <th>fecha de nacimiento</th>
                                        <th>Más detalles</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo Electrónico</th>
                                        <th>fecha de nacimiento</th>
                                        <th>Más detalles</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ((false != $users) ? $users : array() as $user): ?>
                                    <tr>
                                        <td><?= $user['usuario'] ?></td>
                                        <td><?= $user['nombre'] ?></td>
                                        <td><?= $user['apellido'] ?></td>
                                        <td><?= $user['correo_electronico'] ?></td>
                                        <td><?= $user['fecha_nacimiento'] ?></td>
                                        <td class="text-center">
                                            <a href="usuarios/perfil/<?= $user['id'] ?>" class="btn bg-blue"> <i class="material-icons">open_in_new</i></a>
                                        </td>
                                      
                                        <td class="js-sweetalert text-center">
                                            <a href="usuarios/delete/<?= $user['id'] ?>" class="btn btn-danger sweet-btn-alert" data-type="cancel"> <i class="material-icons">delete</i></a>
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