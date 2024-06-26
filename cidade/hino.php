<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Hino</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>

</head>

<body class="paginas-area-cidade">
    <!-- Inicio Header -->

    <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <main id="sessao-hino" role="main">
        <!-- Inicio do Artigo -->
        <article class="container-lg" role="article" aria-labelledby="main-heading" aria-label="página da área de Cidade dedicada ao detalhamento sobre o hino da Estância Turística de São Roque">

            <div class="poster">

                    <hgroup class="titulo-poster-fundo-branco">
                        <h1 class="h1-cidade" id="main-heading">HINO DA CIDADE</h1>
                        <p class="h3">Canto de Exaltação à São Roque</p>
                    </hgroup>
            </div>

            <div class="titulo-sessao3"></div>

            <section class="cidade-sessao-retangulares" role="region" aria-labelledby="section-heading" aria-label="área da página com um vídeo puxado do YouTube com o hino de São Roque e sua letra, além dos autores de letra e música">
                <h3 class="titulo-sessao" id="section-heading">VÍDEO</h3>
                <figure role="figure">
                    <iframe src="https://www.youtube.com/embed/DrYRJNrCN3U?si=0TtCDzLd1wE_-WGR"
                        title="YouTube video player" class="flex-grow-1"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <figcaption>
                        <p>Música: Cândido Francisco de Camargo (Neto)</p>
                        <p>Letra: Edson João Gonçalves (Edson D’aisa)</p>
                    </figcaption>
                </figure>
            </section>

            <section role="region" aria-labelledby="section-heading" aria-label="área da página contendo a letra completa do Hino de São Roque, dividida em oito estrofes">
                <h3 class="titulo-sessao" id="section-heading">LETRA</h3>
                <div class="row row-cols-md-2">
                    <div>
                        <p>
                            Surge estância altaneira<br>
                            Um sol ardente por ti<br>
                            Do verde das tuas matas<br>
                            Brotam, águas do Aracaí<br>
                        </p>
                        <p>
                            Embala um sono sereno <br>
                            Berço de colo moreno <br>
                            Poetas da natureza são índios <br>
                            Do Vale Carambeí <br>
                        </p>
                        <p>
                            O grande eleva teu nome <br>
                            O forte luta até o fim <br>
                            Rio de sangue nas veias <br>
                            Da terra onde nasci <br>
                        </p>
                        <p>
                            São Roque, São Roque! <br>
                            Agosto dourado de Ipê <br>
                            São Roque, São Roque! <br>
                            Guardo em meu peito você <br>
                        </p>
                    </div>
                    <div>

                        <p>
                            Da serra do Taxaquara <br>
                            Ao morro do Saboó <br>
                            Do Ibaté se avista <br>
                            A surgir: Minha gente paulista <br>
                        </p>

                        <p>
                            O teu céu cor de anil resplandece <br>
                            Sob a luz do Cruzeiro do Sul <br>
                            Homens frutos da tua videira <br>
                            Semeando o chão de Vaz Guaçú <br>
                        </p>
                        <p>

                            Herdeiros das tuas glórias <br>
                            Cantam o teu esplendor <br>
                            Filhos do solo sagrado <br>
                            Bebem na fonte o amor <br>
                        </p>

                        <p>
                            São Roque, São Roque! <br>
                            Agosto dourado de Ipê <br>
                            São Roque, São Roque! <br>
                            Guardo em meu peito você <br>
                        </p>
                    </div>
                </div>
            </section>
        </article>
        <?php 
          include '../includes/inc_referencias.php';
          ?>
        <!-- Fim do Artigo -->
    </main>

    <!-- Inicio do Footer -->

    <?php
      include '../includes/inc_footer.php';
    ?>

    </footer>

    <!-- Fim do Footer  -->

    <?php
      include '../includes/inc_bootstrap_js.php';
    ?>

</body>

</html>