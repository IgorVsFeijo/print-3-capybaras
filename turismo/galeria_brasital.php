<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Galeria Brasital</title>

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
            <b><a href="../turismo/index.php"> Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/galeria.php"> Galeria</a>  <i class="bi bi-arrow-right"></i><a href="../turismo/galeria_brasital.php"> Brasital</a> </b>
        </div>
        <article>
            <h2>Brasital</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="../imgs/turismo/brasital_1_desktop.webp" alt="Imagem referente a uma paisagem da brasital, ponto turistico de são roque">
                    </figure>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <img src="../imgs/turismo/brasital_2_desktop.webp" alt="Imagem referente a uma paisagem da brasital, ponto turistico de são roque">
                    </figure>
                  </section>
            </div>
        </article>

        <article>
          <h2 class="hide">h2 - Article</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <img src="../imgs/turismo/brasital_3_desktop.webp" alt="Imagem referente a uma paisagem da brasital, ponto turistico de são roque">
                    </figure>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <img src="../imgs/turismo/brasital_4_desktop.webp" alt="Imagem referente a uma paisagem da brasital, ponto turistico de são roque">
                    </figure>
                </section>
            </div>


            <div class="row">
                <section class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <img src="../imgs/turismo/brasital_5_desktop.webp" alt="Imagem referente a uma paisagem da brasital, ponto turistico de são roque">
                    </figure>
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