<?php
use App\Helpers\Go;
require NAVBAR;
?>
<div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="mb-4 img-error p-xl-5" src="<?=Go::getPublic("assets/img/error.svg")?>" width="500" />
                                    <p class="lead">A Url solicitada não existe no nosso servidor</p>
                                    <a href="<?=URL?>/home" class="btn btn-info text-white" >
                                        Retorne à Home
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutError_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
        </div>
        <!-- <php require FOOTER;?> -->
        