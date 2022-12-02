<!DOCTYPE html>
<html>
    <head>
        <title> Página</title>
        <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
        <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
    </head>
    <div>
    <body class="corpo">
        


            <div class="row no-gutters">
                <div class="col-md-12">
                    <!-- Topo //-->
                    <?php
                        include 'includes/topo.php';
                    ?>
                </div>
            
                <div class="col-md-12 no-gutters">
                     <!--Menu //-->
                     <?php
                        include 'includes/menu.php';
                    ?>
                </div class="col-md-12 no-gutters">
                    <!-- Corpo //-->
                    <?php
                        include 'includes/corpo.php';
                    ?>
                </div>
            </div>
                       
        </div>
       <div class="row no-gutters">
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
<style>
body{
    padding-bottom: 100px;
}
</style>