<?php if ($page == 1) { ?>
    <div class="container-fluid p-0">
        <div class="bg-primary" style="height: 5px;">

        </div>
    </div>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary bg-white" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        <div class="container-fluid">
            <div class="col-md-3 mb-2 mb-md-0">
                <a class="navbar-brand d-flex" href="<?= $url ?>">
                    <img src="<?= $url ?>src/img/default/fisi.png" class="logo">
                </a>
            </div>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?=$url?>" class="nav-link px-2 link-secondary">Inicio</a></li>
                <li><a href="<?=$url?>courses" class="nav-link px-2">Cursos</a></li>
                <li><a href="<?=$url?>about" class="nav-link px-2">Nosotros</a></li>
                <li><a href="#contact" class="nav-link px-2">Más Información</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <a href="<?=$url?>login" class="btn btn-outline-primary me-2">Ingresar</a>
                <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i></button>
            </div>
        </div>
    </nav>

<?php }
if ($page == 2) { ?>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fa fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fa fa-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $url ?>logout">
                    <i class="fa fa-sign-out"></i>
                </a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar bg-dark elevation-4 p-0">
        <!-- Brand Logo -->
        <a href="<?= $url ?>app/view" class="brand-link border-bottom bg-white">
            <img src="<?= $url ?>src/img/default/fisi.png" alt="OGC Logo" style="opacity: .8; width:40px">
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex border-bottom">
                <div class="image">
                    <img src="<?= $url ?>src/img/default/user.jpg" class="img-circle elevation-2 mt-1" alt="User Image">
                </div>
                <div class="info" style="line-height: 1.2;">
                    <span href="#" class="d-block text-white" style="font-size: 14px;font-weight: 600"><?= $fullName ?></span>
                    <span style="font-size: 10px; color: #F1F1F1;font-weight: 200"><?= $userData['name_profiles'] ?></span>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="<?= $url ?>public/view/" class="nav-link">
                            <i class="nav-icon fa fa-home"></i>
                            <p>
                                Ventana principal
                            </p>
                        </a>
                    </li>
                    <?php if ($userData['idprofiles'] == 1) { ?>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/nosotros" class="nav-link">
                                <i class="nav-icon fa fa-institution"></i>
                                <p>
                                    Nosotros generales
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/personal" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Nuestro Personal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/carrusel" class="nav-link">
                                <i class="nav-icon fa fa-image"></i>
                                <p>
                                    Carrusel principal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/noticias" class="nav-link">
                                <i class="nav-icon fa fa-newspaper"></i>
                                <p>
                                    Nuestras noticias
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/eventos" class="nav-link">
                                <i class="nav-icon fa fa-calendar-days"></i>
                                <p>
                                    Nuestros eventos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/galeria" class="nav-link">
                                <i class="nav-icon fa-solid fa-photo-film"></i>
                                <p>
                                    Nuestra Galería
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/enlaces" class="nav-link">
                                <i class="nav-icon fa fa-link"></i>
                                <p>
                                    Nuestros Enlaces
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-gear"></i>
                                <p style="font-weight: 400;">
                                    Mantenimiento
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $url ?>public/view/" class="nav-link">
                                        <i class="fa fa-id-card nav-icon"></i>
                                        <p>Perfiles</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $url ?>public/view/" class="nav-link">
                                        <i class="fa fa-user nav-icon"></i>
                                        <p>Usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $url ?>public/view/" class="nav-link">
                                        <i class="fa fa-user nav-icon"></i>
                                        <p>Personas Naturales</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $url ?>public/view/" class="nav-link">
                                        <i class="fa fa-user nav-icon"></i>
                                        <p>Cargos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>
                    <?php if ($userData['idprofiles'] == 2) { ?>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/nosotros" class="nav-link">
                                <i class="nav-icon fa fa-institution"></i>
                                <p>
                                    Nosotros generales
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/personal" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Nuestro Personal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/carrusel" class="nav-link">
                                <i class="nav-icon fa fa-image"></i>
                                <p>
                                    Carrusel principal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/noticias" class="nav-link">
                                <i class="nav-icon fa fa-newspaper"></i>
                                <p>
                                    Nuestras noticias
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/eventos" class="nav-link">
                                <i class="nav-icon fa fa-calendar-days"></i>
                                <p>
                                    Nuestros eventos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/galeria" class="nav-link">
                                <i class="nav-icon fa-solid fa-photo-film"></i>
                                <p>
                                    Nuestra Galería
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $url ?>public/view/enlaces" class="nav-link">
                                <i class="nav-icon fa fa-link"></i>
                                <p>
                                    Nuestros Enlaces
                                </p>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
<?php } ?>