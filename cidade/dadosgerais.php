<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Dados Gerais</title>

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

    <main id="dados-gerais" role="main" aria-label="conteúdo principal do site">
        <article class="container-lg" role="article" aria-labelledby="article-heading">

            <!-- Título do Artigo -->

            <div class="poster">

                    <hgroup class="titulo-poster-fundo-branco">
                        <h1 class="h1-cidade" id="article-heading">DADOS GERAIS</h1>
                        <p class="h3">Informações Úteis</p>
                    </hgroup>
            </div>

            <!-- Inicio da sessão de informações em formato Dashboard -->
            <section class="dashboard-dadosgerais row row-cols-md-2" role="region" aria-labelledby="section-heading">
                <h2 class="titulo-sessao vazio" id="section-heading">Sessão de Informações</h2>
                <!-- Informações Gerais -->
                <section class="dashboard-informacoes-gerais col-md-4" role="region" aria-labelledby="section-heading">
                    <h3 id="section-heading">Informações Gerais</h3>
                    <ul class="list-unstyled">
                        <li><strong>Tipologia:</strong> Mista (atividade turística, agrícola e vinícola)</li>
                        <li><strong>Gentílico:</strong> São-roquense</li>
                        <li><strong>População estimada:</strong> 79.484
                            (IBGE 2022)</li>
                        <li><strong>DDD:</strong> (11)</li>
                        <li><strong>Área:</strong> 306,908 Km²</li>
                        <li><strong>Altitude:</strong> 771m</li>
                        <li><strong>CEP:</strong> 181300-000</li>
                    </ul>
                </section>

                <div class="flex-grow-1">
                    <div class="row row-cols-md-2">
                        <section id="aniversario-da-cidade-dashboard" role="region" aria-labelledby="section-heading">
                            <h3 id="section-heading">Aniversário da Cidade</h3>
                            <p>16 de Agosto</p>
                        </section>
                        <section id="clima-dashboard" role="region" aria-labelledby="section-heading">
                            <h3 id="section-heading">Clima:</h3>
                            <p>Temperado</p>
                        </section>
                    </div>
                    <section id="distancias-dashboard" class="row row-cols-md-2" role="region" aria-labelledby="section-heading">
                        <div>
                            <h3 id="section-heading">Distancias</h3>
                            <ul class="list-unstyled">
                                <li>Mairinque – 10</li>
                                <li>Alumínio – 28</li>
                                <li>Sorocaba – 55</li>
                                <li>São Paulo – 60</li>
                            </ul>
                        </div>
                        <picture>
                            <source media="(max-width: 576px)" srcset="../imgs/cidade/dados_gerais_sm2.webp">
                            <source media="(max-width: 768px)" srcset="../imgs/cidade/dados_gerais_md2.webp">
                            <img src="../imgs/cidade/dados_gerais_distancias.webp" alt="">
                        </picture>
                    </section>
                </div>
                <section id="dashboard-relevo" class="col-md-8 row row-cols-md-2" role="region" aria-labelledby="section-heading">
                    <div>
                        <h3 id="section-heading">Relevo</h3>
                        <p>Caracterizado por planaltos ricos e vales profundos, com terras férteis que se tornaram o
                            berço da
                            tradição vinícola de São Roque. A cidade é cortada pelo Rio Aracaí e por seus afluentes.</p>
                    </div>
                                                <picture>
                                    <source media="(max-width: 576px)" srcset="../imgs/cidade/dados_gerais_sm3.webp">
                                    <source media="(max-width: 768px)" srcset="../imgs/cidade/dados_gerais_md3.webp">
                                    <img src="../imgs/cidade/dados_gerais_relevo.webp"
                                        alt="">
                                </picture>
                </section>
                <section id="bioma-dashboard" class="w-auto flex-grow-1" role="region" aria-labelledby="section-heading">
                    <h3 id="section-heading">Bioma: Mata Atlantica</h3>
                                                <picture>
                                    <source media="(max-width: 576px)" srcset="../imgs/cidade/dados_gerais_sm4.webp">
                                    <source media="(max-width: 768px)" srcset="../imgs/cidade/dados_gerais_md4.webp">
                                    <img src="../imgs/cidade/dados_gerais_bioma.webp"
                                        alt="">
                                </picture>
                </section>
            </section>
            <!-- Fim da sessao de informações em formato Dashboard -->

            <!-- Inicio da Secao Enderecos Uteis -->

            <section id="enderecos-uteis" role="region" aria-labelledby="section-heading">
                <h2 class="titulo-sessao" id="section-heading">ENDEREÇOS ÚTEIS</h2>
                <div class="row row-cols-md-3">
                    <section role="region" aria-labelledby="section-heading">
                        <h3 id="section-heading">SANTA CASA</h3>
                                                    <picture>
                                    <source media="(max-width: 576px)" srcset="../imgs/cidade/dados_gerais_sm5.webp">
                                    <source media="(max-width: 768px)" srcset="../imgs/cidade/dados_gerais_md5.webp">
                                    <img src="../imgs/cidade/dados_gerais_santacasa.webp"
                                        alt="">
                                </picture><a href="https://maps.app.goo.gl/PrX9pYSUGXSXypSo7"
                            class="link-mapa d-block">R. Santa Isabel, 186 - Centro, São Roque - SP, 18130-565
</a>
                    </section>
                    <section role="region" aria-labelledby="section-heading">
                        <h3 id="section-heading">IGREJA MATRIZ</h3>
                                                    <picture>
                                    <source media="(max-width: 576px)" srcset="../imgs/cidade/dados_gerais_sm6.webp">
                                    <source media="(max-width: 768px)" srcset="../imgs/cidade/dados_gerais_md6.webp">
                                    <img src="../imgs/cidade/dados_gerais_pracamatriz.webp"
                                        alt="">
                                </picture><a href="https://maps.app.goo.gl/31BZadthwrvU5cRp6"
                            class="link-mapa d-block">Praça da Matriz s/nº Centro, Praça da Matriz, 18 - Centro, São Roque - SP, 18130-330</a>
                    </section>
                    <section role="region" aria-labelledby="section-heading">
                        <h3 id="section-heading">PREFEITURA</h3>
                                                    <picture>
                                    <source media="(max-width: 576px)" srcset="../imgs/cidade/dados_gerais_sm7.webp">
                                    <source media="(max-width: 768px)" srcset="../imgs/cidade/dados_gerais_md7.webp">
                                    <img src="../imgs/cidade/dados_gerais_prefeitura.webp"
                                        alt="">
                                </picture><a href="https://maps.app.goo.gl/n3soFqoc8xyk9F9A6"
                            class="link-mapa d-block">R. São Paulo, 966 - Taboão, São Roque - SP, 18135-125
</a>
                    </section>
                </div>
            </section>
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