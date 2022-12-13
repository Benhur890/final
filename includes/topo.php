<?php
    session_start();
    require_once 'includes/funcoes.php';
    require_once 'core/conexao_mysql.php';
    require_once 'core/sql.php';
    require_once 'core/mysql.php';

    if(isset($_SESSION['login'])){
      $id = (int) $_SESSION['login']['usuario']['id'];

      $criterio = [
          ['id', '=', $id]
      ];

      $retorno = buscar(
          'usuario',
          ['id', 'nome', 'email'],
          $criterio
      );

      $entidade = $retorno[0];
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/6d8d58ebd7.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light "style="background-color: #20B2AA";>
    <!-- Logo -->
    <img src="img/logo.png" width="18%" style="padding-right:10%;" class="navbar-brand">
    
    <!-- Navegação--> 
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <i style="margin-top: 6%; margin-left:11%; font-size:x-large;" class="fa-solid fa-building-columns"></i>
          <a style="margin-right:9vh;" class="nav-link" href="pagInicial.php">Home <span class="sr-only">(página atual)</span></a>
        </li>

        <li class="nav-item active">
          <i style="margin-top: 6%; margin-left:8%; font-size:x-large;" class="fa-solid fa-right-to-bracket"></i>
          <a style="margin-right:9vh;" class="nav-link" href="login.php">Entrar</a>
        </li>

        <?php if(isset($_SESSION['login'])): ?>
          <li class="nav-item active">
            <i style="margin-top: 6%; margin-left:17%; font-size:x-large;" class="fa-solid fa-trophy"></i>
            <a style="margin-right:9vh;" class="nav-link" href="pontuacao.php">Pontuação</a>
          </li>
        <?php endif ?>


        <?php if((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['moderador'] === 1)) : ?>
          <li class="nav-item active">
            <i style="margin-top: 6%; margin-left:18%; font-size:x-large;" class="fa-solid fa-receipt"></i>
            <a style="margin-right:9vh;" class="nav-link" href="cadastroReceita.php">Cadastrar</a>
          </li>
        <?php endif ?>

        <?php if((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['moderador'] ===1)) : ?>
          <li class="nav-item active">
            <i style="margin-top: 6%; margin-left:29%;" class="fa-solid fa-list"></i>
            <a style="margin-right:9vh;" class="nav-link" href="usuarios.php">Usuários Cadastrados</a>
          </li>
        <?php endif ?>
      </ul>
    <i style="font-size:x-large;" class="fa-solid fa-magnifying-glass"></i>
    <form class="navbar-form navbar-left" action="/action_page.php">
    <div style="margin-left:2vh; margin-right:8vh;" class="input-group">
      <input type="text" class="form-control" placeholder="O que dá pra fazer hoje?">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
        </button>
      </div>
    </div>
  </form>
    </div>

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
  <style>
  
  </style>
</body>
</html>
