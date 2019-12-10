<?php require_once 'cabecalho.php'; ?>

Aqui mora a exclusão
<?php
echo $_GET['CODIGO'];
$id_excluir = $_GET['CODIGO'];
require_once 'classes\Cliente.php';
$cliente = new Cliente();
$cliente->excluir($id_excluir);

header('Location:Clientes.php');

?>

<?php require_once 'rodape.php' ?>