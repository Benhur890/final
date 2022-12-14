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
            src="https://cdn.panelinha.com.br/receita/1632405810503-bolo-laranja.jpg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info" >
            <h2 >Bolo de Laranja</h2>
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
                <p>70 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Pontos</h5>
                <p>80pts.</p>
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


              $modo  = "Preaqueça o forno a 180 °C (temperatura média). Com um pedaço de papel toalha, unte com manteiga uma fôrma com furo no meio de 24 cm de diâmetro  espalhe uma camada bem fina e uniforme. Polvilhe com farinha e chacoalhe bem para espalhar. Bata sobre a pia para retirar o excesso./Descasque uma das laranjas (se não gosta de um sabor amargo-doce, descasque as duas). Lave bem sob água corrente a casca da outra laranja, corte e descarte as pontas. Corte as laranjas em quatro, no sentido do comprimento./ Corte cada gomo em três pedaços, descartando a fibra branca central e as sementes. Transfira os pedaços para o liquidificador./Numa tigela pequena quebre um ovo de cada vez e transfira para o liquidificador  se um estiver estragado você não perde a receita. Junte o óleo, o açúcar e bata bem até ficar Numa tigela média, misture a farinha com o fermento em pó./Transfira a laranja batida com os líquidos para uma tigela grande e acrescente a farinha com o fermento aos poucos, passando pela peneira. Misture delicadamente com o batedor de arame a cada adição para incorporar. /Transfira a massa do bolo para a fôrma e leve ao forno para assar por cerca de 50 minutos. Para verificar se o bolo está pronto: espete um palito na massa, se sair limpo pode retirar do forno; caso contrário, deixe por mais alguns minutos, até que asse completamente./Retire o bolo do forno e deixe esfriar por 30 minutos antes de desenformar  cuidado, o bolo pode rachar se estiver quente ao ser desenformado. Cubra a fôrma com um prato e vire de uma só vez para desenformar. Atenção: o bolo deve estar completamente frio antes de cobrir com o glacê.";
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
              <p class="single-ingredient">2 laranjas pêra</p>
              <p class="single-ingredient">2 ovos</p>
              <p class="single-ingredient">1 xícara (chá) de óleo</p>
              <p class="single-ingredient">1 ½ xícara (chá) de açúcar</p>
              <p class="single-ingredient">2 xícaras (chá) de farinha de trigo</p>
              <p class="single-ingredient">2 colheres (chá) de fermento em pó</p>
              <p class="single-ingredient">manteiga e farinha de trigo para untar e polvilhar a fôrma</p>
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
