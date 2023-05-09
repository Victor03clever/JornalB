<?php

use App\Helpers\Go;

$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

// var_dump($url);

?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jornal online do BETÂNIA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- icons do jornal -->
    <link href="<?= Go::getPublic("assets/img/mm.jpg") ?>" rel="icon">
    <link href="<?= Go::getPublic("assets/img/mm.jpg") ?>" rel="mm-icon">

    <!-- Fontes da google -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- pasta fornecedora css-->
    <link href="<?= Go::getPublic("assets/vendor/animate.css/animate.min.css") ?>" rel="stylesheet">
    <!-- pasta da animação do ambiente index -->
    <link href="<?= Go::getPublic("assets/vendor/aos/aos.css") ?>" rel="stylesheet">
    <!-- pasta do boostrap -->
    <link href="<?= Go::getPublic("assets/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
    <!-- pasta dos icones boostrap do site -->
    <link href="<?= Go::getPublic("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
    <!-- pasta dos tipos de icones -->
    <link href=" <?= Go::getPublic("assets/vendor/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
    <link href="<?= Go::getPublic("assets/vendor/remixicon/remixicon.css") ?>" rel="stylesheet">
    <link href=" <?= Go::getPublic("assets/vendor/swiper/swiper-bundle.min.css") ?>" rel="stylesheet">

    <!-- pasta do css principal, aqui está toda a estilização do nosso site -->
    <link href=" <?= Go::getPublic("assets/css/style.css") ?>" rel="stylesheet">

    <style>
        a {
            cursor: pointer;
        }
    </style>
    <!--  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="<?= URL ?>/home"><img height="80" src="<?= Go::getPublic(".\assets\img\mm.jpg") ?>">BETÂNIA</a></h1>
            <!-- caso queira usar uma imagem-->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>

                    <li><a class="<?= ucwords($url) == "Home" ? 'active' : '' ?>" href="<?= URL ?>/home">Página Inicial</a></li>
                    <li><a class="<?= ucwords($url) == "About" ? 'active' : '' ?>" href="<?= URL ?>/about">Sobre</a></li>
                    <li><a class="<?= ucwords($url) == "Quadro" ? 'active' : '' ?>" href="<?= URL ?>/quadro">Honra</a></li>
                    <li><a class="<?= ucwords($url) == "Activities" ? 'active' : '' ?>" href="<?= URL ?>/activities">Atividades Escolares</a></li>
                    <li><a class="<?= ucwords($url) == "Notices" ? 'active' : '' ?>" href="<?= URL ?>/notices">Avisos</a></li>
                    <li><a class="<?= ucwords($url) == "News" ? 'active' : '' ?>" href="<?= URL ?>/news">Notícias</a></li>
                    <li><a class="<?= ucwords($url) == "Events" ? 'active' : '' ?>" href="<?= URL ?>/events">Passatempo</a></li>

                    <li><a class="<?= ucwords($url) == "Contact" ? 'active' : '' ?>" href="<?= URL ?>/contact">Contatos</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- fim Header -->