<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Título da Página</title>

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
    <div class="row text-start">
            <b><a href="../turismo/index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/Galeria.php">Galeria</a></b>
        </div>
        <main role="main">
        <article role="article">
            <h1 >Galeria de fotos dos Pontos Turisticos de São Roque</h1>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide" aria-hidden="true">h3 - Section</h3>
                    <p class="text-start"><b>Brasital</b></p>
                    <div class="tur_position_r">
                    <figure>
                        <a href="../turismo/galeria_brasital.php"><img src="../imgs/turismo/brasital_menu_desktop.webp" alt="Uma imagem panoramica da brasital, com um caminho de grama ao centro, ao lado direito temos casas e uma torre, e ao lado esquerdo mais casas, de fundo podemos ver muitas arvores e vegetação"></a>
                    </figure>
                <a aria-label="Ver Mais Fotos do Local" class="tur_btn_vermais tur_position_a tur_link" href="../turismo/galeria_brasital.php">Ver Mais</a>
                    </div>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide" aria-hidden="true">h3 - Section</h3>
                    <p class="text-start"><b>Pátio Corina</b></p>
                    <div class="tur_position_r">
                    <figure>
                        <img src="../imgs/turismo/patio_menu_desktop.webp" alt="uma imagem do pátio corina, logo na frente uma placa com a logo de varios estabelecimentos, ao lado esquerdo varios estabelecimentos um ao lado do outro, ao lado direito a mesma coisa, ao meio uma rua com varios carros estacionados em frente aos estabelecimentos">
                    </figure>
                    <a aria-label="Ver Mais Fotos do Local" class="tur_btn_vermais tur_position_a tur_link" href="#">Ver Mais</a>
                    </div>
                </section>
            </div>
        </article>

        <article role="article">
          <h2 class="hide" aria-hidden="true">h2 - Article</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide" aria-hidden="true">h3 - Section</h3>
                    <p class="text-start"><b>Estação Ferroviaria</b></p>
                    <div class="tur_position_r">
                    <figure>
                    <a href="../turismo/galeria_ferroviaria.php"> <img src="../imgs/turismo/ferro_menu_desktop.webp" alt="Imagem de um trem em movimento, da cor preto com marrom, escrito na parte de tras, roteiro do vinho são roque"></a>
                    </figure>
                   <a aria-label="Ver Mais Fotos do Local" class=" tur_btn_vermais tur_position_a tur_link" href="../turismo/galeria_ferroviaria.php">Ver Mais</a>
                    </div>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide" aria-hidden="true">h3 - Section</h3>
                    <p class="text-start"><b>Recanto da Cascata</b></p>
                    <div class="tur_position_r">
                    <figure>
                        <img src="../imgs/turismo/cascata_menu_desktop.webp" alt="Imagem de uma trilha no meio da floresta, uma ponte cor marrom ao meio da imagem atravessando por cima de um mini rio, e em volta muitas arvores e vegetações">
                    </figure>
                    <a aria-label="Ver Mais Fotos do Local" class="tur_btn_vermais tur_position_a tur_link" href="#">Ver Mais</a>
                    </div>
                </section>
            </div>

            <div class="row">
                <section class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="hide" aria-hidden="true">h3 - Section</h3>
                    <p class="text-start"><b>Outlet Catarina</b></p>
                    <div class="tur_position_r">
                    <figure>
                        <img src="../imgs/turismo/catarina_menu_desktop.webp" alt="Imagem panoramica do catarina, ao fundo o shopping cor branco com varias iluminações em amarelo, a frente um extenso estacionamento com varios carros parados e algumas arvores espalhadas.">
                    </figure>
                   <a aria-label="Ver Mais Fotos do Local" class="tur_btn_vermais tur_position_a tur_link" href="#">Ver Mais</a>
                    </div>
                </section>
            </div>
        </article>
        </main>
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