<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Configuración - Página Principal</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CONFIGURACION - PAGINA PRINCIPAL
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title font-underline">Sección de conferencistas</h2>
                            <form class="form-horizontal" id="config_form">
                                
                                <div class="alert hide" id="ajax_config"></div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tconf">Titulo - Sección de Conferencistas</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="tconf" id="tconf" class="form-control" placeholder="Título de la sección de conferencistas" maxlength="50" value="<?= $princ[0]['tconf'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="txtconf">Texto - Sección de Conferencistas</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea id="txtconf" rows="4" name="txtconf" class="form-control" maxlength="500" placeholder="Parrafo de la sección de conferencistas"><?= $princ[0]['txtconf'] ?></textarea>
                                            </div>
                                            <span class="caracteres_contador"></span>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h2 class="card-inside-title font-underline">Sección de Videos</h2>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tvids">Titulo - Sección de Videos</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="tvids" id="tvids" class="form-control" maxlength="50" value="<?= $princ[0]['tvids'] ?>" placeholder="Título de la sección de Videos">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="txtvids">Texto - Sección de Videos</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea maxlength="500" id="txtvids" rows="4" name="txtvids" class="form-control" placeholder="Parrafo de la sección de Videos"><?= $princ[0]['txtvids'] ?></textarea>
                                                
                                            </div>
                                            <span class="caracteres_contador"></span>
                                        </div>
                                        
                                    </div>
                                </div>

                                <hr>
                                <h2 class="card-inside-title font-underline">Sección de Contacto</h2>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tcont">Titulo - Sección de Contacto</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" maxlength="50" name="tcont" id="tcont" class="form-control" value="<?= $princ[0]['tcont'] ?>" placeholder="Título de la sección de Contacto">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="txtcont">Texto - Sección de Contacto</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea maxlength="500" id="txtcont" rows="4" name="txtcont" class="form-control" placeholder="Parrafo de la sección de Videos"><?= $princ[0]['txtcont'] ?></textarea>
                                                
                                            </div>
                                            <span class="caracteres_contador"></span>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" id="config_submit" class="btn btn-primary m-t-15 waves-effect">Guardar Cambios</button>
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
    <script src="static/system/js/config/config.js"></script>
</body>

</html>