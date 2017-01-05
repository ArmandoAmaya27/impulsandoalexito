<?= $this->insert('templates/header') ?>
    
    <?= $this->insert('templates/nav', array(
        'navbar_view' => ''
    )) ?>
    
    <!-- BANNER -->
    <div class="banner_page"></div>    
    <!-- FIN BANNER -->

    <!-- SECCION TITULO -->
    <section class="presen">
        <div class="container">
            <h1 class="center-block"><?= $tiend[0]['tpresen'] ?></h1>
            <p><?= $tiend[0]['ppresen'] ?></p>
        </div>
    </section>
    <!-- FIN SECCION TITULO -->

    <!-- PRODUCTOS DE LA TIENDA -->
    <section class="shop_page">
        <div class="container">
            <div class="row section-head">
                <header class="col-sm-12 text-center">
                    <section>
                        <h2><?= $tiend[0]['tprod'] ?></h2>
                    </section>
                    <hr class="rel">
                    <p>
                        <?= $tiend[0]['pprod'] ?>
                    </p>
                    <div class="categories">
                        <h3>Categorías</h3>
                        <ul>
                            <li data-filter="all">Todos</li>
                            <?php foreach (false != $cats ? $cats : array() as $cat_id => $cat): ?>
                            <li data-filter="1"><?= $cats[$cat_id]['name'] ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </header>
            </div>

        </div>

        <div class="container text-center">
            <?php if (false != $prods): foreach($prods as $prod):?>
            <div class="box-wrapper">
                <img height="200px" src="<?= Fl::fspath('static/system/images/productos/'.$prod['id'].'/')[0] ?>">
                <div class="box-content">
                    <a href="#product_<?= $prod['id'] ?>" data-toggle="modal" class="buy">
                        <span><i class="fa fa-cart-plus"></i></span>
                    </a>
                    <div class="title"><?= $prod['nombre_producto'] ?></div>
                    <div class="desc"><?= substr($prod['descripcion_producto'], 0, 20) ?>...</div>
                    <span class="price"><?= $prod['precio_producto'] ?> BS</span>
                    <div class="footer">
                        <ul>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star-o"></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="modal fade product_modal" id="product_<?= $prod['id'] ?>"" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        
                        <div class="modal-body clearfix">
                            <div class="row product_details clearfix">

                                <div class="col-md-5 nopd col-lg-5 col-xs-12 col-sm-12 product_details_img">
                                    
                                    <img class="fullScreen" src="<?= Fl::fspath('static/system/images/productos/'.$prod['id'].'/')[0] ?>">
                                </div>
                                <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12 product_details_info">
                                    <h2 class="text-center"><?= $prod['nombre_producto'] ?></h2>
                                    <small>Categoría: <?= $cats[$prod['id_categoria']]['name'] ?></small>
                                    <p><?= $prod['descripcion_producto'] ?></p>
                                    <hr>

                                    <div class="infop clearfix">
                                        <span class="col-xs-6 text-left">Vendedor:</span>
                                        <span class="col-xs-6"><?= $users[$prod['id_admin']]['nombre'] . ' ' . $users[$prod['id_admin']]['apellido'] ?></span>
                                        <span class="col-xs-6">Precio:</span>
                                        <span class="col-xs-6"><?= $prod['precio_producto']  . ' Bs'?></span>                                        
                                    </div>

                                    
                                </div>

                
                            </div>

                        </div>
                       
                    </div>
                </div>                
            </div>
            <?php endforeach; else: ?>
            <div class="alert alert-dismissible alert-info">   <button type="button" class="close" data-dismiss="alert">&times;</button>   <strong>Información!</strong> No existen productos en esta sección. </div> 
            <?php endif ?>
            

            
        </div>
    </section>
    <!-- FIN PRODUCTOS DE LA TIENDA -->
    
    <?= $this->insert('templates/footer') ?>
    
</body>
</html>