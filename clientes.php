<?php
require_once 'classes/Cliente.php';

$cliente = new Cliente();

$lista = $cliente->listar();

require_once 'cabecalho.php';
?>

<h2>Cliente</h2>
<a href="clientes-criar.php" class="btn btn-success">Adicionar Usuário</a>
<br>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
            <tr>
                <td><?php echo $linha['id'];?></td>
                <td><?php echo $linha['funcionario'];?></td>
                <td><?php echo $linha['cpf'];?></td>
                <td>
                    <a href="clientes-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">  Alterar </a>
                    <a href="clientes-excluir.php?CODIGO=<?php echo $linha['id'];?>" class ="btn btn-danger"> Excluir </a>
                </td>
            </tr>
    <?php }?>

    </tbody>
    </table>


<?php
require_once 'rodape.php';
?>