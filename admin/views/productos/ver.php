<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

	<section class="content">
        <div class="container">
            <div class="block-header">
                <h2>Gestión de Productos - Información del producto</h2>
            </div>

            <div class="card">
            	<div class="row clearfix">
            		<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 img-prod nopd">
            			<img src="<?= $image ?>" class="full">
            		</div>

            		<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 profile-content">
            			<!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                           
                            <li role="presentation" class="active">
                                <a href="#info-perfil" data-toggle="tab">
                                    <i class="material-icons">store</i> INFORMACIÓN
                                </a>
                            </li>
                            
                            <li role="presentation">
                                <a href="#perfil-desc" data-toggle="tab">
                                    <i class="material-icons">description</i> DESCRIPCION
                                </a>
                            </li>
                        </ul>
						
						<!-- Tab panes -->
                        <div class="tab-content">
                        	
                            
                        	<div role="tabpanel" class="tab-pane fade in active" id="info-perfil">
                        		<b class="text-center titl">Información del producto</b>
								<hr class="colorgraph">

								<div class="row clearfix">
									<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
										<div class="info_prod">
											<label>Producto: </label>
											<span><?= $prod[0]['nombre_producto'] ?></span>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
										<div class="info_prod">
											<label>Categoría: </label>
											<span><?= $cats[$prod[0]['id_categoria']] ?></span>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
										<div class="info_prod">
											<label>Precio: </label>
											<span><?= $prod[0]['precio_producto'] ?> BsF.</span>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
										<div class="info_prod">
											<label>Autor: </label>
											<span><?= $users[$prod[0]['id_admin']]['usuario'] ?></span>
										</div>
									</div>
								</div>

								<hr class="colorgraph">
								<b class="text-center titl">Información de contacto</b>

								<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
									<div class="info_prod">
										<label>Usuario: </label>
										<span><?= $users[$prod[0]['id_admin']]['nombre'] . ' ' . $users[$prod[0]['id_admin']]['apellido'] ?></span>
									</div>
								</div>

								<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
									<div class="info_prod">
										<label>Correo: </label>
										<span><?= $users[$prod[0]['id_admin']]['correo_electronico'] ?></span>
									</div>
								</div>

								<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
									<div class="info_prod">
										<label>Teléfono: </label>
										<span><?= $users[$prod[0]['id_admin']]['telefono'] ?></span>
									</div>
								</div>
                        	</div>
                           
                            <div role="tabpanel" class="tab-pane fade" id="perfil-desc">
                                <b class="text-center titl">Descripción del producto: <?= $prod[0]['nombre_producto'] ?></b>
                                <hr class="colorgraph">
                                <p><?= $prod[0]['descripcion_producto'] ?></p>	
                       		</div>
            			</div>

            		</div>
            	</div>
        	</div>
        </div>
    </section>

    <?= $this->insert('templates/scripts') ?>
</body>

</html>