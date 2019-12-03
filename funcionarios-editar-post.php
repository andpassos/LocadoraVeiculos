<?php

    require_once 'classes\Funcionario.php';
    $id = $_POST['id'];
    $funcinario_editar = $_POST['funcionario'];
    $cargo_editar = $_POST['cargo'];
    $funcionarios = new Funcionario();
    $funcionarios->alterar($id, $funcinario_editar, $cargo_editar);

    echo $id . " - " . $funcinario_editar . $cargo_editar;

    header('Location:funcionarios.php')

    ?>