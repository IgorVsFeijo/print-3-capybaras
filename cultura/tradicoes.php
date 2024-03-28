<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Tradições</title>

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
      
        <main id="tradicoes" class="pages_cultura">
          <div class="row text-start">
            <b><a href="../cultura/index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../cultura/tradicoes.php">Tradições</a></b>
          </div>
            <figure class="text-center">
                <img src="../imgs/cultura/festaagostoilustracao.jpg" alt="Visão Aérea da Festa de Agosto durante a noite, no último dia da festa">
            </figure>
            <aside>
                <h2>CONHEÇA AS NOSSAS FESTAS!</h2>
                <p>A cultura de uma cidade não apenas é construída por produtos e lugares, mas por tradições que envolvem toda a sua população. São Roque é conhecida também por abrigar grandes eventos e festas que reúnem a todos em celebrações únicas, proporcionando prestígio e experiências marcantes para milhares de pessoas. Confira a seguir as principais comemorações da nossa cidade.</p>
            </aside>
            <div>
              <article class="row col-12">
                <h2 class="hide">Article - h2</h2>
                <section class="row col-lg-6 festasagosto">
                  <h2 class="hide">section-h2</h2>
                        <div class="col-sm-6 col-lg-12">
                          <h3>Festas de Agosto</h3>
                          <p>As Festas de Agosto são a principal atividade comemorativa da cidade, envolvendo todas as suas áreas em uma linda celebração e homenagem ao padroeiro, São Roque. As festividades têm ligação direta com a fundação da cidade por Pedro Vaz de Barros, mas foi somente no fim do século XIX, com a introdução dos Carros de Lenha, que elas tomaram o formato que se estende até hoje.</p>
                        </div>
                        <figure class="col-sm-6 col-md-6 col-lg-12 text-center">
                            <picture>
                              <source srcset="../imgs/cultura/logofestas_de_agosto.webp" media="(max-width: 992px)"><img src="..." alt="">
                            </picture>
                            <picture>
                              <source media="(min-width: 992px)" srcset="../imgs/cultura/logofestas_de_agosto.webp"><img src="..." alt="">
                            </picture>
                        </figure>
                        <p>Como um evento comemorativo e religioso, a festa se inicia em julho com a novena realizada no Morro do Cruzeiro. A partir de então, no fim do mês, a abertura das barracas marca o começo do evento festivo, que desde 2022, se desdobra entre o Centro e o Recanto da Cascata, com barracas de doces, salgados, espetos e parque de diversões para os menores. Isso tudo acompanhado por shows ao vivo diários de bandas talentosas da região.</p>
                        <p class="col-12">A festa é finalizada em seu ápice nos dias 15 e 16 de Agosto com as procissões de Nossa Senhora da Assunção e do padroeiro São Roque, respectivamente, atraindo milhares de fiéis para a belíssima conclusão. Até hoje, as Festas de Agosto se consolidam como o maior evento festivo e religioso da região.</p>
                </section>
                <section class="row col-lg-6 exposr">
                  <h2 class="hide">section -  h2</h2>
                        <picture class="col-sm-6 col-md-6 col-lg-12 d-lg-none text-center">
                            <source media="(max-width: 992px)" srcset="../imgs/cultura/exposaoroque.webp"><img src="..." alt="">
                        </picture> 
                        <div class="col-sm-6 col-lg-12">
                          <h3>Expo São Roque</h3>
                          <p>Festa que celebra a tradição de São Roque como a Terra do Vinho, com stands das vinícolas mais famosas, introdução a conceitos de enologia, vendas de vinho e alcachofra e que se estende por mais de 28 anos em um clima de festa.</p>
                          <figure class="text-center">
                            <picture>
                              <source media="(min-width: 992px)" srcset="../imgs/cultura/exposaoroque.webp"><img src="..." alt="">
                            </picture>
                          </figure>
                        </div>  
                          <p>Mesmo que o evento não tenha ocorrido desde 2019, ele ainda se mantém como um dos mais aguardados e prestigiados de nossa cidade, ajudando a divulgar o potencial cultural e turístico da cidade. Além dos stands a respeito do vinho, a Expo São Roque também reúne outros stands de gastronomia, compras, shows e outras manifestações artísticas.</p>
                </section>
              </article>
            </div>
            <figure class="text-center">
              <img src="../imgs/cultura/expoilustracao.jpg" alt="Visão aérea da Expo São Roque, da entrada do Recanto da Cascata">
            </figure>
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