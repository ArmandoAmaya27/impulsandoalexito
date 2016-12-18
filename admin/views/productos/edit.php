<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestión de Productos - Editar</h2>
            </div>
            
    

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDITAR PRODUCTO
                            </h2>
                            
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title font-underline">Datos del producto</h2>
                            <form class="form-horizontal" id="productos_form">
                                
                                <div class="alert hide" id="ajax_productos"></div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nombre">Producto <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del producto" value="<?= $prod[0]['nombre_producto'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="id_categoria-Id">Categoría <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <?php array_unshift($cats, 'Selecciona una categoría') ?>
                                            <?= Boots::select_input('id_categoria', $cats, $prod[0]['id_categoria']) ?>
                                            
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
                                                <textarea class="form-control no-resize" id="desc" rows="4" name="desc" placeholder="Descripción del producto" maxlength="100"><?= $prod[0]['descripcion_producto'] ?></textarea>
                                            </div>
                                            <cite>La descripción debe ser de máximo 100 carácteres</cite>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="precio">Precio <span class="validate">*</span></label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="precio" id="precio" class="form-control money-dollar" placeholder="Precio del producto" value="<?= $prod[0]['precio_producto'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <input type="hidden" name="tmp" value="<?= $tmp ?>">
                                <input type="hidden" name="id" value="<?= $prod[0]['id'] ?>">
                                <hr>
                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" id="productos_submit" class="btn btn-primary m-t-15 waves-effect">Guardar Cambios</button>
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
    <script src="static/system/js/productos/edit.js"></script>
</body>

</html>