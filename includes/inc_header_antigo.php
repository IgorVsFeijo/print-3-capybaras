<?php

$pasta_raiz = dirname(__DIR__);
$posHtdocs = strpos($pasta_raiz, "htdocs");
$pasta_raiz = substr($pasta_raiz, $posHtdocs + 7, strlen($pasta_raiz));

?>

<header class="p-0" id="topoHeader">

  <!-- Barra de Acessilibidade -->

  <div class="text-center w-100 barra-azulzinha fixed-top">
  </div>

  <!-- Essa div serve apenas para preencher o espaço referente a barra de acessibilidade, que está com position absolute -->

  <div class="placeholder-acess"></div>

  <!-- Container Nav Principal e Nav Secundária -->
  <div class="d-flex flex-wrap align-items-center text-center h-auto">

    <!-- Container Background Light (Ocupando toda a tela)-->

    <div class="container-fluid bg-light">

      <!-- Navbar Principal -->
      <nav class="flex-wrap-lg container-logo-nav container-lg navbar navbar-expand-xl w-xl-auto navbar flex-shrink-1 navbar-light py-2">

        <div class="d-flex justify-content-between px-4 flex-grow-1">
          <a href="/<?= $pasta_raiz ?>/index.php">
            <figure class="m-0 flex-shrink-1 ">
              <picture class="logo">
                <source media="(min-width: 1200px)" srcset="/<?= $pasta_raiz; ?>/imgs/principal/logotipo.svg">
                <source media="(min-width: 768px)" srcset="/<?= $pasta_raiz; ?>/imgs/principal/carnivorascap_nome.svg">
                <img src="/<?= $pasta_raiz; ?>/imgs/principal/logo.svg" alt="">
              </picture>
            </figure>
          </a>
          <!-- Botao Sanduiche -->
          <button class="navbar-toggler botao-sanduiche" type="button" data-bs-toggle="collapse" data-bs-target=".navsComprimidos" aria-controls="navPrincipal navSecundario" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <!-- Navbar Comprimida -->

        <div class="navbar-collapse collapse navsComprimidos order-1 order-xxl-0" id="navPrincipal">
          <menu class="navbar-nav justify-content-between w-100 d-flex pt-2 pt-xxl-0">
            <li class="nav-item">
              <a class="nav-link" href="/<?= $pasta_raiz ?>/noticias.php">Notícias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/<?= $pasta_raiz ?>/ouvidoria.php">Ouvidoria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/<?= $pasta_raiz ?>/contato.php">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/<?= $pasta_raiz ?>/quemsomos.php">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/<?= $pasta_raiz ?>/perguntas.php">Perguntas Frequentes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/<?= $pasta_raiz ?>/privacidade.php">Privacidade</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/<?= $pasta_raiz ?>/acessibilidade.php">Acessibilidade</a>
            </li>
          </menu>
        </div>
        <!-- Fim Navbar Comprimida -->

      </nav>
      <!-- Fim Navbar Principal -->

    </div>
    <!-- Fim Container Background Dark (Ocupando toda a tela)-->

    <!-- Container Navbar Secundário e Terciário -->

    <nav class="w-100 bg-secondary">

      <!-- Container Background Secundario -->
      <div class="flex-wrap bg-azul-escuro nav-secundario navbar navbar-expand-md w-100 w-xl-auto flex-shrink-1 p-0" id="backgroundSecundario">

        <!-- Nav Secundário Comprimido -->
        <div class="navbar-collapse collapse" id="navSecundario">
          <menu class="navbar-nav container-lg px-3 gap-2 px-md-0 justify-content-around d-flex">
            <li class="nav-item">
              <!-- Título da Área -->
              <a class="nav-link" href="/<?= $pasta_raiz ?>/cidade/">A Cidade</a>
            </li>
            <li class="nav-item">
              <!-- Título da Área -->
              <a class="nav-link" href="/<?= $pasta_raiz ?>/cidadao/">Cidadão</a>
            </li>
            <li class="nav-item">
              <!-- Título da Área -->
              <a class="nav-link" href="/<?= $pasta_raiz ?>/governo/">Governo</a>
            </li>
            <li class="nav-item">
              <!-- Título da Área -->
              <a class="nav-link" href="/<?= $pasta_raiz ?>/empresa/home.php">Empresa</a>
              <!--Submenu -->
            </li>
            <li class="nav-item">
              <!-- Título da Área -->
              <a class="nav-link" href="/<?= $pasta_raiz ?>/cultura/">Cultura</a>
            </li>
            <li class="nav-item">
              <!-- Título da Área -->
              <a class="nav-link" href="/<?= $pasta_raiz ?>/turismo/">Turismo</a>
            </li>
          </menu>
        </div>
        <!-- Fim Nav Secundário Comprimido -->
      </div>
      <!-- Container Background Secundario -->
    </nav>
  </div>
</header>

<a class="text-decoration-none text-dark btn btn-outline-dark rolarParaTopo" href="#top">
  ↑
</a>