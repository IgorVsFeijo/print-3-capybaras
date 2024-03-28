<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Concursos</title>

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

    <div class="container text-left">
        <main class="cidadao">
            <article>
                <h1 class="text-center"> Concursos Públicos e Processos Seletivos </h1>
                <p>A prefeitura de São Roque  oferece Concursos Públicos para preenchimento de cargos públicos de provimento efetivo e Processos Seletivos que atendem às necessidades temporárias do município.</p>

                <section class="row">
                    <h2 class="none">Links</h2>
                    <div class="col-lg-6 col-md-12 col-sm-12 cidadao_concursos">
                        <ul>
                            <li class="concursos"><a href="#">Processo Seletivo Simplificado Para Contratação De Auxiliar de Classe</a></li>
                            <li class="concursos"><a href="#">Processo Seletivo Para Contratação de Dentista, Farmacêutico e Enfermeiro</a></li>
                            <li class="concursos"><a href="#">Processo Seletivo Simplificado para Contratação por Tempo Determinado</a></li>
                            <li class="concursos"><a href="#">Processo Seletivo Simplificado para Contratação de Vigilante Municipal Sec. Educação</a></li>
                            <li class="concursos"><a href="#">Processo Seletivo Simplificado para Contratação por Tempo Determinado</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 cidadao_concursos">
                        <ul>
                            <li class="concursos"><a href="#">Processo Seletivo Para Contratação de Terapeuta Ocupacional</a></li>
                            <li class="concursos"><a href="#">Concurso Público Para Técnico em Farmácia</a></li>
                            <li class="concursos"><a href="#">Processo Seletivo Para Cuidador</a></li>
                            <li class="concursos"><a href="#">Concurso Público Para Agente Comunitário de Saúde</a></li>
                            <li class="concursos"><a href="#">Processo Seletivo Para Professor Eventual </a></li>
                        </ul>
                    </div>
                </section>
            </article>
            <aside class="row gx-5">
                <h2 class="text-center">Dicas para concurso</h2>
                <section class="col-lg-6 col-md-12 cidadao_dicas">
                    <div class="row">
                        <i class="bi bi-book-fill col-lg-4 col-md-4 text-center"></i>
                        <div class="col-lg-8 col-md-8">
                            <h3>Leia o edital</h3>
                            <p>Leia e preste atenção nas datas e como a prova é elaborada;</p>
                        </div>
                    </div>
                    <div class="row">
                        <i class="bi bi-ui-checks-grid col-lg-4 col-md-4 text-center"></i>
                        <div class="col-lg-8 col-md-8">
                            <h3>Cronograma</h3>
                            <p>Planeje seus estudos de acordo com as matérias que aparecem no edital;</p>
                        </div>
                    </div>
                </section>

                <section class="col-lg-6 col-md-12 cidadao_dicas">
                    <div class="row">
                    <div class="col-lg-6 col-md-6 d-flex flex-column">
                        <i class="bi bi-pencil-square text-center"></i>
                        <div class="col-lg-8">
                            <h3 class="">Revisar</h3>
                            <p class="">Revise os conteúdos vistos durante a semana;</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 d-flex flex-column">
                        <i class="bi bi-journal-bookmark text-center "></i>
                        <div class="col-lg-8">
                            <h3 class="">Cursos</h3>
                            <p class="">Cursos: procure cursos relacionados ao concurso em que você se inscreveu.</p>
                        </div>
                    </div>
                </div>
                </section>
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