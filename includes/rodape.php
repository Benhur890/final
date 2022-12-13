<section>
  <!-- Footer -->
  <footer class="footer navbar-fixed-bottom" style="background-color: #20B2AA		;">
    <!-- Grid container -->
    <div class="container p-1 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">

        
        <?php if((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['pontuacao'] == 100)) : ?>
        
        <div class="barra">
          <div class="progress" >
              <div class="progress-bar progress-bar-striped active" role="progressbar"
                 style="width:0%"> Calouro
          </div>
          </div>
        </div>
        <?php elseif((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['pontuacao'] == 200)) : ?>

                
        <div class="barra">
          <div class="progress" >
              <div class="progress-bar progress-bar-striped active" role="progressbar"
                 style="width:10%"> Passou no primeiro semestre
          </div>
          </div>
        </div>

        
        <?php elseif((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['pontuacao'] == 300)) : ?>
        
        <div class="barra">
          <div class="progress" >
              <div class="progress-bar progress-bar-striped active" role="progressbar"
                 style="width:20%"> Já pode ir às festas universitárias
          </div>
          </div>
        </div>
        
        <?php elseif((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['pontuacao'] == 400)) : ?>
        
        <div class="barra">
          <div class="progress" >
              <div class="progress-bar progress-bar-striped active" role="progressbar"
                 style="width:30%"> Ganhou bolsa de pesquisa
          </div>
          </div>
        </div>
        
        <?php elseif((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['pontuacao'] == 500)) : ?>
        
        <div class="barra">
          <div class="progress" >
              <div class="progress-bar progress-bar-striped active" role="progressbar"
                 style="width:40%"> Já mata aula para beber no bar da frente
          </div>
          </div>
        </div>

        
        <?php elseif((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['pontuacao'] == 600)) : ?>
        
        <div class="barra">
          <div class="progress" >
              <div class="progress-bar progress-bar-striped active" role="progressbar"
                 style="width:50%"> No meio do caminho tinha uma pedra
          </div>
          </div>
        </div>

        
        <?php elseif((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['pontuacao'] == 700)) : ?>
        
        <div class="barra">
          <div class="progress" >
              <div class="progress-bar progress-bar-striped active" role="progressbar"
                 style="width:60%"> Já virou mestre cuca da república
          </div>
          </div>
        </div>
        
        <?php elseif((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['pontuacao'] == 800)) : ?>
        
        <div class="barra">
          <div class="progress" >
              <div class="progress-bar progress-bar-striped active" role="progressbar"
                 style="width:70%"> Abandonou o miojo
          </div>
          </div>
        </div>
        
        <?php elseif((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['pontuacao'] == 900)) : ?>
        
        <div class="barra">
          <div class="progress" >
              <div class="progress-bar progress-bar-striped active" role="progressbar"
                 style="width:80%"> Pediu transferência para o curso de gastronomia
          </div>
          </div>
        </div>
        
        <?php elseif((isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['pontuacao'] == 1000)) : ?>
        
        <div class="barra">
          <div class="progress" >
              <div class="progress-bar progress-bar-striped active" role="progressbar"
                 style="width:90%"> Pagou a alguém para fazer seu TCC
          </div>
          </div>
        </div>
        <?php endif ?>
        

        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 UNIRECEITAS:
      <a class="text-white" href="quemsomos.php">Acesse para conhecer mais</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>

<style>
 .barra{
  margin-left: 35%;
  width: 30%;
 }
</style>
