<?php
    $id = $_GET['CODIGO'];

    require_once 'cabecalho.php'; 
    require_once 'classes\Veiculo.php';
    $veiculos = new  Veiculo();
    $linha = $veiculos->lista1Veiculo($id);

?>

    <h2> Alterar Veiculos</h2>
    <form name="alterar-veiculo" action="veiculos-editar-post.php" method="post">

        Descrição:
        <input name="id" type="hidden" value="<?php echo $id;?>">
        <input name="placa" value="<?php echo $linha['placa'];?>">
        <input name="fabricante" value="<?php echo $linha['fabricante'];?>">
        <input name="modelo" value="<?php echo $linha['modelo'];?>">
        <input name="categoria" value="<?php echo $linha['categoria'];?>">
        <input name="cor" value="<?php echo $linha['cor'];?>">
        <input name="passageiros" value="<?php echo $linha['passageiros'];?>">
        <input name="arcondicionado" value="<?php echo $linha['arcondicionado'];?>">
        <input name="cambio" value="<?php echo $linha['cambio'];?>">

        <button type="submit">SALVAR</button>
    </form>

<?php require_once 'rodape.php' ?>
