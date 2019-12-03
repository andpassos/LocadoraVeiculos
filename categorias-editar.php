<?php
    $id = $_GET['CODIGO'];

    require_once 'cabecalho.php'; 
    require_once 'classes\Categoria.php';
    $categoria = new  Categoria();
    $linha = $categoria->lista1Categoria($id);

?>

    <h2> Alterar Categoria</h2>
    <form name="alterar-categoria" action="categorias-editar-post.php" method="post">

        Descrição:
        <input name="id" type="hidden" value="<?php echo $id;?>">
        <input name="descricao" value="<?php echo $linha['descricao'];?>">
        <button type="submit">SALVAR</button>
    </form>

<?php require_once 'rodape.php' ?>