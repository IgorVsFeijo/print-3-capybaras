<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Notícia</title>

    <link rel="stylesheet" href="style/turismo.css">

    <?php
        include 'includes/inc_head_links.php';
      ?>

</head>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container text-center espaço_noticia">
        <div class="row">
            <article class="col-lg-8 col-md-8 col-sm-12 text-start">
            <div class="row text-start">
            <b><a href="index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="noticias.php">Notícias</a></b>
            </div>
            <h3>Cidade</h3>
                <figure class="text-center">
                <img src="imgs/turismo/imgs_not/not_agro_2.webp" alt="Imagem referente a noticia do festival encontro ecologico">
                </figure>
                <p><b>Ministro Paulo Teixeira visita São Roque em encontro agroecológico</b></p>
                <p>Na última semana, o Ministro do Desenvolvimento Agrário e Agricultura Familiar do Brasil, Paulo Teixeira, esteve em São Roque para participar da mais recente edição do Encontro Paulista de Agroecologia. Essa iniciativa, promovida pela Articulação Paulista de Agroecologia em parceria com a Prefeitura local, o Instituto Federal e o Governo Federal, introduziu um evento inédito no município. O encontro visou promover a interação, troca de conhecimentos, celebração e articulação em torno dos desafios e potencialidades da agroecologia.</p>
                <p>O evento contou com a presença de diversas autoridades, incluindo Edson Fernandes, Secretário Executivo da Secretaria de Agricultura e Abastecimento do Estado de São Paulo, Ondalva Serrano, uma renomada figura na Agroecologia e fundadora de várias instituições dedicadas ao tema, como a Associação de Agricultura Orgânica, a Fundação Campo Cidade e o Instituto Auá. Além disso, Mãe Ofã, uma moradora local de São Roque, foi uma referência nacional das tradições de matriz africana.</p>
                <p>A última edição do encontro aconteceu aproximadamente há 10 anos, e sua retomada reuniu especialistas, agricultores, estudantes e entusiastas em São Roque para compartilhar experiências e discutir o assunto. O Encontro Paulista busca estimular essa prática significativa, promovendo discussões em diversos níveis, desde o regional até o nacional.</p>
                <p>Ao término do encontro, a organização realizou a doação de aproximadamente 100kg de alimentos para a Casa de Passagem de São Roque. Esse evento posicionou São Roque no centro de um movimento que está ganhando cada vez mais força, não apenas na região, mas em todo o país e no cenário internacional.</p>
            </article>

            <section class="col-lg-3 col-md-3 col-sm-12 not_vejamais">
                <h4>VEJA MAIS</h4>
                <figure>
                <img src="imgs/turismo/imgs_not/not_cancer_2.webp" alt="Imagem referente a noticia sobre a prevenção do cancer de prostata">
                </figure>
                <a class="not_link text-start" href="#">
                    <p>Prefeitura promove palestra de Conscientização e Prevenção do Câncer de Próstata</p>
                </a>

                <figure>
                <img src="imgs/turismo/imgs_not/not_jose_2.webp" alt="Imagem referente a noticia do festival Jose cabinda">
                </figure>
                <a class="not_link text-start" href="#">
                    <p>Festival José Cabinda acontece neste domingo e segunda-feira</p>
                </a>

                <figure>
                <img src="imgs/turismo/imgs_not/not_imoveis_2.webp" alt="Imagem referente a noticia da abertura da anistia para regularização de imóveis">
                </figure>
                <a class="not_link text-start" href="#">
                    <p>Prefeitura abre anistia para regularização de imóveis</p>
                </a>

                <figure>
                <img src="imgs/turismo/imgs_not/not_rotatoria_2.webp" alt="Imagem referente a noticia da construção da rotatoria fixa">
                </figure>
                <a class="not_link text-start" href="#">
                    <p>Rotatória fixa será construída na região próxima à Tecama</p>
                </a>

                <figure>
                <img src="imgs/turismo/imgs_not/not_cmdj_2.webp" alt="Imagem referente a noticia sobre a abertura das inscrições do CMDJ">
                </figure>
                <a class="not_link text-start" href="#">
                    <p>São Roque abre inscrições para eleição do Conselho Municipal dos Direito da Juventude</p>
                </a>
            </section>
        </div>
        <?php 
          include 'includes/inc_referencias.php';
          ?>
    </div>
    
      <!-- Inicio do Footer -->

    <?php
      include 'includes/inc_footer.php';
    ?>

  <!-- Fim do Footer  -->

    <?php
      include 'includes/inc_bootstrap_js.php';
    ?>
</body>

</html>