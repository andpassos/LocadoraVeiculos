<?php
require_once 'classes/Funcionario.php';

$funcinario = new Funcionario();

$lista = $funcinario->listar();

require_once 'cabecalho.php';
?>

<h2>Funcinários</h2>
<a href="funcionarios-criar.php" class="btn btn-success">Adicionar Usuário</a>
<br>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Cargo</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
            <tr>
                <td><?php echo $linha['id'];?></td>
                <td><?php echo $linha['funcionario'];?></td>
                <td><?php echo $linha['cargo'];?></td>
                <td>
                    <a href="funcionarios-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">  Alterar </a>
                    <a href="funcionarios-excluir.php?CODIGO=<?php echo $linha['id'];?>" class ="btn btn-danger"> Excluir </a>
                </td>
            </tr>
    <?php }?>

    </tbody>
    </table>


<?php
require_once 'rodape.php';
?>