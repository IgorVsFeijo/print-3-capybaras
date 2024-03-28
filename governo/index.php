<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Governo</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->
  <div class="container text-center">
    <div class="row">
        <section class="col-lg-12 col-md-12 col-sm-12">
            <h1>GOVERNO</h1>
        </section>
        <article class="col-lg-8 col-md-6 col-sm-12">
            <h1>Legislação Municipal</h1>
            <figure>
            <img src="../imgs/governo/prefeitura.webp" alt="foto da fachada da prefeitura municipal da cidade de são roque">
            <figcaption>Saiba mais sobre os projetos que estão em pauta na prefeitura da cidade, sobre as Leis de Diretrizes Orçamentárias, a Lei orgânica do Município e o Plano Plurianual da cidade de São Roque. <a href="legislacao.php">Leia Mais</a> 
            </figcaption>
            </figure>
        </article>

        <aside class="col-lg-4 col-md-6 col-sm-12 aside_home_gov">
          <h2 class="hide">Aside - h2</h2>
          <div class="container text-center">
            <h1>Secretarias</h1>
            <figure class="col-lg-12 col-md-12 col-sm-12">
                <img src="../imgs/governo/education.webp" alt="foto de logotipo da secretaria de educação">
                <figcaption> <a href="secretarias.php">Leia mais</a></figcaption>
            </figure>
            <figure class="col-lg-12 col-md-12 col-sm-12">
                <img src="../imgs/governo/saude.webp" alt="foto de logotipo da secretaria de saúde">
                <figcaption> <a href="secretarias.php">Leia mais</a></figcaption>
            </figure>
          </div>

        </aside>
    </div>

    <div class="row">
        <section class="col-lg-6 col-md-6 col-sm-12">
            <H2>PODER EXECUTIVO</H2>
            <figure>
                <img src="../imgs/governo/gutoissa.webp" alt="foto do prefeito guto issa segurando o diploma de prefeito">
            </figure>
            <p>Saiba mais sobre o prefeito e o vice-prefeito da cidade de São Roque, um pouco da biografia e história das pessoas que estão a frente do governo você pode encontrar na página do poder executivo. <a href="prefeitura.php">Saiba Mais</a></p>
        </section>
        <section class="col-lg-6 col-md-6 col-sm-12">
            <H2>PODER LEGISLATIVO</H2>
            <figure>
                <img src="../imgs/governo/camaramunicipal.webp" alt="foto da fachada da câmara municipal da cidade de são roque">
            </figure>
            <p>Saiba mais sobre quem compõe a Câmara de Vereadores da Cidade e um pouco sobre a importância dessa instituição nas decisões tomadas para melhoria de São Roque <a href="legislativo.php">Saiba Mais</a></p>
        </section>
        <?php 
          include '../includes/inc_referencias.php';
          ?>
    </div>
  </div>

      <!-- Inicio do Footer -->

    <?php
      include '../includes/inc_footer.php';
    ?>

  <!-- Fim do Footer  -->

    <?php
      include '../includes/inc_bootstrap_js.php';
    ?>

  </body>
</html>
