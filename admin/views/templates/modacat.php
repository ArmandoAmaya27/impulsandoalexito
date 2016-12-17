<div class="modal fade" id="editcat" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-center" id="defaultModalLabel">Agregar nueva categoría</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal" id="categorias_edit_form">
                                                                
                                                                <div class="alert hide" id="ajax_categorias_edit"></div>

                                                                <div class="row clearfix">
                                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                                        <label for="nombre">Categoría</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de la categoría" value="<?= $cats[$cat]['name'] ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <input type="hidden" name="id" value="<?= $cats[$cat]['id'] ?>">
                                                            </form>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
                                                            <button type="button" id="categorias_edit_submit" class="btn btn-link waves-effect">Agregar Categoría</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>