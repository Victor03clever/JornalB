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
        <h1>Listar Avisos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= URL ?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Avisos</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <?=Sessao::sms('aviso')?>

<div class="row">


    <?php
    if ($read) :
        foreach ($read as $key => $value) :
    ?>
            <!-- falta inserir alguamas imagens-->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class=" card w-100">

                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between align-content-center mb-0 pb-1">
                            <h4 class=" fs-5"><?= $value['tema'] ?></h4>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ...
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?=URL.'/admin/editAviso/'.$value['id']?>">Editar</a></li>
                                    <li>
                                        <form action="<?=URL.'/admin/deleteAviso/'.$value['id']?>" method="post">
                                                    <button class="dropdown-item" type="submit" name="btn" value=submit>deletar</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <span><strong><?= date("d F Y H:i", strtotime($value['create_at'])) ?></strong></span>
                        <p class="card-text">
                            <?= $value['descricao'] ?>
                        </p>

                    </div>
                </div>
            </div>
    <?php
        endforeach;
    endif;
    ?>
</div>
    <!-- falta inserir alguamas imagens-->

</main>

<!-- footer from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'footer.php';
?>
<!-- ----------------------- -->