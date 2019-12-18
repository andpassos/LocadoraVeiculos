<?php 
require_once 'cabecalho.php';


require_once 'classes/Locacao.php';
$locacoes = new Locacao();
$lista = $locacoes->listar()

 ?>
<h2>Locação</h2>
<a href="locacao-criar.php" class="btn btn-info">Criar Novo Produto</a>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Cliente</th>
        <th>Veiculo</th>
        <th>Retira</th>
        <th>Devolução</th>
        <th>Valor Diária</th> 
        <th>Total</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach($lista as $linha){ ?>
            <tr>
                <td><?php echo $linha['id'];?></td>
                <td><?php echo $linha['cliente'];?></td>
                <td><?php echo $linha['veiculo'];?></td>
                <td><?php echo $linha['retira'];?></td>
                <td><?php echo $linha['devolucao'];?></td>
                <td><?php echo $linha['preco'];?></td>
                <td><?php echo $linha['total'];?></td>
                <td>
                    <a href="locacao-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">  Alterar </a>
                    <a href="locacao-excluir.php?CODIGO=<?php echo $linha['id'];?>" class ="btn btn-danger"> Excluir </a>
                </td>
            </tr>
    <?php }?>

    </tbody>
</table>
<?php require_once 'rodape.php' ?>
