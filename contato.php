<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Contatos</title>

    <?php
        include 'includes/inc_head_links.php';
      ?>
    <link rel="stylesheet" href="/style/cidadao.css">

</head>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container g-5">
      <main class="row align-items-center contato">
          <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="row text-center justify-content-between contato_botoes">
                  <a class="col-lg-6 col-md-6 col-sm-12" href="#"><i class="bi bi-envelope-fill"></i> <p>Email</p></a>
                  <a class="col-lg-6 col-md-6 col-sm-12" href="#"><i class="bi bi-telephone-fill"></i><p>Telefone</p><p>(11) 4784-8500</p></a>
                  <a class="col-lg-6 col-md-6 col-sm-12" href="#"><i class="bi bi-buildings-fill"></i><p>70.946.009/0001-75</p></a>
                  <a class="col-lg-6 col-md-6 col-sm-12" href="#"><i class="bi bi-clock-fill"></i><p>Horário de funcionamento</p><p>De segunda a sexta, das 09:00 às 15:00 horas.
                  </p></a>
              </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12 contato_form">
              <form class="row" action="post">
                  <label class="text-center">Contate-nos</label>
                  <input class="form-control" type="text" placeholder="Nome">
                  <input class="form-control" type="email" placeholder="Email">
                  <textarea placeholder="Escreva sua mensagem..." class="form-control"></textarea>
                  <button class="btn btn-vermais">Enviar</button>
              </form>
          </div>
          <?php 
          include 'includes/inc_referencias.php';
          ?>
      </main> 
  </div>

    <?php
      include 'includes/inc_footer.php';
    ?>

    <?php
      include 'includes/inc_bootstrap_js.php';
    ?>
</body>
</html>