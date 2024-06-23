<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Legislação</title>

    <?php
        include '../includes/inc_head_links.php';
        include '../includes/inc_sql.php';
      ?>
    <link rel="stylesheet" href="../style/style.css">

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->
  <div class="container text-center">

  <?php
        $sql = "SELECT l.CodigoProjeto, l.NomeProjeto, l.DescricaoProjeto, i.caminhoImagemGoverno, i.CategoriaImagemGoverno, i.descricaoImagemGoverno
        FROM legislacao l INNER join ImagensGoverno i
                    on l.CodigoProjeto = i.CodigoProjeto
        WHERE l.CodigoProjeto <> 3";
        $resultado = $conecta->query($sql);

    echo "<div class='row'>";
    echo '<section class="col-lg-12 col-md-12 col-sm-12" role ="main" aria-label="conteúdo principal do site" aria-labelledby="main-heading">';
    echo "<h1 id="main-heading">LEGISLAÇÃO</h1>";
    echo "</section>";
    while($linha = $resultado->fetch_assoc()) {
        echo '<article class="col-lg-6 col-md-6 col-sm-12" role ="article" aria-labelledby="article-heading">';

        echo '<img src="'.$linha['caminhoImagemGoverno'].'"  alt="'.$linha['descricaoImagemGoverno'].'">';

        echo "<h2 id="article-heading">" . $linha["NomeProjeto"] . "</h2>";
        echo "<p>" . $linha["DescricaoProjeto"] . "</p>";
        echo "</article>";
    }
    ?>

<?php
        $sql = "SELECT l.CodigoProjeto, l.NomeProjeto, l.DescricaoProjeto, i.caminhoImagemGoverno, i.CategoriaImagemGoverno, i.descricaoImagemGoverno
        FROM legislacao l INNER join ImagensGoverno i
                    on l.CodigoProjeto = i.CodigoProjeto
        WHERE l.CodigoProjeto = 3";
        $resultado = $conecta->query($sql);

    while($linha = $resultado->fetch_assoc()) {

      echo "<div class='row'>";
      echo '<section class="col-lg-12 col-md-12 col-sm-12" role="region" aria-labelledby="section-heading">';
      echo "<h2 id="section-heading">" . $linha["NomeProjeto"] . "</h2>";
      echo "</section>";

        echo '<section class="col-lg-6 col-md-6 col-sm-12">';

        echo '<img src="'.$linha['caminhoImagemGoverno'].'"  alt="'.$linha['descricaoImagemGoverno'].'">';

        echo "</section>";

        echo '<Section class="col-lg-6 col-md-6 col-sm-12">';
        echo "<p>" . $linha["DescricaoProjeto"] . "</p>";
        echo "</section>";
    }
    ?>

    <div class="row">
        <section class="col-lg-12 col-md-12 col-sm-12" role="region" aria-labelledby="section-heading">
            <h2 id="section-heading">PROJETOS EM TRÂMITE</h2>
        </section>
        <div class="accordion col-12" id="accordionExample">
              <div class="row">
                <div class="accordion-item col-sm-12 col-md-6">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Projeto de lei N° 111/2023
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p><strong> Assunto:</strong> Denomina "Praça Miguel Hernandes Marreiro Filho - Zico" praça localizada no encontro entre as Ruas Dona Aiglê de Medeiros de Oliveira e Salvador José de Moraes, no Bairro São João Novo (área central do Distrito) <a href="legislacao.php">Saiba Mais</a></p>
                      </div>
                    </div>
                </div>
                <div class="accordion-item col-sm-12 col-md-6">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       Projeto de lei N° 73/2023
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p><strong> Assunto:</strong> Dispõe sobre a abertura de crédito adicional especial no valor de R$ 186.000,00 (cento e oitenta e seis mil reais) <a href="legislacao.php">Saiba Mais</a></p>
                      </div>
                    </div>
                </div>         
              </div>
              <div class="row">
                <div class="accordion-item col-sm-12 col-md-6">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Projeto de lei N° 70/2023
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p><strong> Assunto:</strong> Altera anexos da Lei Municipal, Nº 5.272, de 28 de julho de 2021, que dispõe sobre o Plano Plurianual para os exercícios financeiros de 2022 a 2025 e da Lei Municipal Nº 5.665, de 11 de julho de 2023, que dispõe sobre a Lei de Diretrizes Orçamentárias de 2024 <a href="legislacao.php">Saiba Mais</a></p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item col-sm-12 col-md-6">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Projeto de lei N° 69/2023
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p> <strong> Assunto:</strong> Dispõe sobre a abertura de crédito adicional especial no valor de R$ 1.200.000,00 (um milhão e duzentos mil reais) <a href="legislacao.php">Saiba Mais</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="accordion-item col-sm-12 col-md-6">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Projeto de lei N° 68/2023
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p><strong> Assunto:</strong>Dispõe sobre a abertura de crédito adicional suplementar no valor de R$ 11.000.000,00 (onze milhões de reais) <a href="legislacao.php">Saiba Mais</a> </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item col-sm-12 col-md-6">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Projeto de lei N° 109/2023
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p><strong> Assunto:</strong> Institui o Programa Municipal Cidade Sem Fome no âmbito da Estância Turística de São Roque <a href="legislacao.php">Saiba Mais</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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