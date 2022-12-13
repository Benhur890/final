<!DOCTYPE html>
<html>
    <head>
        <title>Usuários Cadastrados</title>
        <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
    </head>

    <body style="height:100vh;" class="corpo">
                    <?php
                        include 'includes/topo.php';
                        include 'includes/valida_login.php';
                        if($_SESSION['login']['usuario']['moderador'] !==1){
                            header('Location: pagInicial.php');
                        }
                    ?>
            <div class="col-md-12">
                <?php include 'includes/menu.php'; ?>
            </div>
            <div class="col-md-10" style="padding-top: 50px;">
                <?php include 'includes/busca.php'; ?>
                <?php
                        require_once 'includes/funcoes.php';
                        require_once 'core/conexao_mysql.php';
                        require_once 'core/sql.php';
                        require_once 'core/mysql.php';

                        foreach($_GET as $indice => $dado){
                            $$indice = limparDados($dado);
                        }


                        $criterio = [];

                        if(!empty($busca)){
                            $criterio[] = ['nome', 'like', "%{$busca}%"];
                        }

                        $result = buscar(
                            'usuario',
                            [
                                'id',
                                'nome',
                                'email',
                                'pontuacao',
                                'ativo',
                                'moderador'
                            ],
                            $criterio
                        );

                    ?>
                    <table class="table table-bordered table-hover table-striped
                        table-responsive{-sm|-md|-lg|-xl}">
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>E-mail</td>
                            <td>Pontuação</td>
                            <td>Ativo</td>
                            <td>Moderador</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($result as $entidade):
                        ?>
                        <tr>
                            <td><?php echo $entidade['nome'] ?></td>
                            <td><?php echo $entidade['email'] ?></td>
                            <td><?php echo $entidade['pontuacao'] ?></td>
                            <td><a href='core/usuario_repositorio.php?acao=status&id=<?php echo $entidade['id']?> &valor=<?php echo !$entidade['ativo']?>'><?php echo ($entidade['ativo']==1)  ? 'Desativar' : 'Ativar'; ?> </a></td>
                            <td><a href='core/usuario_repositorio.php?acao=moderador&id=<?php echo $entidade['id']?> &valor=<?php echo !$entidade['moderador']?>'><?php echo ($entidade['moderador']==1)  ?  'Rebaixar' : 'Promover'; ?> </a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div style="padding-top:40.25vh;" class="row no-gutters">
            <div class="col-md-12">
                <?php include 'includes/rodape.php'; ?>
            </div>
        </div>
    </body>
</html>