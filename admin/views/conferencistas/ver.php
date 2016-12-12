<?= $this->insert('templates/head') ?>
    <?= $this->insert('templates/nav') ?>
    <?= $this->insert('templates/sidebar') ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestión de Conferencistas - Perfil</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-light-blue">
                            <h2>
                                PERFIL DE CONFERENCISTA <small><strong>Datos del <?= $conferencista[0]['rol'] ?></strong></small>
                            </h2>
                            
                        </div>
                        <div class="body">
                           <h2 style="margin-bottom: 30px;" class="card-inside-title font-underline text-center">Datos del conferencista: <?= $conferencista[0]['nombre'] ?></h2>
                           <div class="row">
                               <div class="col-xs-12 clearfix">
                                   <div class="col-lg-4 col-md-5 col-xs-12 col-sm-12">
                                       <div class="thumbnail">
                                           <a href="javascript:void(0)" class="thumbnail">
                                               <img class="img-thumb" src="<?= Fl::fspath('../static/system/images/conferencistas/'.$conferencista[0]['id'].'/')[0] ?>">
                                           </a>

                                           <div class="caption">
                                               <ul class="social text-center">
                                                   <li><a href="#" class="fa fa-facebook"></a></li>
                                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                                   <li><a href="#" class="fa fa-instagram"></a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="desc_perfil col-lg-8 col-md-7 col-xs-12 col-sm-12 clearfix">

                                       <div class="desc_title col-lg-6 col-md-12 col-sm-12 text-center">
                                           <h3 class="font-underline col-blue-grey">Descripción</h3>
                                       </div>
                                        <div class="desc_p col-lg-6 col-md-12 col-sm-12">
                                            <p><?= $conferencista[0]['descripcion'] ?></p>
                                        </div>
                                        
                                       
                                   </div>
                               </div>
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