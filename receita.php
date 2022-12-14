


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lasanha</title>
    <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
    <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
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
            src="https://img.itdg.com.br/tdg/images/recipes/000/000/876/324587/324587_original.jpg?mode=crop&width=710&height=400"
            class="img recipe-hero-img"
          />
          <article class="recipe-info" >
            <h2 >Lasanha</h2>
            <div class="btn-group-toggle " data-toggle="buttons">
            <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
            <label class="btn btn-outline-primary" for="btn-check-outlined">Feita</label><br>
            </div>



            <p>
            Lasanha é tanto um tipo de massa alimentícia formada por fitas largas, 
            como também um prato, por vezes chamado lasanha ao forno, 
            feito com essas fitas colocadas em camadas, e entremeadas com recheio e molho. 
            </p>

            <div class="recipe-icons ">
              <article>
                <i class="fas fa-clock"></i>
                <h5>Tempo de Preparo</h5>
                <p>30 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Pontos</h5>
                <p>100pts.</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>Porções</h5>
                <p>6 </p>
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


              $modo  = "Cozinhe a massa da lasanha em aproximadamente em 2 litros de água por 5 minutos./

              Em uma panela cozinhe a carne moída, depois de cozida coloque molho de tomate, o sal e temperos a gosto./
              
              Comece montando com uma camada de molho, a massa da lasanha, o presunto e o queijo/
              
              Faça esse processo até tudo terminar./
              
              Aqueça o forno a 180º C durante 5 minutos./
              
              Coloque a lasanha no forno de 20 a 30 minutos.";
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
              <p class="single-ingredient">1 massa de lasanha (pronta)</p>
              <p class="single-ingredient">500 g de presunto</p>
              <p class="single-ingredient">500 g de queijo mussarela</p>
              <p class="single-ingredient">500 g carne moída</p>
              <p class="single-ingredient">1 massa de tomate pronta</p>
              <p class="single-ingredient">sal a gosto</p>
              <p class="single-ingredient">pimenta-do-reino a gosto</p>
              <p class="single-ingredient">orégano a gosto</p>
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
