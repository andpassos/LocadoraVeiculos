<?php require_once 'cabecalho.php'; ?>


<?php
echo $_GET['CODIGO'];
$id_excluir = $_GET['CODIGO'];
require_once 'classes\Veiculo.php';
$veiculo = new Veiculo();
$veiculo->excluir($id_excluir);

header('Location:veiculos.php');

?>

<?php require_once 'rodape.php' ?>