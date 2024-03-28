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
            <b><a href="../turismo/index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/Galeria.php">Galeria</a></b>
        </div>
        <article>
            <h1 class="hide">Galeria de fotos dos Pontos Turisticos de São Roque</h1>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p class="text-start"><b>Brasital</b></p>
                    <div class="tur_position_r">
                    <figure>
                        <a href="../turismo/galeria_brasital.php"><img src="../imgs/turismo/brasital_menu_desktop.webp" alt="Imagem referente o local brasital de são roque"></a>
                    </figure>
                <a class="tur_btn_vermais tur_position_a tur_link" href="../turismo/galeria_brasital.php">Ver Mais</a>
                    </div>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p class="text-start"><b>Pátio Corina</b></p>
                    <div class="tur_position_r">
                    <figure>
                        <img src="../imgs/turismo/patio_menu_desktop.webp" alt="Imagem referente o local Patio Corina de são roque">
                    </figure>
                    <a class="tur_btn_vermais tur_position_a tur_link" href="#">Ver Mais</a>
                    </div>
                </section>
            </div>
        </article>

        <article>
          <h2 class="hide">h2 - Article</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p class="text-start"><b>Estação Ferroviaria</b></p>
                    <div class="tur_position_r">
                    <figure>
                    <a href="../turismo/galeria_ferroviaria.php"> <img src="../imgs/turismo/ferro_menu_desktop.webp" alt="Imagem referente o local estação ferroviaria de são roque"></a>
                    </figure>
                   <a class=" tur_btn_vermais tur_position_a tur_link" href="../turismo/galeria_ferroviaria.php">Ver Mais</a>
                    </div>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p class="text-start"><b>Recanto da Cascata</b></p>
                    <div class="tur_position_r">
                    <figure>
                        <img src="../imgs/turismo/cascata_menu_desktop.webp" alt="Imagem referente o local recanto da cascata de são roque">
                    </figure>
                    <a class="tur_btn_vermais tur_position_a tur_link" href="#">Ver Mais</a>
                    </div>
                </section>
            </div>

            <div class="row">
                <section class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p class="text-start"><b>Outlet Catarina</b></p>
                    <div class="tur_position_r">
                    <figure>
                        <img src="../imgs/turismo/catarina_menu_desktop.webp" alt="Imagem referente o local outlet Catarina de são roque">
                    </figure>
                   <a class="tur_btn_vermais tur_position_a tur_link" href="#">Ver Mais</a>
                    </div>
                </section>
            </div>
        </article>
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