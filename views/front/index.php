<?= $this->insert('templates/header') ?>
    
    <?= $this->insert('templates/nav', array(
        'navbar_view' => ''
    )) ?>

    <!-- SLIDER DE LA PAGINA -->
    <div class="main_slider fullScreen">
        <div class="slider_wrapper fullHeight">
            <div class="slide fullScreen"></div>
        </div>
    </div>
    <!-- FIN SLIDER -->

    <!-- TOP REDES SOCIALES -->
    <ul class="mendi-social-networks fullWidth clearfix">
        <li class="facebook wow fadeInLeftBig" data-wow-duration=".8s" data-wow-delay="1s">
            <a href="" title="">
                <i class="fa fa-facebook"></i>
                <div class="infs pull-left">
                    <p>Únetenos</p>
                    <span class="followers">268K Seguidores</span>
                </div>
            </a>
        </li>

        <li class="twitter wow fadeInLeftBig" data-wow-duration=".7s" data-wow-delay="1s">
            <a href="" title="">
                <i class="fa fa-twitter"></i>
                <div class="infs pull-left">
                    <p>Siguenos</p>
                    <span class="followers">268K Seguidores</span>
                </div>
            </a>
        </li>
        <li class="googleplus wow fadeInLeftBig" data-wow-duration=".6s" data-wow-delay="1s">
            <a href="" title="">
                <i class="fa fa-google-plus"></i>
                <div class="infs pull-left">
                    <p>Agreganos</p>
                    <span class="followers">268K Seguidores</span>
                </div>
            </a>
        </li>
        <li class="instagram wow fadeInLeftBig" data-wow-duration=".5s" data-wow-delay="1s">
            <a href="" title="">
                <i class="fa fa-instagram"></i>
                <div class="infs pull-left">
                    <p>Conectate</p>
                    <span class="followers">268K Seguidores</span>
                </div> 
            </a>
        </li>
    </ul>
    <!-- FIN TOP REDES SOCIALES -->

    

    <!-- CONFERENCISTAS -->
    <section class="conferencistas"> 
        <div class="container profile_team">
            <div class="row section-head">
                <header class="col-sm-12 text-center wow flipInX">
                    <section>
                        <h2><?= $princ[0]['tconf'] ?></h2>
                    </section>
                    <hr class="rel">
                    <p>
                        <?= $princ[0]['txtconf'] ?>
                    </p>
                </header>
            </div> 
            
            <div class="row">
                <?php if(sizeof($confers) >0): foreach ($confers as $confer_key => $confer): ?> 
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 profile wow bounceIn" data-wow-duration=".6s" data-wow-delay="1s">
                        <figure>
                            <div class="top-image">
                                <img src="<?= Fl::fspath('static/system/images/conferencistas/'.$confer_key.'/')[0] ?>" class="fullScreen">
                            </div>
                            <figcaption>
                                <h3>
                                    <span class="profile-heading"><a href="conferencista/perfil/<?= $confer_key  ?>"> <?= $confers[$confer_key]['nombre'] ?></a></span> 
                                </h3>
                                <span class="profile-subheading"><?= $confers[$confer_key]['rol'] ?></span>
                                <p><?= substr($confers[$confer_key]['descripcion'],0,50) ?>...
                                </p>
                                <ul class="profile-scocial"> 
                                
                                    <li>
                                        <a target="_blank" href="<?= $confers[$confer_key]['facebook'] ?>" class="icon-facebook"></a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="<?= $confers[$confer_key]['twitter'] ?>" class="icon-twitter"></a> 
                                    </li>

                                    <li>
                                        <a target="_blank" href="<?= $confers[$confer_key]['instagram'] ?>" class="icon-instagram"></a> 
                                    </li>
                                </ul>
                                <div class="figcap"></div>
                            </figcaption> 
                        </figure> 
                    </div> 
                <?php endforeach;else: ?>
                    <div class="alert alert-dismissible alert-info">   <button type="button" class="close" data-dismiss="alert">&times;</button>   <strong>Información:</strong> Todavía no existen conferencistas para esta sección. </div> 
                <?php endif; ?>

            </div>

        </div>
    </section>
    <!-- FIN CONFERENCISTAS -->
    <hr>
    <!-- VIDEOS PRESENTACIÓN -->
    <section class="videos_section container">
        <div class="row section-head">
            <header class="col-sm-12 text-center wow flipInX">
                <section>
                    <h2><?= $princ[0]['tvids'] ?></h2>
                </section>
                <hr class="rel">
                <p>
                    <?= $princ[0]['txtvids'] ?>
                </p>
            </header>
        </div>

        <div class="row">
            <?php if(false != $vids): foreach ($vids as $vid): 

            $fecha = explode('-', $vid['fecha_publicacion']);
            ?>

            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="video_card wow zoomInDown" data-wow-duration=".6s" data-wow-delay="1s">
                    <div class="pull-left fullHeight">
                        <div class="fecha text-center">
                            <span><i class="fa fa-calendar"></i> <?= $fecha[2] ?> de</span>
                            <?= $meses[$fecha[1]] ?>
                        </div>
                        <div class="autor text-center">
                            <span><i class="fa fa-user"></i></span>
                            <?= $confers[$vid['id_conferencista']]['nombre'] ?>
                        </div>
                    </div>
                    <div class="pull-right fullHeight">
                        <figure class="fullScreen rel vid_cap">
                            <img src="<?= Fl::fspath('static/system/images/videos/'.$vid['id'].'/')[0] ?>" class="fullScreen">
                            <figcaption class="fullWidth">
                                <a href="#">
                                    <span class="abs title"><?= $vid['titulo_video'] ?></span>
                                    <p class="abs desc"><?= substr($vid['descripcion'], 0, 56) ?>....</p>
                                </a>
                                
                            </figcaption>
                        </figure>
                    </div>
                </div>
                
            </div>
            <?php endforeach;else: ?>
                    <div class="alert alert-dismissible alert-info">   <button type="button" class="close" data-dismiss="alert">&times;</button>   <strong>Información:</strong> Todavía no existen videos para esta sección. </div> 
                <?php endif; ?>

            <div class="col-md-12 all_vids text-center wow zoomIn">
                <a href="videos"> Ver todos los videos <i class="fa fa-video-camera"></i> </a>
            </div>
        </div>
        
    </section>
    <!-- FIN VIDEOS PRESENTACIÓN -->

    <!-- FORMULARIO DE CONTACTO -->
    <section class="container">
		<div class="row section-head">
            <header class="col-sm-12 text-center wow flipInX">
                <section>
                    
                    <h2><?= $princ[0]['tcont'] ?></h2>
                </section>
                <hr class="rel">
                <p>
                    <?= $princ[0]['txtcont'] ?>
                </p>
            </header>
        </div>

        <div class="main_cont">
		    <div class="row">

			    <div class="col-md-6">
			        <div class="well well-sm">
				        <form class="form-horizontal wow slideInLeft" action="#" method="post">
				          	<fieldset>
				            	<legend class="text-center">Contáctanos</legend>
				    
					            <div class="form-group">
					              	<label class="col-md-3 control-label" for="name">Nombre</label>
					              	<div class="col-md-9">
					                	<input id="name" name="name" type="text" placeholder="Tu nombre" class="form-control">
					              	</div>
					            </div>
				    
					            <div class="form-group">
					              	<label class="col-md-3 control-label" for="email">Correo</label>
					              	<div class="col-md-9">
					                	<input id="email" name="email" type="text" placeholder="example@example.com" class="form-control">
					              	</div>
					            </div>
				    
				            	<div class="form-group">
				              	<label class="col-md-3 control-label" for="message">Mensaje</label>
					              <div class="col-md-9">
					                	<textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje aquí..." rows="5"></textarea>
					              </div>
				            	</div>
				    
					            <div class="form-group">
					              	<div class="col-md-12 text-right">
					                	<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
					              	</div>
					            </div>
				          	</fieldset>
				        </form>
			        </div>
			    </div>
		    

		      	<div class="col-md-6">
				    <div class="well well-sm quick-contact wow slideInRight">
				        <div class="row">
				            <div class="col-md-12">
				                <h2 class="title-contact text-center">Christian Delgado</h2>

				                <div class="contact-info">
				                	<span><i class="fa fa-envelope-o"></i> info@website.com</span>
				                    <span><i class="fa fa-phone"></i>+12 34567890, +12 34567890</span>
				                    <span><i class="fa fa-map-marker"></i> Localización</span>
				                </div>
				            </div>
				        </div>
				    </div>
				</div> 
			</div>
		</div>
    </section>
    <!-- FIN FORMULARIO DE CONTACTO -->
    
    <?= $this->insert('templates/footer') ?>
    
</body>
</html>