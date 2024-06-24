<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Eventos</title>

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
      <main role="main">
        <div class="row text-start">
            <b><a href="../turismo/index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/eventos.php">Eventos</a></b>
        </div>

        <article role="article">
            <h2 class="tur_h2">EVENTOS OCORRENDO</h2>
            <div class="row">
                <figure class="col-lg-6 col-md-6 col-sm-12">
                    <img src="../imgs/turismo/even_nada_desktop.webp" alt="Imagem com um fundo roxo escrito em branco Seu evento não está cadastrado? Cadastre gratuitamente no site turismo.saoroque.sp.gov.br/contato">
                </figure>
                <section class="col-lg-6 col-md-6 col-sm-12 text-start">
                  <h3 class="hide" aria-hidden="true">h3 - Section</h3>
                    <p>Inscreva seu evento aqui!</p>
                    <p>DATA: Indefinido</p>
                    <p>LOCAL: Indefinido</p>
                    <p>Descrição: Para divulgar seu evento no site de turismo de São Roque, é necessário fazer um pequeno cadastro</p>
            </section>
          </div>
        </article>

        <?php
              include '../includes/inc_sql.php';
              
              // SQL para selecionar todos os autores
              $sql = "SELECT * 
              FROM Eventos E Inner Join ImagensTurismo I
                                  on E.CodigoEvento = I.CodigoEvento
                                  WHERE CategoriaEvento = 'Futuro'";
              $resultado = $conecta->query($sql);

              echo "<aside role='complementary'>
            <h2 class='tur_h2 tur_border'>FUTUROS EVENTOS</h2>";
              echo "<div class='row'>";
              while($linha = $resultado->fetch_assoc()) {
                  
                  echo "<section class='col-lg-6 col-md-6 col-sm-12'>";
                  echo "<h3 class='hide' aria-hidden='true'>" . $linha["NomeEvento"]. "</h3>";
                  echo '<figure><img src="'.$linha['CaminhoImagemTurismo'].'"  alt="'.$linha['DescricaoImagemTurismo'].'"> </figure>';
                  echo "<p class='text-start'>" . $linha["DescricaoEvento"]. "</p>";
                  
                  echo "</section>";
              }

              echo "</div></article>";
        ?>
      </main>

      <?php         
              // SQL para selecionar todos os autores
              $sql = "SELECT * 
              FROM Eventos E Inner Join ImagensTurismo I 
                                  on E.CodigoEvento = I.CodigoEvento
                                  WHERE CategoriaEvento = 'Encerrado' LIMIT 2";
              $resultado = $conecta->query($sql);

              echo "<aside role='complementary'>
              <h2 class='tur_h2 tur_border'>EVENTOS ENCERRADOS</h2>";
              echo "<div class='row'>";
              while($linha = $resultado->fetch_assoc()) {
                
                  echo "<section class='col-lg-6 col-md-6 col-sm-12'>";
                  echo "<h3 class='hide' aria-hidden='true'>" . $linha["NomeEvento"]. "</h3>";
                  echo '<figure><img src="'.$linha['CaminhoImagemTurismo'].'"  alt="'.$linha['DescricaoImagemTurismo'].'"> </figure>';
                  echo "<p class='text-start'>" . $linha["DescricaoEvento"]. "</p>";
                  echo "</section>";
                
              }
              echo "</div>";

              $sql = "SELECT * 
              FROM Eventos E Inner Join ImagensTurismo I 
                                  on E.CodigoEvento = I.CodigoEvento
                                  WHERE CategoriaEvento = 'Encerrado' LIMIT 4 OFFSET 2";
              $resultado = $conecta->query($sql);
              echo "<div class='row'>";
              while($linha = $resultado->fetch_assoc()) {
                
                echo "<section class='col-lg-4 col-md-4 col-sm-12'>";
                echo "<h3 class='hide' aria-hidden='true'>" . $linha["NomeEvento"]. "</h3>";
                echo '<figure><img src="'.$linha['CaminhoImagemTurismo'].'"  alt="'.$linha['DescricaoImagemTurismo'].'"> </figure>';
                echo "<p class='text-start'>" . $linha["DescricaoEvento"]. "</p>";
                echo "</section>";
              
            }
            echo "</div></aside>";

        ?>
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