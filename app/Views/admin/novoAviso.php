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
        <h1>Novo Aviso</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= URL ?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Avisos</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
<?=Sessao::sms("aviso")?>
    <div class="container">
        <form action="<?=URL?>/admin/newaviso" method="post">
            <p>
                <label for="title">Titulo: </label>
                <input type="text" class="form-control <?= $dados['error']? 'is-invalid':'' ?>" name="title" id="title">
            </p>
            <p>
                <label for="sms">Mensagem: </label>
                <textarea name="sms" id="sms" cols="30" rows="5" class="form-control <?= $dados['error']? 'is-invalid':'' ?>"></textarea>
                <span class="invalid-feedback">
                    <?= $dados['error']?>
                </span>
            </p>
           
            <p>
                <button class="btn btn-primary btn-xl" type='submit' name='btnNew' value='submit'> Salvar</button>
            </p>
        </form>
    </div>
</main>

<!-- footer from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'footer.php';
?>
<!-- ----------------------- -->