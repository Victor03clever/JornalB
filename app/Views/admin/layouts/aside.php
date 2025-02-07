 <?php
  $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
  $uri = explode('/', $url);
  // var_dump($uri);
  // exit;
  ?>
 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

   <ul class="sidebar-nav" id="sidebar-nav">

     <li class="nav-item">
       <a class="nav-link <?= ucwords($uri[1]) == 'Home' ? '' : 'collapsed' ?>" href="<?= URL ?>/admin/home">
         <i class="bi bi-grid-3x3-gap"></i>
         <span>Painel Principal</span>
       </a>
     </li><!-- End Painel Principal Nav -->

     <li class="nav-item">
       <a class="nav-link <?= ucwords($uri[1]) == ('News') || ucwords($uri[1]) == ('NewNews') ? '' || ucwords($uri[1]) == ('EditNews')  : 'collapsed' ?>" data-bs-target="#estudante-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-newspaper"></i>
         <span>Notícias</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="estudante-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="<?=URL?>/admin/newNews" class="<?= ucwords($uri[1]) == 'NewNews' ? 'active' : '' ?>">
             <i class="bi bi-circle"></i><span>Novo</span>
           </a>
         </li>
         <li>
           <a href="<?=URL?>/admin/news"  class="<?= ucwords($uri[1]) == 'News' ? 'active' : '' ?>">
             <i class="bi bi-circle"></i><span>Listar</span>
           </a>
         </li>
       </ul>
     </li><!-- End estudante -->

     <li class="nav-item">
       <a class="nav-link <?= ucwords($uri[1]) == ('Activity') || ucwords($uri[1]) == ('NewActivity') ? '' : 'collapsed' ?>" data-bs-target="#banca-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-layers"></i>
         <span>Actividades</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="banca-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="<?=URL?>/admin/NewActivity" class="<?= ucwords($uri[1]) == 'NewActivity' ? 'active' : '' ?>">
             <i class="bi bi-circle"></i><span>Novo</span>
           </a>
         </li>
         <li>
           <a href="<?=URL?>/admin/Activities" class="<?= ucwords($uri[1]) == 'Activity' ? 'active' : '' ?>">
             <i class="bi bi-circle"></i><span>Listar</span>
           </a>
         </li>
       </ul>
     </li><!-- End estudante -->

     </li><!-- monografia -->

     <li class="nav-item">
       <a class="nav-link <?= ucwords($uri[1]) == ('Honrados') || ucwords($uri[1]) == ('NewHonra') ? '' : 'collapsed' ?>" data-bs-target="#estagio-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-award-fill"></i>
         <span>Quadro honra</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="estagio-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="<?=URL?>/admin/newHonra" class="<?= ucwords($uri[1]) == 'NewHonra' ? 'active' : '' ?>">
             <i class="bi bi-circle"></i><span>Novo</span>
           </a>
         </li>
         <li>
           <a href="<?=URL?>/admin/honrados" class="<?= ucwords($uri[1]) == 'Honrados' ? 'active' : '' ?>">
             <i class="bi bi-circle"></i><span>Listar</span>
           </a>
         </li>

       </ul>
     </li><!-- End estagio -->

     <li class="nav-item">
       <a class="nav-link <?= ucwords($uri[1]) == ('Newaviso') || ucwords($uri[1]) == ('Avisos') ? '' : 'collapsed' ?>" data-bs-target="#cursos-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-book-half"></i>
         <span>Avisos</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="cursos-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="<?= URL ?>/admin/newaviso" class="<?= ucwords($uri[1]) == 'Newaviso' ? 'active' : '' ?>">
             <i class="bi bi-circle"></i><span>Novo</span>
           </a>
         </li>
         <li>
           <a href="<?= URL ?>/admin/avisos" class="<?= ucwords($uri[1]) == 'Avisos' ? 'active' : '' ?>">
             <i class="bi bi-circle"></i><span>Listar</span>
           </a>
         </li>
       </ul>
     </li><!-- End cursos -->

     <li class="nav-item">
       <a class="nav-link <?= ucwords($uri[1]) == 'Config' ? '' : 'collapsed' ?>" href="<?= URL ?>/admin/config">
         <i class="bi bi-gear"></i>
         <span>Settings</span>
       </a>
     </li><!-- End settings -->

     <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
         <i class="bi bi-door-open"></i>
         <span>Logout</span>
       </a>
     </li><!-- End Login Page Nav -->
   </ul>

 </aside><!-- End Sidebar-->

