<?php
require_once __DIR__ . '/../config.php';

//nome do arquivo atual, usado pro título da aba e pro menu ativo
$paginaAtual = basename($_SERVER['PHP_SELF']);

function classeAtiva(string $arquivo, string $paginaAtual): string {
  return $arquivo === $paginaAtual ? 'active' : '';
}

$usuarioAtual = usuarioLogado();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php require_once BASE_PATH . '/includes/head.php'; ?>

<body class="">

<div vw class="enabled">
  <div vw-access-button class="active"></div>
  <div vw-plugin-wrapper>
    <div class="vw-plugin-top-wrapper"></div>
  </div>
</div>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
  new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>


  <header>

    <!-- Menu Usuarios -->
    <div class="menu-2" style="background-color: var(--paleta-ardosia-escura);">
          <div class="container d-flex flex-wrap align-items-center gap-2">

            <?php if ($usuarioAtual === null): ?>
              <a href="<?= BASE_URL ?>/login.php" class="login-portal">
                <i class="bi bi-people"></i> Usuário
              </a>
            <?php else: ?>
              <span class="text-white small">
                <i class="bi bi-person-check"></i>
                Olá, <?= htmlspecialchars($usuarioAtual['nome'], ENT_QUOTES, 'UTF-8') ?>
              </span>

              <?php if (ehAdministrador()): ?>
                <a href="<?= BASE_URL ?>/administradora/cardapio-adm.php" class="btn btn-sm btn-outline-light">
                  <i class="bi bi-gear"></i> Painel
                </a>
              <?php endif; ?>

              <a href="<?= BASE_URL ?>/logout.php" class="btn btn-sm btn-outline-light">
                <i class="bi bi-box-arrow-right"></i> Sair
              </a>
            <?php endif; ?>

            <button type="button" id="btn-tema" class="btn-tema yes" aria-pressed="false">
              <span class="icone-tema" aria-hidden="true">🌙</span>
              <span class="texto-tema">Modo escuro</span>
            </button>

          </div>
      </div>

    <!-- NAVBAR Bootstrap Navbar -->
    <nav class="navbar-thay">
      <a href="<?= BASE_URL ?>/index.php" class="brand">
        <img src="<?= BASE_URL ?>/imagem/logo-ia.png" alt="Logo Donnie" onerror="this.style.display='none'">
        Assistente de Academia Axiom
      </a>
      <button type="button" class="navbar-toggler-thay" onclick="toggleMenu()" aria-label="Menu">☰</button>
      <ul class="nav-links">
        <li><a href="<?= BASE_URL ?>/index.php" class="<?= classeAtiva('index.php', $paginaAtual) ?>">Home</a></li>
      </ul>
    </nav>
  </header>

  <main class="flex-grow-1">