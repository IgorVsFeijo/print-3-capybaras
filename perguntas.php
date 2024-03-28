<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Perguntas Frequentes</title>

    <?php
        include 'includes/inc_head_links.php';
      ?>
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container">
      <main id="perguntas">
        <article>
          <h2>Encontre respostas para as dúvidas mais comuns sobre a nossa cidade</h2>
          <p>Aqui estão as dúvidas mais recorrentes que as pessoas possuem sobre os diferentes aspectos da nossa cidade. Aproveite para sanar todas e tirar o máximo de proveito dos nossos serviços.</p>
          <section class="text-center">
            <h3>Dúvidas Gerais</h3>
            <div class="accordion col-12" id="accordionExample">
              <div class="row">
                <div class="accordion-item col-sm-12 col-md-6">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Qual o horário de funcionamento da Prefeitura?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>A Prefeitura de São Roque está aberta das 09:00 até as 15:00, na Avenida São Paulo, 966, no Taboão.</p>
                      </div>
                    </div>
                </div>
                <div class="accordion-item col-sm-12 col-md-6">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Como posso obter o passe escolar para transporte?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>O passe escolar pode ser obtido através de um dos protocolos online, disponíveis no site da Prefeitura de São Roque. Basta informar seus dados e o horário de entrada e saída e ir na rodoviária.</p>
                      </div>
                    </div>
                </div>         
              </div>
              <div class="row">
                <div class="accordion-item col-sm-12 col-md-6">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      O que é a Lei de Acesso à Informação?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>A lei 12527/2011, a chamada Lei de Acesso à Informação, exige que órgãos públicos, sejam federais, estaduais ou municipais (ministérios, câmaras municipais, prefeituras e outros) a revelarem informações sobre as suas atividades a qualquer pessoa, desde que não sejam consideradas confidenciais.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item col-sm-12 col-md-6">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      O que é o protocolo?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Setor onde se dá o recebimento, registro, distribuição, tramitação, e entrega de documentos. Podendo protocolar Certidão, Declaração, Atestado, Lotação Cadastral, Cópia, Licença, Planta, Mapa , Parcelamento, Isenção, Restituição, Recurso, Auxílio Financeiro, entre outros</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="accordion-item col-sm-12 col-md-6">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      O que acontece no caso de irregularidades sanitárias?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Quando a inspeção constata irregularidades sanitárias, o estabelecimento é orientado e autuado, podendo ser interditado, ter produtos e equipamentos apreendidos e/ou multado.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item col-sm-12 col-md-6">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Quais os Documentos necessários para abrir um processo?
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>	- Requerimento devidamente preenchido e assinado (disponível no Setor de Protocolo);
                          - Cópias de documentos pessoais (RG, CPF ou CNH);
                          - Cópia de comprovante de endereço recente;
                          - Procuração registrada em cartório (se for o caso);
                          - Demais documentos pertinentes à solicitação;
                          - Recolhimento e apresentação do pagamento do preço público.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </article>
        <?php 
          include 'includes/inc_referencias.php';
          ?>
      </main>
    </div>
    <?php
      include 'includes/inc_footer.php';
    ?>
    <!-- Fim Footer -->

        <?php
      include 'includes/inc_bootstrap_js.php';
    ?>
    
  </body>
</html>
