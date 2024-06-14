<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>São Roque - Home</title>

  <?php
  include 'includes/inc_head_links.php';
  ?>

</head>

<body>
  <!-- Inicio Header -->

  <?php
  include 'includes/inc_header.php';
  ?>

  <!-- Fim Header -->

    <!-- Inicio Main -->

    <main id="home-principal" class="container-lg p-3">
      <article id="secoes-portais" class="row row-cols-2 gx-1 gy-3" aria-labelledby="titulo-areas-portal">
        <!--Inicio article das secoes portais-->

        <h1 class="d-none" id="titulo-areas-portal">Áreas do Portal São Roque</h1>

        <div class="col-12 col-md-7">
          <section class="prefeitura position-relative" aria-labelledby="titulo-sessao-prefeitura">
            <!--Inicio secao prefeitura-->
            <picture class="img-home-princ"><img src="imgs/principal/home.jpg" alt="imagem da frente da prefeitura de São Roque, detalhando mais sobre ela"></picture>
            <div>
              <h2 id="titulo-sessao-prefeitura">Prefeitura SR</h2>
              <p>
              A Prefeitura de São Roque é o órgão de maior autoridade na cidade de São Roque e responsável pelos processos, protocolos, zelo, proteção e administração da cidade, promovendo vagas de emprego para a população e ajudando a manter a estabilidade e a segurança. Conheça mais sobre as diferentes áreas que abrangem a nossa cidade.
              </p>
            </div>
          </section>
        </div>

        <div class="col-12 col-md-5">
          <section class="cidade" aria-labelledby="titulo-sessao-cidade" role="none">
            <!--Inicio secao cidade-->
            <a href="cidade/index.php" class=" position-relative flex-row flex-md-column" aria-label="Veja mais" aria-details="descricao-sessao-cidade">
              <picture class="img-home-princ"><img src="imgs/principal/home_cidade.png" alt="imagem da entrada do Portal de São Roque"></picture>
              <div>
                <h2 id="titulo-sessao-cidade">Cidade</h2>
                <p id="descricao-sessao-cidade">
                Conheça a nossa história e tudo o que São Roque representa para o seu povo e para o Estado de São Paulo.
                </p>
              </div>
            </a>
          </section>
        </div>


          <section class="sessao-cidadao position-relative" aria-labelledby="titulo-sessao-cidadao" role="none">
          <a href="cidadao/index.php" aria-label="Veja mais" aria-details="descricao-sessao-cidadao">
            <!--Inicio secao ciadadao-->
            <picture class="img-home-princ"><img src="imgs/principal/home_cidadao.jpg" alt="foto ilustrativa mostrando algumas pessoas caminhando ao ônibus da empresa Jundiá, responsável pelos ônibus circulando em São Roque"></picture>
            <div>
              <h2 id="titulo-sessao-cidadao">Cidadão</h2>
              <p id="descricao-sessao-cidadao">
              Acesse a Área do Cidadão para conhecer e ter acesso a todos os serviços públicos e privados que podemos oferecer para você.
              </p>
            </div>
            </a>
          </section>

        <div class="cultura-e-turismo row mx-0 px-0 gy-3">
            <section class="cultura position-relative" aria-labelledby="titulo-sessao-cultura" role="none">
            <a href="cultura/index.php" aria-label="Veja Mais" aria-details="descricao-sessao-cultura">
              <!--Inicio secao cultura-->
              <picture class="img-home-princ"><img src="imgs/principal/home_cultura.jpg" alt="Imagem da Brasital, um dos pontos culturais mais importantes de São Roque"></picture>
              <div>
                <h2 id="titulo-sessao-cultura">Cultura</h2>
                <p class="d-none d-sm-block" id="descricao-sessao-cultura">
                Conheça mais sobre a rica e diversa cultura de São Roque, a Terra do Vinho!
                </p>
              </div>
              </a>
            </section>
            <section class="turismo position-relative" aria-labelledby="titulo-sessao-turismo" role="none">
            <a href="turismo/index.php" aria-label="Veja Mais" aria-details="descricao-sessao-turismo">
              <!-- Inicio secao turismo -->
              <picture class="img-home-princ"><img src="imgs/principal/home_turismo.jpg" alt="plantação de uvas em São Roque, simbolizando sua tradição com o vinho"></picture>
              <div>
                <h2 id="titulo-sessao-turismo">Turismo</h2>
                <p class="d-none d-sm-block" id="descricao-sessao-turismo">
                Várias atrações e locais aguardam você em São Roque! Aproveite para conhecer todos e se programar para um fim de semana divertido em nossa cidade!
                </p>
              </div>
              </a>
            </section>
        </div>

        <section class="governo position-relative" aria-labelledby="titulo-sessao-governo" role="none">
          <a href="governo/index.php" aria-label="Veja Mais" aria-details="descricao-sessao-governo">
            <!--Inicio secao governo-->
            <picture class="img-home-princ"><img src="imgs/governo/camaramunicipal.webp" alt="Imagem da Câmara Municipal de São Roque"></picture>
            <div>
              <h2 id="titulo-sessao-governo">Governo</h2>
              <p id="descricao-sessao-governo">
              Veja mais sobre o campo político são-roquense e todos os projetos de lei em andamento.
              </p>
            </div>
          </a></section>

          <section class="empresa position-relative" aria-labelledby="titulo-sessao-empresa" role="none">
          <a href="empresa/index.php" aria-label="Veja mais" aria-details="descricao-sessao-empresa">
            <!-- inicio secao empresa -->
            <picture class="img-home-princ"><img src="imgs/principal/home_empresa.jpg" alt="Imagem ilustrativa de empresas em São Roque"></picture>
            <div>
              <h2 id="titulo-sessao-empresa">Empresa</h2>
              <p id="descricao-sessao-empresa">
              Quer começar no ramo comercial? Acesse a área de empresas para entender todos os requisitos para implementar o seu negócio.
              </p>
            </div>
            </a>
          </section>
      </article>

      <!-- Fim article secoes portais -->

      <!-- Inicio da secao veja mais  -->

      <section class="veja-mais">
        <h3>Veja Mais</h3>
        <ul>
          <li><a href="ouvidoria.php">Ouvidoria</a></li>
          <li><a href="perguntas.php">Perguntas Frequentes</a></li>
          <li><a href="noticias.php">Notícias</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
      </section>

      <?php 
          include 'includes/inc_referencias.php';
          ?>
      
      

    </main>

    <!-- Fim da secao veja mais -->

    <!-- Fim Main -->

    <!-- Inicio Footer -->

    <?php
    include 'includes/inc_footer.php';
    ?>

    <!-- Fim Footer -->

    <?php
    include 'includes/inc_bootstrap_js.php';
    ?>
  </body>

</html>