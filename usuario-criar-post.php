<?php
require_once 'classes/Usuario.php';

$usuario = new Usuario();

$campo_do_formulario_usuario= $_POST['usuario'];
$campo_do_formulario_senha= $_POST['senha'];

$usuario->inserir($campo_do_formulario_usuario, $campo_do_formulario_senha);

header('Location:usuarios.php')

?>