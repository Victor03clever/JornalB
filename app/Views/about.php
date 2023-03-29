<?php
require_once NAVBAR;
?>
<main id="main">
  <!-- ======= Cabeçalho======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Sobre</h2>
      <p>Saiba mais concernente ao BETÂNIA. </p>
    </div>
  </div><!-- fim do Cabeçalho -->

  <!-- ======= seleção do sobre  ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="assets/img/OIP (4).jpg" class="img-fluid" alt="">
          <a href="<?=URL?>/about/rules" class="btn mt-4" style="color: #fff; background: orange;"> Regulamentos</a>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>O Colêgio Betânia da Vila Alice foi inaugurado em 2 de abril de 2009, já tem mais de 3mil formados na área técnica e 4mil noutras áreas. com o nosso ensino vamos longe.</h3>

          <p class="fst-italic">
            Temos para sí o melhor ambiente escolar com professores qualificados para um bom aprendizado no aluno.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> A instituição contém uma sala de informática.</li>
            <li><i class="bi bi-check-circle"></i> Área de lazer no pátio para o aluno.</li>
            <li><i class="bi bi-check-circle"></i> Salas climatizadas.</li>
            <li><i class="bi bi-check-circle"></i> Refeitório para os alunos.</li>
            <li><i class="bi bi-check-circle"></i> WC para homens e para mulheres.</li>
          </ul>
          <p>
            Estão disponíveis dois turnos de aulas. O turno da manhã que inicia as 7h 30min e termina as 12h 30min, e o da tarde das 13h até as 17h 30min.
          </p>

        </div>
      </div>

    </div>
  </section><!-- fim da seleção do sobre -->

  <!-- ======= seleção dos dados da escola ======= -->
  <section id="counts" class="counts section-bg ">
    <div class="container">

      <div class="row counters d-flex justify-content-center align-items-center">

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="<?=$total['aluno']?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>Estudantes</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="<?=$total['prof']?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>Professores</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="<?=$total['salas']?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>Salas</p>
        </div>

        

      </div>

    </div>
  </section><!-- fim da seleção dos dados da escola -->

  <!-- ======= seleção dos membros ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>EDUCADORES</h2>
        <p>OS MEMBROS DA INSTITUIÇÃO</p>
      </div>
      <!-- falta inserção de imagens -->

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/
                  .jpg" class="testimonial-img" alt="">
                <h3>Nelson Daniel</h3>
                <h4>Director &amp; Pedagógico</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Trabalha no gabinete pedagógico, e é o responsável pela instituição.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
          <!-- falta inserção de imagens -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/
                  
                  
                  .jpg" class="testimonial-img" alt="">
                <h3>Dulce Simão</h3>
                <h4>Sub directora</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Trabalha no gabinete pedagógico, e é a responsável pela instituição, na ausência do D.G, trabalha como sua auxiliar.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- falta inserção de imagens -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/
                  
                  
                  .jpg" class="testimonial-img" alt="">
                <h3>Laurinda Armando</h3>
                <h4>Secretária</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Trabalha no gabinete da secretaria, tem a função de recepcionísta e dar informações.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- falta inserção de imagens -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/
                  
                  
                  .jpg" class="testimonial-img" alt="">
                <h3>José Firmino</h3>
                <h4>Secretário &amp; Tesoureiro</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Trabalha no gabinete da secretaria, tem a função de tesoureiro, e dar informações sobre a instituição.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- falta inserção de imagens -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/
                  
                  
                  
                  .jpg" class="testimonial-img" alt="">
                <h3>Ana Simão</h3>
                <h4>Secretária</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Trabalha no gabinete da secretaria, tem a função de recepcionísta e dar informações.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- fim da seleção dos membros -->

</main><!-- fim #main -->

<?php
require_once FOOTER;
?>