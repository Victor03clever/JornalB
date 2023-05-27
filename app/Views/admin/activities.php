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
        <h1>Listar Actividades</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= URL ?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Actividades</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <?=Sessao::sms("act")?>
    <a href="<?=URL?>/activities" target="__blank" class="btn btn-primary mb-3"> Ver</a>

    <div class="row">
    <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mensagens Enviadas</h5>
                <!-- data table -->
                <table class="table datatable table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Organizador</th>
                            <th scope="col">Criado em</th>
                            <th scope="col">Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($dados) :
                            $id = 1;
                            foreach ($dados as $key => $value) : ?>

                                <tr>
                                    <th scope="row"><?= $id += $key ?></th>
                                    <td><?= $value['tema'] ?></td>
                                    <td><?= $value['organizador'] ?></td>
                                    <td><?= $value['create_at'] ?></td>
                                    <td class=" d-flex gap-2">
                                        <a href="<?= URL ?>/admin/seeActivity/<?= $value['id'] ?>" class="btn btn-primary btn-sm" title='Ver mais'>
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <form action="<?= URL ?>/admin/deleteActivity/<?= $value['id'] ?>" method="post">
                                            <button type="submit" name="delete" class="btn btn-danger btn-sm" title='Delectar' value='submit'>
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                        <?php endforeach;
                        else :
                        endif; ?>
                    </tbody>
                </table>
            </div>
        </div> <!-- End Bordered Table -->
    </div>
</main>

<!-- footer from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'footer.php';
?>
<!-- ----------------------- -->