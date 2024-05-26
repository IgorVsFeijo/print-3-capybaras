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
        <main role="main">
        <article role="article">
            <h2>Brasital</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide" aria-hidden="true">h3 - Section</h3>
                    <figure>
                        <img src="../imgs/turismo/brasital_1_desktop.webp" alt="Paisagem de cima do ponto turistico Brasital, ao meio algumas construções como casas, torres e em toda volta muita floresta.">
                    </figure>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide" aria-hidden="true">h3 - Section</h3>
                    <figure>
                    <img src="../imgs/turismo/brasital_2_desktop.webp" alt="Paisagem da parte de frente da Brasital, com muitas arvores ao fundo, casas ao lado direito e esquerdo, e uma grande torre quase no centro.">
                    </figure>
                  </section>
            </div>
        </article>

        <article role="article">
          <h2 class="hide" aria-hidden="true">h2 - Article</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide" aria-hidden="true">h3 - Section</h3>
                    <figure>
                    <img src="../imgs/turismo/brasital_3_desktop.webp" alt="Imagem da parte de dentro da Brasital na época de natal, arvores decoradas com efeites natalinos, com casas a direita e uma torre, um extenso gramado bonito e decorado">
                    </figure>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide" aria-hidden="true">h3 - Section</h3>
                    <figure>
                    <img src="../imgs/turismo/brasital_4_desktop.webp" alt="Imagem da parte de dentro da Brasital na época de natal, arvores decoradas com efeites natalinos, com casas a esquerda e uma torre, um extenso gramado bonito e decorado">
                    </figure>
                </section>
            </div>


            <div class="row">
                <section class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="hide" aria-hidden="true">h3 - Section</h3>
                    <figure>
                    <img src="../imgs/turismo/brasital_5_desktop.webp" alt="Uma imagem panoramica da brasital, com um caminho de grama ao centro, ao lado direito temos casas e uma torre, e ao lado esquerdo mais casas, de fundo podemos ver muitas arvores e vegetação">
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