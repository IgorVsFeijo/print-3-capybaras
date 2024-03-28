<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Eventos</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>

    <link rel="stylesheet" href="../style/turismo.css">

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->
    <div class="container text-center">
        <div class="row text-start">
            <b><a href="../turismo/index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../turismo/eventos.php">Eventos</a></b>
        </div>

        <article>
            <h2 class="tur_h2">EVENTOS OCORRENDO</h2>
            <div class="row">
                <figure class="col-lg-6 col-md-6 col-sm-12">
                    <img src="../imgs/turismo/even_nada_desktop.webp" alt="Imagem de divulgação para inscrição de eventos no site.">
                </figure>
                <section class="col-lg-6 col-md-6 col-sm-12 text-start">
                  <h3 class="hide">h3 - Section</h3>
                    <p>Inscreva seu evento aqui!</p>
                    <p>DATA: Indefinido</p>
                    <p>LOCAL: Indefinido</p>
                    <p>Descrição: Para divulgar seu evento no site de turismo de São Roque, é necessário fazer um pequeno cadastro</p>
            </section>
          </div>
        </article>

        <aside>
            <h2 class="tur_h2 tur_border">FUTUROS EVENTOS</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="../imgs/turismo/even_castra_desktop.webp" alt="Imagem referente ao evento castra movel.">
                    </figure>
                    <p class="text-start">O Castramóvel está a caminho de uma nova parada em São Roque, desta vez na região do Junqueira. No domingo, dia 17 de setembro, o serviço que oferece castração gratuita para cães e gatos estará disponível no Recanto da Cascata, proporcionando acolhimento e cuidado aos pets da população.</p>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="../imgs/turismo/even_moto_desktop.webp" alt="Imagem referente ao evento expo moto.">
                    </figure>
                    <p class="text-start">Um dos encontros mais emblemáticos de motociclistas no estado de São Paulo, estará presente na cidade de São Roque neste fim de semana. Uma história de 20 anos, o evento promete infundir o Recanto da Cascata com toda a energia e paixão pelas duas rodas nos dias 23 e 24 de setembro.</p>
                </section>
            </div>
        </aside>

        <aside>
            <h2 class="tur_h2 tur_border">EVENTOS ENCERRADOS</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="../imgs/turismo/even_intime_desktop.webp" alt="Imagem referente ao evento intime moving em São roque">
                    </figure>
                    <p class="text-start">No dia 16/09 você já tem compromisso marcado! O primeiro foi incrível, este será sensacional! Convida geral pra este dia, cheio de atrações, comunhão e presença de Deus ! NÃO FIQUE DE FORA</p>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="../imgs/turismo/even_adocao_desktop.webp" alt="Imagem referente ao evento feira de adoção em São roque">
                    </figure>
                    <p class="text-start">A ação, organizada pelo Serviço de Zoonoses Municipal, acontecerá das 9h às 12h, e levará ao local cães e gatos que hoje estão sendo cuidados pela prefeitura, para que possam conhecer os visitantes da feira e encontrar um novo lar cheio de carinho e amor.</p>
                </section>
            </div>

            <div class="row">
                <section class="col-lg-4 col-md-4 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="../imgs/turismo/even_japao_desktop.webp" alt="Imagem referente ao evento Mostra japão em São roque">
                    </figure>
                    <p class="text-start">Mostra Japão São Roque. De 7 a 10 de setembro.</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="../imgs/turismo/even_musica_desktop.webp" alt="Imagem referente ao evento musica de interior em São roque">
                    </figure>
                    <p class="text-start">No próximo sábado, 26 de agosto, o Duo Música de Interior apresentará um show especial de música caipira intitulado "Cantando o Interior Paulista" na Brasital.</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="../imgs/turismo/even_natal_desktop.webp" alt="Imagem referente ao evento Natal alegre em São roque">
                    </figure>
                    <p class="text-start">A ação Natal Alegre, que novamente chega para iluminar diversos pontos da cidade e trazer muitas atrações para toda a população.</p>
                </section>
            </div>
        </aside>
        <?php 
          include '../includes/inc_referencias.php';
          ?>
    </div>

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