<?= $this->insert('templates/header') ?>
    
    <?= $this->insert('templates/nav') ?>
    
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
                            <li data-filter="1">categoria1</li>
                            <li data-filter="2">categoria2</li>
                            <li data-filter="3">categoria3</li>
                            <li data-filter="4">categoria4</li>
                        </ul>
                    </div>
                </header>
            </div>

        </div>

        <div class="container text-center">
            <div class="box-wrapper">
                <img src="http://www.freefoodphotos.com/imagelibrary/herbs/slides/chilis.jpg">
                <div class="box-content">
                    <a href="javascript:void(0)" class="buy">
                        <span><i class="fa fa-cart-plus"></i></span>
                    </a>
                    <div class="title">Chilis Papers</div>
                    <div class="desc">Lorem ipsum dolor sit amet.</div>
                    <span class="price">5.67$</span>
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

            <div class="box-wrapper">
                <img src="http://www.freefoodphotos.com/imagelibrary/herbs/slides/chilis.jpg">
                <div class="box-content">
                    <a href="javascript:void(0)" class="buy">
                        <span><i class="fa fa-cart-plus"></i></span>
                    </a>
                    <div class="title">Chilis Papers</div>
                    <div class="desc">Lorem ipsum dolor sit amet.</div>
                    <span class="price">5.67$</span>
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

            <div class="box-wrapper">
                <img src="http://www.freefoodphotos.com/imagelibrary/herbs/slides/chilis.jpg">
                <div class="box-content">
                    <a href="javascript:void(0)" class="buy">
                        <span><i class="fa fa-cart-plus"></i></span>
                    </a>
                    <div class="title">Chilis Papers</div>
                    <div class="desc">Lorem ipsum dolor sit amet.</div>
                    <span class="price">5.67$</span>
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

            <div class="box-wrapper">
                <img src="http://www.freefoodphotos.com/imagelibrary/herbs/slides/chilis.jpg">
                <div class="box-content">
                    <a href="javascript:void(0)" class="buy">
                        <span><i class="fa fa-cart-plus"></i></span>
                    </a>
                    <div class="title">Chilis Papers</div>
                    <div class="desc">Lorem ipsum dolor sit amet.</div>
                    <span class="price">5.67$</span>
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

            <div class="box-wrapper">
                <img src="http://www.freefoodphotos.com/imagelibrary/herbs/slides/chilis.jpg">
                <div class="box-content">
                    <a href="javascript:void(0)" class="buy">
                        <span><i class="fa fa-cart-plus"></i></span>
                    </a>
                    <div class="title">Chilis Papers</div>
                    <div class="desc">Lorem ipsum dolor sit amet.</div>
                    <span class="price">5.67$</span>
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

            <div class="box-wrapper">
                <img src="http://www.freefoodphotos.com/imagelibrary/herbs/slides/chilis.jpg">
                <div class="box-content">
                    <a href="javascript:void(0)" class="buy">
                        <span><i class="fa fa-cart-plus"></i></span>
                    </a>
                    <div class="title">Chilis Papers</div>
                    <div class="desc">Lorem ipsum dolor sit amet.</div>
                    <span class="price">5.67$</span>
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
        </div>
    </section>
    <!-- FIN PRODUCTOS DE LA TIENDA -->
    
    <?= $this->insert('templates/footer') ?>
    
</body>
</html>