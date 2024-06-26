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
            <b><a href="../turismo/index.php"> Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/pontos_turisticos.php"> Pontos turisticos</a>  <i class="bi bi-arrow-right"></i><a href="../turismo/pontos_turisticos_brasital.php"> Brasital</a> </b>
        </div>
        <main role="main">
        <article role="article">
          <?php 
              include '../includes/inc_sql.php';

              if (isset($_GET['CodigoPontoTuristico'])) {
                $id_ponto = $_GET['CodigoPontoTuristico'];

                $msql = "SELECT p.NomePontoTuristico, p.LocalPontoTuristico, p.DescricaoPontoTuristico, p.ServicosPontoTuristico, it.CaminhoImagemTurismo, it.DescricaoImagemTurismo, it.CategoriaImagemTurismo
                      FROM pontosturisticos p INNER JOIN imagensturismo it
                                          ON p.CodigoPontoTuristico = it.CodigoPontoTuristico
                      WHERE p.CodigoPontoTuristico = ?";
                $smts = $conecta->prepare($msql); // Prepara a declaração SQL
                $smts->bind_param('i', $id_ponto); // Atribui o id do ponto turistico à declaração
                $smts->execute(); // Executa a declaração
                $resultado = $smts->get_result(); // Pega o resultado

                if ($resultado->num_rows > 0) {
                  while($linha = $resultado->fetch_assoc()){
                    echo "<h2>". $linha['NomePontoTuristico']. "</h2>";
                    echo "<figure>";
                          echo "<img src='". $linha["CaminhoImagemTurismo"]. "' alt='". $linha["DescricaoImagemTurismo"]. "'>";
                    echo "</figure>";
                    echo "<div class='row'>";
                        echo "<p class='col-lg-6 col-md-6 col-sm-6 text-start'>". $linha['DescricaoPontoTuristico']. "</p>";
                        echo "<p class='col-lg-6 col-md-6 col-sm-6 text-start'><b>Local: </b>".$linha['LocalPontoTuristico']."</p>";
                    echo "</div>";
                    echo "<div class='row justify-content-start'><h4 class='text-start'>Serviços</h4></div>";
                        echo "<div class='text-start'>";
                            echo "<p class='col-7'>". $linha['ServicosPontoTuristico']."</p>";
                        echo "</div>";
                    echo "</div>";
                  }
                } else{
                  echo '<p>Ponto Turístico não cadastrado </p>';
                }
              
                $smts->close();
          } else{
             echo "<p>ID não existente</p>";
          }
          ?>
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