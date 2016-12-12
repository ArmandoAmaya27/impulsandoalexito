<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestión de Videos - Ver</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-light-blue">
                            <h2>
                                Título del video - <?= $vid[0]['titulo_video'] ?> <small><strong>Autor: <?= $confers[$vid[0]['id_conferencista']] ?></strong></small>
                            </h2>
                            
                        </div>
                        <div class="body">
                           <h2 style="margin-bottom: 30px;" class="card-inside-title font-underline text-center">Datos del video</h2>
                           <div class="row clearfix">
                                <div class="col-xs-12 clearfix">

                                  <div class="desc_perfil vid_iframe col-lg-7 col-md-7 col-xs-12 col-sm-12 clearfix">
                                      <iframe height="415" src="<?= $vid[0]['url_video'] ?>" frameborder="0" allowfullscreen></iframe>
                                   </div>

                                   <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                                       <div class="thumbnail">
                                           <a href="javascript:void(0)" class="thumbnail">
                                               <img class="img-thumb" src="<?= Fl::fspath('../static/system/images/videos/'.$vid[0]['id'].'/')[0] ?>">
                                           </a>

                                           <div class="caption">
                                               <p>Publicado: <strong><?= $vid[0]['fecha_publicacion'] ?></strong></p>
                                               <p>Autor: <strong><?= $confers[$vid[0]['id_conferencista']] ?></strong></p>
                                           </div>
                                       </div>
                                  </div>
                                </div>
                            
                           </div>
                           <hr>
                           <div class="video_desc">
                              <h3 class="text-center col-blue-grey font-underline">Descripción</h3>
                              <p><?= $vid[0]['descripcion'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= $this->insert('templates/scripts') ?>
</body>

</html>