<?php

    require_once 'classes\Usuario.php';
    $id = $_POST['id'];
    $usuario_editar = $_POST['usuario'];
    $senha_editar = $_POST['senha'];
    $usuarios = new Usuario();
    $usuarios->alterar($id, $usuario_editar, $senha_editar);

    echo $id . " - " . $usuario_editar . $senha_editar;

    header('Location:usuarios.php')

    ?>