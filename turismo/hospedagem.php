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
            <b><a href="../turismo/index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/hospedagem.php">Hospedagem</a></b>
        </div>
        <main role="main">
        <article role="article">
            <h2 class="tur_hospedagem_h2">Acampamentos</h2>
            <?php
              include '../includes/inc_sql.php';

              $sql = "SELECT h.NomeHospedagem, h.LocalHospedagem, h.DescricaoHospedagem, it.CaminhoImagemTurismo, it.DescricaoImagemTurismo, it.CategoriaImagemTurismo
              FROM hospedagens h INNER JOIN imagensturismo it
                              ON h.CodigoHospedagem = it.CodigoHospedagem
              WHERE CategoriaHospedagem = 'Acampamentos'";
              $resultado = $conecta->query($sql);
  
              echo "<div class='row'>";
              while($linha = $resultado->fetch_assoc()){
                echo "<section class='col-12 text-start tur_shadow'  role='region'>";
                  echo "<h3 class='hide' aria-hidden='true'></h3>";
                  echo "<p class='tur_titulos'>" . $linha["NomeHospedagem"] . '</p>';
                    echo "<figure class='text-center'>";
                      echo "<img src='". $linha["CaminhoImagemTurismo"]. "' alt='". $linha["DescricaoImagemTurismo"]. "'>";
                    echo "</figure>";
                  echo "<p><b>LOCAL: </b>" . $linha["LocalHospedagem"] . '</p>';
                  echo "<p><b>Descricão: </b>" . $linha["DescricaoHospedagem"] . '</p>';
                echo "</section>";
              }
            ?>
        </article>

        <article role="article">
            <h2 class="tur_hospedagem_h2 tur_border">Hotéis</h2>
            <?php 
              $sql = "SELECT h.NomeHospedagem, h.LocalHospedagem, h.DescricaoHospedagem, it.CaminhoImagemTurismo, it.DescricaoImagemTurismo, it.CategoriaImagemTurismo
              FROM hospedagens h INNER JOIN imagensturismo it
                              ON h.CodigoHospedagem = it.CodigoHospedagem
              WHERE CategoriaHospedagem = 'Hotéis'";
              $resultado = $conecta->query($sql);
  
              echo "<div class='row'>";
              while($linha = $resultado->fetch_assoc()){
                echo "<section class='col-lg-5 col-md-5 col-sm-12 text-start tur_shadow'  role='region'>";
                  echo "<h3 class='hide' aria-hidden='true'></h3>";
                  echo "<p class='tur_titulos'>" . $linha["NomeHospedagem"] . '</p>';
                    echo "<figure class='text-center'>";
                      echo "<img src='". $linha["CaminhoImagemTurismo"]. "' alt='". $linha["DescricaoImagemTurismo"]. "'>";
                    echo "</figure>";
                  echo "<p><b>LOCAL: </b>" . $linha["LocalHospedagem"] . '</p>';
                  echo "<p><b>Descricão: </b>" . $linha["DescricaoHospedagem"] . '</p>';
                echo "</section>";
              }
            ?>
        </article>

        <article role="article">
            <h2 class="tur_hospedagem_h2 tur_border">Pousadas</h2>
            <?php 
              $sql = "SELECT h.NomeHospedagem, h.LocalHospedagem, h.DescricaoHospedagem, it.CaminhoImagemTurismo, it.DescricaoImagemTurismo, it.CategoriaImagemTurismo
              FROM hospedagens h INNER JOIN imagensturismo it
                              ON h.CodigoHospedagem = it.CodigoHospedagem
              WHERE CategoriaHospedagem = 'Pousadas'";
              $resultado = $conecta->query($sql);
  
              echo "<div class='row'>";
              while($linha = $resultado->fetch_assoc()){
                echo "<section class='col-lg-5 col-md-5 col-sm-12 text-start tur_shadow'  role='region'>";
                  echo "<h3 class='hide' aria-hidden='true'></h3>";
                  echo "<p class='tur_titulos'>" . $linha["NomeHospedagem"] . '</p>';
                    echo "<figure class='text-center'>";
                      echo "<img src='". $linha["CaminhoImagemTurismo"]. "' alt='". $linha["DescricaoImagemTurismo"]. "'>";
                    echo "</figure>";
                  echo "<p><b>LOCAL: </b>" . $linha["LocalHospedagem"] . '</p>';
                  echo "<p><b>Descricão: </b>" . $linha["DescricaoHospedagem"] . '</p>';
                echo "</section>";
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