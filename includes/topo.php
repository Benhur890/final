<?php
    session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light "style="background-color: #20B2AA			;>
    
  <a class="navbar-brand " href="#">UNIReceitas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Entrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Pontuação</a>
      </li>
    </ul>
    <form class="form-inline my-6 my-lg-0 mx-o  ">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>

    <?php if (isset($_SESSION['login'])): ?>
    <div class="card-body text-right">
        Olá <?php echo $_SESSION['login']['usuario']['nome']?>!
        <a href="core/usuario_repositorio.php?acao=logout"
        class="btn btn-link btn-sm" role="button">Sair</a>
    </div>
    <?php endif ?>

</nav>

<style>

</style>
