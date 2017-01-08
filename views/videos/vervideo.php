<?=  $this->insert('templates/header')
?>


    
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
							<iframe class="fullScreen" width="560" height="315" src="<?= $vids[$idvid]['url_video'] ?>" frameborder="0" allowfullscreen></iframe> 
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
								  	  		<img class="fullScreen" src="<?= Fl::fspath('static/system/images/conferencistas/'.$conf[0]['id']. '/')[0] ?>">
								  	  	</div>
								  	  	<div class="cap-info">
								  	  		<h4> <?= $conf[0]['nombre'] ?> </h4>
								  	  		<b>Correo: <?= $conf[0]['correo']?></b>
								  	  		<b>Videos: <?= $cantv ?></b> 
								  	  	</div>
							  		</div>
							  	  	
							  	  	<hr>
							  	  	<div class="cap-info sec text-center">
							  	  		<h4><?= $vids[$idvid]['titulo_video']?></h4> 
							  	  		<b>Publicado: <?= $vids[$idvid]['fecha_publicacion'] ?></b>
							  	  	</div>
							  	</div>
							  	<div class="tab-pane fade clearfix" id="list">
							  	  	<ul>
							  	  		<?php foreach ($vids as $v => $d): ?>
							  	  			
							  	  		<li>
							  	  			<a href="videos/ver/<?=$conf[0]['id']?>-<?=$v?>-<?= Str::slug($vids[$v]['titulo_video']) ?>"> 
							  	  				<span class="first-icon pull-left">
							  	  					<i class="fa fa-youtube-play"></i> 
							  	  				</span>
							  	  				<span class="middle-text">
							  	  					 <?=$vids[$v]['titulo_video'];?>
							  	  				</span>
							  	  				<span class="last-icon pull-right">
							  	  					<i class="fa fa-video-camera"></i>
							  	  				</span>
							  	  				
							  	  			</a>
							  	  		</li>
							  	  		<?php endforeach ?>
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
					    <p> <?= $vids[$idvid]['descripcion'] ?> </p>
					</div>
					<div class="tab-pane fade" id="comments">
					    <header>
					    	<h2>Publica un comentario</h2>
					    </header>
					    <form id="form_comentario" class="comment_form center-block col-md-5">
					    	<div class="alert hide" id="ajax_comentario">
					    		
					    		
					    	</div>
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
					    	<button type="button" id="submit_comentario" class="btn btn-block">comentar</button> 
					    </form>

					</div>				  
				</div>
			</div>
  		</div>
		
  	</section>



    <?= $this->insert('templates/footer') ?>
    <script src="static/system/js/comentario.js"></script>
</body>
</html>