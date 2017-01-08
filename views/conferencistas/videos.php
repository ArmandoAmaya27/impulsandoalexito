<?=  $this->insert('templates/header') ?>
    
    <?= $this->insert('templates/nav', array(
        'navbar_view' => ''
    )) ?>
    
    <!-- BANNER -->
    <div class="banner_page"></div>    
    <!-- FIN BANNER -->

    <!--VIDEOS CONFERENCISTA-->
    <section class="video-confe">

    <div class="container">

        <h2 class="text-center">VIDEOS DE <?= $datosc['nombre'] ?></h2> 
        <div class="info-confe clearfix"> 
            <div class="imag pull-left">
                <img class="fullScreen" src="<?=Fl::fspath('static/system/images/conferencistas/'.$datosc['id'].'/')[0];?>">
            </div>
            <div class="descripcion-confe pull-left"> 
                <p><?= $datosc['descripcion']; ?></p>
            </div>
        </div> 
        <hr class="rel sep">

        <div class="row"> 
            
                
                <?php if (false!=$vids): ?>

                    <?php foreach($vids as $vid): ?>
                    <div class="col-md-4 col-sm-6 col-xs-12"> 
                <!-- Red, Blue-Grey, Pink, Purple, Indigo, Blue, Cyan, Teal, Green, Light-Green, Lime, Yellow, Amber, Orange, Deep-Orange, Brown, Grey, Blue-Grey -->
                    <article class="material-card Teal"> <!-- Le cambias esta clase Red por una de las de arriba-->
                    <h2>
                        <span><?= $datosc['nombre'] ?></span>
                        <strong>
                            <a href="videos/ver/<?= $datosc['id']?>-<?=$vid['id'] ?>-<?= Str::slug($vid['titulo_video'])?>"> 
                                <i class="fa fa-fw fa-star"></i>
                                <?= $vid['titulo_video'] ?> 
                            </a>
                        </strong>
                    </h2>
                    
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="fullScreen" src="<?=Fl::fspath('static/system/images/videos/'.$vid['id'].'/')[0];?>"> 
                        </div>
                        <div class="mc-description">
                            <?= $vid['descripcion'] ?>
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
                    
                <?php else:  ?>
                    <div class="alert alert-dismissible alert-info">   <button type="button" class="close" data-dismiss="alert">&times;</button>   <strong>Información!</strong> No existen videos de éste conferencista </div> 


                <?php endif ?>
                
            

            

        </div>
    </div>
       
   </section>

    <!-- FIN VIDEOS CONFERENCISTA-->
    
    <?= $this->insert('templates/footer') ?>
    
</body>
</html>