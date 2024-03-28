<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Cultura</title>

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
        <main id="cultura" class="pages_cultura">
            <div class="row text-start">
                <b><a href="../cultura/index.php">Home</a></b>
            </div>
            <figure class="text-center">
                <img class="img-fluid" src="../imgs/cultura/saoroque.jpg" alt="imagem aérea de São Roque, mostrando a maior parte do centro da cidade">
            </figure>
            <article>
                <h2>CIDADE DE CULTURA</h2>
                <p>Fonte de renda fundamental para a nossa cidade e um de nossos maiores orgulhos, a cidade de São Roque conta com uma série única de atividades, lugares e eventos tradicionais-culturais. Não apenas ajudando no crescimento financeiro, mas colocando a nossa cidade no mapa de São Paulo como uma das principais produtoras de vinho do estado.</p>
                <div class="row col-md-12">
                    <div class="row col-md-6 col-lg-12 noticias_cultura">
                        <h2 class="titulo">NOTÍCIAS</h2>
                        <div class="col-md-12 col-lg-4 text-center">
                            <section class="notícia_mobile">
                                <h2 class="hide">Section - h2</h2>
                                <figure>
                                    <a href="#"><img src="../imgs/cultura/noticia1.webp" alt="template oficial da Lei Paulo Gustavo"></a>
                                </figure>
                                <p>Entenda mais a fundo sobre a Lei Paulo Gustavo e os seus editais</p>
                            </section>
                        </div>
                        <div class="col-md-12 col-lg-4 text-center">
                            <section class="notícia_mobile">
                                <h2 class="hide">Section - h2</h2>
                                <figure>
                                    <a href="#"><img src="../imgs/cultura/noticia2.webp" alt="Arte oficial da peça do Coletivo Entre Nós 'Semeando a Terra' para o Festival de Teatro Vasco Barioni"></a>
                                </figure>
                                <p>Festival de Teatro Estudantil Vasco Barioni 2023 - Saiba mais sobre o evento!</p>
                            </section>
                        </div>
                        <div class="col-md-12 col-lg-4 text-center">
                            <section class="notícia_mobile">
                                <h2 class="hide">Section - h2</h2>
                                <figure>
                                    <a href="#"><img src="../imgs/cultura/noticia3.webp" alt="Logotipo oficial do Festival de Artes Catatau"></a>
                                </figure>
                                <p>Festival de Artes Catatau é sucesso entre as crianças na Brasital</p>
                            </section>
                        </div>
                    </div>
                    <div class="row col-12 conhecamais">
                        <h2>CONHEÇA MAIS!</h2>
                        <section class="col-md-6 text-center" >
                            <h2 class="hide">Section - h2</h2>
                            <figure>
                                <a href="../cultura/culturaarte.php"><img src="../imgs/cultura/marcosculturais.webp" alt="Imagem ilustrativa para a página detalhada da cultura de São Roque, mostrando um vinho"></a>
                            </figure>
                            <h4>Marcos Culturais</h4>
                        </section>
                        <section class="col-md-6 text-center">
                            <h2 class="hide">Section - h2</h2>
                            <figure>
                                <a href="../cultura/tradicoes.php"><img src="../imgs/cultura/festastradicionais.webp" alt="Imagem ilustrativa para a página de tradições de São Roque, com uma parte da procissão de São Roque, durante a Festa de Agosto"></a>
                            </figure>
                            <h4>Festas Tradicionais</h4>
                        </section>
                    </div>
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