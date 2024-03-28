<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Empresa</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>
    <link rel="stylesheet" href="../style/empresa.css">

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->
    <main class="container empresa pages-empresas">
        <div class="row text-start">
            <b><a href="../empresa/home.php">Home</a></b>
        </div>
      <figure class="text-center">
        <img src="../imgs/empresa/empresa_topo_.webp" alt="gatinho" class="imagemcentral_empresas">
      </figure> 

      <div class="row text-center">
        <figure class="col-lg-4 col-md-6 col-sm-12">
            <img src="../imgs/empresa/empresa_iptu.webp" alt="IPTU 2023 DIGITAL">
        </figure>
        <aside class="col-lg-8 col-md-6 col-sm-12">
            <article>
                <h2>IPTU</h2>
                <p>Veja tudo que precisa saber para manter a sua empresa com o IPTU em dia, como cadastrar, como manter atualizado, como transferir o cadastro da IPTU, isenções e possíveis descontos, além dos locais em que você pode acessar essas informações, bem como os documentos necessários para o cadastro do endereço de correspondência.</p>
                <a href="../empresa/iptu.php" class="btn btn-vermais">Ver Mais</a>
            </article>
        </aside>
      </div>
      <hr>
      <section class="row text-center col-12 section_diario">
        <h3 class="hide">H3- Section</h3>
        <div class="col-4">
          <figure>
              <img src="../imgs/empresa/empresa_diario.webp" alt="Imagem de 3 folhas de papel tamanho A4 escrito sumario">
          </figure>
        </div>
        <div class="col-4">
          <h2>DIÁRIO OFICIAL 2023</h2>
          <p>Confira as últimas atualizações do Diário Oficial!</p>
        </div>
          <a class="btn btn-vermais col-2" href="../empresa/diario_oficial.php">Ver Mais</a>
      </section>

      <hr>

      <section class="row text-center col-12">
      <h3 class="hide">H3- Section</h3>
        <div class="col-sm-12 col-md-6">
            <a href="../empresa/cadastro.php" class="link_home">Cadastro de Pessoa Juridica</a>
        </div>
        <div class="col-sm-12 col-md-6">
            <a href="../empresa/aprovacao.php" class="link_home">Aprovação de Projetos</a>
        </div>
      </section>
      <?php 
          include '../includes/inc_referencias.php';
          ?>
    </main>
    

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
