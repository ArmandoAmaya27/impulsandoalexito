<?= $this->insert('templates/header') ?>
    
    <?= $this->insert('templates/nav') ?>
    
    <!-- BANNER -->
    <div class="banner_page"></div>    
    <!-- FIN BANNER -->

    <!-- SECCION TITULO -->
    <section class="presen">
        <div class="container">
            <h1 class="center-block"><?= $vids[0]['tpresen'] ?></h1>
            <p><?= $vids[0]['ppresen'] ?></p>
        </div>
    </section>
    <!-- FIN SECCION TITULO -->

    <!-- PRODUCTOS DE LA TIENDA -->
    <section class="videos_page">
        <div class="container">
            <div class="row section-head">
                <header class="col-sm-12 text-center">
                    <section>
                        <h2><?= $vids[0]['tvids'] ?></h2>
                    </section>
                    <hr class="rel">
                    <p>
                        <?= $vids[0]['pvids'] ?>
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

        <div class="container clearfix active-with-click">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!-- Red, Blue-Grey, Pink, Purple, Indigo, Blue, Cyan, Teal, Green, Light-Green, Lime, Yellow, Amber, Orange, Deep-Orange, Brown, Grey, Blue-Grey -->

                <article class="material-card Teal"> <!-- Le cambias esta clase Red por una de las de arriba-->
                    <h2>
                        <span>Maxlwell Apellido</span>
                        <strong>
                            <a href="#">
                                <i class="fa fa-fw fa-star"></i>
                                TÍTULO DEL VIDEO
                            </a>
                        </strong>
                    </h2>
                    
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="fullScreen" src="static/conferencistas/maxwell.png">
                        </div>
                        <div class="mc-description">
                            He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
                        </div>
                    </div>
                    <a class="mc-btn-action">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="mc-footer">
                        <h4>
                            Social
                        </h4>
                        <a href="#" class="fa fa-fw fa-facebook"></a>
                        <a href="#" class="fa fa-fw fa-twitter"></a>
                        <a href="#" class="fa fa-fw fa-linkedin"></a>
                        <a href="#" class="fa fa-fw fa-google-plus"></a>
                    </div>

                </article>
            </div>
        </div>
    </section>
    <!-- FIN PRODUCTOS DE LA TIENDA -->
    
    <?= $this->insert('templates/footer') ?>
    
</body>
</html>