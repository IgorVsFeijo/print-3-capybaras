<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Agendamento de Espetáculos</title>

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

    <div class="container">
        <main class="pages_cultura" role="main">
          <div class="row text-start">
            <b><a href="../cultura/index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../cultura/agendamento.php">Agendamento</a></b>
        </div>
            <article class="col-12" role="article" aria-labelledby="main-heading">
                <h2 class="hide">Article - h2</h2>
                <div class="row">
                  <section class="col-6" role="region" aria-label="Apresentação inicial da página e sua funcionalidade no portal">
                      <h2 id="main-heading">Programe o seu espetáculo aqui!</h2>
                      <p>O espaço para apresentação está localizado na Brasital. Escolha uma sala, data e cheque a disponibilidade para preparar o ambiente e agendar o seu espetáculo.</p>
                        <form class="row" role="form" aria-label="formulário para preenchimento de informações para agendar um show ou espetáculo no espaço da Brasital">
                          <label for="inputName4" class="form-label">
                            Nome do Artista/Grupo
                          </label>
                          <input type="text" class="form-control" id="inputName4" title="Digite o seu nome completo">
                          <label for="inputEmail4" class="form-label">
                            Email
                          </label>
                          <input type="email" class="form-control" id="inputEmail4" title="Digite seu email no formato: usuario@email.com">
                          <div class="col-12">
                            <label for="inputPhone4" class="form-label">
                              Telefone para Contato
                            </label>
                            <input type="tel" class="form-control" id="inputPhone4" placeholder="(00)00000-0000" title="Digite seu telefone no formato: (XX) XXXXX-XXXX">
                            <div class="telefone_confirmado" aria-live="assertive" aria-atomic="true"></div>
                          </div>
                          <label class="g-4">
                            <button type="submit" class="btn btn-primary botao_agenda">ENVIAR</button>
                            <div class="dados_confirmados" aria-live="assertive" aria-atomic="true"></div>
                          </label>
                        </form>
                  </section>
                  <section class="col-6" role="region"> 
                      <h3 class="hide">Section - h2</h3>
                      <table class="table table-bordered text-center" role="table" aria-label="Tabela contendo todas as sete salas e datas informadas, bem como sua disponibilidade para uso">
                        <thead>
                          <tr>
                            <th scope="col" id="col-local">LOCAL</th>
                            <th scope="col" id="col-data">DATA</th>
                            <th scope="col" id="col-disponivel">DISPONIBILIDADE</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                              <td headers="col-local">Sala 01</td>
                              <td headers="col-data">25/11 - 26/11</td>
                              <td headers="col-disponivel">SIM</td>
                          </tr>
                          <tr>
                              <td headers="col-local">Sala 02</td>
                              <td headers="col-data">02/12 - 03/12</td>
                              <td headers="col-disponivel">SIM</td>
                          </tr>
                          <tr>
                              <td headers="col-local">Sala 03</td>
                              <td headers="col-data">02/12 - 03/12</td>
                              <td headers="col-disponivel">NÃO</td>
                          </tr>
                          <tr>
                              <td headers="col-local">Sala 04</td>
                              <td headers="col-data">25/11 - 26/11</td>
                              <td headers="col-disponivel">SIM</td>
                          </tr>
                          <tr>
                              <td headers="col-local">Sala 05</td>
                              <td headers="col-data">25/11 - 26/11</td>
                              <td headers="col-disponivel">NÃO</td>
                          </tr>
                          <tr>
                              <td headers="col-local">Sala 06</td>
                              <td headers="col-data">09/12 - 10/12</td>
                              <td headers="col-disponivel">SIM</td>
                          </tr>
                          <tr>
                              <td headers="col-local">Sala 07</td>
                              <td headers="col-data">02/12 - 03/12</td>
                              <td headers="col-disponivel">NÃO</td>
                          </tr>
                        </tbody>
                      </table>
                  </section>
                </div>
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