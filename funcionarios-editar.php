<?php
    $id = $_GET['CODIGO'];

    require_once 'cabecalho.php'; 
    require_once 'classes\Funcionario.php';
    $funcionarios = new  Funcionario();
    $linha = $funcionarios->lista1Funcionario($id);

?>

    <h2> Alterar Funcionario</h2>
    <form name="alterar-funcionario" action="funcionarios-editar-post.php" method="post">

        Descrição:
        <input name="id" type="hidden" value="<?php echo $id;?>">
        <input name="funcionario" value="<?php echo $linha['funcionario'];?>">
        <input name="cargo" value="<?php echo $linha['cargo'];?>">
        <button type="submit">SALVAR</button>
    </form>

<?php require_once 'rodape.php' ?>