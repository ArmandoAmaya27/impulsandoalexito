    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="static/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Navegación</li>
                    <li class="<?= $_GET['c'] == 'front' ? 'active' : '' ?>">
                        <a href="<?= URL ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                    <li class="<?= $_GET['c'] == 'conferencistas' ? 'active' : '' ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group_work</i>
                            <span>Conferencistas</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="<?= ($_GET['c'] == 'conferencistas' && $_GET['m'] == 'create') ? 'active' : '' ?>">
                                <a href="conferencistas/create">Añadir nuevo conferencista</a>
                            </li>
                            <li class="<?= ($_GET['c'] == 'conferencistas' && $_GET['m'] == 'index') ? 'active' : '' ?>">
                                <a href="conferencistas">Conferencistas</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="<?= $_GET['c'] == 'videos' ? 'active' : '' ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Videos</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="<?= ($_GET['c'] == 'videos' && $_GET['m'] == 'create') ? 'active' : '' ?>">
                                <a href="videos/create">Nuevo Video</a>
                            </li>
                            <li class="<?= ($_GET['c'] == 'videos' && $_GET['m'] == 'index') ? 'active' : '' ?>">
                                <a href="videos">Listado de Videos</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    
                    <li class="header">Impulsando al Éxito - Configuración</li>
                    <li class="<?= ($_GET['c'] == 'config' && $_GET['m'] == 'index') ? 'active': '' ?>">
                        <a href="config">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Página Principal</span>
                        </a>
                    </li>
                    <li class="<?= ($_GET['c'] == 'config' && $_GET['m'] == 'tienda') ? 'active': '' ?>">
                        <a href="config/tienda">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Página de Tienda</span>
                        </a>
                    </li>
                    <li class="<?= ($_GET['c'] == 'config' && $_GET['m'] == 'videos') ? 'active': '' ?>">
                        <a href="config/videos">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Página de Videos</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.3
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>