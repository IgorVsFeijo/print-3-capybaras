<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Secretarias</title>

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
    <main class="row" role="main" aria-label="conteúdo principal do site">
        <section class="col-lg-12 col-md-12 col-sm-12" role='region' aria-labelledby='section-heading'>
            <h1 id="section-heading">SECRETARIAS MUNICIPAIS</h1>
        </section>
        <article class="col-lg-12 col-md-12 col-sm-12" role='article' aria-labelledby='article-heading'>
        <h2 class="hide" id="article-heading">Article - h2</h2>
            <p>As secretarias municipais possuem um papel crucial na administração e progresso das cidades. Seu propósito principal é coordenar e implementar políticas públicas em áreas como saúde, educação, transporte, cultura e meio ambiente. Com o intuito de suprir as necessidades da população local, estas secretarias planejam, organizam e executam ações, assegurando serviços de excelência e promovendo o bem-estar dos cidadãos. Adicionalmente, têm a responsabilidade de gerir os recursos públicos destinados a cada setor, buscando sua utilização eficiente e aprimorando os serviços oferecidos à comunidade. 
            Ao articular diferentes órgãos e áreas da administração pública, as secretarias municipais têm o papel de alinhar as estratégias e diretrizes determinadas pelo poder executivo local. Essa articulação visa promover a integração e um desenvolvimento coeso das políticas públicas, desempenhando um papel central na governança municipal. Assim, contribuem como pilares essenciais na construção de cidades mais inclusivas, sustentáveis e eficientes, atendendo às demandas e buscando aprimorar a qualidade de vida dos cidadãos que residem em São Roque.
            </p>
        </article>
    </main>

    <?php
        $sql = "SELECT s.DepartamentoSecretaria, s.EmailSecretaria, s.TelefoneSecretaria, s.NomeResponsavel, i.caminhoImagemGoverno, i.CategoriaImagemGoverno, i.descricaoImagemGoverno
        From secretarias s INNER join ImagensGoverno i
                        on s.CodigoSecretaria = i.CodigoSecretaria";
        $resultado = $conecta->query($sql);

    echo "<div class='row'>";
    while($linha = $resultado->fetch_assoc()) {
        echo "<section class='col-lg-4 col-md-4 col-sm-12' role='region' aria-labelledby='secretarias'>";
        echo    "<h2 class='hide' id='secretarias'>Secretarias</h2>";
        echo "<figure>";

        echo '<img src="'.$linha['caminhoImagemGoverno'].'"  alt="'.$linha['descricaoImagemGoverno'].'">';

        echo "<p>" . $linha["DepartamentoSecretaria"] . "</p>";
        echo "<p>" . $linha["NomeResponsavel"] . "</p>";
        echo "<p>" . $linha["TelefoneSecretaria"] . "</p>";
        echo "<p>" . $linha["EmailSecretaria"] . "</p>";
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