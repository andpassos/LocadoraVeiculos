<?php require_once 'cabecalho.php'; ?>

Aqui mora a exclusão
<?php
echo $_GET['CODIGO'];
$id_excluir = $_GET['CODIGO'];
require_once 'classes\Categoria.php';
$categoria = new Categoria();
$categoria->excluir($id_excluir);

header('Location:Categorias.php');

?>

<?php require_once 'rodape.php' ?>