<?= $this->insert('templates/header') ?>
    
    <?= $this->insert('templates/nav', array(
    	'navbar_view' => 'navbar-view'
   	)) ?>

    <!-- BANNER -->
    
    <!-- FIN BANNER -->

   
  	<section class="main-page">
  		<div class="main">
  			<div class="video_view">
				<div class="row">
					<div class="col-md-7 col-lg-8 col-xs-12 col-sm-12 nopd">
						<div class="sect">
							<iframe class="fullScreen" width="560" height="315" src="https://www.youtube.com/embed/FrLixZ_fzHc" frameborder="0" allowfullscreen></iframe>
						</div>
						
					</div>
					<div class="col-md-5 col-lg-4 col-xs-12 col-sm-12">
				
						<div class="sect">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#info" data-toggle="tab">Información</a></li>
								<li><a href="#list" data-toggle="tab">Lista de videos</a></li>

								<span class="highlighter"></span>
							</ul>
							<div id="myTabContent" class="tab-content">
							  	<div class="tab-pane fade active in" id="info">
							  		<div class="clearfix">
							  			<div class="image text-center">
								  	  		<img class="fullScreen" src="static/conferencistas/alex.png">
								  	  	</div>
								  	  	<div class="cap-info">
								  	  		<h4>Conferencista</h4>
								  	  		<b>Correo: armandoamaya@ocrend.com</b>
								  	  		<b>Videos: 200</b>
								  	  	</div>
							  		</div>
							  	  	
							  	  	<hr>
							  	  	<div class="cap-info sec text-center">
							  	  		<h4>Título del video</h4>
							  	  		<b>Publicado: 2016-03-28</b>
							  	  	</div>
							  	</div>
							  	<div class="tab-pane fade clearfix" id="list">
							  	  	<ul>
							  	  		<?php for($i = 1; $i <= 30; $i++): ?>
							  	  		<li>
							  	  			<a href="javascript:void(0)">
							  	  				<span class="first-icon pull-left">
							  	  					<i class="fa fa-youtube-play"></i>
							  	  				</span>
							  	  				<span class="middle-text">
							  	  					Título de video <?= $i ?>
							  	  				</span>
							  	  				<span class="last-icon pull-right">
							  	  					<i class="fa fa-video-camera"></i>
							  	  				</span>
							  	  				
							  	  			</a>
							  	  		</li>
							  	  		<?php endfor ?>
							  	  	</ul>
							  	</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>	

			<div class="metadescvid">
				<ul class="nav nav-tabs">
				  	<li class="active"><a href="#desc" data-toggle="tab">Descripción del video</a></li>
				  	<li><a href="#comments" data-toggle="tab">Comentarios</a></li>
				  
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade active in" id="desc">
						<header>
							<h2>Descripción</h2>
						</header>
						<div class="separator"></div>
					    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="tab-pane fade" id="comments">
					    <header>
					    	<h2>Publica un comentario</h2>
					    </header>
					    <form class="comment_form center-block col-md-5">
					    	<div class="form-group">
					    		<label class="control-label">Nombre</label>
					    		<input type="text" name="name" class="form-control">
					    	</div>

					    	<div class="form-group">
					    		<label class="control-label">Email</label>
					    		<input type="email" name="name" class="form-control">
					    	</div>

					    	<div class="form-group">
					    		<label class="control-label">Mensaje</label>
					    		<textarea class="form-control" name="mensaje"></textarea>
					    	</div>
					    </form>
					</div>				  
				</div>
			</div>
  		</div>
		
  	</section>



    <?= $this->insert('templates/footer') ?>
    
</body>
</html>