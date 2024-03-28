<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Cadastro de Artistas e Grupos</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>
    <link rel="stylesheet" href="../style/cultura.css">

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container">
        <main class="pages_cultura">
          <div class="row text-start">
            <b><a href="../cultura/index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../cultura/cadastro.php">Cadastro de Artistas e Grupos</a></b>
          </div>
            <article>
                <h2>Faça seu cadastro!</h2>
                <form class="row g-4">
                  <div class="col-12">
                    <label for="inputName4" class="form-label">Nome do Artista/Grupo</label>
                    <input type="text" class="form-control" id="inputName4">
                  </div>
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-8">
                    <label for="inputTextarea" class="form-label">Objetivos</label>
                    <textarea class="form-control" id="inputTextarea" placeholder="Digite aqui os seus objetivos ou os objetivos do grupo"></textarea>
                  </div>
                  <div class="col-4">
                    <div class="col-12">
                      <label for="inputArea" class="form-label">Área de Atuação</label>
                      <select id="inputArea" class="form-select">
                        <option selected>...</option>
                        <option>Teatro</option>
                        <option>Bate-Papo</option>
                        <option>Oficina</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label for="inputState" class="form-label">Nº de integrantes</label>
                      <select id="inputState" class="form-select">
                        <option selected>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10+</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary botao_cultura">ENVIAR</button>
                  </div>
                </form>
            </article>
            <?php 
          include '../includes/inc_referencias.php';
          ?>
        </main>
    </div>
  <!-- Inicio do Footer -->

    <?php
      include '../includes/inc_footer.php';
    ?>

  <!-- Fim do Footer  -->

    <?php
      include '../includes/inc_bootstrap_js.php';
    ?>
</html>