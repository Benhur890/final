<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lasanha</title>
    <!-- normalize -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
        <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>



  
  <body>
  <!-- Topo //-->
    <div class="row">
      <div class="col-md-12">
          <?php
              include 'includes/topo.php';
          ?>
      </div>
    <!-- end of nav -->
    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
          <img
            src="https://img.itdg.com.br/tdg/images/recipes/000/000/876/324587/324587_original.jpg?mode=crop&width=710&height=400"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2>Lasanha</h2>
            <p>
            Lasanha é tanto um tipo de massa alimentícia formada por fitas largas, 
            como também um prato, por vezes chamado lasanha ao forno, 
            \feito com essas fitas colocadas em camadas, e entremeadas com recheio e molho. 
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>Tempo de Preparo</h5>
                <p>30 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Pontos</h5>
                <p>170pts.</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>Porções</h5>
                <p>6 </p>
              </article>
            </div>
            <p class="recipe-tags">
              Tags : <a href="tag-template.html">Massas</a>
              <a href="tag-template.html">Fáceis</a>
              <a href="tag-template.html">Molho</a>
              <a href="tag-template.html">Lasanha</a>
            </p>
          </article>
        </section>
        <!-- content -->
        <section class="recipe-content">
          <article>
            <h4>Modo de preparo</h4>
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>Passo 1</p>
                <div></div>
              </header>
              <p>
              Cozinhe a massa segundo as orientações do fabricante, despeje em um refratário com água gelada para não grudar e reserve.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>Etapa 2</p>
                <div></div>
              </header>
              <p>
             a cebola, a carne moída, o molho de tomate, deixe cozinhar por 3 minutos e reserve.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>Passo 3</p>
                <div></div>
              </header>
              <p>
                Refogue um Davy Albert
              </p>
            </div>
            <!-- end of single instruction -->
          </article>
          <article class="second-column">
            <div>
              <h4>Ingredientes</h4>
              <p class="single-ingredient">500 g de massa de lasanha</p>
              <p class="single-ingredient">500 g de carne moída</p>
              <p class="single-ingredient">2 caixas de creme de leite</p>
              <p class="single-ingredient">500 g de massa de lasanha</p>
              <p class="single-ingredient">500 g de carne moída</p>
              <p class="single-ingredient">2 caixas de creme de leite</p>
              <p class="single-ingredient">500 g de massa de lasanha</p>
              <p class="single-ingredient">500 g de carne moída</p>
              <p class="single-ingredient">2 caixas de creme de leite</p>
            </div>
            <div>
            </div>
          </article>
        </section>
      </div>
    </main>
    <!-- footer -->
    
    <script src="./js/app.js"></script>
  </body>
  
</html>
