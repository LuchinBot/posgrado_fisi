<?php if ($page == 1) { ?>

    <footer class="container-fluid bg-primary py-2">
        <div class="container d-flex justify-content-end align-items-center">
            <a href="" class="d-flex col-6">
                <div class="row">
                    <span class="text-white fw-light" >&copy; UPG Facultad de Ingeniería de Sistemas e Informática - 2023</span>
                </div>
            </a>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <span class="text-white me-2 fw-light">Nuestras redes</span>
                <a href="https://www.facebook.com/unsmperu">
                    <div class="socializate">
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                </a>
                <a href="https://www.facebook.com/unsmperu">
                    <div class="socializate">
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                </a>
                <a href="https://www.facebook.com/unsmperu">
                    <div class="socializate">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </a>
            </div>
        </div>
    </footer>
<?php }
if ($page == 2) { ?>
    <footer class="main-footer" style="font-size: 12px !important">
        <strong>Copyright &copy; 2023 <a href="<?= $url ?>public/view/admin" class="text-success">OGC - UNSM</a></strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>
<?php } ?>