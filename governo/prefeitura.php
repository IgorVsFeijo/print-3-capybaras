<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Poder Executivo</title>

    <?php
        include '../includes/inc_head_links.php';
        include '../includes/inc_sql.php';
      ?>

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->
    <div class="container text-center">
    <div class="row">
        <section class="col-lg-12 col-md-12 col-sm-12">
            <h1>Poder Executivo</h1>
        </section>

        <?php
        $sql = "SELECT p.NomeExecutivo, p.CargoExecutivo, p.DescricaoExecutivo, i.caminhoImagemGoverno, i.CategoriaImagemGoverno, i.descricaoImagemGoverno
        FROM poderexecutivo p INNER join ImagensGoverno i
                    on p.Codigoexecutivo = i.Codigoexecutivo";
        $resultado = $conecta->query($sql);

        while($linha = $resultado->fetch_assoc()) {
          echo '<article class="col-lg-6 col-md-6 col-sm-12">';
          echo  "<h2 class='hide'>Article - h2</h2>";
  
          echo '<img src="'.$linha['caminhoImagemGoverno'].'"  alt="'.$linha['descricaoImagemGoverno'].'">';
  
          echo " </article>";
          echo "<aside class='col-lg-6 col-md-6 col-sm-12'>";
          echo "<h2>". $linha["CargoExecutivo"] ."</h2>";
          echo "<p>" . $linha["DescricaoExecutivo"] . "</p>";
          echo "</aside>";
        }
        ?>

        <?php 
          include '../includes/inc_referencias.php';
          ?>
    </div>
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