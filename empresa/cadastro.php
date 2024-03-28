<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>São Roque - Cadastro</title>

  <?php
  include '../includes/inc_head_links.php';
  ?>
  <link rel="stylesheet" href="../style/empresa.css">

</head>

<body>
  <!-- Inicio Header -->

  <?php
  include '../includes/inc_header.php';
  ?>

  <!-- Fim Header -->
  <div class="container pages-empresas">
        <div class="row text-start">
            <b><a href="../empresa/home.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../empresa/cadastro.php">Cadastro de Pessoa Jurídica</a></b>
        </div>
        <h2 class="text-center">Informe seus dados para cadastro</h2>
        <form class="col-12 cadastrojuridico">
          <div class="row">
            <div class="my-3 col-md-4 col-sm-12">
              <label class="form-label">Número de Inscrição: </label>
              <input class="form-control" type="text" name="inscricao" >
            </div>
            <div class="my-3 col-md-4 col-sm-12">
              <h4>COMPROVANTE DE INSCRIÇÃO E SITUAÇÃO CADASTRAL</h4>
            </div>
            <div class="my-3 col-md-4 col-sm-12">
              <label class="form-label">Data de Abertura: </label>
              <input class="form-control" type="date" name="data" >
            </div>
          </div>

          <div class="row">
            <div class="my-3 col-md-6 col-sm-12">
              <label class="form-label">Nome Empresarial: </label>
              <input class="form-control" type="text" name="nome_empresa" >
            </div>
            <div class="my-3 col-md-6 col-sm-12">
              <label class="form-label">Título do Estabelecimento: </label>
              <input class="form-control" type="password" name="titulo" >
            </div>
          </div>
          
          <div class="row">
            <div class="my-3 col-md-6 col-sm-12">
              <label class="form-label">Código da Atividade Econômica Principal:</label>
              <input class="form-control" type="password" name="principal" >
            </div>
            <div class="my-3 col-md-6 col-sm-12">
              <label class="form-label">Código da Atividade Econômica Secundária:</label>
              <input class="form-control" type="password" name="secundaria" >
            </div>
          </div>
          
          <div class="row">
            <div class="my-3 col-12">
              <label class="form-label">Código e Descrição da Natureza Jurídica: </label>
              <input class="form-control" type="text" name="natureza_juridica" >
            </div>
          </div>
          
          <div class="row">
            <div class="my-3 col-md-6 col-sm-10">
              <label class="form-label">Logradouro:</label>
              <input class="form-control" type="text" name="rua" >
            </div>
            <div class="my-3 col-2">
              <label class="form-label">Número:</label>
              <input class="form-control" type="number" name="numero_rua" >
            </div>
            <div class="my-3 col-md-4 col-sm-12">
              <label class="form-label">Complemento:</label>
              <input class="form-control" type="number" name="numero_rua" >
            </div>
          </div>
          
          <div class="row">
            <div class="my-3 col-md-2 col-sm-12">
              <label class="form-label">CEP:</label>
              <input class="form-control" type="text" name="CEP" >
            </div>
            <div class="my-3 col-md-4 col-sm-12">
              <label class="form-label">Bairro/Distrito:</label>
              <input class="form-control" type="text" name="bairro" >
            </div>
            <div class="my-3 col-md-5 col-sm-12">
              <label class="form-label">Município:</label>
              <input class="form-control" type="text" name="cidade" >
            </div>
            <div class="my-3 col-md-1 col-sm-12">
              <label class="form-label">UF:</label>
              <select name="estado" id="estado" width="30px" class="col-12 selecao_cadastro" required>
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
            </div>
          </div>
          
          <div class="row">
            <div class="my-3 col-md-8 col-sm-12">
              <label class="form-label">Situação Cadastral:</label>
              <select name="situacao_cadastral" class="col-12 selecao_cadastro">
                <option value="Nula">NULA</option>
                <option value="Cadastrado">CADASTRADO</option>                  	
              </select>
            </div>
            <div class="my-3 col-md-4 col-sm-12">
              <label class="form-label">Data da Situação Cadastral:</label>
              <input class="form-control" type="date" name="data_cadastral" >
            </div>
          </div>
          
          <div class="row">
            <div class="my-3 col-12">
              <label class="form-label">Motivação da Situação Cadastral:</label>
              <input class="form-control" type="text" name="motivacao" >
            </div>
          </div>

          <div class="row">
            <div class="my-3 col-md-8 col-sm-12">
              <label class="form-label">Situação Especial:</label>
              <input class="form-control" type="text" name="especial" >
            </div>
            <div class="my-3 col-12">
              <label class="form-label">Data da Situação Especial:</label>
              <input class="form-control" type="text" name="data_especial" >
            </div>
          </div>

          <div class="row">
            <div class="my-3 col-12">
              <input type="checkbox" name="vermelho">
              <label for="botao">Desejo receber notificações!</label>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
              <button href="../empresa/cadastro.php" class="link_home">CADASTRAR</button>
            </div>
          </div>

        </form>
        <?php 
          include '../includes/inc_referencias.php';
          ?>
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