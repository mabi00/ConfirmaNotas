<?php

// A SESSÃO PRECISA SER INICIADA A CADA PAGINA DIFERENTE
if (!isset($_SESSION)) session_start();

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['USUARIO'])) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header("Location: login.php");
  exit;
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Confirma Notas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="lista-notas.php">Notas</a>
      </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Right Side Of Navbar -->
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        <li class="nav-item">
          <a class="nav-link">
            <?php echo "Ola, " . $_SESSION['NOME']; ?>
          </a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" style="color=black;"></i>&nbsp;Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>