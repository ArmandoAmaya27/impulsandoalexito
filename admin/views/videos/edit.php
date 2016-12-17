<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestión de videos - Editar</h2>
            </div>
            
    

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDITAR VIDEO
                            </h2>
                            
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title font-underline">Datos del video: <?= $vid[0]['titulo_video'] ?></h2>
                            <form class="form-horizontal" id="videos_form">
                                
                                <div class="alert hide" id="ajax_videos"></div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="titulo">Título del video <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Ingresa un título para el video" value="<?= $vid[0]['titulo_video'] ?>">
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
                                                <input type="url" name="url" id="url" class="form-control" placeholder="Url Insertable (Embed URL)" value="<?= $vid[0]['url_video'] ?>">
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
                                            <?= Boots::select_input('confe', $confers, $vid[0]['id_conferencista']) ?>
                                            
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
                                                <textarea rows="4" class="form-control" name="desc" id="desc" placeholder="Escribe una descripción para este video"><?= $vid[0]['descripcion'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                                
                                <input type="hidden" name="tmp" value="<?= $tmp ?>">
                                <input type="hidden" name="id" value="<?= $vid[0]['id'] ?>">
                                <hr>
                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" id="videos_submit" class="btn btn-primary m-t-15 waves-effect">Guardar Cambios</button>
                                    </div>
                                </div>
                            </form>
    
                            <div class="row clearfix">
                                <div class="col-md-5 col-xs-12 col-sm-12">
                                    <div class="thumbnail">
                                        <img class="img-thumb" src="<?= $image ?>">
                                    </div>
                                </div>
                                <div class="col-md-7 col-xs-12 col-sm-12">
                                    <?= $this->insert('templates/uploader', array(
                                        'tmp' => $tmp
                                    )) ?>
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
    <script src="static/system/js/videos/edit.js"></script>
</body>

</html>