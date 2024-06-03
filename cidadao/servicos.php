<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Serviços</title>

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

    <div class="container">
        <main class="row cidadao" role="main" aria-labelledby="main-heading">
            <h1 class="text-center" id="main-heading"> Cartela de Serviços</h1>
                <p>A cartela de serviços tem como objetivo informar todos os serviços que a prefeitura de São Roque oferece aos seus cidadãos. Sendo assim, comunicar onde esses serviços são prestados e a forma de acessos a eles.</p>
        
            <article class="row sombra cidadao_servicos cidadao_assistencia" role="article" aria-labelledby="article-heading">
                    <h2 class="text-center" id="article-heading">Assistência social</h2>
                    <div class="col-lg-8 col-md-12 p-10">
                        <p>A assistência social é uma política pública que está organizada através Sistema Único de Assistência Social (Suas) que permeia todo o Brasil. Tem por objetivo a garantia da proteção social dos cidadãos, isto é, o apoio à comunidade por meio de serviços, benefícios, programas e projetos. As unidades da Assistência Social são:</p>
                        <ul>
                            <li>Cras – Centro de Referência de Assistência Social;</li>
                            <li>Creas – Centro de Referência Especializado de Assistência Social;</li>
                            <li>Centro POP – Centros de Referência Especializados para População em Situação de Rua;</li>
                            <li>Centro-Dia de Referência para Pessoa com Deficiência e suas Famílias;</li>
                            <li>Unidades de Acolhimento – Casa Lar, Abrigo Institucional, República, Residência Inclusiva, Casa de Passagem</li>
                        </ul>
                    </div>

                <section class="col-lg-4 col-md-12 col-md-12 text-center" role="region" aria-labelledby="section-heading">
                    <h2 id="section-heading">Programas</h2>
                    <div class="row justify-content-around cidadao_botao ">
                        <a href="#" class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column" role="link" aria-label="link-para-ver-a-mais-informacoes-sobre-programa-populacao-situacao-rua"><i class="bi bi-person-walking"></i>População em Situação de Rua;</a>

                        <a href="#" class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column" role="link" aria-label="link-para-ver-a-mais-informacoes-sobre-programa-erradicacao-trabalho-infantil"><i class="bi bi-person-circle"></i>Programa de Erradicação do Trabalho Infantil;</a>

                        <a href="#" class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column" role="link" aria-label="link-para-ver-a-mais-informacoes-sobre-programa-protecao-pessoas-com-deficiencia-e-idosos"><i class="bi bi-person-arms-up"></i>Proteção Especial para Pessoas com Deficiência e Idosas;</a>

                        <a href="#" class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column" role="link" aria-label="link-para-ver-a-mais-informacoes-sobre-servicos-acolhimento"><i class="bi bi-house-heart"></i>Serviços de Acolhimento;</a>
                    </div>
                </section>
            </article>
            <article class="col-12" role="article" aria-labelledby="article-heading">
                <div class="row justify-content-between">
                    <section class="col-lg-4 col-md-12 col-sm-12 sombra cidadao_servicos cidadao_servicos_escolar" role="region" aria-labelledby="section-heading">
                        <h2 class="text-center" id="section-heading">Educação</h2>
                        <p>A cidade de São Roque está comprometida a oferecer educação de qualidade aos seus cidadãos, nesta seção você encontrará serviços a este tema.</p>
                        <ul>
                            <li>Vagas em creches</li>
                            <li>Vagas em escolas municipais</li>
                            <li>Programas educacionais federais</li>
                        </ul>

                        <div class="row text-center">
                            <a class="" href="#" role="link" aria-label="link-para-acessar-boletim-escolar">Boletim escolar</a>
                            <a class="" href="#" role="link" aria-label="link-para-acessar-lista-material-escolar">Material escolar</a>
                        </div>

                        <div class="row text-center">
                            <table class="table text-center cidadao_calendario sombra" role="table" aria-describedby="calendario_servicos">
                                <caption class="text-center" id="calendario_servicos">Calendário Escolar</caption>
                                <tr class="cidadao_mes" role="rowgroup">
                                    <th class="text-center" colspan="7">NOVEMBRO</th>
                                </tr>
                                <tr role="rowgroup">
                                    <th class="text-center" scope="col" id="col-domingo">dom</th>
                                    <th class="text-center" scope="col" id="col-segunda">seg</th>
                                    <th class="text-center" scope="col" id="col-terca">ter</th>
                                    <th class="text-center" scope="col" id="col-quarta">qua</th>
                                    <th class="text-center" scope="col" id="col-quinta">qui</th>
                                    <th class="text-center" scope="col" id="col-sexta">sex</th>
                                    <th class="text-center" scope="col" id="col-sabado">sáb</th>
                                </tr>
                                <tr role="rowgroup">
                                    <td class="text-center" role="cell" headers="col-domingo"></td>
                                    <td class="text-center" role="cell" headers="col-segunda"></td>
                                    <td class="text-center" role="cell" headers="col-terca"></td>
                                    <td class="text-center" role="cell" headers="col-quarta">1</td>
                                    <td class="text-center" role="cell" headers="col-quinta">2</td>
                                    <td class="text-center" role="cell" headers="col-sexta">3</td>
                                    <td class="text-center" role="cell" headers="col-sabado">4</td>
                                </tr>
                                <tr role="rowgroup">
                                    <td class="text-center" role="cell" headers="col-domingo">5</td>
                                    <td class="text-center" role="cell" headers="col-segunda">6</td>
                                    <td class="text-center" role="cell" headers="col-terca">7</td>
                                    <td class="text-center" role="cell" headers="col-quarta">8</td>
                                    <td class="text-center" role="cell" headers="col-quinta">9</td>
                                    <td class="text-center" role="cell" headers="col-sexta">10</td>
                                    <td class="text-center" role="cell" headers="col-sabado">11</td>
                                </tr>
                                <tr role="rowgroup">
                                    <td class="text-center" role="cell" headers="col-domingo">12</td>
                                    <td class="text-center" role="cell" headers="col-segunda">13</td>
                                    <td class="text-center" role="cell" headers="col-terca">14</td>
                                    <td class="text-center" role="cell" headers="col-quarta">15</td>
                                    <td class="text-center" role="cell" headers="col-quinta">16</td>
                                    <td class="text-center" role="cell" headers="col-sexta">17</td>
                                    <td class="text-center" role="cell" headers="col-sabado">18</td>
                                </tr>
                                <tr role="rowgroup">
                                    <td class="text-center" role="cell" headers="col-domingo">19</td>
                                    <td class="text-center" role="cell" headers="col-segunda">20</td>
                                    <td class="text-center" role="cell" headers="col-terca">21</td>
                                    <td class="text-center" role="cell" headers="col-quarta">22</td>
                                    <td class="text-center" role="cell" headers="col-quinta">23</td>
                                    <td class="text-center" role="cell" headers="col-sexta">24</td>
                                    <td class="text-center" role="cell" headers="col-sabado">25</td>
                                </tr>
                                <tr role="rowgroup">
                                    <td class="text-center" role="cell" headers="col-domingo">26</td>
                                    <td class="text-center" role="cell" headers="col-segunda">27</td>
                                    <td class="text-center" role="cell" headers="col-terca">28</td>
                                    <td class="text-center" role="cell" headers="col-quarta">29</td>
                                    <td class="text-center" role="cell" headers="col-quinta">30</td>
                                    <td class="text-center" role="cell" headers="col-sexta"></td>
                                    <td class="text-center" role="cell" headers="col-sabado"></td>
                                </tr>
                            </table>
                        </div>
                    </section>

                    <section class="col-lg-7 col-md-12 col-sm-12 sombra cidadao_servicos" role="region" aria-labelledby="section-heading">
                        <h2 class="text-center" id="section-heading">Empregabilidade</h2>
                        <p>Estamos comprometidos a fomentar o crescimento econômico do município e manter o bem-estar de nossa população. Por isso, essa seção é dedicada a divulgar e oferecer oportunidades de emprego, aqui você encontrará todas as informações referentes a esse tema.</p>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div>
                                    <img src="../imgs/cidadao/cidadao_empresa_.webp" alt="uma ilustração com duas figuras humanas apontando para uma prancheta do tamanho deles">
                                </div>
                                <h3>Notícia</h3>
                                <p>Empresa de São Roque contrata Ajudante Geral; veja como se candidatar</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-vermais" href="#" role="link" aria-label="link-para-ver- a-mais-informacoes-sobre-a-noticia">Ver mais</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div>
                                    <img src="../imgs/cidadao/cidadao_fatec_.webp" alt="a faixada da fatec são roque com um carro branco na frente">
                                </div>
                                <h3>Notícia</h3>
                                <p>Fatec São Roque tem processo seletivo para uma vaga de professor no ensino superior; confira</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-vermais" href="#" role="link" aria-label="link-para-ver- a-mais-informacoes-sobre-a-noticia">Ver mais</a>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <form class="row cidadao_form" action="post">
                            <label class="text-cented">Para receber notícias de vagas</label>
                            <input class="form-control" type="text" placeholder="Nome">
                            <input class="form-control" type="email" placeholder="Email">
                            <button class="btn btn-vermais">Enviar</button>
                        </form>
                    </section>
                </div>
            </article>

            <div class="col-12">
            <div class=" row justify-content-between">
                <article class="col-lg-6 col-md-12 col-sm-12 sombra cidadao_servicos" role="complementary">
                    <h3 class="text-center">Comunicados</h3>
                    <p>Informamos que devido as fortes chuvas a escola “EMEF Tetsu Chinone” suspende as aulas no dia 06/11 por conta do vendaval ocorrido no dia 03/11. A prefeitura trabalha no reparo dos danos feitos à estrutura da escola.</p>
                    <div class="text-center">
                        <img src="../imgs/cidadao/cidadao_comunicado_.webp" alt="frente da escola emef tetsu chinone, estrutura branca com um portão e um carro branco na frente">
                    </div>
                </article>

                <article class="col-lg-5 col-md-12 col-sm-12 sombra cidadao_servicos" role="complementary" aria-labelledby="article-heading">
                    <h3 class="text-center" id="section-heading">Postagens recentes</h3>
                    <section class="cidadao_postagem" role="region" aria-labelledby="section-heading">
                        <h4 class="none" id="section-heading">Postagem 1</h4>
                        <p>Edital n.11/2023 - Dispõe sobre o resultado final da eleição dos membros do Conselho Tutelar de São Roque – SP - 2023.
                        </p>
                        <p><i>30/11//2023 08:00</i></p>
                    </section>
                    <section class="cidadao_postagem" role="region" aria-labelledby="section-heading">
                        <h4 class="none" id="section-heading">Postagem 1</h4>
                        <p>Declara ponto facultativo do Município de São Roque, no dia 20 de novembro de 2023.
                        </p>
                        <p><i>10/11/2023 16:00</i></p>
                    </section>
                    <section class="cidadao_postagem" role="region" aria-labelledby="section-heading">
                        <h4 class="none" id="section-heading">Postagem 1</h4>
                        <p>Criação do incentivo financeiro para os profissionais que atuam como Auxiliar de Educação.
                        </p>
                        <p><i>04/12/2023 09:10</i></p>
                    </section>
                </article>
            </div>
            </div>
        <?php 
          include '../includes/inc_referencias.php';
          ?>
        </main>
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