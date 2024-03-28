<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Quem somos</title>

    <?php
        include 'includes/inc_head_links.php';
      ?>
      <link rel="stylesheet" href="/style/cultura.css">
      <link rel="stylesheet" href="/style/cidadao.css">

</head>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container">
      <main class="row quemsomos">
        <h1 class="col-12 text-center">Sobre a equipe</h1>
        <p class="col-lg-6">
          Somos um grupo de amigos que se complementa e busca sempre fazer o melhor que pudermos. Nos conhecemos na Fatec São Roque e esse site é o resultado de um trabalho de três meses voltado às matérias Práticas de Projeto de Sítio para Internet e Prática de Design. 
        </p>
        <p class="col-lg-6">
          O tema do site é o portal de uma cidade, sendo assim escolhemos a cidade em que nossa faculdade é sediada, São Roque. Agradecemos por terem chego até aqui e esperamos que tenham desfrutado do nosso site. Conheça a dedicada equipe por trás deste projeto.
        </p>

        <article>
          <div class="row align-items-center sombra">
            <figure class="col-lg-4 col-md-4 text-center">
              <img src="imgs/Emanuele.jpeg" alt="Foto da Emanuele, a Gerente do projeto e responsável pela área de Cidadão">
            </figure>
            <div class="col-lg-8 col-md-8 quemsomos_conteudo align-items-center">
              <h2>Emanuele Cristina da Silva</h2>
              <p><b>R.A.:</b> 2650832313017</p>
              <p>
              Olá! Meu nome é Emanuele, tenho 20 anos. Sempre tive interesse em entender como as coisas funcionam, então aqui estou. Aproveite nosso site!
              </p>
              <p><b>Função:</b> Gerente</p>
              <p><b>Área:</b> <a href="cidadao/index.php">Cidadão</a></p>
            </div>
          </div>
        </article>

        <article>
          <div class="row align-items-center sombra">
            <figure class="col-lg-4 col-md-4 text-center">
              <img src="imgs/Henrique.jpeg" alt="Foto do Henrique, o Web Writer do site e responsável pela área de Cultura">
            </figure>
            <div class="col-lg-8 col-md-8 quemsomos_conteudo align-items-center">
              <h2>Henrique Silva Ribeiro</h2>
              <p><b>R.A.:</b> 2650832313014</p>
              <p>
              Opa, e aí? Sou o Henrique, tenho 18 anos e moro nessa cidadezinha legal de São Roque. Sou uma pessoa tranquila, um pouco preguiçosa, mas te garanto que dei meu melhor para a construção desse projeto para você. Espero que goste de sua passagem por ele.
              </p>
              <p><b>Função:</b> Web Writer</p>
              <p><b>Área:</b> <a href="cultura/index.php">Cultura</a></p>
            </div>
          </div>
        </article>

        <article>
          <div class="row align-items-center sombra">
            <figure class="col-lg-4 col-md-4 text-center">
              <img src="imgs/Igor.jpeg" alt="Foto do Igor, Coder do site e responsável pela área de Cidade">
            </figure>
            <div class="col-lg-8 col-md-8 quemsomos_conteudo align-items-center">
              <h2>Igor Vinicius Silveira Feijó</h2>
              <p><b>R.A.: </b>2650832313019</p>
              <p>
              Oi, sou Igor. Na Fatec, estudo Desenvolvimento Web de Sites e Apps. Aprendendo a programar em PHP. Espero que goste do site, foi feito com amor!
              </p>
              <p><b>Função:</b> Coder</p>
              <p><b>Área:</b> <a href="cidade/index.php">Cidade</a></p>
            </div>
          </div>
        </article>

        <article>
              <div class="row align-items-center sombra">
                <figure class="col-lg-4 col-md-4 text-center">
                  <img src="imgs/Joao.jpg" alt="Foto do João, o Sub-Gerente do projeto e responsável pela área de Governo">
                </figure>
                <div class="col-lg-8 col-md-8 quemsomos_conteudo align-items-center">
                  <h2>João Paulo de Sousa</h2>
                  <p><b>R.A.:</b> 2650832313007</p>
                  <p>
                  Eu sou o João, tenho 29 anos, sou de Curitiba e estou aqui tentando uma vida "melhor" na segunda FATEC. Boa visualização do nosso site.
                  </p>
                  <p><b>Função:</b> Subgerente</p>
                  <p><b>Área:</b> <a href="governo/index.php">Governo</a></p>
                </div>
              </div>
        </article>
        
        <article>
          <div class="row align-items-center sombra">
            <figure class="col-lg-4 col-md-4 text-center">
              <img src="imgs/Pietro.jpeg" alt="Foto do Pietro, o Designer do site e responsável pela área de Turismo">
            </figure>
            <div class="col-lg-8 col-md-8 quemsomos_conteudo align-items-center">
              <h2>Pietro Ricardo Black Fracalanza Muzy</h2>
              <p><b>R.A.:</b> 2650832313027</p>
              <p>
              Olá, nobre visitante do nosso site. Eu me chamo Pietro Ricardo, tenho 18 anos e sou uma pessoa hiperativa, apaixonado pelo mundo virtual. Até!!!
              </p>
              <p><b>Função:</b> Designer</p>
              <p><b>Área:</b> <a href="turismo/index.php">Turismo</a></p>
            </div>
          </div>
        </article>
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
