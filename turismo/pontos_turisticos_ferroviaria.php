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
            <b><a href="../turismo/index.php"> Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/pontos_turisticos.php"> Pontos turisticos</a>  <i class="bi bi-arrow-right"></i><a href="../turismo/pontos_turisticos_ferroviaria.php"> Estação Ferroviaria</a> </b>
        </div>
        <article>
            <h2>Estação Ferroviaria</h2>
            <figure>
                <img src="../imgs/turismo/ferro_unica_desktop.webp" alt="Imagem Via Placeholder">
            </figure>
            <div class="row">
                <p class="col-lg-6 col-md-6 col-sm-6 text-start">A Estrada de Ferro Sorocabana representa um marco importante na história de São Roque, sendo um de seus acionistas Antônio Joaquim da Rosa, o Barão de Piratininga, o que marcou uma grande fase no desenvolvimento da cidade.</p>
                <p class="col-lg-6 col-md-6 col-sm-6 text-start">A primeira Estação foi construída em 10 de julho de 1875, e atualmente abriga o canil municipal. A segunda e principal estação foi inaugurada em 1928, maior e mais moderna, e trouxe uma inovação: a agência de telégrafos.</p>
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
                    </svg> Rua Eng. Gaspar Ricardo - Bairro da Estação</p>

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
                    </svg> Estacionamento</p>
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