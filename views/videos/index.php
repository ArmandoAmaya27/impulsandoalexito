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
                    <!-- <div class="categories">
                        <h3>Categorías</h3>
                        <ul>
                            <li data-filter="all">Todos</li>
                            
                        </ul>
                    </div> -->
                </header>
            </div>

        </div>

        <div class="container clearfix active-with-click">

            <?php foreach ($videos as $vid): ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
               
                <article class="material-card Teal"> <
                    <h2>
                        <span><?= $confers[$vid['id_conferencista']]['nombre'] ?></span>
                        <strong>
                            <a href="videos/vervideo/<?= $vid['id'] ?>">
                                <i class="fa fa-fw fa-star"></i>
                                <?= $vid['titulo_video'] ?>
                            </a>
                        </strong>
                    </h2>
                    
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="fullScreen" src="<?= Fl::fspath('static/system/images/conferencistas/' . $vid['id_conferencista'] . '/')[0] ?>">
                        </div>
                        <div class="mc-description">
                            <?= substr($vid['descripcion'], 0, 180) ?> ...
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
            <?php endforeach ?>
            
        </div>
    </section>
    <!-- FIN PRODUCTOS DE LA TIENDA -->
    
    <?= $this->insert('templates/footer') ?>
    
</body>
</html>