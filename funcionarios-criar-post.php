<?php
require_once 'classes/Funcionario.php';

$funcionario = new Funcionario();

$campo_do_formulario_funcionario= $_POST['funcionario'];
$campo_do_formulario_cargo= $_POST['cargo'];

$funcionario->inserir($campo_do_formulario_funcionario, $campo_do_formulario_cargo);

header('Location:funcionarios.php')

?>