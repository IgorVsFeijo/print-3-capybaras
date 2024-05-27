<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>São Roque - Cadastro</title>

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
  <div class="container pages-empresas">
    <div class="row text-start" role="navigation" aria-label="Breadcrumb">
        <b><a href="../empresa/home.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../empresa/cadastro.php" aria-current="page">Cadastro de Pessoa Jurídica</a></b>
    </div>
    <h2 class="text-center" aria-level="1">Informe seus dados para cadastro</h2>
    <form class="col-12 cadastrojuridico" aria-labelledby="tituloForm">
        <div class="row">
            <div class="my-3 col-md-4 col-sm-12">
                <label for="inscricao" class="form-label">Número de Inscrição:</label>
                <input id="inscricao" class="form-control" type="text" name="inscricao" aria-required="true" aria-describedby="inscricao-desc">
                <span id="inscricao-desc" class="visually-hidden">Informe o número de inscrição.</span>
            </div>
            <div class="my-3 col-md-4 col-sm-12">
                <h4 id="tituloForm" aria-level="2">COMPROVANTE DE INSCRIÇÃO E SITUAÇÃO CADASTRAL</h4>
            </div>
            <div class="my-3 col-md-4 col-sm-12">
                <label for="data" class="form-label">Data de Abertura:</label>
                <input id="data" class="form-control" type="date" name="data">
            </div>
        </div>

        <div class="row">
            <div class="my-3 col-md-6 col-sm-12">
                <label for="nome-empresa" class="form-label">Nome Empresarial:</label>
                <input id="nome-empresa" class="form-control" type="text" name="nome_empresa">
            </div>
            <div class="my-3 col-md-6 col-sm-12">
                <label for="titulo-estabelecimento" class="form-label">Título do Estabelecimento:</label>
                <input id="titulo-estabelecimento" class="form-control" type="password" name="titulo">
            </div>
        </div>
        
        <div class="row">
            <div class="my-3 col-md-6 col-sm-12">
                <label for="atividade-principal" class="form-label">Código da Atividade Econômica Principal:</label>
                <input id="atividade-principal" class="form-control" type="password" name="principal">
            </div>
            <div class="my-3 col-md-6 col-sm-12">
                <label for="atividade-secundaria" class="form-label">Código da Atividade Econômica Secundária:</label>
                <input id="atividade-secundaria" class="form-control" type="password" name="secundaria">
            </div>
        </div>
        
        <div class="row">
            <div class="my-3 col-12">
                <label for="natureza-juridica" class="form-label">Código e Descrição da Natureza Jurídica:</label>
                <input id="natureza-juridica" class="form-control" type="text" name="natureza_juridica">
            </div>
        </div>
        
        <div class="row">
            <div class="my-3 col-md-6 col-sm-10">
                <label for="logradouro" class="form-label">Logradouro:</label>
                <input id="logradouro" class="form-control" type="text" name="rua">
            </div>
            <div class="my-3 col-2">
                <label for="numero" class="form-label">Número:</label>
                <input id="numero" class="form-control" type="number" name="numero_rua">
            </div>
            <div class="my-3 col-md-4 col-sm-12">
                <label for="complemento" class="form-label">Complemento:</label>
                <input id="complemento" class="form-control" type="number" name="numero_rua">
            </div>
        </div>
        
        <div class="row">
            <div class="my-3 col-md-2 col-sm-12">
                <label for="cep" class="form-label">CEP:</label>
                <input id="cep" class="form-control" type="text" name="CEP">
            </div>
            <div class="my-3 col-md-4 col-sm-12">
                <label for="bairro" class="form-label">Bairro/Distrito:</label>
                <input id="bairro" class="form-control" type="text" name="bairro">
            </div>
            <div class="my-3 col-md-5 col-sm-12">
                <label for="municipio" class="form-label">Município:</label>
                <input id="municipio" class="form-control" type="text" name="cidade">
            </div>
            <div class="my-3 col-md-1 col-sm-12">
              <label for="uf" class="form-label">UF:</label>
              <select id="uf" name="estado" class="col-12 selecao_cadastro" aria-describedby="uf-desc">
                  <option value="" disabled selected hidden>Selecione um estado</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AM">AM</option>
                    <option value="AP">AP</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MG">MG</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="PR">PR</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                    <option value="SE">SE</option>
                    <option value="SP">SP</option>
                    <option value="TO">TO</option>
                  </select>
                  <span id="uf-desc" class="visually-hidden">Selecione o estado ou unidade federativa.</span>
            </div>
        </div>

          
        <div class="row">
          <div class="my-3 col-md-6 col-sm-12">
              <label for="situacao-cadastral" class="form-label">Situação Cadastral:</label>
              <select id="situacao-cadastral" name="situacao_cadastral" class="col-12 selecao_cadastro" aria-required="true">
                  <option value="Nula">NULA</option>
                  <option value="Cadastrado">CADASTRADO</option>
              </select>
          </div>
          <div class="my-3 col-md-4 col-sm-12">
              <label for="data-cadastral" class="form-label">Data da Situação Cadastral:</label>
              <input id="data-cadastral" class="form-control" type="date" name="data_cadastral">
          </div>
      </div>

      <div class="row">
          <div class="my-3 col-12">
              <label for="motivacao" class="form-label">Motivação da Situação Cadastral:</label>
              <input id="motivacao" class="form-control" type="text" name="motivacao">
          </div>
      </div>

      <div class="row">
          <div class="my-3 col-md-8 col-sm-12">
              <label for="especial" class="form-label">Situação Especial:</label>
              <input id="especial" class="form-control" type="text" name="especial">
          </div>
          <div class="my-3 col-12">
              <label for="data-especial" class="form-label">Data da Situação Especial:</label>
              <input id="data-especial" class="form-control" type="text" name="data_especial">
          </div>
      </div>

      <div class="row">
          <div class="my-3 col-12">
              <input id="vermelho" type="checkbox" name="vermelho" aria-describedby="notificacoes-desc">
              <label for="vermelho">Desejo receber notificações!</label>
              <span id="notificacoes-desc" class="visually-hidden">Marque esta opção se desejar receber notificações sobre atualizações e informações importantes.</span>
          </div>
      </div>

      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center">
              <a href="../empresa/cadastro.php" class="link_home" aria-describedby="cadastro-desc">CADASTRAR</a>
              <span id="cadastro-desc" class="visually-hidden">Clique neste botão para concluir o cadastro.</span>
          </div>
      </div>

  </form>
  <hr>
  <a class="nav-link referencias_link col-12" href="/print-2-capybaras/referencias.php">Referencias Bibliográficas</a>
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
</body>

</html>