<?php
    session_start();
    require_once '../includes/funcoes.php';
    require_once 'conexao_mysql.php';
    require_once 'sql.php';
    require_once 'mysql.php';

    $salt = 'cozinhaboaehcozinhasimples';

    foreach($_POST as $indice => $dado){
        $$indice = limparDados($dado);
    }

    foreach($_GET as $indice => $dado){
        $$indice = limparDados($dado);
    }

    switch ($acao) {
        case 'insert':
            $dados = [
                'nome' => $nome,
                'email' => $email,
                'senha' => crypt($senha,$salt)
            ];

            insere(
                'usuario',
                $dados
            );

            header('Location: ../login.php');

            break;

        case 'update':
            $id = (int)$id;

            $dados = [
                'nome' => $nome,
                'email' => $email
            ];

            $criterio = [
                ['id', '=', $id]
            ];
    
            atualiza(
                'usuario',
                $dados, $criterio
            );
    
            break;

        case 'login':
            $criterio = [
                ['email', '=', $email],
                ['AND', 'ativo', '=', 1]
            ];

            $retorno = buscar(
                'usuario',
                ['id', 'nome', 'email', 'senha', 'moderador'],
                $criterio 
            );

            if(count($retorno) > 0){
                if(crypt($senha,$salt) == $retorno[0]['senha']){
                    $_SESSION['url_retorno'] = '../pagInicial.php';
                    $_SESSION['login']['usuario'] = $retorno[0];
                    echo $_SESSION['url_retorno'];
                    if(!empty($_SESSION['url_retorno'])){
                        header('Location: ' . $_SESSION['url_retorno']);
                        $_SESSION['url_retorno'] = '';
                        exit;
                    }
                }
            }
            header('Location: ../pagInicial.php');
            break;
        
        case 'logout':
            session_destroy();
            header('Location: ../login.php');
            break;
        
        case 'status':
            $id = (int)$id;
            $valor = (int)$valor;

            $dados = [
                'ativo' => $valor
            ];

            $criterio = [
                ['id', '=', $id]
            ];
    
            atualiza(
                'usuario',
                $dados, $criterio
            );

            header('Location: ../usuarios.php');
            exit;

            break;

        case 'moderador':
            $id = (int)$id;
            $valor = (int)$valor;

            $dados = [
                'moderador' => $valor
            ];

            $criterio = [
                ['id', '=', $id]
            ];
    
            atualiza(
                'usuario',
                $dados, $criterio
            );

            header('Location: ../usuarios.php');
            exit;
            
            break;        
    }
?>