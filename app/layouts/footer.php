<?php if ($page == 1) { ?>

    <footer class="container-fluid bg-primary py-2">
        <div class="container d-flex justify-content-end align-items-center">
            <a href="<?= $url ?>" class="d-flex col-6">
                <div class="row">
                    <img src="<?= $url ?>/src/img/default/logo-v2.png" style="width:200px">
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
    <div class="footer" style="display: none;">
        <img src="<?= $url ?>/src/img/default/logo-v2.png">
        <div class="d-flex">
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
    </div>
<?php }
if ($page == 2) { ?>
    <footer class="main-footer" style="font-size: 12px !important">
        <strong>Copyright &copy; 2023 <a href="<?= $url ?>app/view/" class="text-primary">UPG - FISI</a></strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>
<?php } ?>