<?php
require_once NAVBAR;
?>
<style>
    @media(max-width:426px) {
        h2.mb-2.h6.font-weight-bold {

            width: calc(426px - 200px);
        }

        #destaque {
            display: block;
            width: 100%;
        }
    }

    @media(max-width:321px) {
        h2.mb-2.h6.font-weight-bold {

            width: calc(426px - 250px);
        }

        #destaque {
            display: block;
            width: 100%;
        }
    }
</style>
<!-- ======= Seleção do estilo principal ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1><br>JORNAL ONLINE-BETÂNIA</h1>
        <h2>Todas as notícias do BETÂNIA encontrarás aqui!</h2>
        <a href="<?= URL ?>/news" class="btn-get-started">Ver todas as notícias</a>
    </div>
</section><!-- fim da Seleção do estilo principal -->

<main id="main">

    <!-- ======= Seleção sobre ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 " data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/img/bbtania.jpg" class="img-fluid" alt="fotos de criancas" width="700" style="height: 285px;">
                </div>
                <div class="col-6">
                    <?php if ($news) : ?>
                        <?php foreach ($news as $key => $value) : ?>
                            <div class="mb-3 d-flex align-items-center">
                                <img height="80" src="<?= URL . '/public/' . $value['img'] ?>">
                                <div class="pl-3">
                                    <h2 class="mb-2 h6 font-weight-bold">
                                        <a id="destaque" class="text-dark" href="<?= URL ?>/news"><?= $value['tema'] ?></a>
                                    </h2>
                                    <div class="card-text text-muted small">
                                        Notícias
                                    </div>
                                    <small class="text-muted"><?= $value['create_at'] ?></small>
                                </div>
                            </div>

                        <?php endforeach ?>
                    <?php endif ?>

                </div>
            </div>
        </div>
        <div class="container my-5 content">
            <h3>O novo jornal do BETÂNIA com muitas estratégias e notícias para cativar mais os alunos.</h3>
            <p class="fst-italic">
                O trabalho intitulado On-line Escolar tem como finalidade estimular e disseminar a leitura e a produção textual mediadas pela tecnologia na sala de aula, além de inserir os alunos no contexto do mundo virtual. Pois, sabe-se que muitos alunos ainda não estão habituados a usarem o computador como uma maneira de adquirir informação e aprender sobre um determinado assunto.
                Geralmente, eles o usam só para jogar ou mandar e- mails e conversar via Messenger(MSN). Assim, o desafio desse projeto é despertar o interesse do aluno às informações, ao hipertexto, à hipermídia, fazendo com que o mesmo relacione e integre a sua leitura e a sua escrita às tecnologias da informação e da comunicação (TIC) usadas para compor um jornal on-line.
                A produção de jornal on-line pode ser uma ferramenta bastante interessante para ser usada nas aulas, visto que o aluno tem a possibilidade de desenvolver competências e habilidades na escrita e na leitura ao usar a tecnologia para instigá-lo através da hipermídia e do hipertexto, elementos que são para muitos deles novos e interessantes pela não linearidade e diversidade de informações interligadas.


            </p>
            <ul>
                <li><i class="bi bi-check-circle"></i> Hipertexto: é o termo que remete a um texto ao qual se agregam outros conjuntos de informação na forma de blocos de textos, palavras, imagens ou sons, cujo acesso se dá através de referências específicas, no meio digital denominadas hiperligações.</li>
                <li><i class="bi bi-check-circle"></i> Hipermídia:Trata-se de uma plataforma que integra vários tipos de mídia, como textos, áudios, vídeos, animações e gráficos, ocorrendo a interação com estas informações, sem que a linearidade seja necessária, ou seja, o usuário pode navegar pelos dados como achar conveniente, sem precisar seguir um caminho pré-estabelecido.</li>
                <li><i class="bi bi-check-circle"></i> Design:</li>
            </ul>
            <p>
                A informação deve fazer parte da vida de todos. Por isso, acredita- se que a escola através da criação de um jornal on-line proporcionará ao aluno trabalhar em equipe, a buscar informações; motivará o mesmo a ser crítico e a pesquisar, além de trabalhar com o hipertexto e hipermídia.
                Entende- se que, além de desenvolver a capacidade de ler e escrever, a criação de um jornal on-line pode ser um elo entre a Escola e a comunidade, um dos objetivos previstos na gestão democrática. Já, na criação do jornal on-line, muitos recursos são usados, aproveitando a capacidade e a criatividade de quem o estará editando.
                Assim, compreende- se que é dever do jornal procurar manter o aluno atualizado, orientando- o em atividades escolares que vão ao encontro da realidade dele. Ou seja, saber o que está acontecendo, estar ciente da realidade e do espaço em que vive. Ora, escrever, buscar imagens, produzir gêneros diversos é essencial para o cotidiano do aluno. Aprender a usar as ferramentas tecnológicas em prol do conhecimento e do crescimento intelectual também.
            </p>

        </div>
        </div>

        </div>
    </section><!-- fim da Seleção sobre -->


    <!-- ======= Seleção Popular noticias ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Actividades</h2>
                <p> Recentes</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <?php if ($act) : ?>
                    <?php foreach ($act as $key => $value) : ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                                <img src="<?=URL.'/public/'.$value['img']?>" class="img-fluid" alt="...">
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4>Actividade</h4>

                                    </div>

                                    <h3><a href="<?= URL ?>/activities"><?=$value['tema']?></a></h3>
                                    <p><?=$value['subtema']?></p>
                                    <div class="trainer d-flex justify-content-between align-items-center">


                                    </div>
                                </div>
                            </div>
                        </div> <!-- fim item noticias -->

                    <?php endforeach; ?>
                <?php endif; ?>

            </div>

        </div>
    </section><!-- fim da seleção Popular atividades escolares  -->
</main><!-- fim #main -->
<?php
require_once FOOTER;

?>