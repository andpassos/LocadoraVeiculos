<?php require_once 'cabecalho.php'; ?>

<?php
echo $_GET['CODIGO'];
$id_excluir = $_GET['CODIGO'];
require_once 'classes\Usuario.php';
$usuario = new Usuario();
$usuario->excluir($id_excluir);

header('Location:usuarios.php');

?>

<?php require_once 'rodape.php' ?>