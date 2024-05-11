<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Cultura</title>

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
        <main id="cultura" class="pages_cultura" role="main">
            <div class="row text-start">
                <b><a href="../cultura/index.php">Home</a></b>
            </div>
            <figure class="text-center" role="figure">
                <img class="img-fluid" src="../imgs/cultura/saoroque.jpg" alt="imagem aérea de São Roque, mostrando a maior parte do centro da cidade" role="img">
            </figure>
            <article role="article" aria-labelledby="article-heading">
                <h2 id="article-heading">CIDADE DE CULTURA</h2>
                <p>Fonte de renda fundamental para a nossa cidade e um de nossos maiores orgulhos, a cidade de São Roque conta com uma série única de atividades, lugares e eventos tradicionais-culturais. Não apenas ajudando no crescimento financeiro, mas colocando a nossa cidade no mapa de São Paulo como uma das principais produtoras de vinho do estado.</p>
                <div class="row col-md-12">
                    <div class="row col-md-6 col-lg-12 noticias_cultura">
                        <h3 class="titulo">NOTÍCIAS</h3>
                        <div class="col-md-12 col-lg-4 text-center">
                            <section class="notícia_mobile" role="region" aria-labelledby="section-heading">
                                <h3 class="hide">Section - h2</h3>
                                <figure>
                                    <a href="#" role="link"><img src="../imgs/cultura/noticia1.webp" alt="template oficial da Lei Paulo Gustavo" role="img"></a>
                                </figure>
                                <p id="section-heading">Entenda mais a fundo sobre a Lei Paulo Gustavo e os seus editais</p>
                            </section>
                        </div>
                        <div class="col-md-12 col-lg-4 text-center">
                            <section class="notícia_mobile" role="region" aria-labelledby="section-heading">
                                <h3 class="hide">Section - h2</h3>
                                <figure>
                                    <a href="#" role="link"><img src="../imgs/cultura/noticia2.webp" alt="Arte oficial da peça do Coletivo Entre Nós 'Semeando a Terra' para o Festival de Teatro Vasco Barioni" role="img"></a>
                                </figure>
                                <p id="section-heading">Festival de Teatro Estudantil Vasco Barioni 2023 - Saiba mais sobre o evento!</p>
                            </section>
                        </div>
                        <div class="col-md-12 col-lg-4 text-center">
                            <section class="notícia_mobile" role="region" aria-labelledby="section-heading">
                                <h3 class="hide">Section - h2</h3>
                                <figure>
                                    <a href="#" role="link"><img src="../imgs/cultura/noticia3.webp" alt="Logotipo oficial do Festival de Artes Catatau" role="img"></a>
                                </figure>
                                <p id="section-heading">Festival de Artes Catatau é sucesso entre as crianças na Brasital</p>
                            </section>
                        </div>
                    </div>
            </article>
            <aside role="complementary">
                <div class="row col-12 conhecamais">
                    <h2>CONHEÇA MAIS!</h2>
                    <section class="col-md-6 text-center" role="region" aria-labelledby="section-heading">
                        <h3 class="hide">Section - h2</h3>
                        <figure>
                            <a href="../cultura/culturaarte.php" role="link"><img src="../imgs/cultura/marcosculturais.webp" alt="Imagem ilustrativa para a página detalhada da cultura de São Roque, mostrando um vinho" role="img"></a>
                        </figure>
                        <h4 id="section-heading">Marcos Culturais</h4>
                    </section>
                    <section class="col-md-6 text-center" role="region" aria-labelledby="section-heading">
                        <h3 class="hide">Section - h2</h3>
                        <figure>
                            <a href="../cultura/tradicoes.php" role="link"><img src="../imgs/cultura/festastradicionais.webp" alt="Imagem ilustrativa para a página de tradições de São Roque, com uma parte da procissão de São Roque, durante a Festa de Agosto" role="img"></a>
                        </figure>
                        <h4 id="section-heading">Festas Tradicionais</h4>
                    </section>
                </div>     
            </aside>
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