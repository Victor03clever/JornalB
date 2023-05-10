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


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Novo</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= URL ?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Quadro de honra</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
<?=Sessao::sms("honra")?>
    <div class="container">
        <form action="<?=URL?>/admin/newHonra" enctype="multipart/form-data" method="post">
            <p>
                <label for="title">Nome: </label>
                <input type="text" class="form-control <?= $dados['error']? 'is-invalid':'' ?>" name="nome" id="title">
            </p>
            <p>
                <label for="title">Curso: </label>
                <input type="text" class="form-control <?= $dados['error']? 'is-invalid':'' ?>" name="curso" id="title">
            </p>
            <p>
                <label for="title">Média: </label>
                <input type="text" class="form-control <?= $dados['error']? 'is-invalid':'' ?>" name="media" id="title">
            </p>
            <p>
                <label for="img">imagem de capa: </label>
                <input type="file" class="form-control <?= $dados['error']? 'is-invalid':'' ?>" name="img" id="img">
                <span class="invalid-feedback">
                    <?= $dados['error']?>
                </span>
            </p>
           
            <p>
                <button class="btn btn-primary btn-xl" type='submit' name='btn' value='submit'> Salvar</button>
            </p>
        </form>
    </div>
</main>

<!-- footer from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'footer.php';
?>
<!-- ----------------------- -->