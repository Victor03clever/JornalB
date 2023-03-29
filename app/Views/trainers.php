<?php
require_once NAVBAR;
use App\Helpers\Valida;
?>

<main id="main" data-aos="fade-in">

  <!-- ======= cabeçalho ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Avisos</h2>
      <p>Os avisos são publicados aqui, fique atento com o que publicamos. </p>
    </div>
  </div><!-- fim do cabeçalho -->

  <!-- ======= Seleção dos avisos ======= -->
  <section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">



        <?php
        if ($read) :
          foreach ($read as $key => $value) :
        ?>
            <!-- falta inserir alguamas imagens-->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member" style="width:100%">
                <div class="member-content pt-3">
                  <h4><?=$value['tema']?></h4>
                  <span><?=date("d F Y H:i" , strtotime($value['create_at']))?></span>
                  <p >
                    <?=$value['descricao']?>
                  </p>

                </div>
              </div>
            </div>
        <?php
          endforeach;
        endif;
        ?>

      </div>

    </div>
  </section><!-- fim da seleção dos avisos -->

</main><!-- fim main -->

<?php
require_once FOOTER;
?>