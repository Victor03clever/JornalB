<?php
use App\Helpers\Go;
require_once NAVBAR;
?>

<main id="main">

    <!-- ======= Cabeçalho ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Regulamentos da Escola</h2>
            <p>Aqui estão escritos os regulamentos da nossa escola faça a leitura devidamente e faça cumprir dentro da nossa instituição de forma correta. Temos para sí um ensino de qualidade formamos e educamos os nossos alunos para um futuro melhor. </p>
        </div>
    </div><!-- fim do Cabeçalho -->

    <!-- ======= Detalhes da Seleção dos regulamentos ======= -->
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8">
                    <img src="<?=Go::getPublic("assets/img/OIP (6).jpg")?>" class="img-fluid" alt="">
                    <h3>Faça o seu dever como aluno e seja um aluno exemplar</h3>
                    <p>
                        Estes são os nossos regulamentos, o aluno que não cumprir será penalisado.
                    </p>
                </div>

    </section><!-- fim dos Detalhes da Seleção dos regulamentos  -->

    <!-- ======= Tabelas de regulamentos escolares ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Regra número 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Regra número 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Regra número 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Regra número 4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Regra número 5</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Proibido o uso de Roupas estravagantes</h3>
                                    <p class="fst-italic">Os alunos devem vestir-se devidamente</p>
                                    <p>Não é permitido a entrada de calças rasgadas, bolusas de alsa, calções curtos, chinelos, chapéu, a entrada de homens com cabelos longos e mulheres com com cortes estravagantes o uso de pirsing no narís não é autorizado. Os alunos devem estar sempre bem apresentados. e bem higienizados</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/course-details-tab-1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Proibido o uso de Telemóveis dentro da instituição</h3>
                                    <p class="fst-italic">é extremamente proibido o aluno fazer o uso de Telemóvel dentro da instituição</p>
                                    <p>Deve-se manter o Telemóvel desligado no período de aulas para evitar, desturbios nas aulas. os alunos não devem fazer chamada telefônica dentro da instituição(no pátio) </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/course-details-tab-2.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Proibido o uso de drogas</h3>
                                    <p class="fst-italic">Fumar é prejudicial a saúde</p>
                                    <p>Os alunos não devem consumir bebidadas alcoolicas nem fazer o uso do cigarro, ou um outro tipo de droga, é expressamente proibido </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/alcoolismo.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Proibido a entrada de alunos sem o uniforme escolar</h3>
                                    <p class="fst-italic">O uniforme deve estar limpo e bem organizado </p>
                                    <p>Deve-se fazer o uso dentro da instituição e dentro da sala de aula</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/course-details-tab-4.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Proibido a saída de alunos dentro da escola no período de aulas</h3>
                                    <p class="fst-italic">Os alunos só devem sair em questões de emergência ou entervalo ou queiram fazer necessidades biológicas.</p>
                                    <p>A saída dos alunos na instituição só deve ser no momento em que todas as aulas terminam. assim que irão para as suas casas.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- fim das tabelas de regulamentos escolares -->

</main><!-- fim #main -->

<?php
require_once FOOTER;
?>