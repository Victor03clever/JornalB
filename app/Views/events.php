<?php
require_once NAVBAR;

use App\Helpers\Go;
use App\Helpers\ResumirTexto;
?>

<main id="main">

  <!-- ======= Cabeçalho ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Notícias</h2>
      <p>Temos aqui todas as novidades </p>
    </div>
  </div><!-- fim do cabeçalho -->

  <!-- ======= Seleção dos Eventos  ======= -->
  <section id="events" class="events">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <?php if ($News) : $i = 0; ?>
          <?php foreach ($News as $key => $value) : $i += 1; ?>
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card">
                <div class="card-img">
                  <img src="<?= Go::getPublic($value['img']) ?>" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?= $value['tema'] ?></a></h5>
                  <p class="fst-italic text-center"><?= date("d F Y H:i", strtotime($value['create_at'])) ?></p>
                  <p class="card-text text-center" id='resumido<?= $i ?>'><?= ResumirTexto::ResumirTexto($value['descricao'], 15, "<a class='small fst-italic' onclick='seeMore" . $i . "()'> ver mais</a>") ?></p>
                  <p class="card-text d-none text-center" id='completo<?= $i ?>'><?= $value['descricao'] ?> <a class='small fst-italic' onclick="seeLess<?= $i ?>()"> ver menos</a></p>

                </div>
              </div>
            </div>
            <script>
              function seeMore<?= $i ?>() {
                let resumido = document.querySelector('#resumido<?= $i ?>');
                let completo = document.querySelector('#completo<?= $i ?>');
                completo.classList.remove('d-none');
                resumido.classList.add('d-none');
                // console.log(resumido);
              }

              function seeLess<?= $i ?>() {
                let resumido = document.querySelector('#resumido<?= $i ?>');
                let completo = document.querySelector('#completo<?= $i ?>');
                completo.classList.add('d-none');
                resumido.classList.remove('d-none');
                // console.log(resumido);
              }
            </script>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

    </div>

    <hr>
  </section>
</main><!-- fim #main -->


<?php
require_once FOOTER;
?>