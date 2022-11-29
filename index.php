<!DOCTYPE html>
<html>
    <head>
        <title> Página Inicial</title>
        <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
        <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        
            <div class="row">
                <div class="col-md-12">
                    <!-- Topo //-->
                    <?php
                        include 'includes/topo.php';
                    ?>
                </div>
            
                <div class="col-md-12">
                     <!--Menu //-->
                     <?php
                        include 'includes/menu.php';
                    ?>
                </div>
                    <!-- Corpo //-->
                    <?php
                        include 'includes/corpo.php';
                    ?>
                </div>
            </div>
                       
        </div>
       <div class="row">
            <div class="col-md-12">
                <!-- Rodapé //-->
                <?php
                    include 'includes/rodape.php';
                ?>
            </div>
        </div>
    </div>
    </body>
</html>