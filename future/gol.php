<html>
<!-- ..................................... -->
<!-- head -->
<!-- ..................................... -->
<?php include("head.php"); ?>

<body>
  <!-- ..................................... -->
  <!-- loader + back cta -->
  <!-- ..................................... -->
  <div class="div-motionblue"></div>
  <div class="div-motiongray"></div>
  <div class="back-home">
    <a class="button is-rounded is-black" onclick="goHome();">voltar </a>
  </div>


  <!-- ..................................... -->
  <!-- about -->
  <!-- ..................................... -->
  <section>

    <div class="portfolio-content has-text-right">
      <h1 class="title is-1 color2 fine">Gol Linhas Aéreas</h1>
      <h1 class="subtitle is-3 color3">Passenger Service System</h1>
    </div>

    <div class="columns portfolio-content">
      <div class="column">
        <strong class="color2">Dados do projeto</strong>
        <br />
        Cliente: Gol Linhas Aéreas <br />
        Agência: Purple Cow / Novahaus<br />
        Serviço: Design UI, UX Research<br />
        Softwares: Figma, Sketch, Zeplin, Invision<br />
        Tempo de projeto: 6 meses
      </div>
      <div class="column">
        <!--<strong class="color2">Meu trabalho</strong>
        <br />
        Cliente: Gol Linhas Aéreas <br />
        Agência: Purple Cow / Novahaus<br />
        Serviço: Design UI<br />
        Descrição: xxxxx-->
      </div>

      <div class="column">
        <!--<strong class="color2">Resultado</strong>
        <br />
        Cliente: Gol Linhas Aéreas <br />
        Agência: Purple Cow / Novahaus<br />
        Serviço: Design UI<br />
        Descrição: xxxxx-->
      </div>
    </div>

    <!-- ..................................... -->
    <!-- content 1 -->
    <!-- ..................................... -->

    <div class="has-text-centered">
      <img src="images/gol/motor01.png" />
      <img src="images/gol/motor-tela1.png" />
      <img src="images/gol/motor-tela2.png" />
      <img src="images/gol/motor-mobile.png" />
    </div>

    <!-- ..................................... -->
    <!-- infos -->
    <!-- ..................................... -->
    <div class="space50"></div>

    <div class="portfolio-content">
      <h1 class="title is-1 color1">Banner Inteligente</h1>
      <div class="columns">
        <div class="column">
          <strong class="color2">Ferramenta</strong>
          <br />
          Banner Inteligente é uma ferramenta da Gol para atualização em tempo real de banners promocionais do site.
          A versão anterior utilizava padrões antigos e fluxo de interface incompatível com a atual performance e velocidade
          da empresa.
        </div>
        <div class="column">
          <strong class="color2">Solução</strong>
          <br />
          A ideia principal foi diminuir o carregamento de páginas e adicionar modals de acesso a rápido. A prototipação foi rapidamente
          desenvolvida usando o Design System de Gol para ser usada como UI e ser enviada diretamente a produção via Zeplin.
          Tudo em conexão com o time comercial/marketing de Gol. Espelhando-se em necessidades diárias e no suporte aos hardwares da empresa.
          O carregamento de dados não é feito em totalidade na página, isso foi repensado a carregar somente em requisição.
          Anteriormente os dados eram carregados em uma página única, causando uma sensação de delay. Foram utilizados diversos print screens
          da interface do sistema anterior como base para conclusões sobre o funcionamento. Com isso, foi possível diminuir
          a demanda de treinamento a nova interface, por não acontecer mudanças bruscas de workflow na ferramenta.
        </div>
      </div>
    </div>

    <div class="space50"></div>
    <!-- ..................................... -->
    <!-- slider -->
    <!-- ..................................... -->
    <?php include("gol-slide-banner.php"); ?>

    <!-- ..................................... -->
    <!-- ..................................... -->
  </section>
</body>
</html>
