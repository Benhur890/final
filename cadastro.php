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

                    if(isset($_SESSION['login'])){
                        $id = (int) $_SESSION['login']['usuario']['id'];

                        $criterio = [
                            ['id', '=', $id]
                        ];

                        $retorno = buscar(
                            'usuario',
                            ['id', 'nome', 'email'],
                            $criterio
                        );

                        $entidade = $retorno[0];
                    };
                ?>
            <div class="card-header cad"><img src="img/cadastro.png" alt="Cadastro" class="mainCad"></div>
                <div class="card-body">
                    <form action="core/usuario_repositorio.php" method="POST">
                        <input type="hidden" name="acao" 
                            value="<?php echo empty($id) ? 'insert' : 'update' ?>">
                        <input type="hidden" name="id" 
                            value="<?php echo $entidade['id'] ?? '' ?>">
                        <div class="form-group">
                            <label for="nome">Usuário: </label>
                            <input class="form-control" type="text" require="required" name="nome" id="nome" 
                                value="<?php echo $entidade['nome'] ?? '' ?>" placeholder="user123">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail: </label>
                            <input class="form-control" type="text" require="required" name="email" id="email" 
                                value="<?php echo $entidade['email'] ?? '' ?>" placeholder="user@email.com">
                        </div>
                        <?php if(!isset($_SESSION['login'])): ?>
                        <div class="form-group">
                            <label for="senha">Senha: </label>
                            <input class="form-control" type="password" 
                                require="required" name="senha" id="senha" placeholder="minimo 8 caracteres">
                        </div>
                        <br>
                        <?php endif; ?>
                        <div class="text-center">
                            <button class="btn" type="submit">Cadastrar</button>
                        </div>
                        <br>
                        <div style="text-align:center;">Caso já tenha cadastro, </div>
                        <div style="text-align:center;"><a href="login.php" class="lLog">Clique Aqui!</a></div>
                    </form>
                    <br>
                    <div style="text-align:center;"><a href="pagInicial.php" style="color: black;">Ir para Página Inicial :)</a></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>