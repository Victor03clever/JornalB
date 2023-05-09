<!-- top from php -->
<?php

use App\Helpers\Sessao;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'navbar.php';
?>
<!-- ----------------------- -->
<!-- Aside from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'aside.php';
?>



<main id='main' class="main">
<div class="pagetitle">
        <h1>Painel Mensagem</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Mensagem</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h4 class="h3"><?=$see['nome']?></h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title "><?=$see['assunto']?></h1>
                        <p class="card-text"><?=$see['mensagem']?></p>
                    </div>
                    <hr>
                    <div class="card-body">
                        <a href="<?=URL?>/admin/home" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>





<!-- footer from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'footer.php';
?>
<!-- ----------------------- -->