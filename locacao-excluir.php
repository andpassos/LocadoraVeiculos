<?php require_once 'cabecalho.php'; ?>

<?php
echo $_GET['CODIGO'];
$id_excluir = $_GET['CODIGO'];
require_once 'classes\Locacao.php';
$locacoes = new Locacao();
$locacoes->excluir($id_excluir);

header('Location:locacao.php');

?>

<?php require_once 'rodape.php' ?>