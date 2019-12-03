<?php

    require_once 'classes\Categoria.php';
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $categoria = new Categoria();
    $categoria->alterar($id, $descricao);

    echo $id . " - " . $descricao;

    header('Location:categorias.php')

    ?>