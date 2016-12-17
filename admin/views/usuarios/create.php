<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestión de usuarios - Crear</h2>
            </div>
            
    

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                REGISTRAR NUEVO USUARIO
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title font-underline">Datos personales</h2>
                            <form class="form-horizontal" id="usuarios_form">
                                
                                <div class="alert hide" id="ajax_usuarios"></div>

                                <div class="row clearfix">  
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nombre">Nombre </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del Usuario">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="apellido">Apellido </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido del Usuario">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="cargo">Cargo </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="cargo" id="cargo" class="form-control" placeholder="Ingresa un cargo">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-xs-12 col-sm-12" style="margin-bottom: 0;padding: 0;">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="fecha_nacimiento">Fecha de nacimiento </label>
                                        </div>
                                        <div class="col-lg-7 col-md-10 col-sm-8 col-xs-7">
                                            <?= Boots::birthdate((date('Y', time()) - 100), date('Y', time())) ?>
                                        </div>
                                    </div>
                                    
                                    
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tel">Teléfono </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="tel" name="tel" id="tel" class="form-control" placeholder="Número de teléfono">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="dir">Dirección </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" class="form-control" name="dir" id="dir" placeholder="Dirección de usuario"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr>

                                <h2 style="padding-left: 15px;" class="card-inside-title font-underline">Datos de usuario</h2>

                                <div class="row clearfix">  
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="usuario">Usuario <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Alias de usuario">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">  
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Contraseña <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" name="pass" id="pass" class="form-control" placeholder="Ingresa una contraseña">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Confirmar contraseña">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">  
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Email de usuario<span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Correo Electrónico del usuario">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" name="email2" id="email2" class="form-control" placeholder="Confirmar Correo Electrónico">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Redes Sociales <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="social[]" class="form-control" placeholder="Facebook">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="social[]" class="form-control" placeholder="Twitter">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="social[]" class="form-control" placeholder="Instagram">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="desc">Descripción <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" class="form-control" id="desc" name="desc" placeholder="Descripción de usuario"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" id="usuarios_submit" class="btn btn-primary m-t-15 waves-effect">Registrar Usuario</button>
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
    <script src="static/js/fileuploader.js"></script>
    <script src="static/system/js/usuarios/create.js"></script>
</body>

</html>