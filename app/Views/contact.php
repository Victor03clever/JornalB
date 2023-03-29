<?php
require_once NAVBAR;
?>

<main id="main">

  <!-- ======= Cabeçalho ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Contatos</h2>
      <p>A nossa comunicação com os alunos é essencial, apresente-nos a sua preocupação </p>
    </div>
  </div><!-- fim do Cabeçalho -->

  <!-- ======= Área do contacto. aqui temos o link do mapa, os nossos contatos e podes enviar uma sms ======= -->
  <section id="contact" class="contact">
    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3567.8553273604152!2d13.247965414520275!3d-8.822801692713835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f3cc615b6155%3A0xa3f0741e46932104!2scomplexo%20escolar%20bet%C3%A2nia!5e1!3m2!1spt-PT!2sao!4v1676200306526!5m2!1spt-PT!2sao" frameborder="0" allowfullscreen></iframe>
    </div>






    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Local:</h4>
              <p>Vila Alice, LUANDA, Vila Alice</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>Colegiobetania@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Liga:</h4>
              <p>+244 932 809 630</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="<?= URL ?>/contact/getForm" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control <?= $dados['err_name']?'is-invalid':'' ?>" id="name" placeholder="Seu Nome" >
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0 ">
                <div class="input-group">
                  <span class=" input-group-text">+244</span>
                  <input type="number" class="form-control <?= $dados['err_number']?'is-invalid':'' ?>" name="number" id="number" placeholder="Seu Número" >
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control <?= $dados['err_subject']?'is-invalid':'' ?>" name="subject" id="subject" placeholder="Assunto" >
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control <?= $dados['err_message']?'is-invalid':'' ?>" name="message" rows="5" placeholder="Mensagem" ></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Processando</div>
              <div class="error-message"></div>
              <div class="sent-message <?=$message??'' ?>">A sua mensagem será enviada. Obrigado!</div>
            </div>
            <div class="text-center"><button type="submit" name="btn_contact" value="submit">Enviar Mensagem</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- fim da área de contatos -->

</main><!-- fim #main -->

<?php
require_once FOOTER;
?>