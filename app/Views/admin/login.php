<?php
use App\Helpers\Sessao;
use App\Helpers\Go;
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - Project Clever</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
   <!-- icons do jornal -->
   <link href="<?=Go::getPublic("assets/img/mm.jpg")?>" rel="icon">
    <link href="<?=Go::getPublic("assets/img/mm.jpg")?>" rel="mm-icon">


  <!-- Vendor CSS Files -->
  <link href="<?=Go::getPublic("assets/vendor/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet">
  <link href=" <?=Go::getPublic("assets/vendor/bootstrap-icons/bootstrap-icons.css")?>" rel="stylesheet">
  
  <!--itype-->
  <script src=" <?=Go::getPublic("assets/assets/victor/index.js")?>"></script>
  <link rel="stylesheet" href=" <?=Go::getPublic("assets/css/style.css")?>">
        
</head>

<body>

  <main>
    <div class="container">
    <?=Sessao::sms("sms");?>
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a class=" d-flex align-items-center w-auto">
                <h1 class="logo me-auto" style="color: #0070BA;">BETÂNIA</h1>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="text-center pb-0 fs-3" style="color: #0070BA;"><span class="ityped"></span></h5>
                  </div>

                  <form class="row g-3" action="<?=URL?>/admin/login" method="post">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Usuário</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control <?= $dados['error_name']?'is-invalid':'' ?>" id="yourUsername" value="<?=$dados['username']?>">
                        <div class="invalid-feedback"><?=$dados['error_name']?></div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Senha</label>
                      <input type="password" name="password" class="form-control <?= $dados['error_pass']?'is-invalid':'' ?>" id="yourPassword" value="<?=$dados['password']?>">
                      <div class="invalid-feedback">
                        <?=$dados['error_pass']?>
                      </div>
                    </div>

                    
                    <div class="col-12">
                      <button class="btn w-100 btn-primary" type="submit" name="btn-login" value="submit">Login</button>
                    </div>
                   
                  </form>

                </div>
              </div>

              <div class="credits">

                Made by <a href="#">Victor Clever</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src=" <?=Go::getPublic("assets/vendor/apexcharts/apexcharts.min.js")?>"></script>
  <script src=" <?=Go::getPublic("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
  

  <!-- Template Main JS File -->
  <script src=" <?=Go::getPublic("assets/js/main.js")?>"></script>



  <!--itype-->
  <script>
    window.ityped.init(document.querySelector(".ityped"), {
      showCursor: true,
      strings: [' ', 'Realizar Login'],
      backDelay: 2000,
      startDelay: 1000

    })

  </script>

</body>

</html>