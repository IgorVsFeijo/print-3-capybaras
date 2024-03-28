<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - A Cidade</title>

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

    <main class="home-cidade">
        <article class="container-lg">
            <div class="poster">

                <div>
                    <hgroup>
                        <h1 class="h1-cidade">A CIDADE</h1>
                        <p class="h3">de São Roque</p>
                    </hgroup>
                </div>
            </div>

            <div class="container-lg">
                <section id="hc-sessao-historia">
                    <h2 class="titulo-sessao">HISTÓRIA</h2>
                    <figure class="img-grande">
                        <picture class="img-fluid">
                            <source media="(max-width: 576px)" srcset="../imgs/cidade/home_historia_sm.webp">
                            <source media="(max-width: 768px)" srcset="../imgs/cidade/home_historia_md.webp">
                            <img src="../imgs/cidade/home_historia.webp"
                                alt="Imagem em preto e branco da cidade de São Roque, nela podemos ver a rua XV de Novembro, poucas pessoas na rua, e uma arquitetura típica das casas brasileiras antigas">
                        </picture>
                        <figcaption class="text-uppercase titulo-verde-agua">rua xv de novembro</figcaption>
                    </figure>
                    <p>São Roque, frequentemente referida como a "Cidade do Vinho", carrega uma rica tapeçaria de
                        histórias que remonta à sua fundação em 1657. Ao mergulhar em sua trajetória, descobre-se um
                        município que prosperou através da expansão ferroviária, da agricultura resiliente e de uma
                        cultura vibrante, tornando-se um pilar histórico e cultural no estado de São Paulo. Ao explorar
                        a história de São Roque, somos convidados a uma viagem no tempo, revisitando os marcos, as
                        pessoas e os eventos que moldaram esta cidade única.
                    </p>
                    <a href="historia.php" class="btn btn-primary btn-veja-mais">VEJA MAIS</a>
                </section>
                <section id="hc-sessao-pessoas">
                    <h2 class="titulo-sessao">PESSOAS NOTÁVEIS</h2>
                    <section class="hc-cards-pessoas">
                        <h3 class="d-none">Cartões Pessoas Notáveis</h3>
                        <section class="hc-card-pessoa">
                            <h2 class="titulo-verde-agua">Darcy Penteado</h2>
                            <figure>
                                <picture>
                                    <source media="(max-width: 576px)" srcset="../imgs/cidade/home_darcy_sm.webp">
                                    <source media="(max-width: 768px)" srcset="../imgs/cidade/home_darcy_md.webp">
                                    <img src="../imgs/cidade/home_darcy.webp"
                                        alt="Imagem em preto e branco de Darcy Penteado, homem branco, de cabelos lisos penteados, de roupas sociais e um bigode, sorrindo para foto.">
                                </picture>
                                <figcaption class="titulo-retangulo-cinza">Artista Multifacetado</figcaption>
                            </figure>
                        </section>
                        <section class="hc-card-pessoa">
                            <h2 class="titulo-verde-agua">Emiko Takatatsu</h2>
                            <figure>
                                <picture>
                                    <source media="(max-width: 576px)" srcset="../imgs/cidade/home_emiko_sm.webp">
                                    <source media="(max-width: 768px)" srcset="../imgs/cidade/home_emiko_md.webp">
                                    <img src="../imgs/cidade/home_emiko.webp"
                                        alt="Foto de Emiko Takatatsu, segurando um prêmio, mulher, aparenta ter por volta de 40 anos, cabelos lisos, pele bronzeada e traços asiáticos">
                                </picture>
                                <figcaption class="titulo-retangulo-cinza">Mestra do Tênis de Mesa</figcaption>
                            </figure>
                        </section>
                        <section class="hc-card-pessoa">
                            <h2 class="titulo-verde-agua">Juca de Oliveira</h2>
                            <figure>
                                <picture>
                                    <source media="(max-width: 576px)" srcset="../imgs/cidade/home_juca_sm.webp">
                                    <source media="(max-width: 768px)" srcset="../imgs/cidade/home_juca_md.webp">
                                    <img src="../imgs/cidade/home_juca.webp" alt="">
                                </picture>
                                <figcaption class="titulo-retangulo-cinza">Dramaturgo Consagrado</figcaption>
                            </figure>
                        </section>
                    </section>
                    <p>São Roque não só é reconhecida por sua história e cultura ricas, mas também por ser berço de
                        personalidades que se destacaram em diversas áreas. Na página "Pessoas Notáveis", celebramos e
                        revisitamos as trajetórias de figuras ilustres que, com seu talento e dedicação, deixaram um
                        legado inestimável para a cidade e para o Brasil. Conheça esses ícones e inspire-se em suas
                        histórias.</p>
                    <a href="pessoasnotaveis.php" class="btn btn-primary btn-veja-mais">VEJA MAIS</a>
                </section>
                <section id="hc-sessao-dados">
                    <h2 class="titulo-sessao">DADOS GERAIS</h2>
                    <div class="row row-cols-sm-2 mt-5">
                        <div>
                            <figure>
                                <picture>
                                    <source media="(max-width: 576px)"
                                        srcset="../imgs/cidade/home_dados_gerais_sm.webp">
                                    <source media="(max-width: 768px)"
                                        srcset="../imgs/cidade/home_dados_gerais_md.webp">
                                    <img src="../imgs/cidade/home_dados_gerais.webp" alt="">
                                </picture>
                            </figure>
                            </figure>
                        </div>
                        <div>
                            <p>Se estiver confuso com relação à localização ou para quem ligar enquanto estiver
                                visitando São Roque, aqui estão todos os dados essenciais que você precisa saber a
                                respeito da nossa cidade e se guiar na sua viagem, aproveitando tudo que
                                podemos oferecer.</p>
                            <ul class="home-dadosgerais-list">
                                <li>População Total: 156.342;</li>
                                <li>Altitude: 625m acima do nível do mar;</li>
                                <li>Aniversário: 16 de Agosto;</li>
                                <li>Distâncias até as cidades mais próximas;</li>
                                <li>Bioma: Mata Atlântica</li>
                            </ul>
                        </div>
                    </div>
                    <a href="dadosgerais.php" class="btn btn-primary btn-veja-mais">VEJA MAIS</a>
                </section>
                <section id="hc-sessao-simbolos">
                    <h2 class="titulo-sessao">BRASÃO E BANDEIRA</h2>
                    <div class="row row-cols-md-2">
                        <section class="d-flex flex-column">
                            <h3 class="titulo-verde-agua order-1 sombra">BRASÃO</h3>
                            <picture class="order-0 sombra">
                                <source media="(max-width: 576px)" srcset="../imgs/cidade/home_brasao_sm.webp">
                                <source media="(max-width: 768px)" srcset="../imgs/cidade/home_brasao_md.webp">
                                <img src="../imgs/cidade/home_brasao.webp" alt="">
                            </picture>
                            <p class="order-2">Baseado nos escudos portugueses, o brasão de São Roque sintetiza a história da cidade,
                                desde seus fundadores até alguns de seus principais elementos.</p>
                        </section>
                        <section class="d-flex flex-column">
                            <h3 class="titulo-verde-agua order-1 sombra">BANDEIRA</h3>
                            <picture class="order-0 sombra">
                                <source media="(max-width: 576px)" srcset="../imgs/cidade/home_bandeira_sm.webp">
                                <source media="(max-width: 768px)" srcset="../imgs/cidade/home_bandeira_md.webp">
                                <img src="../imgs/cidade/home_bandeira.webp" alt="">
                            </picture>
                            <p class="order-2">Com o mesmo brasão em seu centro, a bandeira de São Roque simboliza o união do município
                                com o Estado de São Paulo</p>
                        </section>
                    </div>
                    <a href="simbolos.php" class="btn btn-primary btn-veja-mais">VEJA MAIS</a>
                </section>
                <section id="hc-sessao-hino">
                    <h2 class="titulo-sessao">HINO DA CIDADE</h2>
                    <div class="row ">
                        <figure class="col-md-8 d-flex flex-column">
                            <iframe src="https://www.youtube.com/embed/DrYRJNrCN3U?si=0TtCDzLd1wE_-WGR"
                                title="YouTube video player" class="flex-grow-1 w-100"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                            <figcaption class="legenda-bonitinha-cidade">
                                <p>Música: Cândido Francisco de Camargo (Neto)</p>
                                <p>Letra: Edson João Gonçalves (Edson D’aisa)</p>
                            </figcaption>
                        </figure>
                        <div class="col-md-4 trecho-hino">
                            <p>Surge estância altaneira<br>
                                Um sol ardente por ti<br>
                                Do verde das tuas matas<br>
                                Brotam, águas do Aracaí</p>
                            <p>Embala um sono sereno<br>
                                Berço de colo moreno<br>
                                Poetas da natureza são índios<br>
                                Do Vale Carambeí</p>
                            <p>O grande eleva teu nome<br>
                                O forte luta até o fim<br>
                                Rio de sangue nas veias<br>
                                Da terra onde nasci....</p>
                        </div>
                    </div>
                    <a href="hino.php" class="btn btn-primary btn-veja-mais my-2">VEJA MAIS</a>
                </section>
            </div>
        </article>
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