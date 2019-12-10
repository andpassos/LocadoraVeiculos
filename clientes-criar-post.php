<?php
require_once 'classes/Cliente.php';

$cliente = new Cliente();

$campo_do_formulario_nome= $_POST['nome'];
$campo_do_formulario_cpf= $_POST['cpf'];
$campo_do_formulario_telefone= $_POST['telefone'];
$campo_do_formulario_endereco= $_POST['endereco'];

$cliente->inserir($campo_do_formulario_nome, $campo_do_formulario_cpf, $campo_do_formulario_telefone, $campo_do_formulario_endereco);

header('Location:clientes.php')

?>