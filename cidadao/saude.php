<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Saúde</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>
      <link rel="stylesheet" href="../style/cidadao.css">

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <!-- Fim Header -->
    <div class="container">
        <main class="cidadao saude">
            <h1 class="text-center">Saúde</h1>
            <p>A prefeitura de São Roque valoriza profundamente o bem-estar de nossos cidadãos. Sendo assim estamos comprometidos em fornecer serviços de saúde de alta qualidade. Nesta seção você encontra informações sobre nossos serviços de saúde.</p>

            <section class="row text-center justify-content-between cidadao_botao">
                <h2 class="none">botões</h2>
                <a class="col-lg-2 col-md-6 col-sm-12 d-flex flex-column" href="#"><i class="bi bi-hospital"></i>Políticas de Saúde</a>
                <a class="col-lg-2 col-md-6 col-sm-12 d-flex flex-column" href="#"><i class="bi bi-ui-checks"></i>Formulários e Documentos</a>
                <a class="col-lg-2 col-md-6 col-sm-12 d-flex flex-column" href="#"><i class="bi bi-journal-bookmark"></i>Agendamento de consultas</a>
                <a class="col-lg-2 col-md-6 col-sm-12 d-flex flex-column" href="#"><i class="bi bi-bar-chart-line"></i>Boletins de Saúde</a>
            </section>

            <section class="row justify-content-center">
                <h2 class="none">Extras</h2>
                <article class="col-lg-4 col-md-8 col-12 cidadao_card">
                    <h3>Unidades de saúde</h3>
                    <ul>
                        <li>PS Goianã</li>
                        <li>UBS Central</li>
                        <li>UBS Guaçu</li>
                        <li>UBS Taboão</li>
                        <li>PS Vila Nova</li>
                        <li>PS Saboó</li>
                        <li>USF Carmo São Roque</li>
                        <li>PS de Mailasqui</li>
                        <li>Posto de Saúde de São João Novo</li>
                    </ul>
                </article>

                <aside class="col-lg-8 col-md-12 col-sm-12 cidadao_cartilha">
                    <h3 class="text-center">Cartilha do Uso Correto de Medicamentos</h3>
                    <p>É relevante entender a importância do uso consciente de medicamentos. Mesmo que os medicamentos tenham um papel fundamental no seu tratamento, é essencial entender a utilização apropriada para garantir segurança e eficácia.</p>
                    
                    <table class="table">
                        <caption class="text-center">Problemas com medicamentos</caption>
                        <tr>
                            <td>ácido acetilsalicílico</td>
                            <td>bebidas alcoólicas</td>
                            <td>aumento do risco de sangramento no estômago</td>
                        </tr>
                        <tr>
                            <td>anticoncepcional</td>
                            <td>vitamina c</td>
                            <td>aumento de hormônio da pílula no sangue e, com isso, seus possíveis efeitos colaterais</td>
                        </tr>
                        <tr>
                            <td>anticoncepcional</td>
                            <td>antibiótico</td>
                            <td>efeito reduzido e aumento das chances de gravidez</td>
                        </tr>
                        <tr>
                            <td>leite</td>
                            <td>antibiótico</td>
                            <td>redução do efeito</td>
                        </tr>
                    </table>
                </aside>
            </section>
            <section class="row">
                <h3 class="text-center">Campanhas de Vacinação</h3>
                <article class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <figure class="col-lg-4 col-md- text-center"><img src="../imgs/cidadao/cidadao_vacinahpv_.webp" alt="uma pessoa aplicando vacina no braço esquerdo de outra pessoa"></figure>
                        <div class="col-lg-8">
                            <h4>Campanha de vacinação contra o HPV:</h4>
                            <p>Procure a UBS mais próxima;</p>
                            <a class="btn btn-vermais" href="#">Ver mais</a>
                        </div>
                    </div>
                </article>
                <article class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <figure class="col-lg-4 col-md- text-center"><img src="../imgs/cidadao/cidadao_vacina_.webp" alt="uma pessoa de máscara aplicando vacina no braço esquerdo de outra pessoa"></figure>
                        <div class="col-lg-8">
                            <h4>Campanha de vacinação contra Influenza:</h4>
                            <p>Procure a UBS mais próxima;</p>

                            <a class="btn btn-vermais" href="#">Ver mais</a>
                        </div>
                    </div>
                </article>
            </section>
            <?php 
          include '../includes/inc_referencias.php';
          ?>
        </main>
    </div>    <!-- Inicio do Footer -->

    <?php
      include '../includes/inc_footer.php';
    ?>

    <!-- Fim do Footer  -->

    <?php
      include '../includes/inc_bootstrap_js.php';
    ?>
</body>
</html>