<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>São Roque - Ouvidoria</title>

    <?php
        include 'includes/inc_head_links.php';
      ?>

</head>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container espaço_noticia">
      <main>
        <div class="row text-center">
          <section class="col-lg-12 col-md-12 col-sm-12">
            <img src="imgs/governo/ouvidoria.webp" alt="foto de tipografia escrito ouvidoria, com ícone de mulher falando ao telefone">
          </section>
  <article class="col-lg-8 col-md-6 col-sm-12">
      <h2>Atribuições da Ouvidoria</h2>
      <p>A ouvidoria municipal desempenha um papel crucial como um canal de comunicação entre os cidadãos e a administração pública local. Sua principal função é receber, registrar e encaminhar as demandas, reclamações, sugestões e elogios da população em relação aos serviços prestados pelo município. Além disso, a ouvidoria atua como uma ferramenta de controle social, garantindo a transparência e a eficiência na gestão pública ao investigar denúncias de irregularidades, buscando soluções e promovendo melhorias nos serviços oferecidos.Ao atuar como um elo entre a população e os órgãos públicos, a ouvidoria desempenha um papel fundamental na promoção da responsabilização, incentivando a prestação de contas por parte do governo e contribuindo para o fortalecimento da democracia participativa no âmbito local.</p>
      <p>
  </article>
  <aside class="col-lg-4 col-md-6 col-sm-12">
    <h2>Sua Voz nos Ajuda</h2>

    <p>A participação da população na ouvidoria municipal desempenha um papel fundamental ao permitir que os cidadãos contribuam com reclamações, sugestões e denúncias, facilitando a identificação de problemas nos serviços públicos. Essa interação direta promove uma gestão mais transparente e responsiva, fortalecendo a democracia participativa e possibilitando que as demandas dos cidadãos direcionem as ações de melhoria e a formulação de políticas públicas mais alinhadas com as reais necessidades da comunidade. Preencha o formulário abaixo e nos ajude a melhorar a cidade para todos.</p>
    <p>
  </aside>
</div>

<div class="row">
  <section class="col-lg-12 col-md-12 col-sm-12">

    <form class="row g-4">
      <div class="col-md-8">
        <label for="inputName4" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="inputName4">
      </div>
      <div class="col-md-4">
        <label for="inputName4" class="form-label">Telefone:</label>
        <input type="text" class="form-control" id="inputName4" placeholder="(99)99999-9999">
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Email:</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="nome@email.com">
      </div>
      <div class="col-md-12">
        <label for="inputTextarea" class="form-label">Sugestões:</label>
        <textarea type="text" class="form-control" id="inputTextarea" placeholder="Digite aqui dúvidas, sugestões, etc..."></textarea>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">ENVIAR</button>
      </div>
    </form>
  </section>
</div>
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
