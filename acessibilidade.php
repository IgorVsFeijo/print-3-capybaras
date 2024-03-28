<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Sobre Acessibilidade</title>

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

    
        <main id="page-acessibilidade">
            <section class="container">
              <h1 class="d-none">Botões de Acessibilidade</h1>
              <div class="row row-cols-3 row-cols-md-4 gap-5 justify-content-between p-5">
                <button class="col-12 btn btn-secondary p-2 col-sm-4 col-md-3 order-sm-1 order-md-3" type="button" data-bs-toggle="collapse" data-bs-target="#espacamento" aria-expanded="false" aria-controls="collapseWidthExample">
                  <svg xmlns="http://www.w3.org/2000/svg" width="95" height="75" viewBox="0 0 95 75" fill="none">
                    <path d="M23.7501 68.75L7.91675 56.25L23.7501 43.75L29.3907 48.125L23.0574 53.125H71.9428L65.7084 48.125L71.2501 43.75L87.0834 56.25L71.2501 68.75L65.6095 64.375L71.9428 59.375H23.0574L29.2917 64.375L23.7501 68.75ZM27.3126 40.625L43.5417 6.25H51.4584L67.6876 40.625H60.1667L56.4063 31.875H38.7917L34.8334 40.625H27.3126ZM40.9688 26.875H54.0313L47.698 12.6562H47.3022L40.9688 26.875Z">
                  </svg>
                  <span class="maldito-wrap m-auto">Espaçamento de Texto</span>
                </button>

                <button class="btn btn-secondary p-2" type="button" data-bs-toggle="collapse" data-bs-target="#modoescuro" aria-expanded="false" aria-controls="collapseWidthExample">
                  <i class="bi bi-moon-fill"></i>
                  <span class="m-auto">Modo Escuro</span>
                </button>

                <button class="btn btn-secondary p-2" type="button" data-bs-toggle="collapse" data-bs-target="#textomaior" aria-expanded="false" aria-controls="collapseWidthExample">
                  <span class="material-symbols-outlined icon">
                    text_fields
                    </span>
                  <span class="m-auto">Texto Maior</span>
                </button>

                <button class="btn btn-secondary p-2 order-md-4" type="button" data-bs-toggle="collapse" data-bs-target="#altura" aria-expanded="false" aria-controls="collapseWidthExample">
                  <img src="imgs/principal/acessibilidade/line-height.svg" alt="">
                  <span class="m-auto">Altura da Linha</span>
                </button>

                <button class="btn btn-secondary p-2 order-sm-2 offset-sm-4 offset-md-0" type="button" data-bs-toggle="collapse" data-bs-target="#fonte" aria-expanded="false" aria-controls="collapseWidthExample">
                  <span class="material-symbols-outlined icon">
                    custom_typography
                    </span>
                  <span class="m-auto">Fonte de Dislexia</span>
                </button>

                <button class="btn btn-secondary p-2 d-none d-md-block" type="button" data-bs-toggle="collapse" data-bs-target="#cursor" aria-expanded="false" aria-controls="collapseWidthExample">
                  <span class="material-symbols-outlined icon">
                    arrow_selector_tool
                    </span>
                  <span class="m-auto">Cursor Maior</span>
                </button>
              </div>

              <div style="min-height: 120px;" class="d-flex flex-wrap justify-content-center">
                <div class="collapse collapse-horizontal" id="espacamento">
                  <div class="card card-body" style="width: 300px;">
                  O botão "espaçamento" ao ajustar o espaçamento entre letras, palavras e linhas, visa atender às necessidades de pessoas com dificuldades de leitura, dislexia ou outras condições visuais. Com isso usuários podem melhorar a legibilidade do conteúdo, tornando o texto mais claro e fácil de compreender.
                  </div>
                </div>
                <div class="collapse collapse-horizontal" id="modoescuro">
                  <div class="card card-body" style="width: 300px;">
                    O botão "modo escuro" visa melhorar a experiência para usuários com necessidades específicas, especialmente visuais. Este recurso oferece maior contraste, facilitando a leitura para aqueles com sensibilidade à luz ou baixa visão. Além de reduzir o brilho da tela e aliviar a fadiga ocular.
                  </div>
                </div>
                <div class="collapse collapse-horizontal" id="textomaior">
                  <div class="card card-body" style="width: 300px;">
                    O botão "texto maior", ao ajustar o tamanho do texto, visa atender às necessidades de usuários com dificuldades visuais ou aqueles que preferem um texto ampliado para melhor legibilidade.
                  </div>
                </div>
                <div class="collapse collapse-horizontal" id="altura">
                  <div class="card card-body" style="width: 300px;">
                    O botão "Altura da Linha" permite que os usuários personalizem a altura entre as linhas de texto. Visa melhorar a legibilidade para aqueles com dificuldades visuais ou dislexia, possibilitando um espaçamento mais adequado entre as linhas. 
                  </div>
                </div>
                <div class="collapse collapse-horizontal" id="fonte">
                  <div class="card card-body" style="width: 300px;">
                    O botão "Fonte de Dislexia" ao alterar a fonte para uma específica, incorpora características facilitadoras, como espaçamento entre letras e uma forma mais clara e distinta para cada caractere, tornando o texto mais legível para pessoas com dislexia.
                  </div>
                </div>
                <div class="collapse collapse-horizontal" id="cursor">
                  <div class="card card-body" style="width: 300px;">
                  O botão "Cursor Maior", ao aumentar o tamanho do cursor, torna mais fácil identificar e seguir o ponteiro na tela. Essa funcionalidade tem como objetivo melhorar a precisão e a usabilidade.
                  </div>
                </div>
              </div>
              
              <?php 
              include 'includes/inc_referencias.php';
              ?>
              
            </section>
        </main>

    <?php
      include 'includes/inc_footer.php';
    ?>

    <?php
      include 'includes/inc_bootstrap_js.php';
    ?>
</body>
</html>