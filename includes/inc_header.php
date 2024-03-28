<header>

    <div class="barra-azul">
    </div>

    <!-- Navbar Principal -->
    <nav class="navbar navbar-expand-md navbarPrincipal" aria-label="Menu Principal">
        <div class="container-lg">

            <!-- Logo com descrição alternativa apropriada -->
            <a class="navbar-brand" href="/<?= $pasta_raiz ?>/" aria-label="Voltar para a página inicial">
                <picture class="logo">
                    <source media="(min-width: 1200px)" srcset="/<?= $pasta_raiz; ?>/imgs/principal/logotipo.svg">
                    <source media="(min-width: 768px)" srcset="/<?= $pasta_raiz; ?>/imgs/principal/carnivorascap_nome.svg">
                    <img src="/<?= $pasta_raiz; ?>/imgs/principal/logo.svg" alt="Logotipo da Carnivoras Capivaras da Justiça, apresentando uma capivara sorridente vestida com roupas da justiça. Ao fundo, duas coxas de carne desenhadas em azul. Uma faixa com a inscrição ‘Garra e Justiça’ se sobrepõe, ao lado do nome completo dA EQUIPE.">
                </picture>
            </a>

            <!-- Botão acessível para expandir e comprimir a NavBar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrincipalComprimido" aria-controls="navbarPrincipalComprimido" aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navegação principal acessível -->
            <div class="collapse navbar-collapse" id="navbarPrincipalComprimido">
                <ul class="navbar-nav" role="navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="/<?= $pasta_raiz ?>/noticias.php">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/<?= $pasta_raiz ?>/ouvidoria.php">Ouvidoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/<?= $pasta_raiz ?>/contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/<?= $pasta_raiz ?>/quemsomos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/<?= $pasta_raiz ?>/perguntas.php">Perguntas Frequentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/<?= $pasta_raiz ?>/privacidade.php">Privacidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/<?= $pasta_raiz ?>/acessibilidade.php">Acessibilidade</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Navbar Secundaria -->
    <nav class="navbarSecundaria" aria-label="Menu Sessões da Página">
    <!-- Descrição geral para a navegação -->
    <p id="descricaoMenu" class="visually-hidden">Selecionando um item do menu, você será direcionado para a página inicial da categoria correspondente.</p>
    <ul class="nav nav-pills container-lg" role="tablist" aria-describedby="descricaoMenu">
        <!-- Itens do menu -->
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-cidade" role="tab" aria-controls="nav-cidade" aria-selected="false" href="/<?= $pasta_raiz; ?>/cidade/">A CIDADE</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-cidadao" role="tab" aria-controls="nav-cidadao" aria-selected="false" href="/<?= $pasta_raiz; ?>/cidadao/">CIDADAO</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-governo" role="tab" aria-controls="nav-governo" aria-selected="false" href="/<?= $pasta_raiz; ?>/governo/">GOVERNO</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-empresa" role="tab" aria-controls="nav-empresa" aria-selected="false" href="/<?= $pasta_raiz; ?>/empresa/">EMPRESA</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-cultura" role="tab" aria-controls="nav-cultura" aria-selected="false" href="/<?= $pasta_raiz; ?>/cultura/">CULTURA</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-turismo" role="tab" aria-controls="nav-turismo" aria-selected="false" href="/<?= $pasta_raiz; ?>/turismo/">TURISMO</a>
            </li>
        </ul>

    </nav>

    <!--Navbars Categorias -->
    <div class="tab-content navbarCategoria">

        <nav id="nav-cidade" role="tabpanel" aria-labelledby="tab-cidade" class="navbar tab-pane fade  navbar-expand-md">
            <div class="container-lg">
                <div class="navbar-nav">
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cidade/historia.php">História</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cidade/dadosgerais.php">Dados Gerais</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cidade/pessoasnotaveis.php">Pessoas Notáveis</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cidade/simbolos.php">Brasão e Bandeira</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cidade/hino.php">Hino da Cidade</a>
                </div>
            </div>
        </nav>

        <nav id="nav-cidadao" role="tabpanel" aria-labelledby="tab-cidadao" class="navbar tab-pane fade  navbar-expand-md">
            <div class="container-lg">
                <div class="navbar-nav">
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cidadao/saude.php">Saúde</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cidadao/servicos.php">Serviços</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cidadao/transporte.php">Trânsito e Transporte</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cidadao/concursos.php">Concursos</a>
                </div>
            </div>
        </nav>

        <nav id="nav-governo" role="tabpanel" aria-labelledby="tab-governo" class="navbar tab-pane fade  navbar-expand-md">
            <div class="container-lg">
                <div class="navbar-nav">
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/governo/prefeitura.php">Prefeitura</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/governo/secretarias.php">Secretarias</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/governo/legislacao.php">Legislação</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/governo/legislativo.php">Poder Legislativo</a>
                </div>
            </div>
        </nav>

        <nav id="nav-empresa" role="tabpanel" aria-labelledby="tab-empresa" class="navbar tab-pane fade  navbar-expand-md">
            <div class="container-lg">
                <div class="navbar-nav">
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/empresa/iptu.php">IPTU</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/empresa/diario_oficial.php">Diário Oficial</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/empresa/cadastro.php">Cadastro de Pessoa Jurídica</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/empresa/aprovacao.php">Aprovação de Projetos</a>
                </div>
            </div>
        </nav>

        <nav id="nav-cultura" role="tabpanel" aria-labelledby="tab-cultura" class="navbar tab-pane fade  navbar-expand-md">
            <div class="container-lg">
                <div class="navbar-nav">
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cultura/culturaarte.php">Cultura e Arte</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cultura/tradicoes.php">Tradições</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cultura/agendamento.php">Agendamento</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/cultura/cadastro.php">Cadastro</a>
                </div>
            </div>
        </nav>

        <nav id="nav-turismo" role="tabpanel" aria-labelledby="tab-turismo" class="navbar tab-pane fade  navbar-expand-md">
            <div class="container-lg">
                <div class="navbar-nav">
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/turismo/hospedagem.php">Hospedagem</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/turismo/pontos_turisticos.php">Pontos Turísticos</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/turismo/gastronomia.php">Gastronomia</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/turismo/eventos.php">Eventos</a>
                    <a class="nav-link" href="/<?= $pasta_raiz; ?>/turismo/galeria.php">Galeria</a>
                </div>
            </div>
        </nav>
    </div>

</header>