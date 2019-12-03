<?php

require_once 'classes/Categoria.php';

$categoria = new Categoria();

$lista = $categoria->listar();

require_once 'cabecalho.php';
?>

<select>
    <?php foreach($lista as $linha){ ?>
        <option value="<?php echo $linha['id'];?>">
            <?php echo $linha['descricao'];?>
            </option>
    <?php } ?>
</select>
<ul align="right">
<div>

    <p>Categorias</p> 
    <li><a href="categorias-criar.php">Cadastrar</a></li> 
    <li><a href="categorias-editar.php">Alterar</a></li> 
    <li><a href="categorias-excluir.php">Exluir</a> 

</div>
</ul>

<?php
require_once 'rodape.php';
?>