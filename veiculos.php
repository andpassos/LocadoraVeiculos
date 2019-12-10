<?php

require_once 'classes/Veiculo.php';


$veiculos = new Veiculo();

$lista = $veiculos->listar();

require_once 'cabecalho.php';
?>

<ul align="right">
<div>

    <li><a href="categorias.php">Categorias</a></li> 
    <li><a href="categorias-criar.php">Cadastrar</a></li> 

</div>
</ul>

<h2>Veículos</h2>
<a href="veiculos-criar.php" class="btn btn-success">Adicionar Veiculos</a>
<br>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Fabricante</th>
        <th>Modelo</th>
        <th>Passageiros</th>
        <th>Ar-Condicionado</th>
        <th>Câmbio<th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
            <tr>
                <td><?php echo $linha['id'];?></td>
                <td><?php echo $linha['fabricante'];?></td>
                <td><?php echo $linha['modelo'];?></td>
                <td><?php echo $linha['passageiros'];?></td>
                <td><?php echo $linha['arcondicionado'];?></td>
                <td><?php echo $linha['cambio'];?></td>
                <td>
                    <a href="veiculos-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">  Alterar </a>
                    <a href="veiculos-excluir.php?CODIGO=<?php echo $linha['id'];?>" class ="btn btn-danger"> Excluir </a>
                </td>
            </tr>
    <?php }?>

    </tbody>
    </table>


<?php
require_once 'rodape.php';
?>