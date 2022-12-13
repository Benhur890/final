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
  <nav class="navbar navbar-expand-lg navbar-light" id="nav">
    <img src="img/logo.png" width="20%" style="padding-right:5%;" class="navbar-brand">
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado" style="vertical-align:middle;">
        <ul class="navbar-nav mr-auto" style="margin-top:2%;">
          <li class="nav-item active">
            <a style="margin-right:9vh;" class="nav-link" href="pagInicial.php"><i style="margin-top: 6%; margin-left:11%; font-size:x-large;" 
            class="fa-solid fa-building-columns"></i>Home</a>
          </li>
          <li class="nav-item active">
          <a style="margin-right:9vh;" class="nav-link" href="login.php"> <i style="margin-top: 6%; margin-left:8%; font-size:x-large;" 
            class="fa-solid fa-right-to-bracket"></i>Entrar</a>
          </li>
          <?php if(isset($_SESSION['login'])): ?>
             <!-- BOTÃO PONTUAÇÃO -->
              <button type="button" class="fa-solid fa-trophy" data-toggle="modal" data-target="#modalExemplo">
              PONTOS
            </button>
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PONTUAÇÃO;</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    PONTOS: <?php echo $_SESSION['login']['usuario']['pontuacao']?>
                  </div>
                </div>
              </div>
            </div>

          <?php endif ?>
          <?php if((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['moderador'] === 1)) : ?>
          <li class="nav-item active">
          <a style="margin-right:9vh;" class="nav-link" href="cadastroReceita.php"><i style="margin-top: 6%; margin-left:32%; font-size:x-large;" 
          class="fa-solid fa-receipt"></i>Cadastrar</a>
          </li>
          <?php endif ?>
          <?php if((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['moderador'] ===1)) : ?>
          <li class="nav-item active">
          <a style="margin-right:9vh;" class="nav-link" href="usuarios.php"><i style="margin-top: 6%; margin-left:32%; font-size:x-large;" 
            class="fa-solid fa-list"></i><p>Usuários</p></a>
          </li>
          <?php endif ?>
        </ul>
      <form class="navbar-form navbar-left" action="/action_page.php">
      <div style="margin-left:2vh; margin-right:8vh;" class="input-group">
        <input type="text" class="form-control" placeholder="O que dá pra fazer hoje?">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
          </button>
        </div>
      </div>
    </form>
    <i style="font-size:x-large;" class="fa-solid fa-magnifying-glass"></i>
    </div>
      <?php if (isset($_SESSION['login'])): ?>
      <div class="card-body text-right">
          Olá <?php echo $_SESSION['login']['usuario']['nome']?>!
      </div>
      <div>
        <a href="core/usuario_repositorio.php?acao=logout"
          class="btn btn-link btn-sm" role="button">Sair</a>
      </div>
      <?php endif ?>
  </nav>
</body>
</html>
<style>
  #nav {
    background-image: url(img/background17.jpg);
    background-repeat:repeat; 
  }
</style>
