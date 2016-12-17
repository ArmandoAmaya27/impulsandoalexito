<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

	<section class="content">
        <div class="container">
            <div class="block-header">
                <h2>Gestión de usuarios - Modificar Perfil</h2>
            </div>

            <div class="card">
            	<div class="row clearfix">
            		<div class="col-md-3 user-info-profile">
            			<div class="tophd">
            				<button type="button" class="btn waves-effect descrip m-r-20" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">description</i></button>
            				<button type="button" class="btn bg-teal waves-effect pull-right" data-toggle="modal" data-target="#profileimage"><i class="material-icons">photo_library</i></button>
            			</div>
            			<figure>
            				<img src="<?= $image ?>">
            				<figcaption>
            					<div class="desc">
            						<p><?= $user[0]['descripcion'] ?></p>
            					</div>
            					<div class="foot">
            						<ul class="social text-center">
            							<?php $red = json_decode($user[0]['redes_sociales']) ?>
            							<li><a target="_blank" href="<?= $red[0] ?>" class="fa fa-facebook"></a></li>
            							<li><a target="_blank" href="<?= $red[1] ?>" class="fa fa-twitter"></a></li>
            							<li><a target="_blank" href="<?= $red[2] ?>" class="fa fa-instagram"></a></li>
            						</ul>
            					</div>
            				</figcaption>
            			</figure>
            		</div>
            		<div class="col-md-9 profile-content">
            			<!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                           
                            <li role="presentation" class="active">
                                <a href="#profile-user" class="tabpg" data-toggle="tab">
                                    <i class="material-icons">face</i> PERFIL
                                </a>
                            </li>
                            
                            <li role="presentation">
                                <a href="#profile-edit" class="tabpg" data-toggle="tab">
                                    <i class="material-icons">settings</i> EDITAR PERFIL
                                </a>
                            </li>
                        </ul>
						
						<!-- Tab panes -->
                        <div class="tab-content">
                        	
                            
                        	<div role="tabpanel" class="tab-pane fade in active" id="profile-user">
                        		<b class="text-center titl">Información de perfil</b>
								<hr class="colorgraph">

								<div class="clearfix">								
	                        		<div class="profile-infobox">
	                 					<div class="col-md-6">
	                 						<div class="info clearfix">
	                 							<label class="pull-left">Usuario</label>
	                 							<span class="pull-right"><?= $user[0]['usuario'] ?></span>
	                 						</div>
	                 					</div>
	                        		</div>

	                        		<div class="profile-infobox">
	                 					<div class="col-md-6">
	                 						<div class="info clearfix">
	                 							<label class="pull-left">Ocupación</label>
	                 							<span class="pull-right"><?= $user[0]['cargo'] ?></span>
	                 						</div>
	                 					</div>
	                        		</div>

	                        		<div class="profile-infobox">
	                 					<div class="col-md-6">
	                 						<div class="info clearfix">
	                 							<label class="pull-left">Nombre</label>
	                 							<span class="pull-right"><?= $user[0]['nombre'] ?></span>
	                 						</div>
	                 					</div>
	                        		</div>

	                        		<div class="profile-infobox">
	                 					<div class="col-md-6">
	                 						<div class="info clearfix">
	                 							<label class="pull-left">Apellido</label>
	                 							<span class="pull-right"><?= $user[0]['apellido'] ?></span>
	                 						</div>
	                 					</div>
	                        		</div>

	                        		<div class="profile-infobox">
	                 					<div class="col-md-6">
	                 						<div class="info clearfix">
	                 							<label class="pull-left">Correo</label>
	                 							<span class="pull-right "><?= $user[0]['correo_electronico'] ?></span>
	                 						</div>
	                 					</div>
	                        		</div>

	                        		<div class="profile-infobox">
	                 					<div class="col-md-6">
	                 						<div class="info clearfix">
	                 							<label class="pull-left">Fecha de nacimiento</label>
	                 							<span class="pull-right"><?= $user[0]['fecha_nacimiento'] ?></span>
	                 						</div>
	                 					</div>
	                        		</div>

	                        		<div class="profile-infobox">
	                 					<div class="col-md-6">
	                 						<div class="info clearfix">
	                 							<label class="pull-left">Teléfono</label>
	                 							<span class="pull-right"><?= $user[0]['telefono'] ?></span>
	                 						</div>
	                 					</div>
	                        		</div>
                        		</div>
                        		<hr class="colorgraph">

                        		<div class="info clearfix">
	                 				<label>Dirección</label>
	                 				<p><?= $user[0]['direccion'] ?></p>
	                 			</div>
                        	</div>
                           
                            <div role="tabpanel" class="tab-pane fade" id="profile-edit">
                                <b class="text-center titl">Editar Perfil</b>
                                <form class="form-inline formfg" id="usuarios_form">
                                	<div class="alert hide" id="ajax_usuarios"></div>
									
									<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
										<div class="form-group">
										    <label class="sr-only" for="usuario">Usuario</label>
										    <div class="input-group fmgp">
										      	<div class="input-group-addon"><i class="material-icons">account_circle</i></div>
										      	<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Alias de usuario" value="<?= $user[0]['usuario'] ?>">
										    </div>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
										<div class="form-group">
										    <label class="sr-only" for="pass">Cambiar Contraseña</label>
										    <div class="input-group fmgp">
										      	<div class="input-group-addon"><i class="material-icons">lock</i></div>
										      	<input type="password" class="form-control" name="pass" id="pass" placeholder="Cambiar Contraseña">
										    </div>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
										<div class="form-group">
										    <label class="sr-only" for="cargo">Ocupación</label>
										    <div class="input-group fmgp">
										      	<div class="input-group-addon"><i class="material-icons">school</i></div>
										      	<input type="text" class="form-control" name="cargo" id="cargo" placeholder="Ocupación del usuario" value="<?= $user[0]['cargo'] ?>">
										    </div>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
										<div class="form-group">
										    <label class="sr-only" for="nombre">Nombre</label>
										    <div class="input-group fmgp">
										      	<div class="input-group-addon"><i class="material-icons">person</i></div>
										      	<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del usuario" value="<?= $user[0]['nombre'] ?>">
										    </div>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
										<div class="form-group">
										    <label class="sr-only" for="apellido">Apellido</label>
										    <div class="input-group fmgp">
										      	<div class="input-group-addon"><i class="material-icons">person</i></div>
										      	<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido del usuario" value="<?= $user[0]['apellido'] ?>">
										    </div>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
										<div class="form-group">
										    <label class="sr-only" for="email">Correo Electrónico</label>
										    <div class="input-group fmgp">
										      	<div class="input-group-addon"><i class="material-icons">person</i></div>
										      	<input type="email" class="form-control" name="email" id="email" placeholder="Correo del usuario" value="<?= $user[0]['correo_electronico'] ?>">
										    </div>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
										<div class="form-group">
										    <label class="sr-only" for="tel">Teléfono</label>
										    <div class="input-group fmgp">
										      	<div class="input-group-addon"><i class="material-icons">phone</i></div>
										      	<input type="tel" class="form-control" name="tel" id="tel" placeholder="Teléfono del usuario" value="<?= $user[0]['telefono'] ?>">
										    </div>
										</div>
									</div>

									<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
						                <div class="modal-dialog" role="document">
						                    <div class="modal-content">
						                        <div class="modal-header">
						                            <h4 class="modal-title text-center" id="defaultModalLabel">Información Usuario</h4>
						                        </div>
						                        <div class="modal-body">

						                        	<div class="row clearfix">
					                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
					                                        <label for="desc">Descripción </label>
					                                    </div>
					                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
					                                        <div class="form-group">
					                                            <div class="form-line">
					                                                <textarea rows="4" class="form-control no-resize" name="desc" id="desc" placeholder="Descripción del usuario"><?= $user[0]['descripcion'] ?></textarea>
					                                            </div>
					                                        </div>
					                                    </div>
					                                </div>
						                            
													<div class="row clearfix" style="margin-top: 30px;">
					                                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-5 form-control-label text-center" style="text-align: center;">
					                                        <label>Redes Sociales</label>
					                                    </div>

					                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					                                        <div class="form-group">
					                                            <div class="form-line">
					                                                <input type="text" name="social[]" class="form-control" placeholder="Facebook" value="<?= $red[0] ?>">
					                                            </div>
					                                        </div>
					                                    </div>

					                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					                                        <div class="form-group">
					                                            <div class="form-line">
					                                                <input type="text" name="social[]" class="form-control" placeholder="Twitter" value="<?= $red[1] ?>">
					                                            </div>
					                                        </div>
					                                    </div>

					                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					                                        <div class="form-group">
					                                            <div class="form-line">
					                                                <input type="text" name="social[]" class="form-control" placeholder="Instagram" value="<?= $red[2] ?>">
					                                            </div>
					                                        </div>
					                                    </div>
					                                </div>
													<cite style="display:block; margin-top: 30px;">Estos cambios se veran reflejados una ves presionado el botón de guardar cambios en la sección "EDITAR PERFIL"</cite>
						                        </div>
						                        <div class="modal-footer">
						                            <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->
						                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
						                        </div>
						                    </div>
						                </div>
						            </div>

									<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
										<div class="form-group">
										    <label class="sr-only" for="dir">Dirección</label>
										    <div class="input-group fmgp">
										      	<div class="input-group-addon"><i class="material-icons">room</i></div>
										      	<input type="text" class="form-control" name="dir" id="dir" placeholder="Dirección del usuario" value="<?= $user[0]['direccion'] ?>">
										    </div>
										</div>
									</div>
				
									
									
									<div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
										<div class="form-group">
										    <label class="sr-only">Fecha de Nacimiento</label>
										    <div class="input-group fmgp">
										      	<div class="input-group-addon"><i class="material-icons">date_range</i></div>
										      	<?php 
										      		$birth = explode('-', $user[0]['fecha_nacimiento']);
										      	?>
										      	<?= Boots::birthdate((date('Y', time()) - 100), date('Y', time()),array($birth[0], $birth[1],$birth[2])) ?>

										    </div>
										</div>
									</div>
									
									<input type="hidden" name="id" value="<?= $user[0]['id'] ?>">
									<input type="hidden" name="tmp" value="<?= $tmp ?>">
									

									<button type="button" id="usuarios_submit" class="btn btn-primary m-t-15 waves-effect">Guardar Cambios</button>
								</form>

								<div class="modal fade" id="profileimage" tabindex="-1" role="dialog">
						            <div class="modal-dialog" role="document">
						               	<div class="modal-content">
						                    <div class="modal-header">
						                        <h4 class="modal-title text-center" id="defaultModalLabel">Imagen de perfil</h4>
						                    </div>
						                   	<div class="modal-body">
												<?= $this->insert('templates/uploader', array(
					                                'tmp' => $tmp
					                            )) ?>
						                    	<cite style="display:block; margin-top: 30px;">Estos cambios se veran reflejados una ves presionado el botón de guardar cambios en la sección "EDITAR PERFIL"</cite>
						                        <div class="modal-footer">
						                            <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->
						                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
						                        </div>
						               		</div>
						           		</div>
						        	</div>
                            	</div>
                       		</div>
						
            			</div>
            		</div>
            	</div>
        	</div>
        </div>
    </section>

    <?= $this->insert('templates/scripts') ?>
    <script src="static/js/fileuploader.js"></script>
    <script src="static/system/js/usuarios/edit.js"></script>
</body>

</html>