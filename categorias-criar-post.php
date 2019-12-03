<?php
require_once 'classes/Categoria.php';

$categoria = new Categoria();

$campo_do_formulario_descricao= $_POST['descricao'];

$categoria->inserir($campo_do_formulario_descricao);
header('Location:categorias.php')

?>