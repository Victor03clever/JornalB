<!-- top from php -->
<?php

use App\Helpers\Sessao;
use App\Helpers\ResumirTexto;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'navbar.php';
?>
<!-- ----------------------- -->
<!-- Aside from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'aside.php';
?>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Listar Noticias</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= URL ?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Noticias </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <?= Sessao::sms('noticia') ?>
<a href="<?=URL?>/news" target="__blank" class="btn btn-primary mb-3"> Ver</a>
    <div class="row">


        <?php
        if ($dados) :$i=0;
            foreach ($dados as $key => $value) :
                $i+=1;
        ?>
                
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
                                        <li><a class="dropdown-item" href="<?= URL . '/admin/editNews/' . $value['id'] ?>">Editar</a></li>
                                        <li>
                                            <form action="<?= URL . '/admin/deleteNews/' . $value['id'] ?>" method="post">
                                                <button class="dropdown-item" type="submit" name="btn" value=submit>deletar</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <span><strong><?= date("d F Y H:i", strtotime($value['create_at'])) ?></strong></span>
                            <p class="card-text text-center" id='resumido<?= $i ?>'><?= ResumirTexto::ResumirTexto($value['descricao'], 15, "<a class='small fst-italic' onclick='seeMore".$i."()'> ver mais</a>") ?></p>
                            <p class="card-text d-none" id='completo<?=$i?>'>
                                <?= $value['descricao'] ?><a class='small fst-italic' onclick="seeLess<?= $i ?>()"> ver menos</a>
                            </p>

                        </div>
                    </div>
                </div>
                <script>
                    var resumido = document.querySelector('#resumido<?=$i?>');
                    var completo = document.querySelector('#completo<?=$i?>');
              function seeMore<?=$i?>() {
                completo.classList.remove('d-none');
                resumido.classList.add('d-none');
                console.log(resumido);
              }
              function seeLess<?= $i ?>() {
                // let resumido = document.querySelector('#resumido<?= $i ?>');
                // let completo = document.querySelector('#completo<?= $i ?>');
                completo.classList.add('d-none');
                resumido.classList.remove('d-none');
                // console.log(resumido);
              }
            </script>
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
