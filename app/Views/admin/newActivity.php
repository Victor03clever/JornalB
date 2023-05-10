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
        <h1>Nova Actividade</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= URL ?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Actividades</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
<?=Sessao::sms("act")?>
    <div class="container">
        <form action="<?=URL?>/admin/newActivity" enctype="multipart/form-data" method="post">
            <p>
                <label for="title">Tema: </label>
                <input type="text" class="form-control <?= $dados['error']? 'is-invalid':'' ?>" name="tema" id="title">
            </p>
            <p>
                <label for="title">Subtema: </label>
                <input type="text" class="form-control <?= $dados['error']? 'is-invalid':'' ?>" name="sub" id="sub">
            </p>
            <p>
                <label for="desc">Contexto: </label>
                <textarea name="cont" id="desc" cols="30" rows="5" class="form-control <?= $dados['error']? 'is-invalid':'' ?>"></textarea>
                
            </p>
            <p>
                <label for="title">Organizador (a): </label>
                <input type="text" class="form-control <?= $dados['error']? 'is-invalid':'' ?>" name="org" id="title">
            </p>
            <p>
                <label for="img">imagem de capa: </label>
                <input type="file" class="form-control <?= $dados['error']? 'is-invalid':'' ?>" name="img" id="img">
                <span class="invalid-feedback">
                    <?= $dados['error']?>
                </span>
            </p>
           
            <p>
                <button class="btn btn-primary btn-xl" type='submit' name='save' value='submit'> Salvar</button>
            </p>
        </form>
    </div>
</main>

<!-- footer from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'footer.php';
?>
<!-- ----------------------- -->