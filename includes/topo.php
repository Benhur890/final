<?php
    session_start();
?>

    <div id="cima">
    <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
        <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
        <div class="container">
            <div id="topo">
            <nav class="navbar navbar-expand-lg navbar-light>
            <a class="navbar-brand" href="#">UNIReceitas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse AAA" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Desativado</a>
                </li>
                </ul>
                <div class="container" id="pesquisa">
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
                </div>
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link ddd" href="#">Pontuação <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link ddd" href="#">Cadastrar <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link ddd" href="#">Entrar <span class="sr-only">(página atual)</span></a>
                </li>
            
                </ul>
            </div>
            </nav>
        </div>
    </div>
</div>
<style>
  #pesquisa{
    margin-left:80px;
    margin-right:20px;
  }
  .ddd{
      margin-right:5px;
  }
  #cima{
     background-color:rgb(175,238,238);;
     
  }
  #topo{
    float:bottom;
    height:70px;
    border-style: solid;
    border-color: ;
    margin-bottom:0px;
    border-bottom-width: 0px;
    border-top-width: 0px;
    border-right-width: 0px;
    border-left-width: 0px;
  }
  .li-{
    margin-top:50px;

  }
  .AAA{
    margin-top:7px;
  }
  button{
   border-color:black;
  }
</style>
