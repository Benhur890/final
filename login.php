<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css//bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="back_2">
    <div class="container-fluid">
        <div class="row justify-content-center mx-0">
            <div class="col-3 back-layer">
            <div class="card-header log">
                <img src="img/login.png" alt="Login" class="mainLog">
            </div>
                <div class="card-body">
                    <form action="core/usuario_repositorio.php" method="POST">
                        <input type="hidden" name="acao" value="login">
                        <div class="form-group">
                            <label for="email">E-mail: </label>
                            <input class="form-control" type="text" 
                                   require="required" name="email" id="email" placeholder="user@email.com">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha: </label>
                            <input class="form-control" type="password" 
                                   require="required" name="senha" id="senha" placeholder="minimo 8 caracteres" >
                        </div>
                        <br>
                        <div class="text-center">
                            <button class="btn" type="submit">Entrar</a></button>
                        </div>
                        <br>
                        <div align="center">Caso não tenha cadastro, </div>
                        <div align="center"><a href="cadastro.php" class="lCad">Clique Aqui!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div><a href="pagInicial.php">Pular</a></div>
    </div>
</body>
</html>