<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Saúde</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>
      

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <!-- Fim Header -->
    <div class="container">
        <main class="cidadao saude" role="main" aria-describedby="main-heading">
            <h1 class="text-center" id="main-heading">Bem-vindo à Seção de Saúde: Recursos e Serviços para Cidadãos</h1>
            <p>A prefeitura de São Roque valoriza profundamente o bem-estar de nossos cidadãos. Sendo assim estamos comprometidos em fornecer serviços de saúde de alta qualidade. Nesta seção você encontra informações sobre nossos serviços de saúde.</p>

            <section class="row text-center justify-content-between cidadao_botao" role="region" aria-labelledby="section-heading">
                <h2 class="none" id="section-heading">Botões de serviços referentes a saúde</h2>
                <a class="col-lg-2 col-md-6 col-sm-12 d-flex flex-column" role="link" aria-label="link-para-ver-politicas-de-saude" href="#"><i class="bi bi-hospital"></i>Políticas de Saúde</a>
                <a class="col-lg-2 col-md-6 col-sm-12 d-flex flex-column" role="link" aria-label="link-para-acessar-formularios-e-documentos" href="#"><i class="bi bi-ui-checks"></i>Formulários e Documentos</a>
                <a class="col-lg-2 col-md-6 col-sm-12 d-flex flex-column" role="link" aria-label="link-para-agendar-consultas" href="#"><i class="bi bi-journal-bookmark"></i>Agendamento de consultas</a>
                <a class="col-lg-2 col-md-6 col-sm-12 d-flex flex-column" role="link" aria-label="link-para-ver-boletins-de-saude" href="#"><i class="bi bi-bar-chart-line"></i>Boletins de Saúde</a>
            </section>

            <section class="row justify-content-center" role="region" aria-labelledby="section-heading">
                <h2 class="none" id="section-heading">Seção com informações extras sobre saúde</h2>
                <aside class="col-lg-4 col-md-8 col-12 cidadao_card" role="complementary">
                    <h3>Unidades de saúde</h3>
                    <ul role="list">
                        <li class="col-6"><a href="https://maps.app.goo.gl/PXSkHLNZSr8ChbyEA" role="link" aria-label="link-para-localizacao-posto-de-saude-goiana">PS Goianã</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/nDbYxSshQyaVZ3m67" role="link" aria-label="link-para-localizacao-ubs-central">UBS Central</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/t734crhrBW7utfwT9" role="link" aria-label="link-para-localizacao-ubs-guacu">UBS Guaçu</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/arwkNt6oGCdiMFzh9" role="link" aria-label="link-para-localizacao-ubs-taboao">UBS Taboão</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/GngCUJZy2m1dpkrB6" role="link" aria-label="link-para-localizacao-posto-de-saude-vila-nova">PS Vila Nova</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/Vr97ieYDFkAnLy4K6" role="link" aria-label="link-para-localizacao-posto-de-saude-saboo">PS Saboó</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/Gw692ZcGFzm5V6fy8" role="link" aria-label="link-para-localizacao-usf-carmo-sao-roque">USF Carmo São Roque</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/emsXZWWfAGhk6Msx6" role="link" aria-label="link-para-localizacao-posto-de-saude-mailasqui">PS de Mailasqui</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/xc5NEWrLF4wf3vJS6" role="link" aria-label="link-para-localizacao-posto-de-saude-sao-joao-novo">Posto de Saúde de São João Novo</a></li>
                    </ul>
                </aside>

                <article class="col-lg-8 col-md-12 col-sm-12 cidadao_cartilha" role="article">
                    <h3 class="text-center">Cartilha do Uso Correto de Medicamentos</h3>
                    <p>É relevante entender a importância do uso consciente de medicamentos. Mesmo que os medicamentos tenham um papel fundamental no seu tratamento, é essencial entender a utilização apropriada para garantir segurança e eficácia.</p>
                    
                    <table class="table" role="table" aria-label="Medicamentos" aria-describedby="problemas_com_medicamentos">
                        <caption class="text-center" id="problemas_com_medicamentos">Problemas com medicamentos</caption>
                        <thead>
                            <tr role="rowgroup">
                                <th scope="col" id="col-medicamento-um">Primeiro medicamento</th>
                                <th scope="col" id="col-medicamento-dois">Segundo medicamento</th>
                                <th scope="col" id="col-resultado">Resultado da junção</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="rowgroup">
                                <td role="cell" headers="col-medicamento-um">ácido acetilsalicílico</td>
                                <td role="cell" headers="col-medicamento-dois">bebidas alcoólicas</td>
                                <td role="cell" headers="col-resultado">aumento do risco de sangramento no estômago</td>
                            </tr>
                            <tr role="rowgroup">
                                <td role="cell" headers="col-medicamento-um">anticoncepcional</td>
                                <td role="cell" headers="col-medicamento-dois">vitamina c</td>
                                <td role="cell" headers="col-resultado">aumento de hormônio da pílula no sangue e, com isso, seus possíveis efeitos colaterais</td>
                            </tr>
                            <tr role="rowgroup">
                                <td role="cell" headers="col-medicamento-um">anticoncepcional</td>
                                <td role="cell" headers="col-medicamento-dois">antibiótico</td>
                                <td role="cell" headers="col-resultado">efeito reduzido e aumento das chances de gravidez</td>
                            </tr>
                            <tr role="rowgroup">
                                <td role="cell" headers="col-medicamento-um">leite</td>
                                <td role="cell" headers="col-medicamento-dois">antibiótico</td>
                                <td role="cell" headers="col-resultado">redução do efeito</td>
                            </tr>
                        </tbody>
                        
                    </table>
                </article>
            </section>

            <section class="row" role="region" aria-labelledby="section-heading">
                <h3 class="text-center" id="section-heading">Campanhas de Vacinação</h3>
                <article class="col-lg-6 col-md-6 col-sm-12" role="article">
                    <div class="row">
                        <figure class="col-lg-4 col-md- text-center">
                            <img src="../imgs/cidadao/cidadao_vacinahpv_.webp" alt="uma pessoa aplicando vacina no braço esquerdo de outra pessoa">
                            <figcaption>Aplicação de vacina</figcaption>
                        </figure>
                        <div class="col-lg-8">
                            <h4>Campanha de vacinação contra o HPV:</h4>
                            <p>Procure a UBS mais próxima;</p>
                            <a class="btn btn-vermais" role="link" aria-label="link-para-ver- a-mais-informacoes-sobre-a-campanha-de-vacinacao-hpv" href="#">Ver mais</a>
                        </div>
                    </div>
                </article>
                <article class="col-lg-6 col-md-6 col-sm-12" role="article">
                    <div class="row">
                        <figure class="col-lg-4 col-md- text-center">
                            <img src="../imgs/cidadao/cidadao_vacina_.webp" alt="uma pessoa de máscara aplicando vacina no braço esquerdo de outra pessoa">
                            <figcaption>Aplicação de vacina</figcaption>
                        </figure>
                        <div class="col-lg-8">
                            <h4>Campanha de vacinação contra Influenza:</h4>
                            <p>Procure a UBS mais próxima;</p>

                            <a class="btn btn-vermais" role="link" aria-label="link-para-ver- a-mais-informacoes-sobre-a-campanha-de-vacinacao-influenza" href="#">Ver mais</a>
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