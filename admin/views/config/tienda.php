<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Configuración - Página de la Tienda</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CONFIGURACION - PAGINA DE LA TIENDA
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
                            <h2 class="card-inside-title font-underline">Sección de Presentación</h2>
                            <form class="form-horizontal" id="config_form">
                                
                                <div class="alert hide" id="ajax_config"></div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tpresen">Titulo - Sección de Presentación</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="tpresen" id="tpresen" class="form-control" placeholder="Título de la sección de presentación" value="<?= $tiend[0]['tpresen'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="ppresen">Texto - Sección de Presentación</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea id="ppresen" rows="4" name="ppresen" class="form-control" placeholder="Parrafo de la sección de presentación"><?= $tiend[0]['ppresen'] ?></textarea>
                                                
                                            </div>
                                            <span class="caracteres_contador"></span>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h2 class="card-inside-title font-underline">Sección de Productos</h2>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tproduc">Titulo - Sección de Productos</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="tproduc" id="tproduc" class="form-control" value="<?= $tiend[0]['tprod'] ?>" placeholder="Título de la sección de Videos">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="pproduc">Texto - Sección de Productos</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea id="pproduc" rows="4" name="pproduc" class="form-control" placeholder="Parrafo de la sección de Videos"><?= $tiend[0]['pprod'] ?></textarea>
                                                
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
    <script src="static/system/js/config/config_tienda.js"></script>
</body>

</html>