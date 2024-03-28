<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Notícias</title>

    <?php
        include 'includes/inc_head_links.php';
      ?>

    <link rel="stylesheet" href="style/turismo.css">

</head>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container text-start espaço_noticia">

        <aside>
        <div class="row text-start">
            <b><a href="index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="noticias.php">Notícias</a></b>
        </div>
            <div class="row">
                <h2>Notícias</h2>
                <section class="col-lg-7 col-md-7 col-sm-12 not_i_shadow">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <a href="noticia2.php"><img src="imgs/turismo/imgs_not/not_agro.webp" alt="Imagem referente ao evento e noticia agroecologico"></a>
                    </figure>
                    <p><b>Ministro Paulo Teixeira visita São Roque em encontro agroecológico</b></p>
                    <p>O Ministro do Desenvolvimento Agrário e Agricultura Familiar do Brasil, Paulo Teixeira, visitou São Roque na última semana para a mais recente edição do Encontro Paulista de Agroecologia...</p>
                </section>

                <section class="col-lg-3 col-md-3 col-sm-12 not_i_shadow">
                    <h3 class="hide">h3 - Section</h3>
                    <div>
                        <figure>
                        <img src="imgs/turismo/imgs_not/not_cancer.webp" alt="Imagem referente a noticia da prevenção do cancer de prostata">
                        </figure>
                        <p class="not_titulos">Prefeitura promove palestra de Conscientização e Prevenção do Câncer de Próstata</p>
                    </div>

                    <div>
                        <figure>
                        <img src="imgs/turismo/imgs_not/not_jose.webp" alt="Imagem referente a noticia do festival José Cabinda">
                        </figure>
                        <p class="not_titulos">Festival José Cabinda acontece neste domingo e segunda-feira</p>
                    </div>

                    <div>
                        <figure>
                        <img src="imgs/turismo/imgs_not/not_imoveis.webp" alt="Imagem referente a noticia sobre abertura da anistia para regularização de imóveis">
                        </figure>
                        <p class="not_titulos">Prefeitura abre anistia para regularização de imóveis</p>
                    </div>
                </section>

            </div>
        </aside>

        <aside class="not_back text-center">
            <div class="row">
                <h2>Cidade</h2>
                <section class="col-lg-5 col-md-5 col-sm-5 not_i_shadow">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <img class="img-fluid img-thumbnail rounded" src="imgs/turismo/imgs_not/not_qualifica.webp" alt="Imagem referente a noticia da abertura de inscrições da qualifica são roque">
                    </figure>
                    <p class="not_titulos">Qualifica São Roque abre inscrições para formação de bartender e estratégia de negociação</p>
                </section>

                <section class="col-lg-5 col-md-5 col-sm-5 not_i_shadow">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <img class="img-fluid img-thumbnail rounded" src="imgs/turismo/imgs_not/not_fanfarra.webp" alt="Imagem referente a noticia do festival municipal de sao roque uma triunfante da fanfarra venceu">
                    </figure>
                    <p class="not_titulos">Triunfante da Fanfarra Municipal de São Roque vence Circuito Paulista de Bandas e Fanfarras</p>
                </section>
            </div>

            <div class="row">
            <section class="col-lg-5 col-md-5 col-sm-5 not_i_shadow">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <img class="img-fluid img-thumbnail rounded" src="imgs/turismo/imgs_not/not_zeladoria.webp" alt="Imagem referente a noticia das ações da zeladoria">
                    </figure>
                    <p class="not_titulos">Confira as ações de zeladoria realizadas pela Prefeitura nesta segunda-feira - 13 de novembro</p>
                </section>

                <section class="col-lg-5 col-md-5 col-sm-5 not_i_shadow">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                    <img class="img-fluid img-thumbnail rounded" src="imgs/turismo/imgs_not/not_cmdj.webp" alt="Imagem referente a noticia da abertura das inscrições para eleição do CMDJ">
                    </figure>
                    <p class="not_titulos">São Roque abre inscrições para eleição do Conselho Municipal dos Direito da Juventude</p>
                </section>
            </div>
        </aside>

        <aside>
            <h2>Saúde</h2>
            <div class="row">
            <section class="col-lg-5 col-md-5 col-sm-5 not_i_shadow">
                    <h3 class="hide">h3 - Section</h3>
                    <figure class="text-center">
                    <img src="imgs/turismo/imgs_not/not_rotatoria.webp" alt="Imagem referente a noticia da rotatoria fixa sendo construida">
                    </figure>
                    <p><b>Rotatória fixa será construída na região próxima à Tecama</b></p>
                    <p>O trânsito municipal no antigo trecho da Rodovia Raposo Tavares, próximo à fábrica Tecama, terá uma novidade: a implantação de uma rotatória fixa.</p>
                </section>

                <section class="col-lg-5 col-md-5 col-sm-5 text-start not_i_shadow">
                    <h3 class="hide">h3 - Section</h3>
                    <figure class="text-center">
                    <img src="imgs/turismo/imgs_not/not_circo.webp" alt="Imagem referente a noticia do festival da magia do circo em são roque">
                    </figure>
                    <p><b>Ginástica Rítmica encerra ano de atividades com apresentação A Magia do Circo</b></p>
                    <p>A equipe de Ginástica Rítmica de São Roque realizará nesta semana uma apresentação especial como forma de celebrar um ano de atividades repleto de conquistas.</p>
                </section>
            </div>
        </aside>

        <?php 
          include 'includes/inc_referencias.php';
          ?>

    </div>
        <!-- Inicio do Footer  -->
    <?php
      include 'includes/inc_footer.php';
    ?>
        <!-- Fim do Footer  -->

    <?php
      include 'includes/inc_bootstrap_js.php';
    ?>

</body>

</html>