<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Título da Página</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>

    <link rel="stylesheet" href="../style/turismo.css">

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->
    <div class="container text-center">
    <div class="row text-start">
            <b><a href="../turismo/index.php"> Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/pontos_turisticos.php"> Pontos turisticos</a>  <i class="bi bi-arrow-right"></i><a href="../turismo/pontos_turisticos_brasital.php"> Brasital</a> </b>
        </div>
        <article>
            <h2>Brasital</h2>
            <figure>
                <img src="../imgs/turismo/brasital_unica_desktop.webp" alt="Imagem Via Placeholder">
            </figure>
            <div class="row">
                <p class="col-lg-6 col-md-6 col-sm-6 text-start">Muito mais do que uma antiga fábrica, a Brasital é um dos patrimônios mais importantes de São Roque, porque influenciou a cultura e a economia do município. </p>
                <p class="col-lg-6 col-md-6 col-sm-6 text-start">A Brasital foi uma indústria têxtil construída em 1890 pelo industrial italiano Enrico Dell´Acqua, uma das primeiras do estado de São Paulo, sendo um dos prédios históricos mais importantes na região onde está localizada.</p>
            </div>
        </article>
        <section>
            <div class="row justify-content-start">
                <h3 class="text-start">Serviços:</h3>
            </div>

            <div class="text-start">
                <p class="col-7"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-fill tur_cor_servicos" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" >
                    </svg> Av. Araçaí, 250 - Vila Aguiar, São Roque - SP, 18130-235</p>

                <p class="col-7"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-fill tur_cor_servicos" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" >
                    </svg> Visita gratuita</p>

                <p class="col-7"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-fill tur_cor_servicos" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" >
                    </svg> Diariamente</p>

                <p class="col-7"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-fill tur_cor_servicos" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" >
                    </svg> Trilhas e passeios calmos.</p>
            </div>
        </section>

        <?php 
          include '../includes/inc_referencias.php';
          ?>
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