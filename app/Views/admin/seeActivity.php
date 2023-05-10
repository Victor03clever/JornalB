<!-- top from php -->
<?php

use App\Helpers\Go;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'navbar.php';
?>
<!-- ----------------------- -->
<!-- Aside from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'aside.php';
?>



<main id='main' class="main">
<div class="pagetitle">
        <h1>Visualizar a actividade</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Actividade</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h4 class="h3"><?=$see['tema']?></h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title "><?=$see['subtema']?></h1>
                        <p class="card-text"><?=$see['descricao']?></p>
                        <img src="<?=Go::getPublic($see['img'])?>" alt="imagem de capa" width="600" height="300">
                    </div>
                    <hr>
                    <div class="card-body">
                        <a href="<?=URL?>/admin/activities" class="btn btn-primary">Voltar</a>
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