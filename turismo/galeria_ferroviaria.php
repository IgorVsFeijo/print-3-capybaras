<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Galeria Estação</title>

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
            <b><a href="../turismo/index.php"> Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/galeria.php"> Galeria</a>  <i class="bi bi-arrow-right"></i><a href="../turismo/galeria_ferroviaria.php"> Estação Ferroviaria</a> </b>
        </div>
        <main>
        <article>
            <h2>Estação Ferroviaria</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="../imgs/turismo/ferro_1_desktop.webp" alt="Imagem de um trem passando ao lado de uma casa, trem de uma cor cinza com tons de marrom">
                    </figure>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <img src="../imgs/turismo/ferro_2_desktop.webp" alt="Imagem da estação ferroviaria de São roque, ao lado esquerdo temos uma construção de madeira, e ao lado direito está a estação para os cidaões">
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
                    <img src="../imgs/turismo/ferro_3_desktop.webp" alt="Imagem de um trem em movimento, da cor preto com marrom, escrito na parte de tras, roteiro do vinho são roque">
                    </figure>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <img src="../imgs/turismo/ferro_4_desktop.webp" alt="Imagem da entrada da estação ferroviaria, um predio das cores beje com vermelho, alguns vasos com flores na entrada.">
                    </figure>
                </section>
            </div>


            <div class="row">
                <section class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <img src="../imgs/turismo/ferro_5_desktop.webp" alt="Imagem do trem cor verde com marrom, uma pessoa posando dentro do trem para foto, e uma escrita na lataria do trem, TREM TURISTICO SÃO ROQUE SP">
                    </figure>
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