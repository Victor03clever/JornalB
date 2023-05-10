<?php
use App\Helpers\Go;
    require_once NAVBAR;
?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Cabeçalho ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Atividades escolares</h2>
        <p>As atividades  que decorrem  no Complexo  Escolar  Betânia  são  publicadas aqui, construímos um ambiente de informações para garantir a formalidade dos nossos alunos para com a instituição. Aqui temos disponível todas as  nossas atividades. </p>
      </div>
    </div><!-- fim cabeçalho -->

    <!-- ======= Seleção das Atividades escolares  ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

                
          
          <?php 
          if($dados):
            foreach($dados as $key=>$value):
          ?>
          <!-- item das Atividades escolares -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="<?=Go::getPublic($value['img'])?>" class="img-fluid" alt="..." >
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?=$value['tema']?></h4>
                 
                </div>

                <h3><?=$value['subtema']?></h3>
                <p><?=$value['descricao']?></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/.jpg" class="img-fluid" alt="">
                    <span><?=$value['organizador']?></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;ORGANIZADOR
                   
                    
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- fim dos item das Atividades escolares -->
          <?php endforeach;
          endif;
          ?>

          

        </div>

      </div>
    </section><!-- fim da seleção das Atividades escolares -->

  </main><!-- fim #main -->

  <?php
    require_once FOOTER;
?>