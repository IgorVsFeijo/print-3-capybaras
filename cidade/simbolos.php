<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Símbolos</title>

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

    <main id="cidade-simbolos">
        <!-- Ínicio do Artigo -->
        <article class="container-lg">

            <!-- Inicio Introdução -->
            <div class="area-cidade-introducao poster">
                <div>
                    <hgroup>
                        <h1 class="h1-cidade

">SÍMBOLOS</h1>
                        <p class="h3">Brasão e Bandeira</p>
                    </hgroup>
                    <p>Esta página oferece um olhar detalhado sobre o brasão e a bandeira de São Roque, destacando os
                        elementos simbólicos e históricos que representam a identidade e a herança cultural desta
                        notável cidade paulista.</p>
                </div>
            </div>
            <!-- Fim Introdução -->

            <div class="titulo-sessao h3 vazio">Brasão e Bandeira</div>

            <section class="sessao-brasao">
                <h3 class="titulo-sessao3">BRASÃO</h3>
                <div class="row row-cols-2">
                    <div>
                        <h3>BRASÃO</h3>
                        <P>Bem inspirado nos escudos portugueses, redondos e cortados. Ondas de prata, o castelo e as
                            estrelas são símbolos ligados aos nomes Barros e Paes, sobrenomes dos fundadores de São
                            Roque, Fernão Paes de Barros e Pedro Vaz de Barros. A casa e a fazenda são referentes à
                            Fazenda Santo Antônio, o principal conjunto arquitetônico que representa a cidade.</P>

                        <P>
                            As figuras ao lado do brasão são um bandeirante (à esquerda), representando parte do legado
                            deste grupo para a criação de alguns monumentos, como o Sítio Santo Antônio; e um indígena
                            (à direita) para relembrar as grandes aldeias sob domínio dos irmãos Barros.
                            Na frente, a sigla ‘MEA PAULISTA GENS’, significando MINHA GREI É A PAULISTA
                        </P>

                        <p>

                        </p>
                    </div>
                    <figure>
                        <picture>
                            <source media="(max-width: 576px)" srcset="../imgs/cidade/simbolos_sm2.webp">
                            <source media="(max-width: 768px)" srcset="../imgs/cidade/simbolos_md2.webp">
                            <img src="../imgs/cidade/simbolos_brasao.webp" alt="">
                        </picture>
                    </figure>
                </div>
            </section>

            <section class="sessao-bandeira">
                <h3 class="titulo-sessao3">BANDEIRA</h3>
                <div class="row row-cols-2">
                    <div class="order-1">
                        <h3>BANDEIRA</h3>
                        <P>A bandeira de São Roque é marcada pelo brasão municipal ao centro, simbolizando a herança e
                            história da cidade. As faixas vermelha, branca e preta, cruzando diagonalmente, representam
                            a localização e o reconhecimento de São Roque no estado de São Paulo.</P>

                        <P>Este design equilibrado combina tradição e modernidade, refletindo o dinamismo e a identidade
                            única de São Roque. A bandeira, com sua estética distintiva, é um símbolo de orgulho e
                            pertencimento para a comunidade local.</P>
                    </div>
                    <figure>
                        <picture>
                            <source media="(max-width: 576px)" srcset="../imgs/cidade/simbolos_sm3.webp">
                            <source media="(max-width: 768px)" srcset="../imgs/cidade/simbolos_md3.webp">
                            <img src="../imgs/cidade/simbolos_bandeira.webp" alt="">
                        </picture>
                    </figure>
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