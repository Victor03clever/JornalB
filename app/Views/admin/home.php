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
<!-- ----------------------- -->
<main id="main" class="main">
    <?php Sessao::sms("login") ?>
    <?php Sessao::sms("message") ?>
    <div class="pagetitle">
        <h1>Painel Principal</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= URL ?>/admin">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">

            <div class="col-xxl col-md" style="background-color: #525F7F; margin: 5px; height: 130px; border-radius: 5px; position: relative; border:.5px  #4154f1 solid">

                <h6 style="color: #fff; font-weight: bold; margin-top: 5px; font-size: large;">Quadro de Honra /<span style="color: #00CC88; font-weight: bold;"> Total</span></h6>

                <div class="d-flex align-items-center">
                    <a class="small text-white stretched-link" href="#"></a>
                    <h6 style=" position: absolute; top: 30%; left: 40%; color: #fff; font-size:xx-large;"><strong><?=$totalhonra['totalHonra']?></strong></h6>
                    </a>
                    <div class="col-auto">
                    </div>

                </div>

            </div>


            <div class="col-xxl col-md" style="background-color: #5C60F5;margin: 5px; height: 130px; border-radius: 5px; position: relative; border:.5px #4154f1 solid">

                <h6 style="color: #fff; font-weight: bold; margin-top: 5px; font-size: large;">Notícia /<span style="color: #00CC88; font-weight: bold;"> Total</span></h6>

                <div class="d-flex align-items-center">
                    <a class="small text-white stretched-link" href="#">
                        <h6 style=" position: absolute; top: 30%; left: 40%; color: #fff; font-size:xx-large;"><strong><?=$totalnoticia['totalNoticia']?></strong></h6>
                    </a>
                    <div class="col-auto">
                    </div>

                </div>

            </div>


            <div class="col-xxl col-md" style="background-color: #525F7F;margin: 5px; height: 130px; border-radius: 5px; position: relative; border:.5px  #4154f1 solid">

                <h6 style="color: #fff; font-weight: bold; margin-top: 5px; font-size: large;">Actividades /<span style="color: #00CC88; font-weight: bold;"> Total</span></h6>

                <div class="d-flex align-items-center">
                    <a href="#" class="small text-white stretched-link">
                        <h6 style=" position: absolute; top: 30%; left: 40%; color: #fff; font-size:xx-large;"><strong><?=$totalactividade['totalActividade']?></strong></h6>
                    </a>
                    <div class="col-auto">
                    </div>

                </div>

            </div>

        </div>
        <br>
        <br>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mensagens Enviadas</h5>
                <!-- data table -->
                <table class="table datatable table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Número</th>
                            <th scope="col">Assunto</th>
                            <th scope="col">Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($messages) :
                            $id = 1;
                            foreach ($messages as $key => $value) : ?>

                                <tr>
                                    <th scope="row"><?= $id += $key ?></th>
                                    <td><?= $value['nome'] ?></td>
                                    <td><?= $value['numero'] ?></td>
                                    <td><?= $value['assunto'] ?></td>
                                    <td class=" d-flex gap-2">
                                        <a href="<?= URL ?>/admin/seeMessage/<?= $value['id'] ?>" class="btn btn-primary btn-sm" title='Ver mensagem'>
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <form action="<?= URL ?>/admin/deleteMessage/<?= $value['id'] ?>" method="post">
                                            <button type="submit" name="delete" class="btn btn-danger btn-sm" title='Delectar a mensagem' value='submit'>
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

        <section class="section">
            <div class="row">

                <div class="col-xxl col-xxl">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pie Chart</h5>
                            <!-- Pie Chart -->
                            <div id="pieChart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new ApexCharts(document.querySelector("#pieChart"), {
                                        series: [<?= $totaltable['aluno'] ?>, <?= $totaltable['prof'] ?>, <?= $totaltable['salas'] ?>],
                                        chart: {
                                            height: 350,
                                            type: 'pie',
                                            toolbar: {
                                                show: true
                                            }
                                        },
                                        labels: ['Estudantes', 'Professores', 'Salas']
                                    }).render();
                                });
                            </script>
                            <!-- End Pie Chart -->
                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-primary btn-xl" data-bs-toggle="modal" data-bs-target="#modalId">
                                Actualizar
                            </button>



                        </div>
                    </div>
                </div>


            </div>
        </section>




        <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> -->
                    <div class="modal-body">
                        <form action="<?= URL ?>/admin/piechart" method="post">
                        <label for="aluno">
                            Alunos:
                            <input type="number" class="form-control" id='aluno' name='aluno' value='<?= $totaltable['aluno'] ?>'>
                        </label>
                        <label for="prof">
                            Professores:
                            <input type="number" class="form-control" id='prof' name='prof' value='<?= $totaltable['prof'] ?>'>
                        </label>
                        <label for="salas">
                            Salas:
                            <input type="number" class="form-control" id='salas' name='salas' value='<?= $totaltable['salas'] ?>'>
                        </label>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="btnTotal" value="submit" class="btn btn-primary btn-sm">Savar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Optional: Place to the bottom of scripts -->
        <script>
            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
        </script>


</main><!-- End #main -->

<!-- footer from php -->
<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'footer.php';
?>
<!-- ----------------------- -->