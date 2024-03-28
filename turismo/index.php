<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Título da Página</title>

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
        <div class="row">
            <figure>
                <img src="../imgs/turismo/topo_desktop.webp" alt="Imagem referente a brasital com o logo de são roque">
            </figure>
        </div>

        <article>
            <div class="row text-start tur_i_h2">
                <h2>EVENTOS</h2>
            </div>
            <div class="row">
                <figure class="col-lg-6 col-md-6 col-sm-12 ">
                    <img src="../imgs/turismo/evento_castra.webp" alt="Imagem do evento castra movel, com a data 17 de setembro no local chamado recanto">
                </figure>
                <section class="col-lg-6 col-md-6 col-sm-12 text-start">
                    <h3>Castra Móvel</h3>
                    <p>O Castramóvel está a caminho de uma nova parada em São Roque, desta vez na região do Junqueira. No domingo, dia 17 de setembro, o serviço que oferece castração gratuita para cães e gatos estará disponível no Recanto da Cascata, proporcionando acolhimento e cuidado aos pets da população.</p>
                    <p>Os interessados em castrar seus animais devem se inscrever até o dia 16 de setembro (sábado) através do site da prefeitura ou presencialmente até esta sexta-feira (15), no Centro de Saúde II, localizado na Ladeira Alfredo Salveti, 129 - Centro, durante o horário de atendimento da unidade.</p>
                </section>
            </div>
        </article>

        <aside>
            <div class="row tur_i_h2">
                <h2 class="text-start">HOSPEDAGEM</h2>
            </div>
            <div class="row text-start">
                <section class="col-lg-3 col-md-3 col-sm-5 tur_i_shadow">
                    <h3 class="tur_h3">Sitio de Lazer</h3>
                    <figure class="text-center">
                        <img src="../imgs/turismo/sitio_de_lazer.webp" alt="Imagem referente a logo do acampamento sitio de lazer">
                    </figure>
                    <p>Um delicioso lugar para passar seu final de semana, com muitas rotinas de lazer.</p>
                </section>
                <section class="col-lg-3 col-md-3 col-sm-5 tur_i_shadow">
                    <h3 class="tur_h3">Cordialle Hotel</h3>
                    <figure class="text-center">
                        <img src="../imgs/turismo/cordialle.webp" alt="Imagem referente a logo do hotel cordialle.">
                    </figure>
                    <p>Uma interpretação contemporânea das tradicionais hospedarias.</p>
                </section>
                <section class="col-lg-3 col-md-3 col-sm-5 tur_i_shadow">
                    <h3 class="tur_h3">Chácara Putini</h3>
                    <figure class="text-center">
                        <img src="../imgs/turismo/putini.webp" alt="Imagem referente a logo da chácara putini.">
                    </figure>
                    <p>As instalações incluem lagos, quiosques, churrasqueiras, piscinas, galeria de arte e quadra poliesportiva.</p>
                </section>
            </div>
        </aside>

        <aside class="tur_back text-center">
            <div class="row">
                <h3 class="text-start col-lg-6 col-md-6 col-sm-6">GALERIA</h3>
                <a class="col-lg-6 col-md-6 col-sm-6 text-end tur_link" href="../turismo/galeria.php">ver mais+</a>
            </div>
            <div class="row">
                <figure class="col-lg-5 col-md-10 col-sm-5 text-center tur_galeria_index">
                    <img class="tur_i_shadow img-fluid img-thumbnail rounded" src="../imgs/turismo/brasital_galeria.webp" alt="Imagem referente ao local turistico chamado brasital">
                </figure>
                <figure class="col-lg-5 col-md-10 col-sm-5 text-start tur_galeria_index">
                    <img class="tur_i_shadow img-fluid img-thumbnail rounded" src="../imgs/turismo/ferro_galeria.webp" alt="Imagem referente a ferroviaria turistica de são roque">
                </figure>
            </div>
        </aside>

        <aside>
            <div class="row">
                <h3 class="text-start tur_i_h2"> PONTOS TURISTICOS</h3>
            </div>
            <div class="row text-start">
                <section class="col-lg-5 col-md-5 col-sm-12 tur_i_shadow">
                  <h3 class="hide">h3 - Section</h3>
                    <p><b>Praça da republica</b></p>
                    <figure class="text-center">
                        <img class="img-fluid" src="../imgs/turismo/praça_republica.webp" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Conhecida como “Praça da Preguiça”, por ter recebido a visita de um bicho preguiça da região.</p>
                </section>
                <section class="col-lg-5 col-md-5 col-sm-12 tur_i_shadow">
                  <h3 class="hide">h3 - Section</h3>
                    <p><b>Outlet Catarina</b></p>
                    <figure class="text-center">
                        <img class="img-fluid" src="../imgs/turismo/outlet_catarina.webp" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Um dos melhores pontos de São Roque para fazer umas compras, sair em um final de semana com a família.</p>
                </section>
            </div>
        </aside>

        <section>
            <div class="row text-start">
                <h3 class="tur_i_h2">GASTRONOMIA</h3>
            </div>
            <div class="row text-start">
                <section class="col-lg-3 col-md-3 col-sm-5 tur_i_shadow">
                    <h4>Vinhos Alma Galiza</h4>
                    <figure class="text-center">
                        <img class="img-fluid" src="../imgs/turismo/alma_galiza.webp" alt="Imagem referente ao logo do Alma Galiza">
                    </figure>
                    <p>Vinhos Alma Galiza conta com uma porção dos melhores vinhos da região, e uma gastronomia portuguesa de tirar fôlego.</p>
                </section>
                <section class="col-lg-3 col-md-3 col-sm-5 tur_i_shadow">
                    <h4>Come Together</h4>
                    <figure class="text-center">
                        <img class="img-fluid" src="../imgs/turismo/cct.webp" alt="Imagem referente ao logo do clube come togheter">
                    </figure>
                    <p>Desde 2015, um porão de um casarão centenário de São Roque/SP abriga um clássico pub com bons chopes, cocktails, burgers, porções e muita diversão.</p>
                </section>
                <section class="col-lg-3 col-md-3 col-sm-5 tur_i_shadow">
                    <h4>Tia Lina</h4>
                    <figure class="text-center">
                        <img class="img-fluid" src="../imgs/turismo/tia_lina.webp" alt="Imagem referente ao logo da Tia Lina">
                    </figure>
                    <p>Você e sua família podem desfrutar de um lugar descontraído, com muito lazer e atividades, admirar belas paisagens e saborear o melhor da culinária italiana.</p>
                </section>
            </div>
        </section>
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