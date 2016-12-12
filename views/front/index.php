<?= $this->insert('templates/header') ?>
    
    <?= $this->insert('templates/nav') ?>

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
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 profile wow bounceIn" data-wow-duration=".6s" data-wow-delay="1s"> 
                    <figure>
                        <div class="top-image">
                            <img src="static/conferencistas/alex.png" class="fullScreen">
                        </div>
                        <figcaption>
                            <h3>
                                <span class="profile-heading">ALEX</span>
                            </h3>
                            <span class="profile-subheading">gshdghsdgdd</span>
                            <p>Conferencista
                            </p>
                            <ul class="profile-scocial">
                            
                                <li>
                                    <a href="#" class="icon-facebook"></a>
                                </li>

                                <li>
                                    <a href="#" class="icon-twitter"></a> 
                                </li>

                                <li>
                                    <a href="#" class="icon-gplus"></a>
                                </li>
                            </ul>
                            <div class="figcap"></div>
                        </figcaption> 
                    </figure> 
                </div>

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 profile wow bounceIn" data-wow-duration=".7s" data-wow-delay="1s"> 
                    <figure>
                        <div class="top-image">
                            <img src="static/conferencistas/carlos.png" class="fullScreen">
                        </div>
                        <figcaption>
                            <h3>
                                <span class="profile-heading">CARLOS</span>
                            </h3>
                            <span class="profile-subheading">Conferencista</span>
                            <p>bla bla bla
                            </p>
                            <ul class="profile-scocial">
                            
                                <li>
                                    <a href="#" class="icon-facebook"></a>
                                </li>

                                <li>
                                    <a href="#" class="icon-twitter"></a> 
                                </li>

                                <li>
                                    <a href="#" class="icon-gplus"></a>
                                </li>
                            </ul>
                            <div class="figcap"></div>
                        </figcaption> 
                    </figure> 
                </div>

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 profile wow bounceIn" data-wow-duration=".8s" data-wow-delay="1s"> 
                    <figure>
                        <div class="top-image">
                            <img src="static/conferencistas/jokio.png" class="fullScreen">
                        </div>
                        <figcaption>
                            <h3>
                                <span class="profile-heading">JOKIO</span>
                            </h3>
                            <span class="profile-subheading">Conferencista</span>
                            <p> Descripcion
                            </p>
                            <ul class="profile-scocial">
                            
                                <li>
                                    <a href="#" class="icon-facebook"></a>
                                </li>

                                <li>
                                    <a href="#" class="icon-twitter"></a> 
                                </li>

                                <li>
                                    <a href="#" class="icon-gplus"></a>
                                </li>
                            </ul>
                            <div class="figcap"></div>
                        </figcaption> 
                    </figure> 
                </div>

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 profile wow bounceIn" data-wow-duration=".9s" data-wow-delay="1s"> 
                    <figure>
                        <div class="top-image">
                            <img src="static/conferencistas/maxwell.png" class="fullScreen">
                        </div>
                        <figcaption>
                            <h3>
                                <span class="profile-heading">MAXWELL</span>
                            </h3>
                            <span class="profile-subheading">Conferencista</span>
                            <p> Descripcion
                            </p>
                            <ul class="profile-scocial">
                            
                                <li>
                                    <a href="#" class="icon-facebook"></a>
                                </li>

                                <li>
                                    <a href="#" class="icon-twitter"></a> 
                                </li>

                                <li>
                                    <a href="#" class="icon-gplus"></a>
                                </li>
                            </ul>
                            <div class="figcap"></div>
                        </figcaption> 
                    </figure> 
                </div>


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
            <div class="col-md-4">
                <div class="video_card wow zoomInDown" data-wow-duration=".6s" data-wow-delay="1s">
                    <div class="pull-left fullHeight">
                        <div class="fecha text-center">
                            <span><i class="fa fa-calendar"></i> 22 th</span>
                            Oct
                        </div>
                        <div class="autor text-center">
                            <span><i class="fa fa-user"></i></span>
                            Alex
                        </div>
                    </div>
                    <div class="pull-right fullHeight">
                        <figure class="fullScreen rel vid_cap">
                            <img src="static/assets/img/blog/1.jpg" class="fullScreen">
                            <figcaption class="fullWidth">
                                <a href="#">
                                    <span class="abs title">Título del video</span>
                                    <p class="abs desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit....</p>
                                </a>
                                
                            </figcaption>
                        </figure>
                    </div>
                </div>
                
            </div>

            <div class="col-md-4">
                <div class="video_card wow zoomInDown" data-wow-duration=".7s" data-wow-delay="1s">
                    <div class="pull-left fullHeight">
                        <div class="fecha text-center">
                            <span><i class="fa fa-calendar"></i> 20 th</span>
                            Oct
                        </div>
                        <div class="autor text-center">
                            <span><i class="fa fa-user"></i></span>
                            Jokio
                        </div>
                    </div>
                    <div class="pull-right fullHeight">
                        <figure class="fullScreen rel vid_cap">
                            <img src="static/assets/img/blog/2.jpg" class="fullScreen">
                            <figcaption class="fullWidth">
                                <a href="#">
                                    <span class="abs title">Título del video2</span>
                                    <p class="abs desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit....</p>
                                </a>
                                
                            </figcaption>
                        </figure>
                    </div>
                </div>
                
            </div>

            <div class="col-md-4">
                <div class="video_card wow zoomInDown" data-wow-duration=".8s" data-wow-delay="1s">
                    <div class="pull-left fullHeight">
                        <div class="fecha text-center">
                            <span><i class="fa fa-calendar"></i> 10 th</span>
                            Oct
                        </div>
                        <div class="autor text-center">
                            <span><i class="fa fa-user"></i></span>
                            Christian
                        </div>
                    </div>
                    <div class="pull-right fullHeight">
                        <figure class="fullScreen rel vid_cap">
                            <img src="static/assets/img/blog/3.jpg" class="fullScreen">
                            <figcaption class="fullWidth">
                                <a href="#">
                                    <span class="abs title">Título del video</span>
                                    <p class="abs desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit....</p>
                                </a>
                                
                            </figcaption>
                        </figure>
                    </div>
                </div>
                
            </div>

            <div class="col-md-12 all_vids text-center wow zoomIn">
                <a href="#" class=""> Ver todos los videos <i class="fa fa-video-camera"></i> </a>
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