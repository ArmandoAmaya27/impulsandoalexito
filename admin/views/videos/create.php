
<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestión de videos - Crear</h2>
            </div>
            
    

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                REGISTRAR NUEVO VIDEO
                            </h2>
                            
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title font-underline">Datos necesarios del video</h2>
                            <form class="form-horizontal" id="videos_form">
                                
                                <div class="alert hide" id="ajax_videos"></div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="titulo">Título del video <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Ingresa un título para el video">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="url">EMBED URL <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="url" name="url" id="url" class="form-control" placeholder="Url Insertable (Embed URL)">
                                            </div>
                                            <b class="info_cap">Esta url se encuentra dentro del iframe que nos proporciona los videos de youtube al compartir los videos (compartir > insertar vínculo). Ejemplo &lt;iframe width="560" height="315" src="<mark>https://www.youtube.com/embed/7NpZOP3xO_U</mark>" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;</b>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="confe-Id">Conferencista <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <?php array_unshift($confers, 'Selecciona una opción') ?>
                                            <?= Boots::select_input('confe', $confers) ?>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="desc">Descripción del video <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" class="form-control" name="desc" id="desc" placeholder="Escribe una descripción para este video"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                                
                                <input type="hidden" name="tmp" value="<?= $tmp ?>">
                                <hr>
                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" id="videos_submit" class="btn btn-primary m-t-15 waves-effect">Guardar Cambios</button>
                                    </div>
                                </div>
                            </form>

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
    </section>

    <?= $this->insert('templates/scripts') ?>
    <script src="static/js/fileuploader.js"></script>
    <script src="static/system/js/videos/create.js"></script>
</body>

</html>