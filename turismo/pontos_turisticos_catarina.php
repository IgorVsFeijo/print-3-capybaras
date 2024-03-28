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
            <b><a href="../turismo/index.php"> Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/pontos_turisticos.php"> Pontos turisticos</a>  <i class="bi bi-arrow-right"></i><a href="../turismo/pontos_turisticos_catarina.php"> Outlet Catarina</a> </b>
        </div>
        <article>
            <h2>Outlet Catarina</h2>
            <figure>
                <img src="../imgs/turismo/catarina_unica_desktop.webp" alt="Imagem Via Placeholder">
            </figure>
            <div class="row">
                <p class="col-lg-6 col-md-6 col-sm-6 text-start">O Catarina tem como marca registrada suas alamedas agradáveis, um ambiente sofisticado e um completo mix de lojas com as melhores marcas nacionais e internacionais, que praticam descontos de até 70% o ano todo. São mais de 300 operações.</p>
                <p class="col-lg-6 col-md-6 col-sm-6 text-start">Um bom lugar para fazer suas compras, e passar o final de semana com sua família, comendo do bom e do melhor.</p>
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
                    </svg> Rua Rafael Costa Dias, 140 - São Roque, SP, 18147-000</p>

                <p class="col-7"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-fill tur_cor_servicos" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" >
                    </svg> Visita gratuita</p>

                <p class="col-7"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-fill tur_cor_servicos" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" >
                    </svg> Diversos tipos de comércio</p>

                <p class="col-7"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-fill tur_cor_servicos" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" >
                    </svg> Sanitários e estacionamento</p>
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