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
    <div class="container text-start">
    <div class="row text-start">
            <b><a href="../turismo/index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/gastronomia.php">Gastronomia</a></b>
        </div>
        <main role="main">
        <article role="article">        
        <?php
            include '../includes/inc_sql.php';
            
            // SQL para selecionar todos os autores
            $sql = "SELECT * FROM Gastronomia WHERE CategoriaEstabelecimento = 'Adegas e Vinicolas' ORDER BY NomeEstabelecimento";
            $resultado = $conecta->query($sql);

            echo "<h2 class='text-start tur_gastro_h2'>Adegas e Vinícolas</h2>";
            echo "<div class='row'>";
            while($linha = $resultado->fetch_assoc()) {
                
                echo "<section class='col-lg-3 col-md-3 col-sm-6 tur_shadow' role='region'>";
                echo "<h3 class='text-start tur_h3'>" . $linha["NomeEstabelecimento"]. "</h3>";
                echo "<p class='text-start'> <b>Local:</b>" . $linha["LocalEstabelecimento"]. "</p>";
                echo "<p class='text-start'><b>Site:</b>" . $linha["SiteEstabelecimento"]. "</p>";
                echo "<p class='text-start'><b>Contatos:</b>" . $linha["TelefoneEstabelecimento"]. "</p>";
                echo "</section>";
            }

            $sql = "SELECT * FROM Gastronomia WHERE CategoriaEstabelecimento = 'Restaurantes, Lanchonetes, Cafeterias e Docerias'";
            $resultado = $conecta->query($sql);

            echo "<h2 class='text-start tur_gastro_h2'>Restaurantes, Lanchonetes, Cafeterias e Docerias</h2>";
            echo "<div class='row'>";
            while($linha = $resultado->fetch_assoc()) {
                
                echo "<section class='col-lg-3 col-md-3 col-sm-6 tur_shadow' role='region'>";
                echo "<h3 class='text-start tur_h3'>" . $linha["NomeEstabelecimento"]. "</h3>";
                echo "<p class='text-start'> <b>Local:</b>" . $linha["LocalEstabelecimento"]. "</p>";
                echo "<p class='text-start'><b>Site:</b>" . $linha["SiteEstabelecimento"]. "</p>";
                echo "<p class='text-start'><b>Contatos:</b>" . $linha["TelefoneEstabelecimento"]. "</p>";
                echo "</section>";
            }


            $sql = "SELECT * FROM Gastronomia WHERE CategoriaEstabelecimento = 'Bares'";
            $resultado = $conecta->query($sql);

            echo "<h2 class='text-start tur_gastro_h2'>Bares</h2>";
            echo "<div class='row'>";
            while($linha = $resultado->fetch_assoc()) {
                
                echo "<section class='col-lg-3 col-md-3 col-sm-6 tur_shadow' role='region'>";
                echo "<h3 class='text-start tur_h3'>" . $linha["NomeEstabelecimento"]. "</h3>";
                echo "<p class='text-start'> <b>Local:</b>" . $linha["LocalEstabelecimento"]. "</p>";
                echo "<p class='text-start'><b>Site:</b>" . $linha["SiteEstabelecimento"]. "</p>";
                echo "<p class='text-start'><b>Contatos:</b>" . $linha["TelefoneEstabelecimento"]. "</p>";
                echo "</section>";
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