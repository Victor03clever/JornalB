 <!-- ======= Footer ======= -->
 <?php 
use App\Helpers\Go;
?>

 <footer id="footer">

<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>BETÂNIA</h3>
                <p>
                    Vila Alice <br>
                    LUANDA, Vila Alice<br>
                    Angola <br><br>
                    <strong>Telefone:</strong> +244 932 809 630<br>
                    <strong>Email:</strong> Colegiobetania@gmail.com<br>
                </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Nossos Serviços</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="<?=URL?>/home">Página Inicial</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="<?=URL?>/about">Sobre</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="<?=URL?>/courses">Atividades Escolares</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="<?=URL?>/trainers">Avisos</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="<?=URL?>/events">Notícias</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="<?=URL?>/pricing">Passatempo</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="<?=URL?>/contact">Contatos</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Veja as nossas notícias mais tarde</h4>
                <p>Estamos disponíveis com tudo que queiras saber sobre a nossa instituição e temos muitas novidades para sí</p>

            </div>

        </div>
    </div>
</div>

<div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
            &copy;&nbsp;<strong><span>Colegio BETÂNIA</span></strong>.
        </div>
        <div class="credits">
            <!-- /área de acesso as páginas do Betânia -->
            <h6 style="font-style:italic;">Juntos a 14 anos promovendo a educação em Angola</h6><a href="https://facebook/VictorLouren.com/">Siga a nossa página <a href=""><i class="bi bi-facebook"></i></a></a><a href=""> <i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i></a>
        </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://wa.me/932809630" target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="https://facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>

    </div>
</div>
</footer><!-- fim Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?=Go::getPublic("assets/vendor/purecounter/purecounter.js")?>"></script>
<script src=" <?=Go::getPublic("assets/vendor/aos/aos.js")?>"></script>
<script src=" <?=Go::getPublic("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
<!-- animação da página -->
<script src=" <?=Go::getPublic("assets/vendor/swiper/swiper-bundle.min.js")?>"></script>

<!-- pasta do js -->
<script src=" <?=Go::getPublic("assets/js/main.js")?>"></script>

</body>

</html>