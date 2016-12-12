<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestión de conferencistas - Editar</h2>
            </div>
            
    

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDITAR CONFERENCISTA
                            </h2>
                            
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title font-underline">Datos del conferencista: <?= $confer[0]['nombre'] ?></h2>
                            <form class="form-horizontal" id="conferencistas_form">
                                
                                <div class="alert hide" id="ajax_conferencistas"></div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nombre">Nombre <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del conferencista" value="<?= $confer[0]['nombre'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email">Correo Electrónico <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Correo del conferencista" value="<?= $confer[0]['correo'] ?>">
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
                                                <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="<?= $confer[0]['facebook'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="twitter" class="form-control" placeholder="Twitter" value="<?= $confer[0]['twitter'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="insta" class="form-control" placeholder="Instagram" value="<?= $confer[0]['instagram'] ?>">
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
                                                <textarea class="form-control no-resize" id="desc" rows="4" name="desc" placeholder="Descripción del conferencista"><?= $confer[0]['descripcion'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <input type="hidden" name="tmp" value="<?= $tmp ?>">
                                <input type="hidden" name="id" value="<?= $confer[0]['id'] ?>">
                                <hr>
                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" id="conferencistas_submit" class="btn btn-primary m-t-15 waves-effect">Editar</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div class="row clearfix">
                                <div class="col-md-5 col-xs-12 col-sm-12">
                                    <div class="thumbnail">
                                        <img class="img-thumb" src="<?= $image ?>">
                                    </div>
                                </div>
                                <div class="col-md-7 col-xs-12 col-sm-12">
                                    <form action="app/ajax/upload" id="uploader">
                                        <div class="file_uploader clearfix">
                                            <div class="alert hide" id="ajax_uploader"></div>
                                            <div class="file-preview">
                                                <span>Selecciona una imagen</span>
                                                <img src="#" alt="">
                                            </div>
                                            <div class="image-caption bg-red">
                                                <span>Nombre de la imagen</span><button type="button" class="file-btn-remove"><i class="fa fa-close"></i></button>
                                            </div>
                                            <div class="file-wrap">
                                                <input type="file" name="fileUploader" class="file-input-upload">
                                                <button type="button" class="btn-uploader bg-blue"><i class="fa fa-upload"></i> Subir Imagen</button>
                                            </div>
                                        </div>

                                        <input type="hidden" name="tmp" value="<?= $tmp ?>">
                                    </form>
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
    <script src="static/system/js/conferencistas/edit.js"></script>
</body>

</html>