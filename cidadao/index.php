
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Cidadão</title>

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

    <div class="container">
        <main class="row cidadao">
            <article class="col-lg-8 col-md-6 col-sm-12 home-col-1">
                <div>
                    <h1 class="text-center">Cidadão</h1>
                    <p>A prefeitura de São Roque acredita que a ativa participação de seus cidadão é essencial para a construção de uma cidade mais inclusiva, segura e forte, por isso a área “Cidadão” é dedicada a você, cidadão de São Roque. Aqui você terá acesso a serviços, notícias e informações que possibilitem sua participação ativa no nosso município.</p>
                </div>
                <section class="row">
                    <h2 class="text-center font22">Empregabilidade</h2>
                    <section class="col-12">
                        <div class="row cidadao_noticias align-items-center justify-content-center gap-5 mb-5">
                            <figure class="col-auto text-center">
                                <img src="../imgs/cidadao/cidadao_empresa_150.webp" alt="uma ilustração com duas figuras humanas apontando para uma prancheta do tamanho deles">
                            </figure>
                            <div class="col-lg-4">
                                <h3 class="fs-6">Oportunidade de emprego</h3>
                                <p>Empresa de São Roque contrata Ajudante Geral; veja como se candidatar</p>
                                <a class="btn btn-vermais" href="#">Ver mais</a>
                            </div>
                        </div>
                        <div class="row cidadao_noticias align-items-center justify-content-center gap-5 mb-5">
                            <figure class="col-auto text-center">
                                <img src="../imgs/cidadao/cidadao_fatec_150.webp" alt="a faixada da fatec são roque com um carro branco na frente">
                            </figure>
                            <div class="col-lg-4">
                                <h3 class="fs-6">Oportunidade de emprego</h3>
                                <p>Fatec São Roque tem processo seletivo para uma vaga de professor no ensino superior; confira</p>
                                <a class="btn btn-vermais" href="#">Ver mais</a>
                            </div>
                        </div>
                        
                    </section>
                </section>

                <section class="row">
                    <h2 class="text-center">Concursos e Processos Seletivos</h2>
                    <div class="cidadao_concursos">
                        <ul>
                            <li><a href="#">Processo Seletivo Simplificado Para Contratação De Auxiliar de Classe</a></li>
                            <li><a href="#">Processo Seletivo Para Contratação de Dentista, Farmacêutico e Enfermeiro</a></li>
                            <li><a href="#">Processo Seletivo Simplificado para Contratação por Tempo Determinado</a></li>
                            <li><a href="#">Processo Seletivo Para Cuidador</a></li>
                            <li><a href="#">Concurso Público Para Agente Comunitário de Saúde</a></li>
                        </ul>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-vermais" href="#">Ver mais</a>
                        </div>
                    </div>
                    
    
                </section>

                <section class="row">
                    <h3 class="text-center">Saúde</h3>
                    <article class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <figure class="col-lg-4 text-center"><img src="../imgs/cidadao/cidadao_vacina_.webp" alt="uma pessoa de máscara aplicando vacina no braço esquerdo de outra pessoa"></figure>
                            <div class="col-lg-8">
                                <h4>Campanha de vacinação contra Influenza</h4>
                                <p>Procure a UBS mais próxima</p>
                                <a class="btn btn-vermais" href="#">Ver mais</a>
                            </div>
                        </div>
                    </article>
                </section>
            </article>
            <aside class="col-lg-4 col-md-6 col-sm-12">
                <section class="cidadao_card mais-acessados">
                    <h3>Mais Acessados</h3>
                    <ul>
                        <li><a href="../empresa/iptu.php">IPTU</a></li>
                        <li><a href="../turismo/eventos.php">Eventos</a></li>
                        <li><a href="../cidade/pessoasnotaveis.php">Pessoal notáveis</a></li>
                        <li><a href="servicos.php">Serviços</a></li>
                        <li><a href="../governo/legislacao.php">Legislação</a></li>
                    </ul>
                </section>

                <section>
                    <h3 class="none">Botões</h3>
                    <div class="row text-center justify-content-center cidadao_botoes">
                        <a href="#" class="d-flex flex-column"><i class="bi bi-cash-stack"></i>Multas</a>
                        <a href="#" class="d-flex flex-column"><i class="bi bi-people-fill"></i>2° via CNH</a>
                        <a href="#" class="d-flex flex-column"><i class="bi bi-telephone-fill"></i>Contatos de emergência</a>
                    </div>
                </section>

                <section class="col-12 cidadao_card">
                    <h3>Outras áreas</h3>
                    <ul>
                        <li><a href="../cidade/index.php">Cidade</a></li>
                        <li><a href="../governo/index.php">Governo</a></li>
                        <li><a href="../empresa/home.php">Empresa</a></li>
                        <li><a href="../turismo/index.php">Turismo</a></li>
                        <li><a href="../cultura/index.php">Cultura</a></li>
                    </ul>
                </section>

                <section class="col-12 cidadao_card">
                    <h3>Unidades de saúde</h3>
                    <ul class="row">
                        <li class="col-6"><a href="https://maps.app.goo.gl/PXSkHLNZSr8ChbyEA">PS Goianã</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/nDbYxSshQyaVZ3m67">UBS Central</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/t734crhrBW7utfwT9">UBS Guaçu</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/arwkNt6oGCdiMFzh9">UBS Taboão</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/GngCUJZy2m1dpkrB6">PS Vila Nova</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/Vr97ieYDFkAnLy4K6">PS Saboó</a></li>
                    </ul>
                </section>

                <form class="row cidadao_form" action="post">
                    <label class="text-cented">Para receber notícias de vagas</label>
                    <input class="form-control" type="text" placeholder="Nome">
                    <input class="form-control" type="email" placeholder="Email">
                    <button class="btn btn-vermais">Enviar</button>
                </form>

                <table class="table text-center cidadao_calendario sombra">
                    <caption class="text-center">Calendário Escolar</caption>
                    <tr class="cidadao_mes">
                        <th class="text-center" colspan="7">NOVEMBRO</th>
                    </tr>
                    <tr>
                        <th class="text-center">dom</th>
                        <th class="text-center">seg</th>
                        <th class="text-center">ter</th>
                        <th class="text-center">qua</th>
                        <th class="text-center">qui</th>
                        <th class="text-center">sex</th>
                        <th class="text-center">sáb</th>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center">1</td>
                        <td class="text-center">2</td>
                        <td class="text-center">3</td>
                        <td class="text-center">4</td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td class="text-center">6</td>
                        <td class="text-center">7</td>
                        <td class="text-center">8</td>
                        <td class="text-center">9</td>
                        <td class="text-center">10</td>
                        <td class="text-center">11</td>
                    </tr>
                    <tr>
                        <td class="text-center">12</td>
                        <td class="text-center">13</td>
                        <td class="text-center">14</td>
                        <td class="text-center">15</td>
                        <td class="text-center">16</td>
                        <td class="text-center">17</td>
                        <td class="text-center">18</td>
                    </tr>
                    <tr>
                        <td class="text-center">19</td>
                        <td class="text-center">20</td>
                        <td class="text-center">21</td>
                        <td class="text-center">22</td>
                        <td class="text-center">23</td>
                        <td class="text-center">24</td>
                        <td class="text-center">25</td>
                    </tr>
                    <tr>
                        <td class="text-center">26</td>
                        <td class="text-center">27</td>
                        <td class="text-center">28</td>
                        <td class="text-center">29</td>
                        <td class="text-center">30</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
                </table>
            </aside>
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