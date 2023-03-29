<?php
use App\Helpers\Go;


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Painel Admin </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- icons do jornal -->
   <link href="<?=Go::getPublic("assets/img/mm.jpg")?>" rel="icon">
    <link href="<?=Go::getPublic("assets/img/mm.jpg")?>" rel="mm-icon">
  

  <!-- Vendor CSS Files -->
  <link href=" <?=Go::getPublic("assets/assets/vendor/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet">
  <link href=" <?=Go::getPublic("assets/assets/vendor/bootstrap-icons/bootstrap-icons.css")?>" rel="stylesheet">
  <link href=" <?=Go::getPublic("assets/assets/vendor/boxicons/css/boxicons.min.css")?>" rel="stylesheet">
  <link href=" <?=Go::getPublic("assets/assets/vendor/quill/quill.snow.css")?>" rel="stylesheet">
  <link href=" <?=Go::getPublic("assets/assets/vendor/quill/quill.bubble.css")?>" rel="stylesheet">
  <link href=" <?=Go::getPublic("assets/assets/vendor/remixicon/remixicon.css")?>" rel="stylesheet">
  <link href=" <?=Go::getPublic("assets/assets/vendor/simple-datatables/style.css")?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href=" <?=Go::getPublic("assets/assets/css/style.css")?>" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logotipo.png" alt="">
        <span class="d-none d-lg-block">BETÂNIA</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

    

        

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Nome do admin</h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog        ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Terminar Sessão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Deseja sair?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary btn-sm"><a class=" text-decoration-none text-white" href="<?=URL?>/admin/sair">Sair</a></button>
            </div>
        </div>
    </div>
  </div>