<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css//bootstrap.css">
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body class="back_3">
    <div class="container-fluid">
        <div class="row justify-content-center mx-0">
            <div class="col-3 back-layer">
                <?php
                    require_once 'includes/funcoes.php';
                    require_once 'core/conexao_mysql.php';
                    require_once 'core/sql.php';
                    require_once 'core/mysql.php';

                    foreach($_GET as $indice => $dado){
                        $$INDICE = limparDados($dado);
                    }

                    if(!empty($codRec)){
                        $codRec = (int)$codRec;

                        $criterio = [
                            ['codRec', '=', $codRec]
                        ];

                        $retorno = buscar(
                            'receita',
                            ['*'],
                            $criterio
                        );

                        $entidade = $retorno[0];
                    }
                ?>

                <div style="padding-bottom:0.0vh;"class="card-header cad">
                    <img src="img/cadastro.png" alt="Cadastro" class="mainCad">
                </div>

                <div class="card-body">
                    <form action="core/receita_repositorio.php" method="POST">
                        <input type="hidden" name="acao"    
                            value="<?php echo empty($codRec) ? 'insert' : 'update' ?>">
                        <input type="hidden" name="codRec" 
                            value="<?php echo $entidade['codRec'] ?? '' ?>">
                        <div class="form-group">
                            <label for="titulo">Nome da Receita: </label>
                            <input class="form-control" placeholder="Espinafre cozido" type="text" required name="titulo" id="titulo" value="<?php echo $entidade['titulo'] ?? '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="tempo">Tempo de Preparo: </label>
                            <input class="form-control" type="number" required name="tempo" id="tempo" 
                                value="<?php echo $entidade['tempo'] ?? '' ?>" placeholder="Tempo( Em minutos )">
                        </div>
                        <div class="form-group">
                            <label for="porcoes">Quantidade de Porções: </label>
                            <input class="form-control" type="number" required name="porcoes" id="porcoes" 
                                value="<?php echo $entidade['porcoes'] ?? '' ?>" placeholder="X porções">
                        </div>
                        <div class="form-group">
                            <label for="categoria"> Categoria da Receita:</label>
                            <input class="form-control" type="text" required name="categoria" id="categoria" 
                                value="<?php echo $entidade['categoria'] ?? '' ?>" placeholder="Salgado">
                        </div>
                        <div class="form-group">
                            <label for="pontuacao">Pontuação (Valor da receita): </label>
                            <input class="form-control" type="number" required name="pontuacao" id="pontuacao" 
                                value="<?php echo $entidade['pontuacao'] ?? '' ?>" placeholder="Pontuação">
                        </div>
                        <div class="text-center">
                            <button class="btn" type="submit">Cadastrar</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>