<?php
                    require_once 'includes/funcoes.php';
                    require_once 'core/conexao_mysql.php';
                    require_once 'core/sql.php';
                    require_once 'core/mysql.php';
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lasanha</title>
    <!-- normalize -->
    <link rel="stylesheet" href="./css/principal.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
    <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>    <!-- main css -->
  </head>



  
  <body>
  <!-- Topo //-->
          <?php
              include 'includes/topo.php';
          ?>
    <!-- end of nav -->
    <main class="page">
      <div class="recipe-page no-gutters">
        <section class="recipe-hero no-gutters">
          <img
            src="https://img.itdg.com.br/tdg/images/recipes/000/020/617/354276/354276_original.jpg?mode=crop&width=710&height=400"
            class="img recipe-hero-img"
          />
          <article class="recipe-info" >
            <h2 >Pastel</h2>
            <div class="btn-group-toggle " data-toggle="buttons">
            <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
            <label class="btn btn-outline-primary" for="btn-check-outlined">Feita</label><br>
            </div>



            <p>
            Um bolo fácil de preparar, de liquidificador, que faz a maior presença. O segredo é a cobertura de glacê toda decorada com flores e casca de laranja. Perfumado, azedinho, bolo de laranja é um clássico que perfuma a casa inteira enquanto assa. 
            </p>

            <div class="recipe-icons ">
              <article>
                <i class="fas fa-clock"></i>
                <h5>Tempo de Preparo</h5>
                <p>50 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Pontos</h5>
                <p>60pts.</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>Porções</h5>
                <p>10 </p>
              </article>
            </div>
          </article>
        </section>
        <!-- content -->
        <section class="recipe-content no-gutter ">
          <article>
            <h4>Modo de preparo</h4>
            <!-- single instruction -->
           
            <div class="single-instruction s">
              <header>
              <?php


              $modo  = "Em um recipiente, coloque a farinha, o óleo, a aguardente e o sal/

              Misture com a água morna./
              
              Mexa com as mãos, e a seguir amasse bem sobre uma superfície lisa./
              
              Após amassar bem, abra porções de massa com auxílio do rolo (deixe a massa bem fina) empregue o recheio./
              
              Una as bordas e aperte com a ponta de um garfo./
              
              Recheio
              
              Coloque a carne em uma panela e leve ao fogo/
              
              Mexa até que fique completamente enxuta e solta./
              
              Feito isso, junte a manteiga, a cebola batidinha e o alho socado./
              
              Refogue bem, tempere com sal e pimenta-do-reino/
              
              Acrescente as azeitonas picadinhas, os ovos em pedacinhos e boa porção de salsa e cebolinha verde cortadas bem fininhas/.
              
              Deixe por mais uns 2 a 3 minutos no fogo e coloque para esfriar.";
              $pieces = explode("/", $modo);
              $cont = substr_count($modo, '/');
              for ($i = 1; $i <= $cont; $i++) {

                  echo "<p>Etapa ".$i.':</p> ';
                  echo $pieces[$i]; // piece1
              

              }

            ?>
            </div>
            
          </article>
          <article class="second-column no-gutters">
            <div>
              <h4>Ingredientes</h4>
              <p class="single-ingredient">500 g de farinha de trigo</p>
              <p class="single-ingredient">1 colher (sopa) de óleo</p>
              <p class="single-ingredient">água para dar ponto</p>
              <p class="single-ingredient">1 colher (chá) de sal</p>
              <p class="single-ingredient">1 colher (sopa) de aguardente</p>
              <p class="single-ingredient">óleo para fritar</p>
              <p class="single-ingredient">250 g de carne moída</p>
              <p class="single-ingredient">2 ovos cozidos</p>
              <p class="single-ingredient">1 cebola</p>
              <p class="single-ingredient">1 dente de alho</p>

            </div>
            <div>
            </div>
          </article>
        </section>
      </div>
      </main>
   
    
    <!-- footer -->
                
                <!-- Rodapé //-->
                <?php
                    include 'includes/rodape.php';
                ?>
            </div>
        </div>
  </body>
  
</html>
