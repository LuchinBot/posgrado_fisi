<?php if ($page == 1) { ?>

    <footer class="container-fluid bg-success py-4">
        <div class="footer container d-flex">
            <a href="" class="d-flex col-6">
                <img src="<?= $url ?>src/img/default/fisi.png" style="width:60px; height:60px">
                <div class="row text-uppercase ms-1 border-start">
                    <span class="text-white" style="font-weight: 200;">Copyright © 2023</span>
                    <span class="text-white" style="font-weight: 600;">UNIDAD DE POSGRADO FISI</span>
                    <span class="text-white" style="font-weight: 200;">UNSM - TARAPOTO</span>
                </div>
            </a>
            <div class="contactos-top col-6 d-flex justify-content-end align-items-center">
                <span class="text-white mt-1 fw-bold">SOCIALÍZATE</span>
                <a href="https://www.facebook.com/unsmperu" class="text-success">
                    <div class="contact-a px-1 mx-2 bg-white">
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                </a>
                <a href="https://www.facebook.com/unsmperu" class="text-success">
                    <div class="contact-a px-1 mx-2 bg-white">
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                </a>
                <a href="https://www.facebook.com/unsmperu" class="text-success">
                    <div class="contact-a px-1 mx-2 bg-white">
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