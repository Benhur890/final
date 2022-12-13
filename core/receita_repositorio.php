<?php
    session_start();
    require_once '../includes/funcoes.php';
    require_once 'conexao_mysql.php';
    require_once 'sql.php';
    require_once 'mysql.php';

    foreach($_POST as $indice => $dado){
        $$indice = limparDados($dado);
    }

    foreach($_GET as $indice => $dado){
        $$indice = limparDados($dado);
    }

    $codRec = (int)$codRec;

    switch ($acao) {
        case 'insert':
            $dados = [
                'tempo' => $tempo,
                'titulo' => $titulo,
                'porcoes' => $porcoes,
                'categoria' => $categoria,
                'pontuacao' => $pontuacao   
            ];

            insere(
                'receita',
                $dados
            );

            break;

        case 'update':
            $dados = [
                'tempo' => $tempo,
                'titulo' => $titulo,
                'porcoes' => $porcoes,
                'categoria' => $categoria
            ];

            $criterio = [
                ['codRec', '=', $codRec]
            ];
    
            atualiza(
                'receita',
                $dados, $criterio
            );
    
            break;

        case 'delete':
            $criterio = [
                ['codRec', '=', $codRec]
            ];

            deleta(
                'receita',
                $criterio
            );

            break;
    }

header('Location: ../cadastroPreparo.php');
?>