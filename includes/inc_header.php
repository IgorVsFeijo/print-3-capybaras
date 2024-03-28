<header>

    <div class="barra-azul">
    </div>

    <!-- Navbar Principal -->
    <nav class="navbar navbar-expand-md navbarPrincipal">
        <div class="container-lg">

            <a class="navbar-brand" href="/<?= $pasta_raiz ?>/">
                <picture class="logo">
                    <source media="(min-width: 1200px)" srcset="/<?= $pasta_raiz; ?>/imgs/principal/logotipo.svg">
                    <source media="(min-width: 768px)" srcset="/<?= $pasta_raiz; ?>/imgs/principal/carnivorascap_nome.svg">
                    <img src="/<?= $pasta_raiz; ?>/imgs/principal/logo.svg" alt="">
                </picture>
            </a>

            <!-- Botao que expande ou comprimi a NavBar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrincipalComprimido" aria-controls="#navbarPrincipalComprimido" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!--Div que vai ser comprimida ou expandida -->
            <div class="collapse navbar-collapse" id="navbarPrincipalComprimido">
                <ul class="navbar-nav">
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
    <nav class="navbarSecundaria">

        <ul class="nav nav-pills container-lg" id="" role="tablist">
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
                    <a class="nav-link" href="#">História</a>
                    <a class="nav-link" href="#">Dados Gerais</a>
                    <a class="nav-link" href="#">Pessoas Notáveis</a>
                    <a class="nav-link" href="#">Brasão e Bandeira</a>
                    <a class="nav-link" href="#">Hino da Cidade</a>
                </div>
            </div>
        </nav>

        <nav id="nav-cidadao" role="tabpanel" aria-labelledby="tab-cidadao" class="navbar tab-pane fade  navbar-expand-md">
            <div class="container-lg">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Saúde</a>
                    <a class="nav-link" href="#">Serviços</a>
                    <a class="nav-link" href="#">Trânsito e Transporte</a>
                    <a class="nav-link" href="#">Concursos</a>
                </div>
            </div>
        </nav>

        <nav id="nav-governo" role="tabpanel" aria-labelledby="tab-governo" class="navbar tab-pane fade  navbar-expand-md">
            <div class="container-lg">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Prefeitura</a>
                    <a class="nav-link" href="#">Secretarias</a>
                    <a class="nav-link" href="#">Legislação</a>
                    <a class="nav-link" href="#">Poder Legislativo</a>
                </div>
            </div>
        </nav>

        <nav id="nav-empresa" role="tabpanel" aria-labelledby="tab-empresa" class="navbar tab-pane fade  navbar-expand-md">
            <div class="container-lg">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">IPTU</a>
                    <a class="nav-link" href="#">Diário Oficial</a>
                    <a class="nav-link" href="#">Cadastro de Pessoa Jurídica</a>
                    <a class="nav-link" href="#">Aprovação de Projetos</a>
                </div>
            </div>
        </nav>

        <nav id="nav-cultura" role="tabpanel" aria-labelledby="tab-cultura" class="navbar tab-pane fade  navbar-expand-md">
            <div class="container-lg">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Cultura e Arte</a>
                    <a class="nav-link" href="#">Tradições</a>
                    <a class="nav-link" href="#">Agendamento</a>
                    <a class="nav-link" href="#">Cadastro</a>
                </div>
            </div>
        </nav>

        <nav id="nav-turismo" role="tabpanel" aria-labelledby="tab-turismo" class="navbar tab-pane fade  navbar-expand-md">
            <div class="container-lg">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Hospedagem</a>
                    <a class="nav-link" href="#">Pontos Turísticos</a>
                    <a class="nav-link" href="#">Gastronomia</a>
                    <a class="nav-link" href="#">Eventos</a>
                    <a class="nav-link" href="#">Galeria</a>
                </div>
            </div>
        </nav>
    </div>

</header>