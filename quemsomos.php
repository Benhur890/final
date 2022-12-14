<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lasanha</title>
    <!-- normalize -->
    <link rel="stylesheet" href="./css/principal.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
    <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  </head>



  
  <body style="background-color: rgb(113, 239, 252);">
  <!-- Topo //-->
          <?php
              include 'includes/topo.php';
          ?>
    <!-- end of nav -->
    <main class="page" style="margin-top:5%;">
      <section class="about-page">
        <article>
          <h2>UniReceitas</h2>
          <p>
           Somos um site de receitas voltado - mas não exclusivamente - para o público universitário,
            isso porque oferecemos a realização de receitas simples. Aqui você encontrará receitas que estarão de acordo
            com suas habilidades culinárias, sem precisar de cola para fazê-las.
          </p>
          <a href="pagInicial.php" class="btn"> Home </a>
          <button type="button" class="btn" data-toggle="modal" data-target="#contato">
          Contato
        </button>



        

        <!-- Modal -->
        <div class="modal fade" id="contato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contato</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                E-mail: UniReceitas@site.ifsp.edu
              </div>
              <div class="modal-body">
                Número:(18) 99823-2938
              </div>
              <div class="modal-body">
                Redes Sociais: @UniReceitas
              </div>
              <div class="modal-body">
                Git_Hub: DESUNIReceitas
              </div>
            </div>
          </div>
        </div>




        </article>
        <!-- LOGOS -->
        <img src="img/mainLogo.png" alt="wreath" class="wreath">
      </section>
          <h2 class="container">Nossa Equipe</h2>
         
     
    <div class="card-group container" style=";margin-bottom:5%;">
        <div class="card" style="width: 18rem; background-color: #20B2AA;">
                <img class="card-img-top" src="https://jornaldaparaiba.com.br/wp-content/uploads/2022/07/erick.jpg"  height="205px"alt="Imagem de capa do card">
                <div class="card-body">
                    <p class="card-text text-center ">Davy Albert</p>
                </div>
        </div>
        <div class="card" style="width: 18rem; background-color: #20B2AA;">
                <img class="card-img-top" src="https://veja.abril.com.br/wp-content/uploads/2017/07/ana.jpg" height="205px" alt="Imagem de capa do card">
                <div class="card-body">
                    <p class="card-text text-center">Maria Eduarda</p>
                </div>
        </div>
        <div class="card" style="width: 18rem; background-color: #20B2AA;">
                <img class="card-img-top" src="https://imageproxy.ifunny.co/noop/user_photos/6bf21d78076f77871d5e00ffb1ba6cdb9ca68645_0.jpg" height="205px" alt="Imagem de capa do card">
                <div class="card-body">
                    <p class="card-text text-center ">Benhur</p>
                </div>
        </div>
        <div class="card" style="width: 18rem; background-color: #20B2AA;">
                <img class="card-img-top" src="https://f.i.uol.com.br/fotografia/2021/11/24/1637787945619ea92973b1d_1637787945_1x1_md.jpg" height="205px" alt="Imagem de capa do card">
                <div class="card-body">
                    <p class="card-text text-center">Pablo</p>
                </div>
        </div>
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
