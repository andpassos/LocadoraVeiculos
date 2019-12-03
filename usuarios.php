<?php
require_once 'classes/Usuario.php';

$usuario = new Usuario();

$lista = $usuario->listar();

require_once 'cabecalho.php';
?>

<h2>Usuários</h2>
<a href="usuario-criar.php" class="btn btn-success">Adicionar Usuário</a>
<br>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Senha</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
            <tr>
                <td><?php echo $linha['id'];?></td>
                <td><?php echo $linha['usuario'];?></td>
                <td><?php echo $linha['senha'];?></td>
                <td>
                    <a href="usuario-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">  Alterar </a>
                    <a href="usuario-excluir.php?CODIGO=<?php echo $linha['id'];?>" class ="btn btn-danger"> Excluir </a>
                </td>
            </tr>
    <?php }?>

    </tbody>
    </table>


<?php
require_once 'rodape.php';
?>