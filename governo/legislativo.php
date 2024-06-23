<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Poder Legislativo</title>

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
      
    <main class="row"  role="main" aria-label="conteúdo principal do site" aria-labelledby="main-heading">
        <section class="col-lg-12 col-md-12 col-sm-12">
            <h1 id="main-heading"> CÂMARA MUNICIPAL</h1>
        </section>
        <article class="col-lg-12 col-md-12 col-sm-12" role="article" aria-labelledby="article-text">
        <h2 class="hide" id="article-text">Câmara Municipal</h2>
            <p>A Câmara Municipal é um órgão fundamental na estrutura do poder legislativo em nível municipal. Suas atribuições envolvem a criação, discussão e aprovação de leis que afetam diretamente a vida dos cidadãos locais. Além disso, cabe à Câmara a fiscalização dos atos do Poder Executivo, incluindo a análise e aprovação do orçamento municipal, a autorização de despesas e a apreciação de contas públicas. Outro papel crucial é a representação dos interesses da população, por meio dos vereadores, que devem atuar como porta-vozes dos anseios e demandas dos munícipes, promovendo debates, audiências públicas e propondo soluções para questões pertinentes ao desenvolvimento e bem-estar da comunidade local. Além das atividades legislativas, a Câmara Municipal também é responsável por exercer o papel fiscalizador sobre o Poder Executivo, acompanhando a execução das políticas públicas, o cumprimento das leis e a aplicação dos recursos municipais.</p>
        </article>
    </main>

    <?php
        $sql = "SELECT p.BiografiaPresidenteLegislativo, p.CargoLegislativo, i.caminhoImagemGoverno, i.CategoriaImagemGoverno, i.descricaoImagemGoverno
        FROM poderlegislativo p INNER join ImagensGoverno i
                                on p.CodigoPolitico = i.CodigoPolitico
        WHERE CargoLegislativo = 'presidente da Câmara'";
        $resultado = $conecta->query($sql);

        
    echo "<div class='row'>";
    while($linha = $resultado->fetch_assoc()) {
        echo "<section class='col-lg-12 col-md-12 col-sm-12' role='region' aria-labelledby='section-heading'>";
        echo    "<h1 id='section-heading'>Poder Legislativo</h1>";
        echo    "<h3>".$linha['CargoLegislativo']."</h3>";
        echo " </section>";
        echo "<aside class='col-lg-6 col-md-6 col-sm-12' role='region'>";
        echo "<h2 class='hide'>Aside - h2</h2>";
        echo '<img src="'.$linha['caminhoImagemGoverno'].'"  alt="'.$linha['descricaoImagemGoverno'].'">';
        echo "</aside>";

        echo '<section class="col-lg-6 col-md-6 col-sm-12">';
        echo '<h2 class="hide">Section - h2</h2>';
        echo "<p>" . $linha["BiografiaPresidenteLegislativo"] . "</p>";
        echo "</section>";
    }
    ?>

    <?php
        $sql = "SELECT p.CargoLegislativo, i.caminhoImagemGoverno, i.CategoriaImagemGoverno, i.descricaoImagemGoverno, p.NomePolitico
        FROM poderlegislativo p INNER join ImagensGoverno i
                                on p.CodigoPolitico = i.CodigoPolitico
        WHERE CargoLegislativo = 'Vereador';";
        $resultado = $conecta->query($sql);

        echo '<div class="row">';
        echo '<section class="col-lg-12 col-md-12 col-sm-12" role="region" aria-labelledby="section-heading">';
        echo '<h3 id="section-heading"> VEREADORES </h3>';
        echo '</section>';
        while($linha = $resultado->fetch_assoc()) {
            echo "<section class='col-lg-3 col-md-3 col-sm-12'>";
            echo "<figure>";
            echo '<img src="'.$linha['caminhoImagemGoverno'].'"  alt="'.$linha['descricaoImagemGoverno'].'">';
            echo "<figcaption>".$linha['NomePolitico']."</figcaption>";
            echo "</figure>";
            echo "</section>";
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