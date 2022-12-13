<?php 
require_once 'funcoes.php';
require_once './core/conexao_mysql.php';
require_once './core/sql.php';
require_once './core/mysql.php';

foreach($_POST as $indice => $dado){
    $$indice = limparDados($dado);
}

foreach($_GET as $indice => $dado){
    $$indice = limparDados($dado);
}
$criterio = [
                ['email', '=', $email],
            ];

            $retorno = buscar(
                'usuario',
                ['id', 'nome', 'email', 'senha', 'pontuacao','moderador'],
                $criterio
            );

?>