<?php
    $id = $_GET['CODIGO'];

    require_once 'cabecalho.php'; 
    require_once 'classes\Cliente.php';
    $cliente = new  Cliente();
    $linha = $cliente->lista1Cliente($id);

?>

    <h2> Alterar Cliente</h2>
    <form name="alterar-cliente" action="clientes-editar-post.php" method="post">

        Descrição:
       
        <input name="id" type="hidden" value="<?php echo $id;?>">
        <input name="nome" value="<?php echo $linha['nome'];?>">
        <input name="cpf" value="<?php echo $linha['cpf'];?>">
        <input name="telefone" value="<?php echo $linha['telefone'];?>">
        <input name="endereco" value="<?php echo $linha['endereco'];?>">
        <button type="submit">SALVAR</button>
    </form>

<?php require_once 'rodape.php' ?>