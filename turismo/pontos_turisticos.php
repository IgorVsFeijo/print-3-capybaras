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
            <b><a href="../turismo/index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/pontos_turisticos.php">Pontos Turisticos</a></b>
        </div>
        <main role="main">
        <article role="article">
            <h1 class="hide">h1 - Article</h1>
            <?php 
            include '../includes/inc_sql.php';

            $sql = "SELECT * from PontosTuristicos";
            $resultado = $conecta->query($sql);

            if ($resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    echo "<a class='btn btn-secondary col-lg-4 col-md-4 col-sm-6 tur_btn-vermais' href='pontos_turisticos.php?codigopontoturistico=".$linha['CodigoPontoTuristico']."' role='button'>"
                    . $linha['NomePontoTuristico'].
                    "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-right' viewBox='0 0 16 16'> ";
                            echo "<path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z'>";
                        echo "</svg>";
                    echo "</a>";
                }
            }
            ?>
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