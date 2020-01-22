<?php require_once 'cabecalho.php'; ?>


<?php
echo $_GET['CODIGO'];
$id_excluir = $_GET['CODIGO'];
require_once 'classes\Funcionario.php';
$funcionario = new Funcionario();
$funcionario->excluir($id_excluir);

header('Location:Funcionarios.php');

?>

<?php require_once 'rodape.php' ?>