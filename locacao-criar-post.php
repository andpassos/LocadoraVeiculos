<?php
require_once 'classes/Locacao.php';

$locacaoes = new Locacao();


$campo_do_formulario_cliente= $_POST['cliente'];
$campo_do_formulario_veiculo= $_POST['veiculo'];
$campo_do_formulario_retira= $_POST['retira'];
$campo_do_formulario_devolucao= $_POST['devolucao'];
$campo_do_formulario_preco= $_POST['preco'];
$campo_do_formulario_total= $_POST['total'];

$locacaoes->inserir($campo_do_formulario_cliente, $campo_do_formulario_veiculo, $campo_do_formulario_retira,$campo_do_formulario_devolucao,$campo_do_formulario_preco,$campo_do_formulario_total);

header('Location:locacao.php')

?>