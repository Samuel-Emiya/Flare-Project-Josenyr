<?php
  $pageTitle = 'Assistente Virtual - Academia';
  require_once __DIR__ . '/config.php';
  require_once BASE_PATH . '/includes/cabecalho.php';
?>

  <!-- HERO BANNER -->
  <div class="inicial">
    <div class="apresenta">
      <h2>Sobre o Axion</h2>
        <p>Bem Vindos! O <strong>Axion</strong> é um assistente virtual feito para te ajudar a preparar e monitorar o seu treino.</p>
        <p>Para incentivar o uso do Axiom, foi imbutido um sistema de <strong>recompensas!</strong> Ao completar um treino <br> feito pelo Axiom, você ganha pontos que podem ser usados para comprar cosméticos para sua customização, <br> e o melhor, totalmente de graça!</p>
    </div>
    <div class="assistente">
      <div id="assistente">
        <div class="balao balao-usuario" id="pergunta"></div>

          <div class="linha-assistente">
            <img src="boneco.png" alt="Assistente virtual" class="avatar">
          <div class="balao balao-assistente" id="resposta">Olá! Como posso ajudar?</div>
        </div>

        <input type="text" id="campo" placeholder="Digite sua pergunta">
        <button id="enviar">Enviar</button>
      </div>
    </div>
  </div>

<!-- RODAPÉ -->
<?php require_once BASE_PATH. '/includes/rodape.php';?>